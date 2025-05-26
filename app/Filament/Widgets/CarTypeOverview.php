<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CarTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Седан', Car::query()->where('type', 'sedan')->count()),
            Stat::make('Купе', Car::query()->where('type', 'coupe')->count()),
            Stat::make('Кроссовер', Car::query()->where('type', 'crossover')->count()),
        ];
    }
}
