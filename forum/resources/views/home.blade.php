@extends('layouts/default')

@section('content')
    
    <div class="col-md-8">
        
        <h1>Plataforma de Ideias</h1>
        <p>Esta plataforma de ideias é um espaço aberto a sugestões, de debate e troca de ideias, relacionadas com as aplicações <b>MySNS</b>, <b>MySNS Tempos</b> e <b>MySNS Carteira</b>. Antes de publicar, verifique se já existe alguma publicação semelhante à sua - utilize o campo de pesquisa no topo da página.<p>

        <p> Em <a href="/subreddit">Tópicos</a>  poderá consultar todos os temas disponíveis.</p>

        <p>As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. Este espaço não é uma rede social. Consulte os Termos e condições antes de comentar.</p>

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @foreach($posts as $post)
            @include('partials/post')
        @endforeach

        <br><br>
    
    </div>

    <div class="col-md-4">
        
        @include('site/sidebar')
    
    </div>

@stop