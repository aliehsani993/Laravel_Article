<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use http\Url;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function article_all_get()
    {
        $articles = Article::latest()->paginate(20);
        return view('Home', compact('articles'));
    }

    public function article_single_get(Article $articletitle)
    {
        $article = $articletitle;
        $comments = $articletitle->comments->all();
        return view('Single', compact('article', 'comments'));
    }

    public function article_form_get()
    {
        $category = Category::all();
        if (\auth()->check())
            return view('FormArticle', compact('category'));
        else
            return redirect('/login');
    }


    public function article_form_post()
    {
        $article = Article::create([
            'user_id' => auth()->id(),
            'title' => \request('title'),
            'body' => \request('body'),
            'summary'=>\request('summary')
        ]);
        $article->category()->attach(\request('category'));
        \session()->flash("message","مقاله شما با موفقیت ثبت شد");
        return redirect('/');
    }


    public function search_index()
    {
        $keywords = \request('keyword');
        $articles = Article::where('title', 'LIKE', '%' . $keywords . '%')->get();
        return view('Filter', compact('articles'));
    }

    public function article_form_edite_get(Article $articletitle)
    {
        $article = $articletitle;
        $category = Category::all();
        return view('FormEdite', compact('article', 'category'));
    }

    public function article_form_edite_post(Article $articletitle)
    {
        $article = $articletitle;
        $article->update([
            'title' => \request('title'),
            'body' => \request('body'),
        ]);
        $article->category()->sync(\request('category'));
        \session()->flash("message","مقاله شما با موفقیت ,ویرایش شد");
        return redirect('/');
    }

    public function article_dell(Article $articletitle)
    {
        $articletitle->delete();
        \session()->flash("message","مقاله شما با موفقیت ,حذف شد");
        return redirect('/');

    }



}
