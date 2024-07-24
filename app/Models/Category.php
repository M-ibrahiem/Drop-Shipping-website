<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Spatie\MediaLibrary\HasMedia;


class Category extends Model implements TranslatableContract, HasMedia
{
    use HasFactory, Translatable, SoftDeletes, InteractsWithMedia;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['image', 'parent'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile();
    }

    // Define the relationship to the parent category
    // public function parentCategory()
    // {
    //     return $this->belongsTo(Category::class, 'parent', 'id');
    // }

    // // Define the relationship to the child categories
    // public function childCategories()
    // {
    //     return $this->hasMany(Category::class, 'parent', 'id');
    // }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
