<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\RelationManagers\RemontRelationManager;
use App\Filament\Resources\RemontResource\Pages;
use App\Filament\Resources\RemontResource\RelationManagers;
use App\Models\Remont;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RemontResource extends Resource
{
    protected static ?string $model = Remont::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RemontRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRemonts::route('/'),
            'create' => Pages\CreateRemont::route('/create'),
            'edit' => Pages\EditRemont::route('/{record}/edit'),
        ];
    }
}
