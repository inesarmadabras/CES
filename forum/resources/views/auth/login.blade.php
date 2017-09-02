@title('Iniciar Sessão')

@extends('layouts.small')

@section('small-content')
    {!! Form::open(['route' => 'login.post']) !!}
        @formGroup('username')
            {!! Form::label('Nome de Utilizador') !!}
            {!! Form::text('username', null, ['class' => 'form-control', 'required']) !!}
            @error('username')
        @endFormGroup

        @formGroup('password')
            {!! Form::label('Palavra-passe') !!}
            {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
            @error('password')
        @endFormGroup

        <div class="form-group">
            <label>
                {!! Form::checkbox('remember') !!}
                Lembrar
            </label>
        </div>

        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
        <a href="{{ route('login.github') }}" class="btn btn-default btn-block">
            <i class="fa fa-github"></i> Iniciar sessão com o Github
        </a>
    {!! Form::close() !!}
@endsection

@section('small-content-after')
    <a href="{{ route('password.forgot') }}" class="btn btn-link btn-sm btn-block">Esqueceu-se da sua palavra-passe?</a>
@endsection