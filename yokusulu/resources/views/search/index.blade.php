@extends('layout.common')

@section('title', 'HOME')
@section('description', '空いたスペースを共有してWINWINな体験を。')
@section('pageCss')
<link href="/css/home.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
