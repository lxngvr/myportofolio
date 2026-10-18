<?php

namespace App\Filament\Resources\SocialLinks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SocialLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->helperText('Contoh: Email, GitHub, LinkedIn, Instagram.')
                    ->required()
                    ->maxLength(50),
                TextInput::make('handle')
                    ->helperText('Teks yang tampil, misalnya @username.')
                    ->required()
                    ->maxLength(100),
                TextInput::make('url')
                    ->helperText('Mulai dengan https:// atau mailto: untuk email.')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
