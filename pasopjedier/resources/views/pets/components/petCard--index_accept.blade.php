<li class="a-popup u-list-style-none GridCard" >
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$accept->owner}}</h2>
            </header>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text"> {{$accept->pet}} </p>
            </section> 
            <a href="/user/{{$accept->owner}}/review/create">
            <button class="sushiCard__button"> Laat review achter </button>
            </a>
        </article>
      </a>
</li>

