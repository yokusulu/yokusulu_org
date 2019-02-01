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
                    {{--@foreach($db_data as $recode)--}}
                        {{--<li>{{$recode->name}}</li>--}}
                        {{--<li>{{$recode->host_name}}</li>--}}
                        {{--<li>{{$recode->zip}}</li>--}}
                        {{--<li>{{$recode->prefecture}}</li>--}}
                        {{--<li>{{$recode->city}}</li>--}}
                        {{--<li>{{$recode->ward}}</li>--}}
                        {{--<li>{{$recode->address}}</li>--}}
                    {{--@endforeach--}}
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
