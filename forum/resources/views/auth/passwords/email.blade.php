@title('Password Reset')

@extends('layouts.small')

@section('small-content')
    <p>{{ Session::get('status', 'Por favor coloque o seu e-mail') }}</p>

    {!! Form::open(['route' => 'password.forgot.post']) !!}
        @formGroup('email')
            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
            @error('email')
        @endFormGroup

        {!! Form::submit('Enviar nova palavra-passe', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
@endsection
