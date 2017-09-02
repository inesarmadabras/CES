@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')
    <div class="container">
        @include('layouts._alerts')
    </div>

    <div class="jumbotron text-center">
       <div class="logo"><h1>MySNS Comunidade</h1></div>
        <h2>A plataforma de ideias da comunidade MySNS</h2>
        <p class="center">Esta plataforma de ideias é um espaço aberto a sugestões, de debate e troca de ideias, relacionadas com as aplicações MySNS, MySNS Tempos e MySNS Carteira. Antes de publicar, verifique se já existe alguma publicação semelhante à sua - utilize o campo de pesquisa no topo da página.</p>
        <p class="center">Em Tópicos poderá consultar todos os temas disponíveis.</p>
        <p class="center">As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. Este espaço não é uma rede social. Consulte os Termos e condições antes de comentar.</p>



        <div style="margin-top:40px">
            @if (Auth::guest())
                <a class="btn btn-info" href="{{ route('register') }}">
                    Junte-se à comunidade
                </a>
                <a class="btn btn-default" href="{{ route('forum') }}">
                    Visitar Forum
                </a>
            @else
                <a class="btn btn-default" href="{{ route('threads.create') }}">
                    Iniciar Tópico
                </a>
            @endif
        </div>
    </div>

@endsection
