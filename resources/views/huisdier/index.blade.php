@extends('default')

@section('script')
<script src="/js/main.js" defer></script>
@endsection

@section('title')
    Huisdieren
@endsection


@section('content')
@include('huisdier.components.navigatie--index')
@include('huisdier.components.checkbox--index')
<main class="u-main">
  <ul class="u-grid-12 u-grid-gap-2">
      @foreach($huisdier as $huisdier)
        @include('huisdier.components.huisdierCard--index')
      @endforeach
  </ul>
</main>
@endsection