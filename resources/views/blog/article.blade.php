@extends('layouts.page')

@section('content')
    <header class="container navigation">
        <a class="inline-block padding-1em" href="{{ action('HomepageController@index') }}">Homepage</a>
        <a class="inline-block padding-1em" href="{{ action('BlogController@frontpage') }}">Blog</a>
    </header>
    <div class="container">
        <article>
            <h3>
                {{ $article->title }}
            </h3>
            <p class="blog-text">
                {{ $article->text }}
            </p>
        </article>
    </div>
@stop