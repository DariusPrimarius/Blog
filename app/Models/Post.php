<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'cat_id',
        'tag',
        'tagname',
        'image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}



