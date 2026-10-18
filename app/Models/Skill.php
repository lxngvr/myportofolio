<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $fillable = ['skill_group_id', 'name', 'is_exploring', 'sort_order'];

    protected function casts(): array
    {
        return ['is_exploring' => 'boolean'];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SkillGroup::class, 'skill_group_id');
    }
}
