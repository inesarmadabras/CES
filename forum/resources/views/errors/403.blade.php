@title('Acesso negado')

@extends('layouts.base')

@section('body')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>Não tem autorização para aceder a esta página.</p>
    </div>
@endsection
