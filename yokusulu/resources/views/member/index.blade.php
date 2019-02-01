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
			<td><input type="text" class="regist_input" name="name" maxlength="10" value="" placeholder="例)新垣結衣"><p>※50文字まで!!</p></td>
		</tr>
		<tr>
			<td class="regist_genre">メールアドレス</td>
			<td><input type="email" class="regist_input" name="email" placeholder="例)gakki@gmail.com"></td>
		</tr>
		<tr>
			<td class="regist_genre">パスワード</td>
			<td><input type="password" class="regist_input" name="password" placeholder="例) gakki0611" required><p>※英数字8文字以上16文字以下</p></td>
		</tr>
		<tr>
			<td class="regist_genre">パスワード(確認)</td>
			<td><input type="password" class="regist_input" name="password_confirmation" placeholder="例) gakki0611" required></td>
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
