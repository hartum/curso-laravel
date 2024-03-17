@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Go back</a>

<form method="post" action="{{ route('note.store') }}">
  @csrf
  <label>Title</label>
  <input type="text" name="title"><br/>
  @error('title')
    <p style="color: red">{{ $message }}</p>
  @enderror

  <label>Description</label>
  <input type="text" name="description">
  @error('description')
    <p style="color: red">{{ $message }}</p>
  @enderror
  <input type="submit" value="Create note">
</form>

@if ($errors->any())
<ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
@endsection