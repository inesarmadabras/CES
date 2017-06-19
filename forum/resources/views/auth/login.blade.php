@extends('layouts/default')

@section('content')

    {!! Form::open(['url' => 'auth/login']) !!}
        <h2 class="form-signin-heading">Iniciar Sessão</h2>
        <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Palavra-passe</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Lembrar
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    {!! Form::close() !!}

@stop