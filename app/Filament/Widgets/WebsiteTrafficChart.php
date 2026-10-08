<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Filament\Widgets\ChartWidget;

class WebsiteTrafficChart extends ChartWidget
{
    protected ?string $heading = 'Traffic Website';

    protected ?string $description = 'Page views selama 7 hari terakhir';

    protected ?string $maxHeight = '320px';

    protected function getData(): array
    {
        $labels = [];
        $data = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);

            $labels[] = $date->translatedFormat('D, d M');

            $data[] = Visitor::whereDate('visited_at', $date->toDateString())->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Page Views',
                    'data' => $data,
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}