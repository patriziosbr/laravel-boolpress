@extends('layouts.app')
@dd($category->post) 
{{-- @dump($category) --}}

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <ul class="my-5">
            @foreach ($category->post as $post)
                <li>
                    <a href="#">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection