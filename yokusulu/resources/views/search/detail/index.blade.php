@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
    @if( App::environment(['local', 'staging']) )
        Vue.config.devtools = true;
    @endif

    <p>詳細画面</p>
    <div id="components-demo">
        <button-counter></button-counter>
    </div>
    <Amountcalucukation>
    </Amountcalucukation>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
