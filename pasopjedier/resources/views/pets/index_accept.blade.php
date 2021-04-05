@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($accept_on_pet as $accept)
        @include('pets.components.petCard--index_accept')
    @endforeach
</ul>
@endsection
