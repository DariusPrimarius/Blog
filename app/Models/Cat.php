<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public function user()
    {
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
