<li>
    <article class="sushiCard a-popup">
        <figure class="sushiCard__figure">
            <img class="sushiCard__image" src="{{$user_info->image}}" alt="{{$user_info->naam}} "/>
        </figure>
        <section class="sushiCard__text">
            <p>{{$user_info->naam}} {{$user_info->informatie}}  </p>
            <p>{{$review->review}}</p>
        </section>
        <section class="sushiCard_btnSection">
            <a class="sushiCard_back_to_home" href="/profile"> Terug </a>
    </section>
    </article>
</li>