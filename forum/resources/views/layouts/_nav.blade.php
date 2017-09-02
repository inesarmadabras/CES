<nav class="navbar navbar-inverse navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="main-navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
            <li><a href="{{ route('home') }}">Início</a></li>
                <li class="{{ active(['forum', 'threads*', 'thread']) }}"><a href="{{ route('forum') }}">Forum</a></li>
               <!-- <li><a href="/blog.html">Blog</a></li> -->

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ active('login') }}"><a href="{{ route('login') }}">Iniciar Sessão</a></li>
                    <li class="{{ active('register') }}"><a href="{{ route('register') }}">Registo</a></li>
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
                            <li class="{{ active('profile') }}"><a href="{{ route('profile', Auth::user()->username()) }}">Perfil</a></li>
                            <li class="{{ active('dashboard') }}"><a href="{{ route('dashboard') }}">Painel</a></li>
                            <li class="{{ active('settings.*') }}"><a href="{{ route('settings.profile') }}">Definições</a></li>

                            @can(App\Policies\UserPolicy::ADMIN, App\User::class)
                                <li role="separator" class="divider"></li>
                                <li class="{{ active('admin*') }}"><a href="{{ route('admin') }}">Admin</a></li>
                            @endcan

                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}">Terminar Sessão</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
