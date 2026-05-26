<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_slug',
        'section_key',
        'title',
        'body',
        'image',
        'sort_order',
    ];

    public static function getSection(string $pageSlug, string $sectionKey): ?self
    {
        return static::where('page_slug', $pageSlug)
            ->where('section_key', $sectionKey)
            ->first();
    }
}
