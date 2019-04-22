<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function article_filterWriter_get(User $writerid){
       $articles=$writerid->articles;
       return view('Filter',compact('articles'));
    }

    public function my_articles_get(){
        $articles=auth()->user()->articles;
        return view('Filter',compact('articles'));
    }
}
