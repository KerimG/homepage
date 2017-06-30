@extends('layouts.page')

@section('content')
    <div class="container">
        @foreach($latestBlogEntries as $blog_entry)
            <article>
                <h3>
                    {{ $blog_entry->title }}
                </h3>
                <p class="slug">
                    {{ $blog_entry->slug }}
                </p>
            </article>
        @endforeach
    </div>
@stop