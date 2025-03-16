<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function owner(){
        return $this->belongsTo(User::class, foreignKey:'user_id');
    }

    // relation between post and comments

    public function comments(){
        return $this->hasMany(comment::class);
    }
}
