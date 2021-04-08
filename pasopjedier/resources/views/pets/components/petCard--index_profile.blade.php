<li class="a-popup u-list-style-none GridCard">
    <a href="/profile/{{$profile->id}}">
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading">{{$profile->name}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$profile->image}}" alt="{{$profile->naam}}" />
            </figure>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text"> {{$profile->informatie}} </p>
            </section> 
        </article>
      </a>
</li>