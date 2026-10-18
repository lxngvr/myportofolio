<?php

namespace App\Filament\Resources\TimelineEntries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TimelineEntryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        Select::make('category')
                            ->options([
                                'education' => 'Education',
                                'experience' => 'Experience & Activities',
                            ])
                            ->required(),
                        TextInput::make('kind')
                            ->label('Label')
                            ->helperText('Contoh: University, Training Program, Research, Mentorship.')
                            ->required()
                            ->maxLength(80),
                        TextInput::make('title')
                            ->required()
                            ->maxLength(150),
                        TextInput::make('organization')
                            ->required()
                            ->maxLength(150),
                        TextInput::make('period')
                            ->helperText('Teks bebas, misalnya 2024 – Present.')
                            ->required()
                            ->maxLength(60),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Urutan juga bisa diubah dengan drag di daftar.'),
                        Textarea::make('description')
                            ->helperText('Tulis hanya yang benar-benar terjadi.')
                            ->rows(4)
                            ->columnSpanFull(),
                        TagsInput::make('tags')
                            ->columnSpanFull(),
                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(true),
                    ]),
            ]);
    }
}
