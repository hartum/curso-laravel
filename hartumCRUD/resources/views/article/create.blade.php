@extends('layouts.app')

@section('content')
<a href="{{ route('article.index') }}">Volver</a>
<form method="post" action="{{ route('article.store') }}">
	@csrf
  <label>Name</label>
  <input type="text" name="name"><br/>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Description</label>
  <input type="text" name="description"><br/>
  @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Price</label>
  <input type="number" name="price"><br/>
  @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <label>Published</label>
  <input type="checkbox" name="published"><br/>
  <input type="submit" value="Create note">
</form>
@endsection