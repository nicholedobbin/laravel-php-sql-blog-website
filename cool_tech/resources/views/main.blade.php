<!-- -----------------------------------------------------------------------------------------------------------------------------
    Main view page:  
        -   Contains all the HTML that forms the basic layout of each page.
        -   Retrieves the title, heading and main content of each blade/page using 'yield()' in their 
            relevant places on the page.
        -   Retrieves cookie notice using component (see alert2.blade.php).
        -   Inserts footer with links to the search page and legal page and a copyright notice with 
            date on all web pages.
---------------------------------------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS stylesheet. -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Link to Bootstrap 5 CSS. -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >
     <!-- Get title for each page -->
     <title>Cool Tech @yield('title')</title> 
</head>

<body>
    <header class="myNav myNavBackground">
        <!-- Nav bar -->
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <!-- Navbar button (hamburger) for small viewports -->
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links (collapsible to navbar/hamburger button above for small viewports) -->
                <div class="collapse navbar-collapse myNavBackground" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-fill w-100 me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/legal">Legal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/search">Search</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Get heading for each page. -->
    @yield('heading')

    
    <!-- Get main content for each page. -->
    <div class="container px-4 px-lg-5 mainContent">
        @yield('content')
    </div>

    <!-- Get cookie notice component from alert2.blade.php -->
    <x-alert2>
    </x-alert2>

    <!-- Footer with links to search and legal pages, and copyright notice. -->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center mt-4">
                        <li class="list-inline-item">
                            <a href="/search">
                                <p>Search</p>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/legal">
                                <p>Legal</p>
                            </a>
                        </li>
                    </ul>
                    <div class="mb-4 small text-center text-muted fst-italic">Copyright © 2022 Cool Tech</div>
                </div>
            </div>
        </div>
    </footer>

<!-- Close body. -->
</body>
</html>