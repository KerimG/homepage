@extends('layouts.page')

@section('content')
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