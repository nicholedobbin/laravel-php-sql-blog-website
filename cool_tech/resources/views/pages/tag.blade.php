<!-- -----------------------------------------------------------------------------------------------------------------------------
    Tag view page:  
        -   Has URL form of /tag/{id}
        -   Lists all articles with a certain tag.
        -   Everywhere a tag is displayed (i.e. the article view page), is a link to the appropriate tag view page.
---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Get basic html from main.blade.php -->
@extends('main')

<!-- Add tag page's title section. -->
@section('title', '| Tag')

<!-- Add tag page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Articles By Tag
                </h1>
            </div>
        </div>
    </div>
@endsection

<!-- Add tag page's 'content' section. -->
@section('content')
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- List all articles with this tag. -->                
            <div class=" mt-4 articlePreview">
                <h2 class="categoryName">Articles with the tag: "{{ $tagTitle }}"</h2> 
                <br>
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
@endsection