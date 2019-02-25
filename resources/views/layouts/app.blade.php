<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ URL::to('css/my.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>{{config('app.name', 'Booking System')}}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/my.js')}}" charset="utf-8"></script>
  <script src="{{ asset('js/printable.js')}}" charset="utf-8"></script>
</head>
<body>


  <div class="grid-container">
    @yield('content')
    <header class="header">
      <div class="label"><a href="{{ route('home') }}">Dashboard</a></div>
          <div class="avatar">
            <button class="dropbtn" onclick="dropDown()"><i class="far fa-user"> {{ Auth::user()->name }}</i>
              <i class="fa fa-caret-down"></i>
            </button>
              <div class="dropdown-content" id="myDropdown">
                <a class="" id="myDropdown" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
              </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        </header>

        <aside class="sidenav" id="mobile">
          <ul class="sidenav_list">
            <li class="main_item"><i class="fas fa-calendar-check"> Reservationer</i></li>
              <li class="sidenav_list-item"><a href="{{('/reservation/create')}}">Opret</a></li>
              <li class="sidenav_list-item"><a href="{{('/reservation')}}">Se Reservationer</a></li>

            <li class="main_item"><i class="fas fa-book-open"> Lokaler</i></li>
              <li class="sidenav_list-item"><a href={{ ('/lokale/create') }}>Opret</a></li>
              <li class="sidenav_list-item"><a href="{{('/lokale')}}">Se Lokaler</a></li>
              <li class="sidenav_list-item"><a href="{{ ('/config') }}">Konfigurer</a></li>

            <li class="main_item"><i class="fas fa-key"> Rekvirenter</i></li>
              <li class="sidenav_list-item"><a href="{{ ('/rekvirent/create') }}">Opret</a></li>
              <li class="sidenav_list-item"><a href="{{('/rekvirent')}}">Se Rekvirenter</a></li>
              <li class="sidenav_list-item"><a href="{{('/person/create')}}">Opret Rekvirent Oplysninger</a></li>
              <li class="sidenav_list-item"><a href="{{('/person')}}">Rekvirent Oplysninger</a></li>


            <li class="main_item"><i class="fas fa-user-plus"> Admin</i></li>
              <li class="sidenav_list-item"><a href="#">Rediger Brugere</a></li>
          </ul>
        </aside>

    <footer class="footer">
      <div class="footer_copyright">&copy; PJ & PM </div>
      <div class="signature">2019 PBAWEB <i class="fab fa-laravel" style="color: #febe89;"></i></div>
    </footer>

  </div>
</body>
</html>
