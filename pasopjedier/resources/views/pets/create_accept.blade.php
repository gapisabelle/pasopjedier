@extends('default')

@section('title')
Reageer hier op het dier
@endsection
<article class="create-form a-popup"> 
    <p>{{$nanny->naam}}</p>
    <form class="create-form__form" action="/response/accept" method="POST">
        @csrf      
        <section class="create-form__section">
            <input type = "hidden" name = "pet" value = "{{$response->pet}}" />
            <input type = "hidden" name = "nanny" value = "{{$response->nanny}}" />
            <button class="create-form__button" type="submit">Accepteer deze Nanny!</button>
        </section>
    </form>
</article>
@section('content')
@endsection