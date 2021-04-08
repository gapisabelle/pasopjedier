<article class="petCard a-popup">

    <figure class="petCard__figure">
        <img class="petCard__image" src="{{$pet->image}}" alt="{{$pet->naam . ' ' . $pet->soort}}" />
    </figure>
    <section class="petCard__text">
        <h2 class="petCard__name">{{$pet->naam}}</h2>
        <p class="petCard__info">Over {{$pet->naam}}:  {{$pet->belangrijke_zaken}}</p>
        <p class="petCard__info">Wanneer: {{$pet->datum}} </p>
        <p class="petCard__info">Vergoeding: {{$pet->uurtarief}} euro</p>
        <p class="petCard__info">Hoelang: {{$pet->aantal_dagen}} dagen</p>
    </section>
    <section class="petCard_btnSection">

        <a href="/pet/{{$pet->id}}/response">
            <button class="petCard__button"> Op passen </button>
        </a>
        <a href="/pet">
            <button class="petCard__button"> Terug naar dieren </button>
        </a>
        <a href="/profile/{{$pet->owner}}">
            <button class="petCard__button"> Eigenaar </button>
        </a>

</section>
</article>