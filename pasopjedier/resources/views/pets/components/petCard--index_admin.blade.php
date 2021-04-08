<li class="a-popup u-list-style-none GridCard" data-kind-of-pet={{$pet->soort}}>
    
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$pet->soort}} {{$pet->naam}} </h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$pet->image}}" alt="{{$pet->image . ' ' . $pet->soort}}" />
            </figure>
            <a href="/delete/{{$pet->id}}">
            <button class="GridCard__Adminbutton"> Verwijderen </button>
            </a>
        </article>
      </a>
</li>

