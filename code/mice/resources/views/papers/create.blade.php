@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Paper Submission</h2>
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>
            
                            <div class="card-body">
                                <form  action="{{ route('papers.store') }}" method="POST" enctype="multipart/form-data" >
                                    <!-- 이제 사용하지 않음 laravel7 { csrf_filed() !!} -->
                                    @csrf <!-- 이 부분을 사용하지 않아서 계속 419 에러가 났다 -->
                                    
                                    
                                    @include('papers.partial.form')
                        
                        
                                    <div class='form-group' >
                                        
                                        <button type="submit" class="btn btn-primary">저장하기</button>
                                    </div>
                                    
                                </form>
              
            </div>
        </div>
    </div>
</div>
@endsection
