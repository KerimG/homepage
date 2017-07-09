@extends('layouts.page')

@section('content')
    <header class="container">
        <a class="inline-block padding-1em" href="{{ action('HomepageController@index') }}">Homepage</a>
    </header>
    <div class="container">
        @foreach($latestArticles as $article)
            <article>
                <h3>
                    <a href="{{ route('getArticle', ['articleUrl' => $article->url]) }}">
                        {{ $article->title }}
                    </a>
                </h3>
                <p class="slug">
                    {{ $article->slug }}
                </p>
            </article>
        @endforeach
    </div>
@stop