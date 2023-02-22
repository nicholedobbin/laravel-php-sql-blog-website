<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class SearchController extends Controller
{   
     // Method to get the search page with select/dropdown forms to search for articles.
     public function getSearch()
     {
         $articles = Article::get();
         return view('pages/search', ['articles'=>$articles]);
     }

     // Method to search articles by ID and return that article (in the article view/page).
    public function searchArticlesById(Request $request)
    {
        $option = $request->get('idSelectOption');
        echo $option;
        return redirect( 'article/'.$option);     
    }

    // Method to search articles by Tag and return the list of articles with that tag (in the tag view/page).
    public function searchArticlesByTag(Request $request)
    {
        $option = $request->get('tagSelectOption');
        return redirect( 'tag/'.$option);     
    }

      // Method to search articles by Category and return the list of articles in that category (in the catgeory view/page).
      public function searchArticlesByCategory(Request $request)
      {
          $option = $request->get('categorySelectOption');
          return redirect( 'category/'.$option);     
      }  
}
