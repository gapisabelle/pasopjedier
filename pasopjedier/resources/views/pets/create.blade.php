@extends('default')

@section('title')
Voeg hier je dier toe
@endsection

@section('content')

<article class="create-form a-popup"> 
    <form class="create-form__form" action="/pet" method="POST" enctype="multipart/form-data">
        @csrf

        <section class="create-form__section">
            </label class="create-form__label" for="naam"> Naam *</label>
            <input class="create-form__input" name="naam" id="naam" type="text"/>
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="soort"> Soort * </label>
            <select class="create-form__input" id="soort" name="soort"> 
                @foreach ($kind_of_pet as $pet)
                <option value="{{$pet->soort}}">{{$pet->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="datum"> Datum *</label>
            <input class="create-form__input"  type="date" id="datum" name="datum"
                value="2021-04-06"
                min="2021-04-06" max="2022-04-06">
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="uurtarief"> Uurtarief *</label>
            <input class="create-form__input" type="number" id="uurtarief" name="uurtarief" min="1" max="100">
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="aantal_dagen">Aantal Dagen * </label>
            <input class="create-form__input" type="number" id="aantal_dagen" name="aantal_dagen" min="1" max="100">
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="belangrijke_zaken"> Belangrijke Zaken *</label>
            <textarea class="create-form__input create-form__input--big" name="belangrijke_zaken" id="belangrijke_zaken"></textarea>
        </section>

        <section class="create-form__section">
            </label class="create-form__label" for="image"> Afbeelding *</label>
            <input class="create-form__input" type = "file" name="image" id="image"/>
        </section>


        <section class="create-form__section">
            <button class="create-form__button" type="submit">Dier Toevoegen</button>
        </section>
    </form>
</article>
@endsection