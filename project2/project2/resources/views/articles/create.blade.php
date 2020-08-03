@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>새 포럼 글 쓰기</h1>

        <hr/>

        <form  action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" >
            <!-- 이제 사용하지 않음 laravel7 { csrf_filed() !!} -->
            @csrf <!-- 이 부분을 사용하지 않아서 계속 419 에러가 났다 -->
            
            
            @include('articles.partial.form')


            <div class='form-group' >
                
                <button type="submit" class="btn btn-primary">저장하기</button>
            </div>
            
        </form>
    </div>
    
@endsection