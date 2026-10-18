<?php

namespace App\Filament\Resources\ContactMessages\Tables;

use App\Models\ContactMessage;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContactMessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                IconColumn::make('is_read')
                    ->label('Read')
                    ->boolean()
                    ->state(fn (ContactMessage $record): bool => $record->read_at !== null),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('message')
                    ->limit(60)
                    ->tooltip(fn (ContactMessage $record): string => $record->message),
                IconColumn::make('is_emailed')
                    ->label('Emailed')
                    ->boolean()
                    ->state(fn (ContactMessage $record): bool => $record->emailed_at !== null),
                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Filter::make('unread')
                    ->label('Unread only')
                    ->query(fn (Builder $query): Builder => $query->whereNull('read_at')),
            ])
            ->recordActions([
                Action::make('markRead')
                    ->label('Mark as read')
                    ->icon('heroicon-o-check')
                    ->visible(fn (ContactMessage $record): bool => $record->read_at === null)
                    ->action(fn (ContactMessage $record) => $record->update(['read_at' => now()])),
                EditAction::make()->label('Open'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
