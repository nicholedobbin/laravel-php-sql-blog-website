<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    // Method to get articles with a tag category based on the tag name.
    public function getTag($tag) {
        // Get all articles where the tag_name is like the tag, in descending date order.
        $articles = Article::where('tag_name', 'LIKE', '%'.$tag.'%')
            ->orderByDesc('creation_date')
            ->orderByDesc('article_id')->get();
        $tagTitle = $tag; 
        
        //Return the tag page displaying the tag name and related articles.
        return view('pages/tag', ['articles'=>$articles])->with('tagTitle', $tagTitle); 
    }
}
