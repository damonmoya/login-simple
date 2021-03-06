<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') - Mi proyecto</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="{{ route('home') }}">Mi proyecto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Inicio<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3">
        <ul class="navbar-nav ml-auto">

          @if (auth()->check())
          <?php
            $user = auth()->user();
          ?>
            <li class="nav-item">
              <div class="nav-link"> Sesión iniciada como: {{ $user->name }} </div>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="{{ route('logout') }}">Cerrar sesión</a>
            </li>
          @else
            <li class="nav-item">
                <a class="btn btn-info" href="{{ route('login_form') }}">Iniciar sesión</a>
            </li>
          @endif  
        </ul>
    </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <div class="title">
        @yield('header')
      </div>
      @yield('content')
    </main>

    <footer class="footer bg-dark text-white">
      <div class="container">
        <span class="text-muted">Proyecto con Laravel</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>