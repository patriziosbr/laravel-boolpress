@extends('layouts.app')
{{-- @dd($category->posts)  --}}
{{-- @dump($category) --}}

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <ul class="my-5">
            @foreach ($category->posts as $post)
                <li>
                    <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection