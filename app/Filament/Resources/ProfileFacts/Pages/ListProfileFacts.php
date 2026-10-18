<?php

namespace App\Filament\Resources\ProfileFacts\Pages;

use App\Filament\Resources\ProfileFacts\ProfileFactResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfileFacts extends ListRecords
{
    protected static string $resource = ProfileFactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
