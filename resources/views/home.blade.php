@extends('layouts.page')

@section('content')
    <div class="container">
        <form role="form" method="POST" action="{{ route('createBlogEntry') }}">
            {{ csrf_field() }}

            <fieldset>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title of your blog entry">
            </fieldset>

            <fieldset>
                <label for="url">URL:</label>
                <input name="url" id="url">
            </fieldset>

            <fieldset>
                <label for="text">Text</label>
                <textarea name="text" id="text" cols="50" rows="15">
            </textarea>
            </fieldset>

            <fieldset>
                <label for="slug">Slug</label>
                <textarea name="slug" id="slug" cols="30" rows="10">
            </textarea>
            </fieldset>

            <button type="submit">
                Save
            </button>
        </form>
    </div>
@endsection
