@extends('layouts.app')

{{-- @dump($post->category) --}}
{{-- @dump($post) --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5">Visualizza: {{ $post->title }} @if ($post->category)
                    <a href=" {{ route('admin.categories.show', $post->category->id) }} " class="badge badge-info"> {{ $post->category->name }} </a>
                @else
                    <span class="badge badge-info"> nessuna categoria</span>
                @endif </h1>

            </div>
        </div>

        <div class="row">
            <div class="col-4">
                @if ($post->cover)
                    <img class="img-fluid text-center" src="{{ asset('storage/' . $post->cover) }}" alt="{{$post->cover}}">
                @else 
                    <img class="w-100" src="{{ asset('images/placeholder.png') }}" alt="{{$post->title}}">
                @endif
            </div>
            <div class="col-8">
                <div >
                    <a class="btn btn-secondary mb-4" href="{{ route('admin.posts.index', $post->id) }}">BACK</a>
                    <a class="btn btn-warning mb-4" href="{{ route('admin.posts.edit', $post->id) }}">EDIT</a>
                    <h3><strong>Title: </strong>{{ $post->title }}</h3>
                    <small><strong>Content: </strong></small>
                    <p>
                        {{ $post->content }}
                    </p>
                    <h6><strong>Author: </strong>{{ $post->author }}</h6>
                    <h6><strong>Published date: </strong>{{ $post->post_date }}</h6>
                </div>
            </div>

        </div>
    </div>
@endsection
