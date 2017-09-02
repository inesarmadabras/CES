@title('Registo')

@extends('layouts.small')

@section('small-content')
    {!! Form::open(['route' => 'register.post']) !!}
        @formGroup('name')
            {!! Form::label('Nome') !!}
            {!! Form::text('name', session('githubData.name'), ['class' => 'form-control', 'required', 'placeholder' => 'nome completo']) !!}
            @error('name')
        @endFormGroup

        @formGroup('email')
            {!! Form::label('email') !!}
            {!! Form::email('email', session('githubData.email'), ['class' => 'form-control', 'required', 'placeholder' => 'exemplo@email.com']) !!}
            @error('email')
        @endFormGroup

        @formGroup('username')
            {!! Form::label('Nome de Utilizador') !!}
            {!! Form::text('username', session('githubData.username'), ['class' => 'form-control', 'required', 'placeholder' => 'nomedeutilizador']) !!}
            @error('username')
        @endFormGroup

        @if (! session()->has('githubData'))
            @formGroup('password')
                {!! Form::label('palavra-passe') !!}
                {!! Form::password('password', ['class' => 'form-control', Session::has('githubData') ? null : 'required']) !!}
                @error('password')
            @endFormGroup

            <div class="form-group">
                {!! Form::label('Confirmação de palavra-passe') !!} 
                {!! Form::password('password_confirmation', ['class' => 'form-control', Session::has('githubData') ? null : 'required']) !!}
            </div>
        @endif

        @formGroup('rules')
            <label>
                {!! Form::checkbox('rules') !!}
                &nbsp; Concordo <a href="{{ route('rules') }}" target="_blank">com os termos e condições</a>
            </label>
            @error('rules')
        @endFormGroup

        {!! Form::submit('Registar', ['class' => 'btn btn-primary btn-block']) !!}

        @if (! session()->has('githubData'))
            <a href="{{ route('login.github') }}" class="btn btn-default btn-block">
                <i class="fa fa-github"></i> Github
            </a>
        @endif
    {!! Form::close() !!}
@endsection
