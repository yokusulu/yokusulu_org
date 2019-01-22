@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')

<form action="myinfo/edit" method="post">
	{{ csrf_field() }}
	<label>好きなタイプは？</label><br>
	<input type="text" name="first-name" maxlength="10" value="" placeholder="１０文字以内で入力">
	<input type="submit" value="SEND">
</form>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
