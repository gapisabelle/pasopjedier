<li class="a-popup u-list-style-none GridCard" data-kind-of-pet={{$pet->soort}}>
    <a href="/pet/{{$pet->id}}">
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$pet->soort}} {{$pet->naam}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$pet->image}}" alt="{{$pet->image . ' ' . $pet->soort}}" />
            </figure>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text"> {{$pet->belangrijke_zaken}} </p>
            </section> 
        </article>
      </a>
</li>