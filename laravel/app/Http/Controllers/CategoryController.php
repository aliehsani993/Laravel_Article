<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
   public function article_filterWriter_get(Category $categori){
       $articles=$categori->article()->get();
       return view('Filter',compact('articles'));
   }
    #add category
    public function category_form_get(){
        return view('FormAddCategory');
    }

    public function category_form_post(){
        Category::create([
            'name'=>\request('tag')
        ]);
        \session()->flash("message","دسته بندی جدید با موفقیت ,ثبت شد");
        return redirect()->back();
    }
}
