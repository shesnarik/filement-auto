<?php

namespace App\Filament\Resources\RemontResource\Pages;

use App\Filament\Resources\RemontResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRemonts extends ListRecords
{
    protected static string $resource = RemontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
