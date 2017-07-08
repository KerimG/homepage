@extends('layouts.page')

@section('content')
    <div class="container">
        <article>
            <h3>
                {{ $blogEntry->title }}
            </h3>
            <p class="blog-text">
                {{ $blogEntry->text }}
            </p>
        </article>
    </div>
@stop