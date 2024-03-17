@extends('layouts.app')

@section('content')
<a href="{{ route('article.create') }}">Create</a>
<ul>
  @forelse ($articles as $article)
      <li>
        <a href="{{ route('article.show', $article->id) }}">{{ $article->name }}</a>
        <a href="{{ route('article.edit', $article->id) }}"> | Edit</a>
        
        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
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