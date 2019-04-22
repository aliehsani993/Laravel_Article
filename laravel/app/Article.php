<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];

    #routebiding for any article model
    public function getRouteKeyName()
    {
        return 'title';
    }
    #relashionship
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
    return$this->hasMany(Comment::class);
    }
    public function category() {
        return $this->belongsToMany(Category::class);
    }
}

