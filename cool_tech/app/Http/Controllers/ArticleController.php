<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    // Method to get home view page with latest 5 articles displayed.
    public function index()
    {
        $articles = Article::orderBy('creation_date', 'desc')->limit(5)->get();
        return view('pages/home', ['articles'=>$articles]);
    }

    // Method to get article view page (displaying only the article with that id).
    public function getArticle($id){
        $articles = Article::get()->where('article_id', '=', $id);
        return view('pages/article', (['articles'=>$articles])); 
    }
}
