@extends('default')

@section('title')
    Huisdieren
@endsection


@section('content')
@include('profiel.components.navigatie--index')
<main class="u-main">
  <ul class="u-grid-12 u-grid-gap-2">
      @foreach($profiel as $profiel)
        @include('profiel.components.profielCard--index')
      @endforeach
  </ul>
</main>
@endsection