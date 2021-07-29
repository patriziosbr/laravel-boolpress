@extends('layouts.app')

{{-- @dd($posts) --}}
{{-- @dump($tags) --}}

@section('content')
    <div class="container">
        <h1>form da fare</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" placeholder="Your post title" id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="author">Author: </label>
                <input class="form-control" type="text" placeholder="Post author" id="author" name="author" value="{{old('author')}}">
            </div>
            <div class="form-group">
                <label for="post_date">Date: </label>
                <input class="form-control" type="date" id="post_date" name="post_date" value="{{old('post_date')}}">
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
                @foreach ($tags as $tag)
                <div class="d-inline mx-2">
                    <input type="checkbox" value="{{$tag->id}}" id="tag-{{$tag->id}}" name="tags[]" 
                    {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }} >
                    <label for="tag-{{$tag->id}}">{{$tag->name}}</label>
                </div>
                @endforeach
                @error('tags')
                <div>
                    <small class="text-danger">{{$message}}</small>
                </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="content">Post: </label>
                <textarea class="form-control" rows="3" id="content" name="content" placeholder="Write your post here">{{old('content')}}</textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Post">
        </form>
    </div>
@endsection

