<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'type',
        'status',
        'template',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'featured_image',
        'published_at',
        'author_id',
        'sort_order',
        'is_featured',
        'show_in_menu'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'show_in_menu' => 'boolean',
    ];

    // Relationships
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeInMenu($query)
    {
        return $query->where('show_in_menu', true);
    }

    // Accessors & Mutators
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        
        // Auto-generate slug if not set
        if (empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // Auto-generate excerpt from content
        if ($this->content) {
            return Str::limit(strip_tags($this->content), 150);
        }
        
        return null;
    }

    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->title;
    }

    // Helper methods
    public function isPublished(): bool
    {
        return $this->status === 'published' && 
               $this->published_at && 
               $this->published_at <= now();
    }

    public function isDraft(): bool
    {
        return $this->status === 'draft';
    }

    public function getUrl(): string
    {
        return url('/' . $this->slug);
    }

    public function getEditUrl(): string
    {
        return route('admin.pages.edit', $this->id);
    }

    // Static methods
    public static function getTypes(): array
    {
        return [
            'page' => 'Static Page',
            'blog' => 'Blog Post',
            'service' => 'Service Page',
        ];
    }

    public static function getStatuses(): array
    {
        return [
            'draft' => 'Draft',
            'published' => 'Published',
            'archived' => 'Archived',
        ];
    }

    public static function getTemplates(): array
    {
        return [
            'default' => 'Default Template',
            'blog' => 'Blog Template',
            'service' => 'Service Template',
            'landing' => 'Landing Page',
        ];
    }
}
