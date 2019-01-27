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
                <div class="form-item first-child">
                    <p>エリア</p>
                    <input type="text" name="prefecture" placeholder="例：東京">
                </div>
                <div class="form-item">
                    <p>チェックイン</p>
                    <input type="text" name="checkin" placeholder="yyyy/mm/dd">
                </div>
                <div class="form-item">
                    <p>チェックアウト</p>
                    <input type="text" name="checkout" placeholder="yyyy/mm/dd">
                </div>
                <div class="form-item">
                    <p>ゲスト人数</p>
                    <select class="" name="guest">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <div class="form-item">
                    <input id="try" type="submit" value="送信">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
