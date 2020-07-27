<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    //

    public function show(\App\Article $article)
    {
        //$article=\App\Article::class::findOrFail($id);

        return view('articles.show',compact('article'));
    }
    public function index($slug = null)
    {
        //
        //return __METHOD__ . '은 Article 컬렉션을 조회합니다.';
        
        //$articles = \App\Article::get(); // 기본로드

        //$articles = \App\Article::with('user')->get(); //즉시로드
        
        //$articles = \App\Article::get();

       // $articles->load('user'); //지연로드


       $query = $slug 
       ? \App\Tag::whereSlug($slug)->firstOrFail()->articles()
       : new \App\Article;

       $articles = \App\Article::latest()->paginate(3);
       //debug($article->toArray());
       //dd(view('articles.index', compact('articles'))->render());
        return view('articles.index', compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return __METHOD__ . '은 Article 컬렉션을 만들기 위한 폼을 담은 뷰를 반환합니다.';

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\ArticlesRequest $request)
    {
        //
       // return __METHOD__ . '은 사용자의 입력한 폼 데이터로 새로운 Article 컬렉션을 만듭니다.';
        /*
        $rules = [
            'title' => ['required'],
            'content' => ['required', 'min:10'],
        ];

        $messages=[
            'title.required' => '제목은 필수 입력 항목입니다.',
            'content.required' => '본문은 필수 입력 항목입니다.',
            'content.min' => '본문은 최소 :min 글자 이상이 필요합니다.',
        ];*/

        /*
        $validator = \Validator::make($request->all(), $rules ,$messages);

        
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // 위에 부분을 좀 더 간단하게 사용하면 (트레이트의 메서드 이용)
*/

       // $this->validate($request, $rules, $messages);
     
     //  $article=\App\User::find(1)->articles()->create($request->all());

       $article=$request->user()->articles()->create($requset->all());

        if(! $article){
            $article->tags()->sync($request->input('tags'));
            return back()->with('flash_message','글이 저장되지 않았습니다.')->withInput();
        }

        var_dump('이벤트를 던집니다.');
        event(new \App\Events\ArticlesEvent($article));
       // event('new \App\Events\ArticlesEvent($article)');
        var_dump('이벤트를 던졌습니다.');

      return redirect(route('articles.index'))->with('flash_message','작성하신 글이 저장되었습니다.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Article $article)
    {
        //
        $this->authorize('update',$article);

        return view('articles.edit', compact('article'));
        //return __METHOD__ . '는 다음 기본 키를 가진 Article 모델을 수정하기 위한 폼을 담은 뷰를 반환합니다.' .$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Article $article)
    {
        //
        $article->update($request->all());
        $article->tags()->sync($request->input('tags'));

        return redirect(route('articles.show',$article->id));
        //return __METHOD__ . '는 사용자의 입력한 폼 데이터로 다음 기본 키를 가진 Article모델을 수정합니다.' .$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Article $article)
    {
        //
        
        $this->authorize('delete',$article);
        
        $article->delete();

        return response()->json([],204);
        //return __METHOD__ . '는 다음 기본 키를 가진 Article모델을 삭제합니다.' .$id;
    }
}
