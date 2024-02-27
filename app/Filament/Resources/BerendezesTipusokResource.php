<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BerendezesTipusokResource\Pages;
use App\Filament\Resources\BerendezesTipusokResource\RelationManagers;
use App\Models\BerendezesTipusok;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BerendezesTipusokResource extends Resource
{
    protected static ?string $model = BerendezesTipusok::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')->label(__('fields.name'))
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('note')->label(__('fields.note'))
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function getNavigationGroup(): string
    {
        return "Berendezés";
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->searchable()->sortable(),
              Tables\Columns\TextColumn::make('name')->label(__('fields.name'))
                ->searchable()->sortable(),
              Tables\Columns\TextColumn::make('created_at')->label(__('fields.created_at'))
                ->dateTime('Y-m-d H:i')
                ->searchable()->sortable(),            ])
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBerendezesTipusoks::route('/'),
            'create' => Pages\CreateBerendezesTipusok::route('/create'),
            'edit' => Pages\EditBerendezesTipusok::route('/{record}/edit'),
        ];
    }
}
