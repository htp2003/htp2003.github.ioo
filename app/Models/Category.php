<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    protected $primaryKey = 'category_id';
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'post_id');
    }
}
