@extends('layouts/default')

@section('scripts')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/typeahead.css') }}">
    <script src="{{ URL::asset('assets/js/typeahead.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>

        <link rel="stylesheet" href="{{ URL::asset('assetssns/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assetssns/css/bootstrap.css') }}">


    <script type="text/javascript">
        $(document).ready(function() {
            tinymce.init({
                selector : "textarea",
                menubar    : false,
                plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            });

            var subreddits = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: 'data/subreddits',
                remote: {
                    url: 'data/subreddits/%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('#remote .typeahead').typeahead(null, {
                name: 'name',
                display: 'name',
                source: subreddits
            });

            $('#remote .typeahead').bind('typeahead:select', function(ev, suggestion) {
                $('.subreddit_id').val(suggestion.id);
            });
        });
    </script>
@endsection

@section('content')
    <h1>Criar Publicação</h1>

    <div class="bs-posts bs-posts-tabs" data-posts-id="togglable-tabs">
        <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#text" role="tab" id="text-tab" data-toggle="tab" aria-controls="text">Publicar</a></li>
        </ul>
        <div id="myTabContent" class="tab-content" style="margin-top: 15px;">

            <div role="tabpanel" class="tab-pane fade in active" id="text" aria-labelledBy="text-tab">

                <div class="alert alert-warning" role="alert" align="center"><p>Esta plataforma de ideias é um espaço aberto a sugestões, de debate e troca de ideias, relacionadas com as aplicações MySNS, MySNS Tempos e MySNS Carteira. Antes de publicar, verifique se já existe alguma publicação semelhante à sua - utilize o campo de pesquisa no topo da página.</p>

                <p>Em <b>Tópicos</b> poderá consultar todos os temas disponíveis.As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. Este espaço não é uma rede social. Consulte os Termos e condições antes de comentar.</p>

                <p>As sugestões mais votadas serão tidas em conta pelas nossas equipas de desenvolvimento. Este espaço <strong>não é uma rede social</strong>. Consulte os <strong>Termos e condições</strong> antes de comentar.</p></div>

                {!! Form::open(['url' => 'posts', 'method' => 'POST']) !!}
                <p>
                    {!! Form::label('title', 'Título:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
                </p>

                <p>
                    {!! Form::label('text', 'Texto:') !!}
                    {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'text']) !!}
                </p>

                <p>{!! Form::select('subreddit_id',array(
                '2' => 'My SNS Carteira - Ajuda', 
                '3' => 'My SNS Carteira - Bugs',
                '4' => 'My SNS Carteira - Sugestões', 
                '5' => 'My SNS Tempos - Ajuda',
                '6' => 'My SNS Tempos - Bugs', 
                '7' => 'My SNS Tempos - Sugestões',
                '8' => 'My SNS  - Ajuda', 
                '9' => 'My SNS  - Bugs',
                '10' => 'My SNS  - Sugestões'

                 )) !!}</p>


<p>
                    <div id="remote">
     <p>
                   
     </p>
                   
                    
        

                <p>
                    {!! Form::submit('Submeter', ['id' => 'submit', 'class' => 'btn btn-primary']) !!}
                </p>

                {!! Form::close() !!}
            </div>
        </div>




    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->






   <!-- /tabs -->

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@stop