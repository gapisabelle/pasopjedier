@extends('default')

@section('title')
    {{"All users"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($user as $user)
        @if($user->blocked == false)
            @include('users.components.userCard--index')
        @endif
    @endforeach
</ul>
@endsection
