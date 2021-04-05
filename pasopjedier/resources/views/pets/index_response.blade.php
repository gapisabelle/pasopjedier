@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($response_on_pet as $response)
        @include('pets.components.petCard--index_response')
    @endforeach
</ul>
@endsection
