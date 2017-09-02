@title('Reset Password')

@extends('layouts.small')

@section('small-content')
    {!! Form::open(['route' => 'password.reset.post']) !!}
        {!! Form::hidden('token', $token) !!}

        @formGroup('email')
            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
            @error('email')
        @endFormGroup

        @formGroup('password')
            {!! Form::label('palavra-passe') !!}
            {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
            @error('password')
        @endFormGroup

        <div class="form-group">
            {!! Form::label('password_confirmation') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required']) !!}
        </div>

        {!! Form::submit('Redefinir de palavra-passe', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
@endsection
