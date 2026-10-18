<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

/** Pesan masuk hanya dibaca, tidak diedit. */
class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->disabled()->dehydrated(false),
                TextInput::make('email')->label('Email address')->disabled()->dehydrated(false),
                Textarea::make('message')->rows(8)->disabled()->dehydrated(false)->columnSpanFull(),
                DateTimePicker::make('read_at')->label('Read at')->helperText('Kosong berarti belum dibaca.'),
                DateTimePicker::make('emailed_at')->label('Notification emailed at')
                    ->helperText('Kosong berarti email notifikasi gagal terkirim.')
                    ->disabled()->dehydrated(false),
                TextInput::make('ip_address')->disabled()->dehydrated(false),
                TextInput::make('user_agent')->disabled()->dehydrated(false),
            ]);
    }
}
