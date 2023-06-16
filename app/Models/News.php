<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
        'date',
        'publisher',
        'category_id',
        'is_real',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
