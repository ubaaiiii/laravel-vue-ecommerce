<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use spatie\Sluggable\HasSlug;
use spatie\Sluggable\SlugOptions;

class Product extends Model
{
  use HasFactory;
  use HasSlug;
  use SoftDeletes;

  protected $fillable = [
    'title',
    'slug',
    'image',
    'image_mime',
    'image_size',
    'description',
    'price',
    'created_by',
    'updated_by',
  ];

  public function getSlugOptions() : SlugOptions
  {
    return SlugOptions::create()
      ->generateSlugsFrom('title')
      ->saveSlugsTo('slug');
  }
}
