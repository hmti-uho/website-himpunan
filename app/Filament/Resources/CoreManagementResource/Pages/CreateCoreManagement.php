<?php

namespace App\Filament\Resources\CoreManagementResource\Pages;

use App\Filament\Resources\CoreManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCoreManagement extends CreateRecord
{
    protected static string $resource = CoreManagementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
