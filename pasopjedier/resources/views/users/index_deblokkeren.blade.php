@extends('default')

@section('title')
    {{"All users"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($user as $user)
        @if($user->blocked == true)
            @include('users.components.userCard--index_deblokkeren')
        @endif
    @endforeach
</ul>
@endsection
