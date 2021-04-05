@extends('default')
@section('title')
@endsection
@section('content')
<ul>
@foreach ($reviews as $review)
    @include('pets.components.petCard--show_profile')
@endforeach
</ul>
@endsection
