<li class="a-popup u-list-style-none GridCard" >
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$user->name}}</h2>
                <h3 class="GridCard__heading"> {{$user->id}}</h3>
            </header>
            <a href="/user/{{$user->id}}/deblock">
            <button class="sushiCard__button"> Deblokkeren </button>
            </a>
        </article>
      </a>
</li>

