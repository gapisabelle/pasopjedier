<li class="a-popup u-list-style-none GridCard" >
        <article>
            <header class="GridCard__header u-flex-v-center">
                <h2 class="GridCard__heading"> {{$user->name}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$user->image}}" alt="{{$user->naam}}" />
            </figure>
            <input class="GridCard__Adminbutton" type=button onClick="location.href='/user/{{$user->id}}/deblock'" value='Deblokkeren'>        
        </article>
      </a>
</li>

