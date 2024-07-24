<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Spatie\MediaLibrary\HasMedia;

class Product extends Model implements TranslatableContract, HasMedia
{
    use HasFactory, Translatable, SoftDeletes, InteractsWithMedia;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['image', 'parent','category_id'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
