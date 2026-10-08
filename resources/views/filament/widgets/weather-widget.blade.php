<x-filament-widgets::widget>
    <x-filament::section>
        @php
            $weather = $this->getWeather();
            $icon = $this->getWeatherIcon();
        @endphp
        <style>
            .weather-widget {
                color: #171717;
            }

            .weather-widget-label {
                color: #737373;
            }

            .weather-widget-location {
                color: #171717;
            }

            .weather-widget-temperature {
                color: #171717;
            }

            .weather-widget-unit {
                color: #737373;
            }

            .weather-widget-condition {
                color: #404040;
            }

            .weather-widget-secondary {
                color: #737373;
            }

            .weather-widget-divider {
                border-color: #E5E5E5;
            }

            .weather-widget-stat-label {
                color: #737373;
            }

            .weather-widget-stat-value {
                color: #262626;
            }

            .weather-widget-icon {
                color: #FC6B01;
            }

            .dark .weather-widget {
                color: #F5F5F5;
            }

            .dark .weather-widget-label {
                color: #A3A3A3;
            }

            .dark .weather-widget-location {
                color: #F5F5F5;
            }

            .dark .weather-widget-temperature {
                color: #F5F5F5;
            }

            .dark .weather-widget-unit {
                color: #A3A3A3;
            }

            .dark .weather-widget-condition {
                color: #E5E5E5;
            }

            .dark .weather-widget-secondary {
                color: #A3A3A3;
            }

            .dark .weather-widget-divider {
                border-color: #404040;
            }

            .dark .weather-widget-stat-label {
                color: #A3A3A3;
            }

            .dark .weather-widget-stat-value {
                color: #E5E5E5;
            }

            .dark .weather-widget-icon {
                color: #FC6B01;
            }
        </style>
        @if ($weather['available'])
            <div class="weather-widget">
                <div style="display:flex;align-items:center;justify-content:space-between;gap:24px;">
                    <div>
                        <p class="weather-widget-label" style="margin:0;font-size:13px;font-weight:500;">
                            Cuaca hari ini
                        </p>

                        <div style="display:flex;align-items:center;gap:7px;margin-top:7px;">
                            <x-filament::icon icon="heroicon-m-map-pin" class="weather-widget-icon"
                                style="width:15px;height:15px;" />

                            <span class="weather-widget-location" style="font-size:16px;font-weight:700;">
                                Bandung
                            </span>
                        </div>
                    </div>

                    <div style="display:flex;align-items:center;justify-content:center;width:44px;height:44px;">
                        <x-filament::icon :icon="$icon" class="weather-widget-icon" style="width:34px;height:34px;" />
                    </div>
                </div>

                <div style="display:flex;align-items:flex-end;gap:18px;margin-top:28px;">
                    <div style="display:flex;align-items:flex-start;line-height:.9;">
                        <span class="weather-widget-temperature"
                            style="font-size:58px;font-weight:700;letter-spacing:-3px;">
                            {{ $weather['temperature'] }}
                        </span>

                        <span class="weather-widget-unit" style="margin-top:3px;font-size:19px;font-weight:500;">
                            °C
                        </span>
                    </div>

                    <div style="padding-bottom:3px;">
                        <p class="weather-widget-condition" style="margin:0;font-size:15px;font-weight:600;">
                            {{ $weather['weather'] }}
                        </p>

                        <p class="weather-widget-secondary" style="margin:5px 0 0;font-size:12px;">
                            Terasa {{ $weather['feels_like'] }}°C
                        </p>
                    </div>
                </div>

                <div class="weather-widget-divider"
                    style="display:grid;grid-template-columns:repeat(3,1fr);gap:0;margin-top:28px;padding-top:17px;border-top:1px solid;">
                    <div style="padding-right:16px;">
                        <p class="weather-widget-stat-label" style="margin:0;font-size:11px;">
                            Kelembapan
                        </p>

                        <p class="weather-widget-stat-value" style="margin:5px 0 0;font-size:14px;font-weight:600;">
                            {{ $weather['humidity'] }}%
                        </p>
                    </div>

                    <div class="weather-widget-divider" style="padding:0 16px;border-left:1px solid;">
                        <p class="weather-widget-stat-label" style="margin:0;font-size:11px;">
                            Angin
                        </p>

                        <p class="weather-widget-stat-value" style="margin:5px 0 0;font-size:14px;font-weight:600;">
                            {{ $weather['wind'] }} km/j
                        </p>
                    </div>

                    <div class="weather-widget-divider" style="padding-left:16px;border-left:1px solid;">
                        <p class="weather-widget-stat-label" style="margin:0;font-size:11px;">
                            Suhu hari ini
                        </p>

                        <p class="weather-widget-stat-value" style="margin:5px 0 0;font-size:14px;font-weight:600;">
                            {{ $weather['min'] }}° — {{ $weather['max'] }}°
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div style="padding:30px 0;text-align:center;">
                <x-filament::icon icon="heroicon-o-cloud" style="width:28px;height:28px;color:#A3A3A3;" />

                <p class="weather-widget-location" style="margin:12px 0 0;font-size:14px;font-weight:600;">
                    Data cuaca tidak tersedia
                </p>

                <p class="weather-widget-secondary" style="margin:5px 0 0;font-size:12px;">
                    Silakan coba lagi beberapa saat.
                </p>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>