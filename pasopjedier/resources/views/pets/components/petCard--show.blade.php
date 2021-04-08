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
        <input class="petCard__button" type=button onClick="location.href='/pet/{{$pet->id}}/response'" value='Op passen'>
        <input class="petCard__button" type=button onClick="location.href='/pet'" value='Terug naar dieren'>
        <input class="petCard__button" type=button onClick="location.href='/profile/{{$pet->owner}}'" value='Eigenaar'>
</section>
</article>