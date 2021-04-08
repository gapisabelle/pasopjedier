<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>
<nav class="navigation">
  <h1 class="navigation__title">Pas op je dier</h1>
  <ul class="navigation__list">
      @if (Auth::user()->role === "Admin")
      <li class="navigation__list__item ">
        <a class="navigation__list__item__text{{Request::path() == 'pet/delete' ? ':active navigation__list__item__text__pressed' : ''}}" data-text="Dieren verwijderen" href="/pet/delete">Dieren verwijderen</a>
    </li>
    <li class="navigation__list__item ">
        <a class="navigation__list__item__text{{Request::path() == 'user' ? ':active navigation__list__item__text__pressed' : ''}}" data-text="Blokkeren" href="/user">Blokkeren</a>
    </li>
    <li class="navigation__list__item ">
        <a class="navigation__list__item__text{{Request::path() == 'user/blocked' ? ':active navigation__list__item__text__pressed' : ''}}" data-text="Deblokkeren" href="/user/blocked">Deblokkeren</a>
    </li>
      @endif
    <li class="navigation__list__item ">
        <a class="navigation__list__item__text{{Request::path() == 'pet' ? ':active navigation__list__item__text__pressed' : ''}}" data-text="Home" href="/pet">Home</a>
    </li>
    <li class="navigation__list__item">
        <a class="navigation__list__item__text{{Request::path() == 'pet/create' ? ':active navigation__list__item__text__pressed' : ''}}"  data-text="Dier toevoegen" href="/pet/create">Dier toevoegen</a>
    </li>
    <li class="navigation__list__item">
        <a class="navigation__list__item__text{{Request::path() == 'response' ? ':active navigation__list__item__text__pressed' : ''}}" data-text="Reacties" href="/response">Reacties</a>
    </li>
    <li class="navigation__list__item">
        <a class="navigation__list__item__text{{Request::path() == 'accept' ? ':active navigation__list__item__text__pressed' : ''}}"  data-text="Acceptaties" href="/accept">Acceptaties</a>
    </li>
    <li class="navigation__list__item">
        <a class="navigation__list__item__logo" href="/profile/{{Auth::user()->id}}">
        <img class="navigation__list__item__logo__image" src="/img/poot_logo.png" alt="logo van POJD"/>
    </a>
    </li>
  </ul>
</nav>
<body>
    @yield('content')
</body>
</html>
