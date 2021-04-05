@extends('default')

@section('title')
Voeg hier je dier toe
@endsection

@section('content')

<article class="create-form a-popup"> 
    <form class="create-form__form" action="/profile" method="POST">
        @csrf

        <section class="create-form__section">
            </label for="naam"> Naam </label>
            <input class="create-form__input" name="naam" id="naam" type="text"/>
        </section>

        <section class="create-form__section">
            </label for="informatie"> Informatie </label>
            <textarea class="create-form__input create-form__input--big" name="informatie" id="informatie" type="textarea"></textarea>
        </section>


        <section class="create-form__section">
            </label for="image"> Afbeelding </label>
            <select class="create-form__input" name="image" id="image">
                @foreach ($images as $image)
                <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
            </select>
        </section>


        <section class="create-form__section">
            <button class="create-form__button" type="submit">Profiel Aanmaken</button>
        </section>
    </form>
</article>
@endsection
