<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'author_id',
        'banner_image',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }
}
