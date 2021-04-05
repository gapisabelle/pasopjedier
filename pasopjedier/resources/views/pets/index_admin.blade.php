@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($pet as $pet)
        @include('pets.components.petCard--index_admin')
    @endforeach
</ul>
@endsection