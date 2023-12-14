<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    @include('includes.navbarad')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Create New Post</h1>
                </div>

                <form action="{{ route('posts.store') }}" method="POST" class="text-start">
                    @csrf

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <!-- Populate the options dynamically based on your categories -->
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="postTitle" name="postTitle" required>
                    </div>

                    <div class="mb-3">
                        <label for="postContent" class="form-label">Content</label>
                        <textarea class="form-control" id="postContent" name="postContent" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="image" name="image" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
