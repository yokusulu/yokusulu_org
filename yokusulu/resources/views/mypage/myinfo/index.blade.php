@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<div class="user_info_table">
	<table>
		<tr>
			<th>ご利用者登録</th>
		</tr>
		<tr>
			<th><p>氏名(カナ)</p></th>
			<td><p>てすとてすと</p></td>
		</tr>
		<tr>
			<th>氏名(漢字)</th>
			<td><p>てすとてすと</p></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><p>〒111-1111</p>
				<p>東京都てすと市てすと区1-1-1</p>
				<p>てすとマンション111号室</p></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><p>test@yokusulu.com</p></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><p>090-1111-2222</p></td>
		</tr>
	</table>
</div>

<div class="myinfo_edit_btn_box">
	<a href="/mypage/myinfo/edit" class="myinfo_edit_btn">修正する</a>
</div>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
