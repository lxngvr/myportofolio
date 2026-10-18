<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** Kunci tipe => label yang tampil di filter dan kartu. */
    public const TYPES = [
        'analysis' => 'Data Analysis',
        'ml' => 'Machine Learning',
        'engineering' => 'Data Engineering',
        'web' => 'Web & Software',
    ];

    /** Kunci partial thumbnail => nama yang tampil di admin. */
    public const THUMB_LABELS = [
        'bars' => 'Bar chart',
        'scatter' => 'Scatter plot',
        'pipeline' => 'Data pipeline',
        'browser' => 'Web app window',
        'donut' => 'Donut and line chart',
        'matrix' => 'Confusion matrix',
    ];

    protected $fillable = [
        'type', 'thumb', 'is_dark', 'title', 'description', 'contribution',
        'tags', 'url', 'repo_url', 'demo_url', 'sort_order', 'is_published',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_dark' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true)->orderBy('sort_order');
    }

    public function typeLabel(): string
    {
        return self::TYPES[$this->type] ?? ucfirst($this->type);
    }
}
