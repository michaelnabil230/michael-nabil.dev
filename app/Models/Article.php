<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;
    use HasTranslatableSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'is_published',
        'views',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_published' => 'boolean',
        'views' => 'integer',
    ];

    /**
     * The attributes that should be translated.
     *
     * @var array<int, string>
     */
    public $translatable = [
        'slug',
        'title',
        'description',
        'content',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The categories that belong to the Article
     *
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('header')
            ->singleFile();
    }

    protected function header(): Attribute
    {
        return Attribute::get(fn () => $this->getFirstMedia('header'));
    }

    protected function miniContent(): Attribute
    {
        return Attribute::get(function () {
            $length = 250;

            if (! empty($excerpt = $this->description)) {
                return $excerpt;
            }

            $cleaned = strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $this->content),
                '<code>'
            );

            $truncated = substr($cleaned, 0, $length);

            if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
                $truncated .= '</code>';
            }

            return strlen($cleaned) > $length
                ? preg_replace('/\s+?(\S+)?$/', '', $truncated).'...'
                : $cleaned;
        });
    }
}
