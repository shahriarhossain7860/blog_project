<!-- resources/views/blogs/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Blog</h1>

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="description" id="content" rows="4" required>{{ $blog->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Update Blog</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
