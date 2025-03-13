<?php

namespace App\Filament\Resources\CoreManagementResource\Pages;

use App\Filament\Resources\CoreManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoreManagement extends ListRecords
{
    protected static string $resource = CoreManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
