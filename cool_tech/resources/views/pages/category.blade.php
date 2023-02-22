<!-- -----------------------------------------------------------------------------------------------------------------------------
    Category view page:  
        -   Has URL form of /category/{slug}
        -   Lists all articles of a certain category.
        -   If the requested slug does not exist, a message is echoed that the slug doesn't exist (see ArticleController.php).
---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Method to get a category name. -->
<?php function getCategoryName($articles) {
        $categoryName = $articles[0]->category_name;
        return $categoryName;
    }
?>

<!-- Get basic html from main.blade.php -->
@extends('main')

<!-- Add category page's title section. -->
@section('title', '| Category')

<!-- Add category page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Articles By Category
                </h1>
            </div>
        </div>
    </div>
@endsection

<!-- Add category page's 'content' section. -->
@section('content')
    <div class="container px-4 px-lg-5 mainContent">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class=" mt-4 articlePreview">
                    <!-- Call method to get the category name based on the inputted slug. -->
                    <h2 class="categoryName">Articles in: "{{ getCategoryName($articles) }}"</h2>
                    <br>
                    <!-- List all articles in this category. -->
                    @foreach($articles as $article)
                        <ul>
                            <li>{{ $article->article_title }}</li>
                        </ul>
                    @endforeach
                </div>
                 <!-- Divider-->
                 <hr class="my-4">
            </div>
        </div>
    </div>
@endsection