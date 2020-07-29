@extends('layouts.app')

@section('content')
<div class="page-header">
    <h4>포럼<small> / {{$article->title}}</small></h4>
</div>

<article>
    @include('articles.partial.article', compact('article'))

    <p> {!! $article->content !!}</p>

    <div class="col-md-9">
        <div vlass="container__comment">
            @include('comments.index')
        </div>
    </div>
</article>

<div class="text-center action__article">
    @can('update',$article)
    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">
        <i class="fa fa-pencil"></i> 글 수정
    </a>
    @endcan
    @can('delete', $article)
        
    <button class="btn btn-danger delete" id="deletebutton">
        <i class="fa fa-trash-o"></i> 글 삭제
    </button>
    @endcan

    <a href="{{ route('articles.index') }}" class="btn btn-default">
        <i class="fa fa-list"></i> 글 목록
    </a>
</div>
@stop

@section('script')
    <script>
      
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#deletebutton', function () {
            alert("dd");
});
        $('#deletebutton').on('click', function(e){
            alert("dd");
            var articleId = $('article').data('id');

            if(confirm('글을 삭제합니다.')){
                $.ajax({
                    type:'DELETE',
                    url: '/articles' + articleId
                }).then(function(){
                    window.location.href = '/articles';
                });
            }
        });
    </script>
@stop