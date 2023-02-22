<!-- -----------------------------------------------------------------------------------------------------------------------------
    Article view page:  
        -   Has URL form of /article/{id}
        -   Displays the appropriate article’s title, content, creation date, category, 
            and tags (as links to the appriopriate tag view). 
---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Method to split paragraphs of article content. -->
<?php function splitParagraphs($article) {
        $paragraphArray = explode("\n", $article);
        return $paragraphArray;
    }
?>

<!-- Method to get each tag as individual tags. -->
<?php function splitTags($tags) {
        $tagArray = explode(", ", $tags);
        return $tagArray;
    }
?>

<!-- Get basic html from main.blade.php -->
@extends('main') 

<!-- Add article page's title section. -->
@section('title', '| Article')

<!-- Add article page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Articles
                </h1>
            </div>
        </div>
    </div>
@endsection

<!-- Add article page's 'content' section. -->
@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Displays the selected article (based on article id), with date, category and tags. -->
        @foreach($articles as $article)
            <div class=" mt-4 articlePreview">
                <h2 class="articleTitle">{{ $article->article_title }}</h2>
                <br>

                <!-- Call method to split paragraphs of each article's content and display as line-separated paragraphs. -->
                @foreach (splitParagraphs($article->article_content) as $paragraph)
                    <p>{{$paragraph}}</p>
                @endforeach
                <br>
                <p><em>Created on: {{ $article->creation_date }}</em></p>
                <p><em>Category: {{ $article->category_name }}</em></p>

                <!-- Call method to split tags of each article and display as links to their appropriate tag page. -->
                @foreach(splitTags($article->tag_name) as $tag)
                    <p><em>Tag: <a href=<?php echo url("/tag/{$tag}"); ?>>{{ $tag }}</a></em></p>
                @endforeach
            </div>
            <!-- Divider-->
            <hr class="my-4">
        @endforeach
    </div>
</div>
@endsection
