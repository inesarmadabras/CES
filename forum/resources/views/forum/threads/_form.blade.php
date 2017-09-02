{!! Form::open(['route' => $route, 'method' => $method ?? 'POST']) !!}
    @formGroup('subject')
        {!! Form::label('Assunto') !!}
        {!! Form::text('subject', isset($thread) ? $thread->subject() : null, ['class' => 'form-control', 'required']) !!}
        @error('subject')
    @endFormGroup

    @formGroup('Texto')
        {!! Form::label('Texto') !!}
        {!! Form::textarea('body', isset($thread) ? $thread->body() : null, ['class' => 'form-control wysiwyg', 'required']) !!}
        @error('body')
    @endFormGroup

    @formGroup('Tags')
        {!! Form::label('tags') !!}
        {!! Form::select('tags[]', $tags->pluck('name', 'id'), isset($thread) ? $thread->tags()->pluck('id')->toArray() : [], ['class' => 'form-control selectize', 'multiple']) !!}
        <span class="help-block">Escolha até 2 tags para identificar o tema da sua publicação. Por exemplo, caso pretenda realizar uma sugestão à aplicação MySNS Carteira deverá escolher "MySNS Carteira" e "Sugestão"</span>
        @error('tags')
    @endFormGroup

    {!! Form::submit(isset($thread) ? 'Actualizar Publicação' : 'Criar Publicação', ['class' => 'btn btn-primary btn-block']) !!}
    <a href="{{ isset($thread) ? route('thread', $thread->slug()) : route('forum') }}" class="btn btn-default btn-block">Cancelar</a>
{!! Form::close() !!}
