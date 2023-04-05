@extends('default')

@section('title')
  {{$huisdier->soort . " " . $huisdier->naam}}
@endsection

@section('content')
    @include('huisdier.components.navigatie--create')
    @include('huisdier.components.huisdierCard--show')
@endsection