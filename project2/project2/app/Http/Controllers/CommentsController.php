<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\Http\Requests\CopmmentsRequest $request, \App\Article $article)
    {
        $comment = $article->comments()->create(array_merge(
            $request->all(),
            ['user_id' => $request->user()->id]
        ));

        flash()->success('작성하신 댓글을 저장했습니다.');

        return redirect(route('articles.show', $article->id).'#comment_'.$comment->id);
    }


    public function update(\App\Http\Request\CommentsRequest $request, \App\Comment $comment)
    {
        $comment->update($request->all());

        return redirect(route('articles.show', $comment->commentable->id).'#comment_'.$comment->id);
    }

    public function destroy(\App\Comment $comment)
    {
 
        $comment->delete();
        return response()->json([],204);
    }

    public function vote(Request $request, \App\Comment $comment)
    {
        $this->validate($request, [
            'vote' => 'required|in:up,down',
        ]);

        $up = $request->input('vote') == 'up' ? true : false;

        $comment->votes()->create([
            'user_id' => $request->user()->id,
            'up' => $up,
            'down' => ! $up,
            'voted_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        return response()->json([
            'voted' => $request->input('vote'),
            'value' => $comment->votes()->sum($request->input('vote')),
        ]);
    }
}
