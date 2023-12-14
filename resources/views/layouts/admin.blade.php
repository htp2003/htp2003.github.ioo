<!-- layout.blade.php -->
@include('includes.ad-header')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create-post') }}">
                            Create Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-post') }}">
                            Manage Post
                        </a>
                    </li>
                    <!-- Add additional navigation items as needed -->
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('page-title')</h1>
            </div>

            <!-- Content section -->
            @yield('content')

        </main>
    </div>
</div>

@include('includes.ad-footer')
