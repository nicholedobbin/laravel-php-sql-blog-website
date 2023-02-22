<?php
// Import Routes and Controllers.
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

// Article controllers' routes for home, articles, categories and tags pages.
Route::get('/', 'App\Http\Controllers\ArticleController@index');
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@getArticle');
Route::get('/category/{slug}', 'App\Http\Controllers\CategoryController@getCategory');
Route::get('/tag/{id}', 'App\Http\Controllers\TagController@getTag');

//Pages controllers' routes for legal and search pages.
Route::get('/legal', 'App\Http\Controllers\PagesController@getLegal');
Route::get('/search', 'App\Http\Controllers\SearchController@getSearch');
Route::get('/article', 'App\Http\Controllers\SearchController@searchArticlesById');
Route::get('/tag', 'App\Http\Controllers\SearchController@searchArticlesByTag');
Route::get('/category', 'App\Http\Controllers\SearchController@searchArticlesByCategory');




 
