@extends('layouts.page')

@section('content')
    <div class="container">
        <article>
            <h3>
                {{ $blog_entry->title }}
            </h3>
            <p class="blog-text">
                {{ $blog_entry->text }}
            </p>
        </article>
    </div>
@stop