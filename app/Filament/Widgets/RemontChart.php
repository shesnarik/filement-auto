<?php

namespace App\Filament\Widgets;

use App\Models\Remont;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class RemontChart extends ChartWidget
{
    protected static ?string $heading = 'Рейтинг Количества';

    // Анализ стоимости ремонтов
    protected function getData(): array {
        $costData = Trend::model(Remont::class)
            ->between(now()->subYear(), now())
            ->perMonth()
            ->sum('price');

        return [
            'datasets' => [
                [
                    'label' => 'Затраты на ремонты (€)',
                    'data' => $costData->map(fn (TrendValue $v) => $v->aggregate),
                    'borderColor' => '#ef4444',
                ],
            ],
            'labels' => $costData->map(fn (TrendValue $v) => $v->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
