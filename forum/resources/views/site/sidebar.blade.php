<!-- Subreddit Search Well -->
<div class="well" style="margin-top: 30px;">
    <h4>Pesquisar</h4>
    {!! Form::open(['route' => 'search_site']) !!}
    <div id="custom-search-input">
        <div class="input-group col-md-12">
            <input type="text" name="search" class="search-query form-control" placeholder="Pesquisar" />
                <span class="input-group-btn">
                    <button class="btn btn-success" type="submit">
                        <span class=" glyphicon glyphicon-search"></span>
                    </button>
                </span>
        </div>
    </div>
    {!! Form::close() !!}
</div>

<div class="well">
    <h4>Plataforma de Ideias</h4>
    <p></p>
    <p>Consulte os Termos e Condições antes de publicar</p>
</div>