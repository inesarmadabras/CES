@title('Editar o seu tópico')

@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>

    <div class="alert alert-info">
        <p>Esta plataforma de ideias é um espaço aberto a sugestões, de debate e troca de ideias, relacionadas com as aplicações MySNS, MySNS Tempos e MySNS Carteira. Antes de publicar, verifique se já existe alguma publicação semelhante à sua - utilize o campo de pesquisa no topo da página.
        <br>Em <b>Tópicos</b> poderá consultar todos os temas disponíveis.</p>
        <p>As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. Este espaço não é uma rede social. Consulte os 
            <a href="{{ route('rules') }}" class="alert-link">Termos e condições</a> antes de comentar.
        </p>
    </div>

    @include('forum.threads._form', [
        'route' => ['threads.update', $thread->slug()],
        'method' => 'PUT',
    ])
@endsection
