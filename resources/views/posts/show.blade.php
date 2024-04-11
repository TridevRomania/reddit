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
    <h1> {{ $post->name }} </h1>
    <p> {{ $post->content }} </p>
</body>

</html>
