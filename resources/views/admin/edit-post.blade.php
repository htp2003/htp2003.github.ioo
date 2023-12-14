<!-- edit-post.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Create Post</title>
    </head>
    <body>



    <div class="container">
        <h2>Edit Post</h2>

        <form action="{{ route('admin.update-post', $post->post_id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="postTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="postTitle" name="postTitle" value="{{ $post->title }}" required>
            </div>

            <div class="mb-3">
                <label for="postContent" class="form-label">Content</label>
                <textarea class="form-control" id="postContent" name="postContent" rows="3" required>{{ $post->content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $post->image }}" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_id }}" {{ $post->category && $post->category->id == $category->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>





            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
