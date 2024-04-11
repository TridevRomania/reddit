<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reddit</title>
</head>

<body>
    <a href="{{ url()->previous() }}">back</a>
    <h1> Create your post </h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="name">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
