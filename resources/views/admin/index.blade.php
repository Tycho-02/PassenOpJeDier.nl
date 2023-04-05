@extends('default')

@section('title')
    Admin
@endsection


@section('content')
@include('admin.components.adminHeader--index')
<main class="u-main">
  <ul class="u-grid-12 u-grid-gap-2">
      @foreach($profiel as $profiel)
        @include('admin.components.gebruikerCard--index')
      @endforeach
      @include('admin.components.adminTussen--index')
      @foreach($huisdier as $huisdier)
        @include('admin.components.verwijderCard--index')
      @endforeach
  </ul>
</main>
@endsection