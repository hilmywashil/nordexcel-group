<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherWidget extends Widget
{
    protected string $view = 'filament.widgets.weather-widget';

    protected int|string|array $columnSpan = 1;

    public function getWeather(): array
    {
        return Cache::remember('dashboard-weather-bandung', now()->addMinutes(30), function () {
            $response = Http::timeout(5)->get('https://api.open-meteo.com/v1/forecast', [
                'latitude' => -6.9175,
                'longitude' => 107.6191,
                'current' => 'temperature_2m,relative_humidity_2m,apparent_temperature,weather_code,wind_speed_10m',
                'daily' => 'temperature_2m_max,temperature_2m_min',
                'timezone' => 'Asia/Jakarta',
                'forecast_days' => 1,
            ]);

            if (!$response->successful()) {
                return [
                    'available' => false,
                ];
            }

            $data = $response->json();
            $weatherCode = $data['current']['weather_code'];

            return [
                'available' => true,
                'temperature' => round($data['current']['temperature_2m']),
                'feels_like' => round($data['current']['apparent_temperature']),
                'humidity' => $data['current']['relative_humidity_2m'],
                'wind' => round($data['current']['wind_speed_10m']),
                'weather_code' => $weatherCode,
                'weather' => $this->weatherDescription($weatherCode),
                'max' => round($data['daily']['temperature_2m_max'][0]),
                'min' => round($data['daily']['temperature_2m_min'][0]),
            ];
        });
    }

    protected function weatherDescription(int $code): string
    {
        return match (true) {
            $code === 0 => 'Cerah',
            in_array($code, [1, 2]) => 'Cerah Berawan',
            $code === 3 => 'Berawan',
            in_array($code, [45, 48]) => 'Berkabut',
            in_array($code, [51, 53, 55, 56, 57]) => 'Gerimis',
            in_array($code, [61, 63, 65, 66, 67, 80, 81, 82]) => 'Hujan',
            in_array($code, [95, 96, 99]) => 'Badai Petir',
            default => 'Tidak diketahui',
        };
    }

    public function getWeatherIcon(): string
    {
        $code = $this->getWeather()['weather_code'] ?? null;

        return match (true) {
            $code === 0 => 'heroicon-o-sun',
            in_array($code, [1, 2]) => 'heroicon-o-sun',
            in_array($code, [3, 45, 48]) => 'heroicon-o-cloud',
            in_array($code, [51, 53, 55, 56, 57]) => 'heroicon-o-cloud',
            in_array($code, [61, 63, 65, 66, 67, 80, 81, 82]) => 'heroicon-o-cloud',
            in_array($code, [95, 96, 99]) => 'heroicon-o-bolt',
            default => 'heroicon-o-cloud',
        };
    }
}