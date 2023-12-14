<?php

// app/Models/PostCategory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_categories';

    protected $fillable = [
        'post_id',
        'category_id',

    ];

    public $incrementing = false; // Thêm dòng này
    protected $primaryKey = 'post_id'; // Thêm dòng này
}
