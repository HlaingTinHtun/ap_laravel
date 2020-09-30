@extends('layout')

@section('content')
    <h3>Contact Page</h3>
    @foreach($data as $key => $value)
        {{$key .' = '. $value}}
    @endforeach
@endsection