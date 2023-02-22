<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {

    // Method to get legal page.
    public function getLegal(){
        return view('pages/legal');
    }

    // Method to get search page.
    public function getSearch(){
        return view('pages/search');
    }
}

