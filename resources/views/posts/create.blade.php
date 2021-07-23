@extends('layouts.app')

{{-- @dd($posts) --}}

@section('content')
    <div class="container">
        <h1>form da fare</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" placeholder="Your post title" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="author">Author: </label>
                <input class="form-control" type="text" placeholder="Post author" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="post_date">Date: </label>
                <input class="form-control" type="date" id="post_date" name="post_date">
            </div>
            <div class="form-group">
                <label for="content">Post: </label>
                <textarea class="form-control" rows="3" id="content" name="content" placeholder="Write your post here"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Post">
        </form>
    </div>
@endsection

