<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reddit</title>
</head>

<body>
    <h1>Latest posts!</h1>
    <a href="{{ route('posts.create') }}">Create a post</a>
    <ul>
        @forelse ($posts as $post)
            <a href="{{ route('posts.show', [
                'post' => $post,
            ]) }}">
                <li>{{ $post->name }}</li>
            </a>
        @empty
            <li>List is empty</li>
        @endforelse
    </ul>
</body>

</html>
