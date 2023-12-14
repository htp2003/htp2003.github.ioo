<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Felonies</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--css files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="/assets/css/variables.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchForm = document.getElementById('searchForm');

        searchForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Lấy giá trị của ô input tìm kiếm
            const query = document.querySelector('#searchForm input[name="query"]').value;

            // Chuyển hướng đến trang tìm kiếm với tham số truy vấn
            window.location.href = '{{ route('home.search') }}?query=' + encodeURIComponent(query);
        });

        // Lắng nghe sự kiện phím được nhấn
        searchForm.addEventListener('keypress', function (event) {
            if (event.key === 'Enter') {
                // Ngăn chặn hành vi mặc định của Enter trong input
                event.preventDefault();

                // Gửi form
                searchForm.submit();
            }
        });
    });
</script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Felonies</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Blog</a></li>
                    <li><a href="/">Single Post</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('category.show', ['category' => 'cybercrime']) }}">Cybercrime Chronicles</a></li>
                            <li><a href="{{ route('category.show', ['category' => 'drugcrime']) }}">Drug Dossier</a></li>
                            <li><a href="{{ route('category.show', ['category' => 'homicide']) }}">Homicide and Major Crimes</a></li>
                            <li><a href="{{ route('category.show', ['category' => 'stimulants']) }}">Stimulants and Art of Crime</a></li>
                            <li><a href="{{ route('category.show', ['category' => 'financialcrime']) }}">Financial Crime and Deception</a></li>
                        </ul>
                    </li>

                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="https://www.facebook.com/mid.nn11/" target="_blank" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="{{ route('home.search') }}" class="search-form" method="get" id="searchForm">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control" name="query">
                        <button class="btn js-search-close" ><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->
                <!-- Login/Logout Link -->
            @guest
            <a href="{{ route('login') }}" class="mx-2">Login</a>
        @else
            <span class="mx-2">Welcome, {{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" class="mx-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <!-- Add a hidden logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
        <!-- End Login/Logout Link -->
            </div>

        </div>

    </header><!-- End Header -->
