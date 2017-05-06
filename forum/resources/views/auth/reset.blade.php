@extends('layouts/default')

@section('content')
<!-- resources/views/auth/reset.blade.php -->

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        E-mail
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Palavra-passe
        <input type="password" name="password">
    </div>

    <div>
        Confirme a palavra-passe
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Redefinir palavra-passe
        </button>
    </div>
</form>

@stop