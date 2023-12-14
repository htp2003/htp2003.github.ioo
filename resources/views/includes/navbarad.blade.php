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
