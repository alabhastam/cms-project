<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <p><strong>Status:</strong> {{ $post->status }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
