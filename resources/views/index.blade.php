@extends('Layouts.default')

{{-- Page Title --}}
@section('title')
    {{"PassenOpJeDier.nl"}}
@endsection

{{-- Content --}}
@section('content')
    <h1>PassenOpJeDier.nl</h1>
    <p>PassenOpJeDier.nl is DE website om de geschikte oppas voor je geliefde huisdier te vinden als jij er een dagje tussenuit wil of lekker een paar weken op vakantie gaat!</p>
    <div>
        <a href="{{ route('login') }}"><button>Log in</button></a>
        <a href="{{ route('register') }}"><button>Registreer nu!</button></a>
    </div>
@endsection
