<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Project;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basics')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(150)
                            ->columnSpanFull(),
                        Select::make('type')
                            ->label('Project type')
                            ->options(Project::TYPES)
                            ->required(),
                        Select::make('thumb')
                            ->label('Thumbnail illustration')
                            ->options(Project::THUMB_LABELS)
                            ->required(),
                        Toggle::make('is_dark')
                            ->label('Dark card')
                            ->helperText('Selang-seling kartu terang dan gelap membuat grid lebih hidup.'),
                    ]),
                Section::make('Story')
                    ->schema([
                        Textarea::make('description')
                            ->label('Overview')
                            ->helperText('Masalah yang dikerjakan dan data yang dipakai. Jangan menulis hasil atau angka yang belum ada.')
                            ->required()
                            ->rows(3),
                        Textarea::make('contribution')
                            ->label('My contribution')
                            ->helperText('Bagian yang benar-benar Anda kerjakan.')
                            ->required()
                            ->rows(3),
                        TagsInput::make('tags')
                            ->helperText('Ketik teknologi lalu tekan Enter, misalnya Python.'),
                    ]),
                Section::make('Links')
                    ->columns(3)
                    ->schema([
                        TextInput::make('url')
                            ->label('"View Project" link')
                            ->url()
                            ->required(),
                        TextInput::make('repo_url')
                            ->label('GitHub repository')
                            ->url(),
                        TextInput::make('demo_url')
                            ->label('Live demo')
                            ->url(),
                    ]),
                Section::make('Display')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Published')
                            ->helperText('Matikan untuk menyembunyikan dari website.')
                            ->default(true),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Urutan juga bisa diubah dengan drag di daftar.'),
                    ]),
            ]);
    }
}
