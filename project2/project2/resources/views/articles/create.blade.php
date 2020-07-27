@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>새 포럼 글 쓰기</h1>

        <hr/>

        <form  action="{{ route('articles.store') }}" method="POST">
            <!-- 이제 사용하지 않음 laravel7 { csrf_filed() !!} -->
            @csrf <!-- 이 부분을 사용하지 않아서 계속 419 에러가 났다 -->

            <div class='form-group' {{ $errors->has('title') ? 'has-error' : '' }} >
                <label for="title">제목</label>
                <input type='text' name='title' id='title' value="{{old('title')}}" class='form-control'>
                {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
            </div>

            <div class='form-group' {{ $errors->has('content') ? 'has-error' : '' }} >
                <label for="content">본문</label>
                <textarea name='content' id='content' class='form-control'>
                    {{old('content')}}
                </textarea>
                {!! $errors->first('content', '<span class="form-error">:message</span>') !!}
            </div>
            
            <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }} ">
                <label for="tags">태그</label>
                <select class="form-control" name="tags[]" id="tags" multiple="multiple">
                    @foreach ($allTags as $tag)
                        <option value="{{ $tag->id }}" {{ $article->tags->contains($tag->id) ? 'selected="selected"' : '' }}>
                            {{ $tag->name }}
                        </option>
                                                
                    @endforeach
                </select>
                {!! $errors->first('tags', '<span class="form-error">:message</span>') !!}
            <div class='form-group' >
                
                <button type="submit" class="btn btn-primary">저장하기</button>
            </div>
            
        </form>
    </div>
    
@endsection