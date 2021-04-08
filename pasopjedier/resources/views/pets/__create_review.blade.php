@extends('default')

@section('title')
Geef een review 
@endsection
@section('content')
<article class="create-form a-popup"> 
    <form class="create-form__form" action="/user/review" method="POST">
        @csrf
        
        <section class="create-form__section">
            <p> {{$accept->id}} </p>
            </label for="bericht"> Review </label>
            <input class="create-form__input" name="review" id="review" type="text"/>
            <input type = "hidden" name = "owner" value = "{{$accept->owner}}" />
            <input type = "hidden" name = "id_accept" value = "{{$accept->id}}" />
            <button class="create-form__button" type="submit">Bericht versturen</button>
        </section>
    </form>
</article>

@endsection