@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
@include('pets.components.checkbox--index')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($user_info as $profile)
        @include('pets.components.petCard--index_profile')
    @endforeach
</ul>
@endsection
