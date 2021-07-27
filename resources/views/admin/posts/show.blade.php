@extends('layouts.app')

{{-- @dump($post->category) --}}
@section('content')
    <div class="container">
        <h1 class="mb-5">Visualizza: {{ $post->title }} @if ($post->category)
			<a href=" {{ route('admin.categories.show', $post->category->id) }} " class="badge badge-info"> {{ $post->category->name }} </a>
		@else
			<span class="badge badge-info"> nessuna categoria</span>
		@endif </h1>
        <div class="w-50 m-auto ">
            <h3><strong>Title: </strong>{{ $post->title }}</h3>
            <small><strong>Content: </strong></small>
            <p>
                {{ $post->content }}
            </p>
            <h6><strong>Author: </strong>{{ $post->author }}</h6>
            <h6><strong>Published date: </strong>{{ $post->post_date }}</h6>

        </div>
    </div>
@endsection
