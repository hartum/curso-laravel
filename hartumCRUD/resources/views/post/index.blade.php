@extends('layouts.app')

@section('content')
<a href="{{ route('post.create') }}">Create new post</a>
<ul>
  @forelse ($posts as $post)
      <li>
        <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> |
        <a href="{{ route('post.edit', $post->id) }}">EDIT</a> |
        <form method="POST" action="{{ route('post.destroy', $post->id) }}">
          @csrf
          @method('DELETE')
          <button type="submit">DELETE</button>
        </form>
      </li>
  @empty
      <li>No items found</li>
  @endforelse
</ul>
@endsection