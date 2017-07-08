@extends('layouts.page')

@section('content')
    <div class="container">
        @foreach($latestBlogEntries as $blog_entry)
            <article>
                <h3>
                    <a href="{{ route('getBlogEntry', ['entryUrl' => $blog_entry->url])  }}">
                        {{ $blog_entry->title }}
                    </a>
                </h3>
                <p class="slug">
                    {{ $blog_entry->slug }}
                </p>
            </article>
        @endforeach
    </div>
@stop