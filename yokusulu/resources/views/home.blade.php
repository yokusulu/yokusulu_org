@extends('layout.common')

@section('title', 'hoge')
@section('description', '説明文')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
    <p>コンテンツ内容</p>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
