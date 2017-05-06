@extends('layouts/default')

@section('content')

<!-- resources/views/auth/password.blade.php -->

<form method="POST" action="/password/email">
    {!! csrf_field() !!}

    <div>
        E-mail
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            Enviar link para mudar a palavra-passe
        </button>
    </div>
</form>

@stop