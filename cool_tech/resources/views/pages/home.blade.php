<!-- -----------------------------------------------------------------------------------------------------------------------------
    Home (index) view page:  
        -   Displays the latest 5 articles in descending order (i.e. a list of article previews).
        -   Each preview displays the article title (as a link to the appropriate article page), the 
            first paragraph of the article, and the article's creation date.
---------------------------------------------------------------------------------------------------------------------------------- -->


<!-- Method to get first paragraph only for homepage article previews. -->
<?php function getFirstParagraph($article) {
        $paragraphArray = explode("\n", $article);
        return $paragraphArray[0];
    }
?>

<!-- Get basic html from main.blade.php -->
@extends('main') 

<!-- Add homepage title section (i.e. tab name for home page). -->
@section('title', '| Homepage')

<!-- Add homepage's 'heading' section (i.e. at the 'heading' yield in main.blade.php). -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Cool Tech
                </h1>
                <h5 class="my-3 headerSubtitle">
                    We bring digestible information about all things technology.
                </h5>
            </div>
        </div>
    </div>
@endsection

<!-- Add homepage's 'content' section (i.e. at the 'content' yield in main.blade.php). -->
@section('content')
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Get article previews for each article. -->
            @foreach($articles as $article)
                <div class=" mt-4 articlePreview">
                    <h2 class="articleTitle">
                        <a href=<?php echo url("/article/{$article->article_id}"); ?>>{{ $article->article_title }}</a>
                    </h2>
                    <p><em>Created on:  {{ $article->creation_date }}</em></p>
                    <p class="articleFirstParagraph">{{ getFirstParagraph($article->article_content) }}</p>
                </div>
                <!-- Divider-->
                <hr class="my-4">
            @endforeach
        </div>
    </div>
@endsection    