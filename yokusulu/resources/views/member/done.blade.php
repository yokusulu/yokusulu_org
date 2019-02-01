@extends('layout.common')
@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/member/index.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
	<div class="regist_title_box">
		<p>登録完了</p>
	</div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
