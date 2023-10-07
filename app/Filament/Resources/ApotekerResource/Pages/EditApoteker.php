<?php

namespace App\Filament\Resources\ApotekerResource\Pages;

use App\Filament\Resources\ApotekerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApoteker extends EditRecord
{
    protected static string $resource = ApotekerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
