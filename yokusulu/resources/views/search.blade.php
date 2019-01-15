@extends('layout.common')

@section('title', '検索結果')
@section('description', '検索結果です。')
@section('pageCss')
<link href="/css/search.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
<div class="searchList">
    <h1>検索結果</h1>
</div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
