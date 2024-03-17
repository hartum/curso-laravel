@extends('layouts.app')

@section('content')
<a href="{{ route('post.index') }}">Go back</a>
<form method="POST" action="{{ route('post.update', $post->id) }}">
  @method('PUT')
  @csrf
  <label>Title</label>
  <input type="text" name="title" value="{{ $post->title }}">
  <label>Description</label>
  <input type="text" name="description" value="{{ $post->description }}">
  <input type="submit" value="Update note">
</form>
@endsection