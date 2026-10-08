<x-filament-widgets::widget>
    <x-filament::section>
        @php
            $weather = $this->getWeather();
            $icon = $this->getWeatherIcon();
        @endphp

        @if ($weather['available'])
            <div>
                <div style="display:flex;align-items:center;justify-content:space-between;gap:24px;">
                    <div>
                        <p style="margin:0;font-size:13px;font-weight:500;color:#9CA3AF;">
                            Cuaca hari ini
                        </p>

                        <div style="display:flex;align-items:center;gap:7px;margin-top:7px;">
                            <x-filament::icon icon="heroicon-m-map-pin" style="width:15px;height:15px;color:#FC6B01;" />

                            <span style="font-size:16px;font-weight:700;color:#F9FAFB;">
                                Bandung
                            </span>
                        </div>
                    </div>

                    <x-filament::icon :icon="$icon" style="width:34px;height:34px;color:#FC6B01;" />
                </div>

                <div style="display:flex;align-items:flex-end;gap:18px;margin-top:28px;">
                    <div style="display:flex;align-items:flex-start;line-height:.9;">
                        <span style="font-size:58px;font-weight:700;letter-spacing:-3px;color:#F9FAFB;">
                            {{ $weather['temperature'] }}
                        </span>

                        <span style="margin-top:3px;font-size:19px;font-weight:500;color:#9CA3AF;">
                            °C
                        </span>
                    </div>

                    <div style="padding-bottom:3px;">
                        <p style="margin:0;font-size:15px;font-weight:600;color:#F9FAFB;">
                            {{ $weather['weather'] }}
                        </p>

                        <p style="margin:5px 0 0;font-size:12px;color:#9CA3AF;">
                            Terasa {{ $weather['feels_like'] }}°C
                        </p>
                    </div>
                </div>

                <div
                    style="display:grid;grid-template-columns:repeat(3,1fr);gap:0;margin-top:28px;padding-top:17px;border-top:1px solid #303136;">
                    <div style="padding-right:16px;">
                        <p style="margin:0;font-size:11px;color:#737780;">
                            Kelembapan
                        </p>

                        <p style="margin:5px 0 0;font-size:14px;font-weight:600;color:#F9FAFB;">
                            {{ $weather['humidity'] }}%
                        </p>
                    </div>

                    <div style="padding:0 16px;border-left:1px solid #303136;">
                        <p style="margin:0;font-size:11px;color:#737780;">
                            Angin
                        </p>

                        <p style="margin:5px 0 0;font-size:14px;font-weight:600;color:#F9FAFB;">
                            {{ $weather['wind'] }} km/j
                        </p>
                    </div>

                    <div style="padding-left:16px;border-left:1px solid #303136;">
                        <p style="margin:0;font-size:11px;color:#737780;">
                            Suhu hari ini
                        </p>

                        <p style="margin:5px 0 0;font-size:14px;font-weight:600;color:#F9FAFB;">
                            {{ $weather['min'] }}° — {{ $weather['max'] }}°
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div style="padding:30px 0;text-align:center;">
                <x-filament::icon icon="heroicon-o-cloud" style="width:28px;height:28px;color:#6B7280;" />

                <p style="margin:12px 0 0;font-size:14px;font-weight:600;color:#F9FAFB;">
                    Data cuaca tidak tersedia
                </p>

                <p style="margin:5px 0 0;font-size:12px;color:#6B7280;">
                    Silakan coba lagi beberapa saat.
                </p>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>