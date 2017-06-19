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

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfilesController@update', $user->id]]) !!}
    <fieldset>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="name">Nome de Utilizador</label>
            <div class="controls">
                <input type="text" id="name" name="name" placeholder="" value="{{ $user->name }}" class="form-control">
                <p class="help-block">Nome de utilizador pode conter letras e números, sem espaços</p>
            </div>
        </div>

          <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="fullname">Nome</label>
            <div class="controls">
                <input type="text" id="fullname" name="fullname" placeholder="" value="{{ $user->fullname }}" class="form-control">
                <p class="help-block">Nome verdadeiro</p>
            </div>
        </div>

             <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="profissao">Profissão</label>
            <div class="controls">
                <input type="text" id="profissao" name="profissao" placeholder="" value="{{ $user->profissao }}" class="form-control">
                <p class="help-block"></p>
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" value="{{ $user->email }}" class="form-control">
                <p class="help-block">Por favor forneça um endereço de E-mail</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Palavra-passe</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control">
                <p class="help-block">deve ter pelo menos 4 caracteres</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirmation">Confirmação de palavra-passe</label>
            <div class="controls">
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-control">
                <p class="help-block">Por favor confirme a sua palavra-passe</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Editar Perfil</button>
            </div>
        </div>
    </fieldset>
    {!! Form::close() !!}
@stop