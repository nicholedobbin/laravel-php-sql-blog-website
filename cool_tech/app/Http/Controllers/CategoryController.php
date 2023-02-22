<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // Method to get articles in a specified category based on the slug title.
    public function getCategory($slug_title_search) {
        // Un-slug the url with replace function.
        $un_slug_title = Str::replace('-', ' ', $slug_title_search);

        // Get all articles where the category_name is like the un-slug title, in date descending order.
        $articles = Article::where('category_name', 'LIKE', '%'.$un_slug_title.'%')
            ->orderByDesc('creation_date')
            ->orderByDesc('article_id')->get();

        // If there are no articles with this slug, return a message stating this.
        if (count($articles) == 0) {
            return view('pages/error'); 
        } else {
            // Else, return the category page displaying the category and related articles.
            return view('pages/category', ['articles'=>$articles]); 
        }
    }
}
