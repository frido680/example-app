<?php

namespace App\Filament\Resources\BerendezesTipusokResource\Pages;

use App\Filament\Resources\BerendezesTipusokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerendezesTipusok extends EditRecord
{
    protected static string $resource = BerendezesTipusokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
