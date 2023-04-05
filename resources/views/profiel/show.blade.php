@extends('default')

@section('title')
  Profiel van {{$profielEigenaar->name}}
@endsection

@section('content')
    @include('profiel.components.profielHeader--show')
    @include('profiel.components.profielCard--show')
@endsection