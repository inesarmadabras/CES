@extends('layouts/default')

@section('content')

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger list-unstyled" role="alert">
                    <li class="">{{ $error }}</li>
                </div>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => 'auth/register']) !!}
        <fieldset>
            <div id="legend">
                <legend class="">Registo</legend>
            </div>
            <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for="name">Nome de Utilizador</label>
                <div class="controls">
                    <input type="text" id="name" name="name" placeholder="" value="{{ old('name') }}" class="form-control">
                    <p class="help-block">Nome de utilizador pode conter letras ou números, sem espaços</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" value="{{ old('email') }}" class="form-control">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Palavra-passe</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="form-control">
                    <p class="help-block">Palavra-passe deve ter pelo menos 4 caracteres</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label class="control-label"  for="password_confirmation">Confirme a Palavra-passe</label>
                <div class="controls">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-control">
                    <p class="help-block">Por favor confirme a sua palavra-passe</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Registo</button>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}

@stop