<?php

namespace App\Filament\Resources\SkillGroups\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SkillGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Group')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(100),
                        Select::make('style')
                            ->label('Card color')
                            ->options([
                                'paper' => 'Light gray',
                                'dark' => 'Dark',
                            ])
                            ->placeholder('White')
                            // Kolom database tidak boleh NULL, jadi "White" disimpan sebagai teks kosong.
                            ->dehydrateStateUsing(fn ($state) => $state ?? ''),
                    ]),
                Section::make('Skills')
                    ->description('Isi hanya skill yang benar-benar Anda kuasai. Aktifkan "Currently exploring" untuk yang masih dipelajari.')
                    ->schema([
                        Repeater::make('skills')
                            ->relationship()
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                            ->addActionLabel('Add skill')
                            ->columns(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(80),
                                Toggle::make('is_exploring')
                                    ->label('Currently exploring')
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
