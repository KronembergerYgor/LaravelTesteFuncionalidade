<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>@yield('titulo')</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
<body>
    <header>
          
    <nav>
        <div style="padding:0% 1%;" class="nav-wrapper orange lighten-2">
            
          <a href="#!" class="brand-logo"><i class="material-icons left">import_contacts</i>Curso Laravel</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            @if(Auth::guest())
              <li><a href="{{route('site.login')}}">Entrar</a></li>
            @else
              <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
              <li><a href="{{route('site.login.sair')}}">Sair</a></li>
              <li>{{Auth::user()->name}}</li>
            
            @endif
            
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
      </ul>

      </header>

 

  