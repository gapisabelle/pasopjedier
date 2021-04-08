<script src="/js/main.js" defer></script>
@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
@include('pets.components.checkbox--index')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($pet as $pet)
        @include('pets.components.petCard--index')
    @endforeach
</ul>
@endsection
