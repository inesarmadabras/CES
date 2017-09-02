    @title('Algo correu mal')

@extends('layouts.base')

@section('body')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>
            Fomos notificados e vamos tentar corrigir o problema assim que possivel.
            Caso o problema persista, por favor contacte-nos para nma@spms.min-saude.pt
        </p>
    </div>
@endsection
