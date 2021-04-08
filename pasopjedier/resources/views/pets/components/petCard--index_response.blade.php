<li class="a-popup u-list-style-none GridCard" >
        <header class="GridCard__header u-flex-v-center">
            <h2 class="GridCard__heading"> {{$response->user->name}}</h2>
        </header>
        <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text"> {{$response->bericht}} </p>
        </section> 
        <section class="GridCard__buttons">
            <input class="GridCard__button" type=button onClick="location.href='/response/delete/{{$response->id}}'" value='Verwijderen'>
            <input class="GridCard__button" type=button onClick="location.href='/profile/{{$response->nanny}}'" value='Naar Profiel'>
        </section>
        <section class="GridCard__buttons">
            <form class="GridCard-form__form" action="/response/accept" method="POST">
                @csrf      
                <section class="GridCard-form__section">
                    <input type = "hidden" name = "pet" value = "{{$response->pet}}" />
                    <input type = "hidden" name = "nanny" value = "{{$response->nanny}}" />
                    <input type = "hidden" name = "id" value = "{{$response->id}}" />
                    <button class="GridCard-form__button" type="submit">Accepteer</button>
                </section>
            </form>
        </section>
       
</li>

