<?php

namespace App\Filament\Resources\CarResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
class RemontRelationManager extends RelationManager
{
    protected static string $relationship = 'remont'; // Множественное число!

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('description')
                ->required(),
            Forms\Components\TextInput::make('price')
                ->numeric()
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('description'),
            Tables\Columns\TextColumn::make('price')
        ]);
    }
}
