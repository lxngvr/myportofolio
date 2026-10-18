<?php

namespace App\Filament\Resources\TimelineEntries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TimelineEntryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category')
                    ->required(),
                TextInput::make('kind')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('organization')
                    ->required(),
                TextInput::make('period')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('tags')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
