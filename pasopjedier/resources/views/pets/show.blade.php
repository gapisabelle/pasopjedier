@extends('default')
@section('title')
{{$pet->soort}} {{$pet->naam}}
@endsection
@section('content')

    @include('pets.components.petCard--show')
@endsection
