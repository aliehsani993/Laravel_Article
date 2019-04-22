<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    #relashionship
    public function article() {
        return $this->belongsToMany(Article::class);
    }
}
