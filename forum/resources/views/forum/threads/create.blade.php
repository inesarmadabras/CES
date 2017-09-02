@title('Criar novo tópico')

@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>

    <div class="alert alert-info">

    <center>
    <p>Esta plataforma de ideias é um espaço aberto a sugestões, de debate e troca de ideias, relacionadas com as aplicações MySNS, MySNS Tempos e MySNS Carteira. Antes de publicar, verifique se já existe alguma publicação semelhante à sua - utilize o campo de pesquisa no topo da página.
            <br>Em <b>Tópicos</b> poderá consultar todos os temas disponíveis.</p>
            <p>As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. <b>Este espaço não é uma rede social.</b><br>
               Por favor tente encontrar a sua questão / sugestão utilizando <a href="{{ route('forum') }}" class="alert-link">a caixa de pesquisa</a> e consulte os
               <a href="{{ route('rules') }}" class="alert-link">Termos e condições</a> antes de comentar ou publicar.
            </p>

    </center>
    </div>

    @include('forum.threads._form', ['route' => 'threads.store'])
@endsection

