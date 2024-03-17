@extends('layouts.app')

@section('content')
<a href="{{ route('article.index') }}">Go back</a>
<h1>{{ $article->name }}</h1>
<p>Decripción: {{ $article->description }}</p>
<p>Precio: {{ $article->price }}€</p>
<p>Publicado: {{ ($article->published == 1 ? 'Si' : 'No') }}</p>
@endsection