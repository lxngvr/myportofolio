<?php

namespace App\Filament\Resources\ProfileFacts;

use App\Filament\Resources\ProfileFacts\Pages\CreateProfileFact;
use App\Filament\Resources\ProfileFacts\Pages\EditProfileFact;
use App\Filament\Resources\ProfileFacts\Pages\ListProfileFacts;
use App\Filament\Resources\ProfileFacts\Schemas\ProfileFactForm;
use App\Filament\Resources\ProfileFacts\Tables\ProfileFactsTable;
use App\Models\ProfileFact;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfileFactResource extends Resource
{
    protected static ?string $model = ProfileFact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSparkles;

    protected static string|UnitEnum|null $navigationGroup = 'Profile';

    protected static ?int $navigationSort = 5;

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Schema $schema): Schema
    {
        return ProfileFactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfileFactsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProfileFacts::route('/'),
            'create' => CreateProfileFact::route('/create'),
            'edit' => EditProfileFact::route('/{record}/edit'),
        ];
    }
}
