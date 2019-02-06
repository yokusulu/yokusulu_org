@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
    <link href="/css/search_detail.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
    <div class="search_detail_hero">
        <img alt="ロゴ" src="{{ asset('/img/pc/b3.jpeg') }}">
    </div>

    <div class="detail_contents_wrap">
        <div class="search_detail_project">
            <section id="gai">
                <h3>概要</h3>
            </section>
            <section id="book">
                <h3>詳細予約状況</h3>
                <ul>
   {{$house_data->name}}
                </ul>
            </section>
        </div>
        <div class="seach_detail_about">
            <h3>料金・予約情報</h3>
        </div>
    </div>
@endsection

@section('pageJs')
    <script src="/js/page.js"></script>
@endsection

@include('layout.footer')
