<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    public function comment_form_post(Article $article)
    {
        Comment::create([
            'article_id'=>$article->id,
            'body'=>\request('body'),
            'name'=>auth()->user()->name,
            'validate'=>False
        ]);
        \session()->flash("message","نظر شما با موفقیت ,ثبت شد");
        return redirect()->back();
    }

    public function comment_check_post(Comment $comment)
    {
         $comment->update([
            'validate'=>\request('ok')
        ]);
        \session()->flash("message","تایید نظر با موفقیت ثبت شد");
        return redirect()->back();
    }
}
