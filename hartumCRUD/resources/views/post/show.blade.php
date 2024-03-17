@extends('layouts.app')

@section('content')
<a href="{{ route('post.index') }}">Go back</a>
<h1>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>
@endsection