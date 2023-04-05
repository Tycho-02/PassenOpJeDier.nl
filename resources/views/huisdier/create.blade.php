@extends('default')


@section('title')
Voeg huisdier toe
@endsection

@section('content')
    @include('huisdier.components.navigatie--create')
    @include('huisdier.components.huisdierCard--create')
@endsection
