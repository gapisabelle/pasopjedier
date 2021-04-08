@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
<h1> Alle profielen </h1>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($user as $profile)
        @include('pets.components.petCard--index_profile')
    @endforeach
</ul>
@endsection
