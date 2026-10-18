<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = ['label', 'handle', 'url', 'sort_order'];

    /** Link http(s) dibuka di tab baru, mailto: tidak. */
    public function isExternal(): bool
    {
        return str_starts_with($this->url, 'http');
    }
}
