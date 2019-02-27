@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/mypage.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<div class="content-box">
	<div class="contents-list"><a class="square_btn" href="/mypage/myinfo">会員情報</a></div>
	<div class="contents-list"><a class="square_btn" href="/mypage/myhouse">貸出</a></div>
	<div class="contents-list"><a class="square_btn" href="">利用状況</a></div>
	<div class="contents-list"><a class="square_btn" href="/mypage/behost">ホストになる</a></div>
</div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
