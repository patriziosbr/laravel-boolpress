@extends('layouts.app')

{{-- @dd($posts) --}}

@section('content')
    <div class="container">
        <h1>list tabel</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Post date</th>
                <th scope="col">Categories</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->post_date }}</td>
                    <td>
                      @if ($post->category)
                          {{ $post->category->name}}
                      @endif
                    </td>
                    <td>
                      <a class="btn btn-info" href="{{ route('admin.posts.show', $post->id) }}">SHOW</a>
                    </td>
                    <td>
                      <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">EDIT</a>
                    </td>
                    <td>
                      <form action=" {{ route('admin.posts.destroy', $post->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Do you want delete this post? this action can\'tn be undone')" value="DELETE">
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection