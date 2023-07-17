<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>{{ $blog->title }}</h1>
                <p>{{ $blog->description }}</p>
                <div>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>