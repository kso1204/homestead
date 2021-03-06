<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','WelcomeController@index');

/*
Route::get('auth/login',function(){
    $credentials = [
        'email' => 'john@example.com',
        'password' => 'password'
    ];

    if(!auth()->attempt($credentials)){
        return '로그인 정보가 정확하지 않습니다.';
    }

    return redirect('protected');
});
Route::get('protected', function(){
    dump(session()->all());

    if(!auth()->check()){
        return ' 누구세요?';
    }

    return '어ㅏ서오세요'.auth()->user()->name;
});

Route::get('protected',['middleware'=>'auth',function(){

}]);

Route::get('auth/logout',function(){
    auth()->logout();
    return '또봐요';
});
*/
Route::resource('articles','ArticlesController');
/*
Route::get('/',function(){
    $items=['apple','banana','tomato'];
    return view('welcome',['items'=>$items]
    );
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mail',function(){
    $article= App\Article::with('user')->find(1);

    \Mail::to('kso1204@geni-pco.com')->send(new \App\Mail\OrderShipped($article));

    echo "email has been";
        
 
});

Route::get('docs/images/{image}', 'DocsController@image');

Route::get('docs/{file?}', 'DocsController@show');

Route::get('markdown',function(){
    $text=<<<EOT

    #마크다운 에제 1

    이 문서는 [마크다운][1]로 썻다

    ##순서 없는 목록

    - 첫 번째 항목
    - 두 번째 항목[^1]

    [1] : http://daringfireball.net/projects/markdown

    [^1] : 두 번째 항목_ http://google.com
    EOT;

        return app(ParsedownExtra::class)->text($text);

});
/*
Route::get('docs/{file?}',function($file= null){
    $text = (new App\Documentation)->get($file);

    //dd($text);
    $extra = new ParsedownExtra();

    return app(ParsedownExtra::class)->text($text);
    //사용법은 둘 중 편한거
    //return $extra->text($text);
});
*/
/*
Event::listen('article.created', function($article){
    var_dump('이벤트를 받았습니다. 받은 데이터는 다음과 같습니다.');
    var_dump($article->toArray());
});*/
/*
DB::listen(function ($query){
    var_dump($query->sql);
});*/