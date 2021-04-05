@extends('default')

@section('title')
Voeg hier je dier toe
@endsection

@section('content')

<article class="create-form a-popup"> 
    <form class="create-form__form" action="/pet" method="POST">
        @csrf

        <section class="create-form__section">
            </label for="naam"> Naam </label>
            <input class="create-form__input" name="naam" id="naam" type="text"/>
        </section>

        <section class="create-form__section">
            </label for="soort"> Soort </label>
            <select class="create-form__input" id="soort" name="soort"> 
                @foreach ($kind_of_pet as $pet)
                <option value="{{$pet->soort}}">{{$pet->soort}}</option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section">
            </label for="datum"> Datum </label>
            <input class="create-form__input" name="datum" id="datum" type="text"/>
        </section>
        <section class="create-form__section">
            </label for="uurtarief"> Uurtarief </label>
            <input class="create-form__input" name="uurtarief" id="uurtarief" type="text"/>
        </section>
        <section class="create-form__section">
            </label for="aantal_dagen">Aantal Dagen </label>
            <input class="create-form__input" name="aantal_dagen" id="aantal_dagen" type="text"/>
        </section>

        <section class="create-form__section">
            </label for="belangrijke_zaken"> Belangrijke Zaken </label>
            <textarea class="create-form__input create-form__input--big" name="belangrijke_zaken" id="belangrijke_zaken" type="textarea"></textarea>
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
            <button class="create-form__button" type="submit">Dier Toevoegen</button>
        </section>
    </form>
</article>
@endsection