

<div class="page-header">
    <h4>댓글</h4>
</div>

<div class="form__new__comment">
    @if ($currentUser)
        @include('comments.partial.create')
    @else
        @include('comments.partial.login')
    @endif
</div>

<div class="list__comment">
    @forelse ($comments as $comment)
        @include('comments.partial.comment',[
            'parentId' => $comment->id,
            'isReply' => false,
        ])
    @empty
        
    @endforelse
</div>


@section('script')
    @parent
  <script>
      
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    // 댓글 삭제 요청을 처리한다.
        //alert("DD");

        
        
        $(document).on('click', '.btn__vote__comment', function () {
            var self=$(this),
            commentId = self.closest('.item__comment').data('id');

            $.ajax({
                type: 'POST',
                url: '/comments/' + commentId + '/votes',
                data:{
                    vote: self.data('vote'),
                    _token: '{{csrf_token()}}',
                }
            }).then(function(data){
                self.find('span').html(data.value).fadeIn();
                self.attr('disabled', 'disabled');
                self.siblings().attr('disabled','disabled');
            });
});

        
        $(document).on('click', '.btn__delete__comment', function () {
            
            var commentId = $(this).closest('.item__comment').data('id'),
            articleID=$('article').data('id');

            if(confirm('댓글을 삭제합니다.')){
                $.ajax({
                    type: 'POST',
                    url: "/comments/" + commentId,
                    data:{
                        _method: "DELETE",
                        _token: '{{csrf_token()}}',
                    }
                }).then(function(){
                    $('#comment_' + commentId).fadeOut(1000, function () {$(this).remove();});
                });
            }
});
    </script>
    
@endsection