@extends('layouts.app')

{{-- @dd($post) --}}
{{-- @dump($tags) --}}

@section('content')
    <div class="container">
        <h1>form da fare</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" placeholder="Your post title" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">Author: </label>
                <input class="form-control" type="text" placeholder="Post author" id="author" name="author" value="{{old('author')}}">
                @error('author')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="post_date">Date: </label>
                <input class="form-control" type="date" id="post_date" name="post_date" value="{{old('post_date')}}">
                @error('post_date')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <div class="custom-file">
                    {{-- <img style="height:200px" src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->cover }}"> --}}
                    <input type="file" id="cover" name="cover">
                </div>
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

