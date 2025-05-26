<?php

namespace App\Filament\Resources\RemontResource\Pages;

use App\Filament\Resources\RemontResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRemont extends EditRecord
{
    protected static string $resource = RemontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
