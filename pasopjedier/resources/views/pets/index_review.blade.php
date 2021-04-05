@extends('default')

@section('title')
    {{"All pets"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($review_on_user as $review)
        @include('pets.components.petCard--index_review')
    @endforeach
</ul>
@endsection
