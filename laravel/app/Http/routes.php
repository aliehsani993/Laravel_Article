<?php
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/', 'ArticleController@article_all_get')->name('article.all.get');
Route::get('/article/{articletitle}', 'ArticleController@article_single_get')->name('article.single.get');
Route::get('/create', 'ArticleController@article_form_get')->name('article.form.get');
Route::post('/create', 'ArticleController@article_form_post')->name('article.form.post');
Route::get('/edite/{articletitle}', 'ArticleController@article_form_edite_get')->name('article.edite.get');
Route::post('/edite/{articletitle}', 'ArticleController@article_form_edite_post')->name('article.edite.post');
Route::get('/delete/{articletitle}', 'ArticleController@article_dell')->name('dell');
Route::post('/search', 'ArticleController@search_index')->name('search.post');

Route::post('/{article}/addcomment', 'CommentController@comment_form_post')->name('comment.post');
Route::post('/{comment}/comment', 'CommentController@comment_check_post')->name('comment.check.comment');

Route::get('/myarticles', 'UserController@my_articles_get')->name('myarticles.get');
Route::get('writer/{writerid}','UserController@article_filterWriter_get')->name('article.filterwriter.get');

Route::get('/addtag', 'CategoryController@category_form_get')->name('category.form.get');
Route::post('/addtag', 'CategoryController@category_form_post')->name('category.form.post');
Route::get('/category/{categori}', 'CategoryController@article_filterWriter_get')->name('article.filtercategory.get');