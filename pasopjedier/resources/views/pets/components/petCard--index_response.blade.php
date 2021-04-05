<li class="a-popup u-list-style-none GridCard" >
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> </h2>
            </header>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text"> {{$response->bericht}} </p>
            </section> 
            <a href="/response/delete/{{$response->id}}">
            <button class="sushiCard__button"> Verwijderen </button>
            </a>
            <a href="/response/{{$response->id}}/accept">
            <button class="sushiCard__button"> Accepteren </button>
            </a>
            <a href="/profile/{{$response->nanny}}">
            <button class="sushiCard__button"> Naar Profiel </button>
            </a>
        </article>
      </a>
</li>

