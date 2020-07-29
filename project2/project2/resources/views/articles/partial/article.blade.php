<div class="media">
    <div class="media-body">
        <h4 class="media-heading">{{ $article->title }}</h4>

        <p class="text-muted">
            <i class="fa fa-user"></i> {{ $article->user->name }}
            <i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
        </p>
    </div>
</div>

<a href="{{route('articles.show', $article->id)}}">
    {{ $article->title }}
</a>

<p class="text-muted meta__article">..</p>
@include ('attachments.partial.list', ['attachments'=> $article->attachments])