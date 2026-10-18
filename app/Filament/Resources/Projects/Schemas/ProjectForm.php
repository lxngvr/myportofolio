<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),
                TextInput::make('thumb')
                    ->required(),
                Toggle::make('is_dark')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('contribution')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('tags')
                    ->columnSpanFull(),
                TextInput::make('url')
                    ->url()
                    ->required(),
                TextInput::make('repo_url')
                    ->url(),
                TextInput::make('demo_url')
                    ->url(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
