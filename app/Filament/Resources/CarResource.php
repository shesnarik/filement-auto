<?php

namespace App\Filament\Resources;
use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('model')
                ->required()
                ->maxLength(255),
                 Forms\Components\Select::make('type')
                     ->options([
                         'sedan' => 'Седан',
                         'koupe' => 'Купе',
                         'crossover' => 'Кроссовер',
                     ])
                     ->required(),
                 Forms\Components\DatePicker::make('date_vipusk')
                     ->required()
                     ->maxDate(now()),
            Forms\Components\Select::make('owner_id')
                ->relationship('owner', 'name')
                ->searchable()
                ->preload(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
        Forms\Components\TextInput::make('email')
            ->label('Email address')
            ->email()
            ->required()
            ->maxLength(255),
        Forms\Components\TextInput::make('phone')
            ->label('Phone number')
            ->tel()
            ->required()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('date_vipusk'),
                Tables\Columns\TextColumn::make('owner'),
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
            RelationManagers\RemontRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
