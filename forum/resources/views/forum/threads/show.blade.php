@title($thread->subject())

@extends('layouts.default')

@section('content')
    <div class="row forum">
        <div class="col-md-3">
            @include('users._user_info', ['user' => $thread->author(), 'avatarSize' => 100])

            <hr>

            @can(App\Policies\ThreadPolicy::UPDATE, $thread)
                <a class="btn btn-default btn-block" href="{{ route('threads.edit', $thread->slug()) }}">Editar</a>
            @endcan

            @can(App\Policies\ThreadPolicy::DELETE, $thread)
                <a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#deleteThread">Eliminar Tópico</a>

                 @include('_partials._delete_modal', [
                      'id' => 'deleteThread',
                      'route' => ['threads.delete', $thread->slug()],
                      'title' => 'Apagar Topico',
                      'body' => '<p>Tem a certeza de que deseja apagar este tópico e as respetivas respostas? Esta acção não pode ser anulada.</p>',
                  ])
                 @endcan

            <a class="btn btn-link btn-block" href="{{ route('forum') }}"><i class="fa fa-arrow-left"></i> Voltar</a></a>

            @include('layouts._ads._forum_sidebar')
        </div>
        <div class="col-md-9">
            <h1>{{ $title }}</h1>
            <hr>

            <div class="panel panel-default">
                <div class="panel-heading thread-info">
                    @include('forum.threads.info.avatar', ['user' => $thread->author()])

                    <div class="thread-info-author">
                        <a href="{{ route('profile', $thread->author()->username()) }}" class="thread-info-link">{{ $thread->author()->name() }}</a>
                        posted {{ $thread->createdAt()->diffForHumans() }}
                    </div>

                    @include('forum.threads.info.tags')
                </div>

                <div class="panel-body forum-content">
                    @md($thread->body())
                </div>
            </div>

            @include('layouts._ads._carbon')

            @foreach ($thread->replies() as $reply)
                <div class="panel {{ $thread->isSolutionReply($reply) ? 'panel-success' : 'panel-default' }}">
                    <div class="panel-heading thread-info">
                        @include('forum.threads.info.avatar', ['user' => $reply->author()])

                        <div class="thread-info-author">
                            <a href="{{ route('profile', $reply->author()->username()) }}" class="thread-info-link">{{ $reply->author()->name() }}</a> respondeu
                            {{ $reply->createdAt()->diffForHumans() }}

                            @if ($thread->isSolutionReply($reply))
                                <span class="label label-primary thread-info-badge">Solução</span>
                            @endif
                        </div>

                        @can(App\Policies\ReplyPolicy::UPDATE, $reply)
                            <div class="thread-info-tags">
                                <a class="btn btn-default btn-xs" href="{{ route('replies.edit', $reply->id()) }}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#deleteReply{{ $reply->id() }}">Eliminar Publicação</a>
                            </div>
                        @endcan
                    </div>

                    <div class="panel-body forum-content">
                        @can(App\Policies\ThreadPolicy::UPDATE, $thread)
                            <div class="pull-right" style="font-size: 20px">
                                @if ($thread->isSolutionReply($reply))
                                    <a href="#" data-toggle="modal" data-target="#unmarkSolution">
                                        <i class="fa fa-times-circle-o text-danger"></i>
                                    </a>

                                    @include('_partials._update_modal', [
                                        'id' => 'unmarkSolution',
                                        'route' => ['threads.solution.unmark', $thread->slug()],
                                        'title' => 'Desmarcar como Solução',
                                        'body' => '<p>Confirme que pretende desmarcar esta resposta como solução para <strong>"'.e($thread->subject()).'"</strong>.</p>',
                                    ])
                                @else
                                    <a class="text-success" href="#" data-toggle="modal" data-target="#markSolution{{ $reply->id() }}">
                                        <i class="fa fa-check-circle-o"></i>
                                    </a>

                                    @include('_partials._update_modal', [
                                        'id' => "markSolution{$reply->id()}",
                                        'route' => ['threads.solution.mark', $thread->slug(), $reply->id()],
                                        'title' => 'Marcar como Solução',
                                        'body' => '<p>Confirme que pretende marcar esta resposta como solução para <strong>"'.e($thread->subject()).'"</strong>.</p>',
                                    ])
                                @endif
                            </div>
                        @endcan

                        @md($reply->body())
                    </div>
                </div>

                @include('_partials._delete_modal', [
                    'id' => "deleteReply{$reply->id()}",
                    'route' => ['replies.delete', $reply->id()],
                    'title' => 'Eliminar Resposta',
                    'body' => '<p>Tem a certeza de que deseja apagar esta resposta? Esta acção não pode ser anulada.</p>',
                ])
            @endforeach

            @can(App\Policies\ReplyPolicy::CREATE, App\Models\Reply::class)
                <hr>

                <div class="alert alert-info">
                    <p>
                        Leia os
                        <a href="{{ route('rules') }}" class="alert-link">Termos e Condições</a> antes de publicar.
                    </p>
                </div>

                {!! Form::open(['route' => 'replies.store']) !!}
                    @formGroup('body')
                        {!! Form::textarea('body', null, ['class' => 'form-control wysiwyg', 'required']) !!}
                        @error('body')
                    @endFormGroup

                    {!! Form::hidden('replyable_id', $thread->id()) !!}
                    {!! Form::hidden('replyable_type', 'threads') !!}
                    {!! Form::submit('Responder', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            @endcan

            @if (Auth::guest())
                <hr>
                <p class="text-center">
                    <a href="{{ route('login') }}">Iniciar Sessão</a> para participar neste tópico!
                </p>
            @endif
        </div>
    </div>
@endsection