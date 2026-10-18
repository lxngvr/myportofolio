<?php

namespace App\Filament\Resources\ProfileFacts\Pages;

use App\Filament\Resources\ProfileFacts\ProfileFactResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfileFact extends EditRecord
{
    protected static string $resource = ProfileFactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
