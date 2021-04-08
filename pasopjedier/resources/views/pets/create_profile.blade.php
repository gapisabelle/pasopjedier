@extends('default')

@section('title')
Voeg hier je dier toe
@endsection

@section('content')

<article class="create-form a-popup"> 
    <form class="create-form__form" action="/profile/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <section class="create-form__section">
            </label for="informatie"> Informatie </label>
            <textarea class="create-form__input create-form__input--big" name="informatie" id="informatie" type="text"></textarea>
        </section>

        <section class="create-form__section">
            </label for="image"> Profielfoto </label>
            <input type = "file" name="image" id="image"/>
        </section>
        <section class="create-form__section">
            </label for="image_info"> Extra foto </label>
            <input type = "file" name="image_info" id="image_info"/>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Profiel Aanmaken</button>
        </section>
    </form>
</article>
@endsection
