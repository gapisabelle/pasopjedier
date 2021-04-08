<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<nav class="navigation">
  <h1 class="navigation_title">Pas op je dier</h1>
  <ul class="navigation_list">
      @if (Auth::user()->role === "Admin")
      <li class="navigation_list_item ">
        <a class="navigation_list_item_text{{Request::path() == 'pet/delete' ? ':active navigation_list_item_text_pressed' : ''}}" data-text="Dieren verwijderen" href="/pet/delete">Dieren verwijderen</a>
    </li>
    <li class="navigation_list_item ">
        <a class="navigation_list_item_text{{Request::path() == 'user' ? ':active navigation_list_item_text_pressed' : ''}}" data-text="Blokkeren" href="/user">Blokkeren</a>
    </li>
    <li class="navigation_list_item ">
        <a class="navigation_list_item_text{{Request::path() == 'user/blocked' ? ':active navigation_list_item_text_pressed' : ''}}" data-text="Deblokkeren" href="/user/blocked">Deblokkeren</a>
    </li>
      @endif
    <li class="navigation_list_item ">
        <a class="navigation_list_item_text{{Request::path() == 'pet' ? ':active navigation_list_item_text_pressed' : ''}}" data-text="Home" href="/pet">Home</a>
    </li>
    <li class="navigation_list_item">
        <a class="navigation_list_item_text{{Request::path() == 'pet/create' ? ':active navigation_list_item_text_pressed' : ''}}"  data-text="Dier toevoegen" href="/pet/create">Dier toevoegen</a>
    </li>
    <li class="navigation_list_item">
        <a class="navigation_list_item_text{{Request::path() == 'response' ? ':active navigation_list_item_text_pressed' : ''}}" data-text="Reacties" href="/response">Reacties</a>
    </li>
    <li class="navigation_list_item">
        <a class="navigation_list_item_text{{Request::path() == 'accept' ? ':active navigation_list_item_text_pressed' : ''}}"  data-text="Acceptaties" href="/accept">Acceptaties</a>
    </li>
    <li class="navigation_list_item">
        <a class="navigation_list_item_text"  data-text="Profiel" href="/profile/{{Auth::user()->id}}">Profiel</a>
    </li>
  </ul>
</nav>

<body>
    @yield('content')
</body>
</html>
