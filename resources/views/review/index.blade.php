@extends('default')

@section('title')
    Huisdieren
@endsection


@section('content')
@include('review.components.navigatie--index')
<main class="u-main">
  <ul class="u-grid-12 u-grid-gap-2">
      @foreach($review as $review)
        @include('review.components.reviewCard--index')
      @endforeach
  </ul>
</main>
@endsection