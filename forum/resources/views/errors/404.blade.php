@title('404')

@extends('layouts.base')

@section('body')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>Pagina não encontrada :(</p>
    </div>
@endsection
