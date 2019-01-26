@extends('layout.common')

@section('title', 'HOME')
@section('description', '空いたスペースを共有してWINWINな体験を。')
@section('pageCss')
<link href="/css/home.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="search_box">
            <form action="/search" method="post">
                {{ csrf_field()}}
                <tr>
                    <p>都道府県</p>
                    <input class="search_input" type="text" name="prefecture" placeholder="例:東京都">
                </tr>
                <tr>
                    <p>チェックイン</p>
                    <input class="search_input" type="text" name="checkin" placeholder="yyyy/mm/dd">
                </tr>
                <tr>
                    <p>チェックアウト</p>
                    <input class="search_input" type="text" name="checkout" placeholder="yyyy/mm/dd">
                </tr>
            </form>
        </div>
    </div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
