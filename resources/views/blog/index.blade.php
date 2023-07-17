<!-- resources/views/blogs/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>My Blogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">My Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary mt-3 mb-3">Create New Blog</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                            <a href="{{ route('blogs.show', $blog->id) }}"class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                            @csrf
                              @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
