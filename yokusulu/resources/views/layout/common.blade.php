<!DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
@yield('header')
<body>
<div class="contents">
	<div id="app">
		<!-- デフォルトだとこの中ではvue.jsが有効 -->
		<!-- example-component はLaravelに入っているサンプルのコンポーネント -->
		<example-component></example-component>
		@yield('content')
	</div>
</div>
@yield('footer')
</body>
</html>
