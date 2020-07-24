@extends('layouts.app')

@section('content')
    <form action="{{route('users.store')}}" method="POST" class="form__auth">
        @csrf

        <div class="form-group {{$errors->has('name') ? 'has-error' :'' }} ">
            <input type="text" name="name" class="form-control" placeholder="이름" value="{{old('name')}}" autofocus/>
            {!! $errors->first('name','<span class="form-error">:message</span>')!!}
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block" type="submit">
                가입하기
            </button>
        </div>
    </form>
    
@endsection