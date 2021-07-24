<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('article.index');
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');//authミドルウェアを使い、特定のルートやアクションを、認証済みユーザーだけがアクセスできるよう保護する
Route::resource('/articles', 'ArticleController')->only(['show']);
Route::prefix('articles')->name('articles.')->group(function () {
Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});