<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Schiffsdatenbank</title>
  </head>
  <body>
    <!-- navigation bar -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
        
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ships">Schiffe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/herstellers">Hersteller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/modells">Modelle</a>
          </li>
          <li class="nav-item">
            <form method="post" action="{{url('logout')}}">
                @csrf
                <input type="submit" class="btn btn-danger" value="Abmelden">
            </form>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- navigation bar ends here -->
    <!--<form method="post" action="{{url('logout')}}">
      @csrf
      <input type="submit" class="btn btn-danger" value="Abmelden">
    </form>-->
    <div class="container">
        @yield('content')
    </div>
    
  </body>
</html>