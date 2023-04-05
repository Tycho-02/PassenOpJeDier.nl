@extends('default')

@section('title')
    Account
@endsection


@section('content')
      @include('account.components.accountHeader--show')
      @include('account.components.accountCard--show')
@endsection

