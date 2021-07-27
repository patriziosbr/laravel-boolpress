@extends('layouts.app')

{{-- @dd($post) --}}


@section('content')
    <div class="container">
        <h1>Edit post: {{ $post->title }} @if ($post->category)
			<a href=" {{ route('admin.categories.show', $post->category->id) }} " class="badge badge-info"> {{ $post->category->name }} </a>
		@else
			<span class="badge badge-info"> nessuna categoria</span>
		@endif </h1>
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" placeholder="Your post title" id="title" name="title" value="{{ old('title', $post->title) }}">
            </div>
            <div class="form-group">
                <label for="author">Author: </label>
                <input class="form-control" type="text" placeholder="Post author" id="author" name="author" value="{{ old('author', $post->author) }}">
            </div>
            <div class="form-group">
                <label for="post_date">Date: </label>
                <input class="form-control" type="date" id="post_date" name="post_date" value="{{ old('post_date', $post->post_date) }}">
            </div>
            <div class="form-group">
                <label for="category_id">Categories: </label>
                <select name="category_id" id="category_id" class="form-control" >
                    <option value="">--Nessuna categoria--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($category->id == old('category_id')) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Post: </label>
                <textarea class="form-control" rows="3" id="content" name="content" placeholder="Write your post here">{{ old('content', $post->content) }}</textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
@endsection

