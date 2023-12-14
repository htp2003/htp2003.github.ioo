<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'body'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id'); // Sử dụng tên cột chính xác
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'name');
    }
}
