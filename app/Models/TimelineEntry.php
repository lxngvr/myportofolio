<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TimelineEntry extends Model
{
    public const EDUCATION = 'education';
    public const EXPERIENCE = 'experience';

    protected $fillable = [
        'category', 'kind', 'title', 'organization', 'period',
        'description', 'tags', 'sort_order', 'is_published',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_published' => 'boolean',
        ];
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }

    public function scopeCategory(Builder $query, string $category): void
    {
        $query->where('category', $category)->orderBy('sort_order');
    }
}
