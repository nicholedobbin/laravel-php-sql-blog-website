<!-- -----------------------------------------------------------------------------------------------------------------------------
    Error view page:  
        -   If the inputted URL slug does not exist, this page is returned with the 404 error message.
---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Get basic html from main.blade.php -->
@extends('main')

<!-- Add category page's title section. -->
@section('title', '| 404 - Page Not Found')

<!-- Add category page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    404 - Page Not Found Error.
                </h1>
                <h3 id="topOfPage" >Unfortunately this page could not be found.</h3>
            </div>
        </div>
    </div>
@endsection