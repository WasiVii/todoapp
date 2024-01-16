<?php

namespace App\Filament\Resources\TodoStatusResource\Pages;

use App\Filament\Resources\TodoStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTodoStatus extends CreateRecord
{
    protected static string $resource = TodoStatusResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
