<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $fillable = [
        'comment',
        'news',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
