<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html, body, .container-fluid, #sidebar {
            height: 100%;
        }

        #sidebar {
            height: 100%;
        }

        #main-content {
            min-height: 100%;
        }
    </style>
    <title>Admin Dashboard</title>
</head>
<body>

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

                    <!-- Logout link -->
                    <ul class="nav flex-column mt-5">
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div>
                    <a class="nav-link" href="/">
                        Go home
                    </a>
                </div>
                <!-- Add your content here -->
                <!-- Content for the Dashboard page -->

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
