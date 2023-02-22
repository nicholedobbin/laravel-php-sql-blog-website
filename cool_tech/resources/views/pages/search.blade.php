<!-- -----------------------------------------------------------------------------------------------------------------------------
    Search view page:  
        -    Contains 3 search fields (for article ID, category, and tag) with submit buttons. 
        -    Uses dropdown/select forms for these search bars to avoid the user entering
             data (i.e. tags/categories/id's) that doesn't exist.
        -    Redirects the user to the correct correct article, category, or tag page on submit.
---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Method to get all category names. -->
<?php function getCategoryNames($articles) {
    $categoryNamesArray = [];
    foreach ($articles as $article) {
        if (!in_array($article->category_name, $categoryNamesArray)){
            array_push($categoryNamesArray, $article->category_name);
        }
    }
    return $categoryNamesArray;
}
?>

<!-- Method to get all tag names. -->
<?php function getTagNames($articles) {
    $tagNamesArray = [];
    foreach ($articles as $article) {
        if (!in_array($article->tag_name, $tagNamesArray)){
            if (!str_contains($article->tag_name, ", ")) {
                array_push($tagNamesArray, $article->tag_name);
            } 
        }
    }
    return $tagNamesArray;
}
?>

<!-- Get basic html from main.blade.php -->
@extends('main')

<!-- Add search page's title section. -->
@section('title', '| Search')

<!-- Add search page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Cool Tech: Search For Articles
                </h1>

            </div>
        </div>
    </div>
@endsection

<!-- Add search page's 'content' section. -->
@section('content')
    <div class="container px-4 px-lg-5 py-4 mainContent">

         <!-- Create dropdown to get articles by id. -->
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-sm">
                <form action="article/" method="GET">
                    <div class="my-2">
                        <label for="article_id" class="form-label">Find an article by ID:</label>
                        <select class="form-select" aria-label="Default select example" id="article_id" style="width:auto" 
                        name="idSelectOption">
                            <option selected>Open this to select an article ID</option>
                            @foreach ($articles as $article)
                                <option value=<?php echo $article->article_id?>>{{$article->article_id}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                </form>
            </div>
            <!-- Divider-->
            <hr class="my-4">
        </div>  

        <!-- Create dropdown to get articles by tag. -->
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <form action="tag/" method="GET">
                <div class="my-2">
                    <label for="tag_name" class="form-label">Find articles by Tag:</label>
                    <select class="form-select" aria-label="Default select example" id="tag_name" style="width:auto" 
                    name="tagSelectOption">
                        <option selected>Open this to select a tag</option>
                        <!-- Call method to get tag name. -->
                        @foreach (getTagNames($articles) as $tag)
                            <option value="<?php echo $tag?>">{{$tag}}</option>
                        @endforeach 
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
            </form>
            <!-- Divider-->
            <hr class="my-4">
        </div> 

        <!-- Create dropdown to get articles by category. -->
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <form action="category/" method="GET">
                <div class="my-4">
                    <label for="category" class="form-label">Find articles by Category:</label>
                    <select class="form-select" aria-label="Default select example" id="category" style="width:auto"
                    name="categorySelectOption">
                        <option selected>Open this to select a category</option>
                        <!-- Call method to get category name. -->
                        @foreach (getCategoryNames($articles) as $category)
                            <option value="<?php echo $category?>">{{$category}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection