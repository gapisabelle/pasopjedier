<section class="profile">
      <section class="profile__card">
          <figure class="profile__header">
            @if ($user->image_info)
            <img class="profile__header__img" src="{{$user->image_info}}" alt="{{$user->naam}} "/>
            @else
            <p class="profile__Homeimage">Geen extra afbeeldingen</br></p>
            @endif
        </figure>
          <section class="profile__body">
                <figure class="profile__body__img">
                    <img class="profile__body__img__image" src="{{$user->image}}" alt="{{$user->naam}}"/>
                </figure>
                <h1 class="profile__body__name">{{$user->name}}</br></h1>
                <p class="profile__body__info"> {{$user->informatie}}</p>
                <article class="profileReview a-popup">
                    @if ($review)
                    <h1 class="profileReview__text">Reviews: </h1>
                    <p class="profileReview__text">{{ $review->review }}</br></p>
                    @else
                    <p class="profileReview__text">Nog geen reviews</br></p>
                    @endif 
                </article>
                <input class="profile__button" type=button onClick="location.href='/profile/edit'" value='Profiel Wijzigen'>
        </section>
    </section>
</section> 
 
