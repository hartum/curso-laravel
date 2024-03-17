@extends('layouts.app')

@section('content')
<a href="{{ route('post.index') }}">Go back</a>
<form method="post" action="{{ route('post.store') }}">
	@csrf
  <label>Title</label>
  <input type="text" name="title"><br>
  <label>Description</label>
  <input type="text" name="description"><br>
  <input type="submit" value="Create note">
</form>
@endsection