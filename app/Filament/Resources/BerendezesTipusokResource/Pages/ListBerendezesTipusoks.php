<?php

namespace App\Filament\Resources\BerendezesTipusokResource\Pages;

use App\Filament\Resources\BerendezesTipusokResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerendezesTipusoks extends ListRecords
{
    protected static string $resource = BerendezesTipusokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
