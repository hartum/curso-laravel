@extends('layouts.app')

@section('content')
<a href="{{ route('article.index') }}">Volver</a>
<form method="post" action="{{ route('article.update', $article->id) }}">
	@method('PUT')
  @csrf
  <label>Name</label>
  <input type="text" name="name" value="{{ $article->name }}"><br/>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Description</label>
  <input type="text" name="description" value="{{ $article->description }}"><br/>
  @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Price</label>
  <input type="number" name="price" value="{{ $article->price }}"><br/>
  @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Published</label>
  <input type="checkbox" name="published" value="{{ $article->published }}" {{  ($article->published == 1 ? ' checked' : '') }}><br/>
  <input type="submit" value="Editar artículo">
</form>
@endsection