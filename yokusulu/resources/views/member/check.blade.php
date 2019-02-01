@extends('layout.common')
@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/member/index.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<form action="/member/check/done" method="post">
	<div class="regist_title_box">
		<p>会員登録確認画面</p>
	</div>
	<table class="member_regist_box">
		<tr>
			<td class="regist_genre">名前</td>
			<td>{{ $input_values["name"] }}</td>
		</tr>
		<tr>
			<td class="regist_genre">メールアドレス</td>
			<td>{{ $input_values["email"] }}</td>
		</tr>
		<tr>
			<td class="regist_genre">パスワード</td>
			<td>{{ $input_values["password"]}}</td>
		</tr>
	</table>
	<div class="submit_btn_box">
		<input class="btn" type="submit" value="登録完了">
	</div>

<input type="hidden" class="regist_input" name="name" value="{{ $input_values["name"] }}" >
<input type="hidden" class="regist_input" name="email" value="{{ $input_values["email"] }}" >
<input type="hidden" class="regist_input" name="password" value="{{ $input_values["password"] }}" >
<input type="hidden" class="regist_input" name="password_confirmation" value="{{ $input_values["password_confirmation"] }}" >
<input type="hidden" class="regist_input" name="_token" value="{{ $input_values["_token"] }}" >
</form>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
