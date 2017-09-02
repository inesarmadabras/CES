<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plataforma de Ideias</title>
     <link rel="shortcut icon" href="{{ URL::asset('/assets/favicon.ico" type="image/x-icon') }}">

    <!-- Bootstrap core CSS -->


      <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,900" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    @include('layouts._favicons')


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="{{ $bodyClass ?? '' }}">

 <div id="navs"></div>

      <nav class="navbar navbar-inverse">
         <h1 class="titlebar"><i class="fa fa-chevron-right" aria-hidden="true"></i> Cidadão e Profissional de Saúde
            <i class="fa fa-chevron-right" aria-hidden="true"></i> Plataforma de Ideias
         </h1>
      </nav>

      <nav class="navbar">
         <div class="collapse navbar-collapse" id="main-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li class="{{ active(['forum', 'threads*', 'thread']) }}"><a href="{{ route('forum') }}">Forum</a>
               </li>
               @if (Auth::guest())
               <li class="{{ active('login') }}"><a href="{{ route('login') }}">Iniciar Sessão</a>
               </li>
               <li class="{{ active('register') }}"><a href="{{ route('register') }}">Registo</a>
               </li>
               @else
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="img-circle" src="{{ Auth::user()->gravatarUrl(60) }}" width="30"> <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                     <li>
                        <span>
                        <strong>{{ Auth::user()->name() }}</strong><br>
                        {{ '@'.Auth::user()->username() }}
                        </span>
                     </li>
                     <li role="separator" class="divider"></li>
                     <li class="{{ active('profile') }}"><a href="{{ route('profile', Auth::user()->username()) }}">Perfil</a>
                     </li>
                     <li class="{{ active('dashboard') }}"><a href="{{ route('dashboard') }}">Painel</a>
                     </li>
                     <li class="{{ active('settings.*') }}"><a href="{{ route('settings.profile') }}">Definições</a>
                     </li>
                     @can(App\Policies\UserPolicy::ADMIN, App\User::class)
                     <li role="separator" class="divider"></li>
                     <li class="{{ active('admin*') }}"><a href="{{ route('admin') }}">Admin</a>
                     </li>
                     @endcan
                     <li role="separator" class="divider"></li>
                     <li><a href="{{ route('logout') }}">Terminar Sessão</a>
                     </li>
                  </ul>
               </li>
               @endif
            </ul>
         </div>
      </nav>

<div id="app">
    @yield('body')
    @include('layouts._footer')
</div>
  <div id="footer"></div>

<script src="{{ asset('build/custom/markdown.js') }}"></script>
<script src="{{ mix('build/js/app.js') }}"></script>

@include('layouts._intercom')
<!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script>
         $("#navs").load("/assets/canvas.html nav");
      </script>
      <script>
         $("#footer").load("/assets/canvas.html #footer");
      </script>
      <script type="text/javascript" src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('/assets/js/funwithflags.js') }}"></script>
      @yield('scripts')

</body>
</html>