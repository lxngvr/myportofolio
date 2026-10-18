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

    public const THUMBS = ['bars', 'scatter', 'pipeline', 'browser', 'donut', 'matrix'];

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
