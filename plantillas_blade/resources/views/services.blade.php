@extends('layouts.landing')

@section('title', 'Services')
@section('content')
  <h1>Services</h1>
  @component('_components.card')
      @slot('title', 'Service 1')
      @slot('content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, deserunt!')
  @endcomponent
  @component('_components.card')
      @slot('title', 'Service 2')
      @slot('content')
        <p>Aquí puedo poner HTML</p>
      @endslot
  @endcomponent
@endsection