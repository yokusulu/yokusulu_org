<!DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
@yield('header')
<body>
    <div id="app">
    <!-- デフォルトだとこの中ではvue.jsが有効 -->
    <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
    <example-component></example-component>
</div>
<div class="contents">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
