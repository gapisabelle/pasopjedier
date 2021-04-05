@extends('default')

@section('title')
Reageer hier op het dier
@endsection
<article class="create-form a-popup"> 
    <form class="create-form__form" action="/response" method="POST">
        @csrf
        
        <section class="create-form__section">
            </label for="bericht"> bericht </label>
            <input class="create-form__input" name="bericht" id="bericht" type="text"/>
            <input type = "hidden" name = "pet" value = "{{$pet->id}}" />
            <input type = "hidden" name = "owner" value = "{{$pet->owner}}" />
            <button class="create-form__button" type="submit">Bericht versturen</button>
        </section>
    </form>
</article>
@section('content')
@endsection