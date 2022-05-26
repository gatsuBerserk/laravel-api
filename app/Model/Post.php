<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function utent(){
        return $this->belongsTo("App\User");
    }

    public function categories(){
        return $this->belongsToMany("App\Model\Category");
    }
}
