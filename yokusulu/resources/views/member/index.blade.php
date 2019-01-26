@extends('layout.common')
@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/member/index.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<form action="/member/check" method="post">
	{{ csrf_field() }}
	<div class="regist_title_box">
		<p>会員登録画面</p>
	</div>
	<table class="member_regist_box">
		<tr>
			<td class="regist_genre">名前</td>
			<td><input type="text" class="regist_input" name="name" maxlength="10" value="" placeholder="１０文字以内で入力"></td>
		</tr>
		<tr>
			<td class="regist_genre">メールアドレス</td>
			<td><input type="email" class="regist_input" name="email" placeholder="test@gmail.com"required></td>
		</tr>
		<tr>
			<td class="regist_genre">パスワード</td>
			<td><input type="password" class="regist_input" name="password" placeholder="英数8文字以上"required></td>
		</tr>
	</table>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

	<div class="submit_btn_box">
		<input class="btn" type="submit" value="確認画面へ">
	</div>
</form>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
