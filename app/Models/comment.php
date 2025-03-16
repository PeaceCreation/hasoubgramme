<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function post(){
        return $this->belongsTo(Comment::class);
    }

    //relation between user and comment

    public function owner(){
        return $this->belongsTo(User::class);
    }
}
