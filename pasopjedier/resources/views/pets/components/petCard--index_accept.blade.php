<li class="a-popup u-list-style-none GridCard" >
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$accept->user->name}}</h2>
            </header>
            <form class="GridCard-Reviewform__form" action="/user/review" method="POST">
                @csrf
                <section class="GridCard-Reviewform__section">
                    <label class="GridCard-Reviewform__label" for="bericht"> Review geven </label>
                    <input class="GridCard-Reviewform__input" name="review" id="review" type="text"/>
                    <input type = "hidden" name = "owner" value = "{{$accept->owner}}" />
                    <input type = "hidden" name = "id_accept" value = "{{$accept->id}}" />
                    <button class="GridCard-Reviewform__button" type="submit">Review versturen</button>
                </section>
            </form>
            <a href="/accept/delete/{{$accept->id}}">
                <button class="GridCard__Annuleerbutton"> Annuleren </button>
            </a>
        </article>
      </a>
</li>

