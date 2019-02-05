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
                    <input type="text" name="prefecture" placeholder="例:東京" required>
                </div>
                <div class="form-item">
                    <p>一日の宿泊予算</p>
                    <input type="text" name="budget" placeholder="例:6000" pattern="/^[0-9]+[0]{3}$/">
                    <p>※1000円単位で入力してください。</p>
                </div>
                <div class="form-item">
                    <input id="try" type="submit" value="送信">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('pageJs')
<script src="/js/home.js"></script>
@endsection

@include('layout.footer')
