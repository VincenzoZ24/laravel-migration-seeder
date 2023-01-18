@extends('guest.layouts.base')

@section('content')
    @foreach ($trains as $train)
    <h3>{{$train->azienda }}</h3>
    
    @endforeach
@endsection





