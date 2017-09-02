<div class="row profile-latest-items">
    <div class="col-md-6">
        <h3>Últimos Tópicos</h3>

        @forelse ($user->latestThreads() as $thread)
            <div class="list-group">
                <a href="{{ route('thread', $thread->slug()) }}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $thread->subject() }}</h4>
                    <p class="list-group-item-text">{{ $thread->excerpt() }}</p>
                </a>
            </div>
        @empty
            <p class="text-center">{{ $user->name() }} ainda não fez nenhuma publicação.</p>
        @endforelse
    </div>
    <div class="col-md-6">
        <h3>Ultimas Respostas</h3>

        @forelse ($user->latestReplies() as $reply)
            <div class="list-group">
                <a href="{{ route_to_reply_able($reply->replyAble()) }}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $reply->replyAble()->subject() }}</h4>
                    <p class="list-group-item-text">{{ $reply->excerpt() }}</p>
                </a>
            </div>
        @empty
            <p class="text-center">{{ $user->name() }} ainda não publicou nenhuma resposta.</p>
        @endforelse
    </div>
</div>
