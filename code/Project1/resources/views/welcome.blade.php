@extends('layouts.master')

@section('style')
<style>
body {background: green; color:white;}
</style>
@endsection

@section('content')
    <p>저는 자식뷰의'content' section입니다.</p>
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert('저는 자식뷰의 script섹션입니다. ');
    </script>
@endsection