@extends('layouts.page')

@section('content')
    <div class="container">
        @foreach($latestBlogEntries as $blogEntry)
            <article>
                <h3>
                    <a href="{{ route('getBlogEntry', ['entryUrl' => $blogEntry->url]) }}">
                        {{ $blogEntry->title }}
                    </a>
                </h3>
                <p class="slug">
                    {{ $blogEntry->slug }}
                </p>
            </article>
        @endforeach
    </div>
@stop