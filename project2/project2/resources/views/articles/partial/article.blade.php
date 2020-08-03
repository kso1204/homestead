<div class="media">
    <div class="media-body">
        <h4 class="media-heading">{{ $article->title }}</h4>

        <p class="text-muted">
            <i class="fa fa-user"></i> {{ $article->user->name }}
            <i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
        </p>
    </div>
</div>

<small>
    / {{ $article->created_at->diffForHumans() }}에 작성
    조회수 {{ $article->view_count }}

    @if ($article->comment_count >0)
        댓글 {{ $article->comment_count }}
    @endif
</small>

<a href="{{route('articles.show', $article->id)}}">
    {{ $article->title }}
</a>

<p class="text-muted meta__article">..</p>
@include ('attachments.partial.list', ['attachments'=> $article->attachments])