<?php

namespace App\Models;

use App\Models\Enums\TechnologyType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Technology extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'website_url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    public $casts = [
        'type' => TechnologyType::class.':nullable',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array<int, string>
     */
    protected $with = [
        'media',
    ];

    /**
     * The attributes that should be translated.
     *
     * @var array<int, string>
     */
    public $translatable = [
        'name',
        'description',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile();
    }

    protected function avatar(): Attribute
    {
        return Attribute::get(fn () => $this->getFirstMedia('avatar'));
    }
}
