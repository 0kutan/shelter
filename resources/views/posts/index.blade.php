<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialisaed">
        <h1>保護犬・保護猫一覧</h1>
        <div class='posts'>
            <div class='post'>
                @foreach($posts as $post)
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
                
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div class='paginate'>{{ $posts->limks()}}</div>
    </body>
</html>