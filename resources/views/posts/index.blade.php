<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style-index.css') }}">
</head>
<body>
<div class="site-container">
    @foreach($posts as $post)
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <h4>{{ $post->name }}</h4>

                <img src="{{$post->poster}}" alt="">

                <p>{{$post->description }}</p>
                <p>{{ $post->content }}</p>
                @foreach($post->categories as $category)
                    <span>{{ $category->name }}</span>
                @endforeach
            </div>
        </form>
    @endforeach
</div>
</body>
</html>
