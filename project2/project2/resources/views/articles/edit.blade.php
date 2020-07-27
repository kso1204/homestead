@extends('layouts.app')

@section('content')

    <div class="container">
        <h4>글 수정</h4>

        <hr/>

        <form  action="{{ route('articles.update', $article->id) }}" method="POST">
            <!-- 이제 사용하지 않음 laravel7 { csrf_filed() !!} -->
            @csrf <!-- 이 부분을 사용하지 않아서 계속 419 에러가 났다 -->
            {!! method_field('PUT') !!}

            @include('articles.partial.form')

            <div class='form-group' >
                
                <button type="submit" class="btn btn-primary">저장하기</button>
            </div>
            
        </form>
    </div>
    
@endsection