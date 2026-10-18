<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkillGroup extends Model
{
    protected $fillable = ['name', 'style', 'sort_order'];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class)->orderBy('is_exploring')->orderBy('sort_order');
    }
}
