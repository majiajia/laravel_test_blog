<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('blog.title') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <!-- Styles -->

    </head>
    <body>
        <div class="container">
            <h1>{{ config('blog.title') }}</h1>
            <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
            <hr>
<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('blog.detail',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
            <em>{{ $post->published_at }}</em>
<p>
    {{ str_limit($post->content) }}
</p>
        </li>
    @endforeach

</ul>
<hr>
{!! $posts->render() !!}
        </div>
    </body>
</html>
