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




@if($itemCount = count($items))
<p>{{$itemCount}} 종류의 과일이 있습니다.</script>
@else
<p>없습니다</p>
@endif


<ul>
    @forelse ($items as $item)
        <li>{{$item}}</li>
    @empty
        <li>엥 없다</li>
    @endforelse
</ul>