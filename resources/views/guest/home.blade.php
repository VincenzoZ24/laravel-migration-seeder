@extends('guest.layouts.base')

@section('content')
    @foreach ($trains as $train)
    {{$train-> azienda }}
    @endforeach
@endsection





