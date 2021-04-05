<article class="sushiCard a-popup">
    <figure class="sushiCard__figure">
        <img class="sushiCard__image" src="{{$pet->image}}" alt="{{$pet->naam . ' ' . $pet->soort}}" />
    </figure>
    <section class="sushiCard__text">
        <p>{{$pet->belangrijke_zaken}} </p>
    </section>
    <section class="sushiCard_btnSection">
        <a class="sushiCard_back_to_home" href="/pet/{{$pet->id}}/response"> Op passen! </a>
        <a class="sushiCard_back_to_home" href="/pet"> Terug naar dieren </a>
</section>
</article>