@extends('layout.common')

@section('title', '検索結果')
@section('description', '検索結果です。')
@section('pageCss')
<link href="/css/search.css" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
<?php var_dump($house_datas); ?>
<div class="list">
    <h1>検索結果</h1>
    <div class="listItem fade-up">
        <div class="listItem__img">
            <img src="https://tools.arashichang.com/300x200/cccccc/ffffff" />
        </div>
        <p>consectetur adipiscing elit. Vivamus consectetur odio in felis vulputate, a viverra mi molestie. Suspendisse vehicula ligula turpis, nec dapibus tellus aliquam et. Vivamus luctus luctus libero, non placerat nisl
            feugiat nec. Duis ultrices enim in dolor egestas bibendum eget non urna. Fusce consequat accumsan mauris ut sollicitudin. Donec lorem nisl, laoreet non urna at, feugiat feugiat dui. Fusce dignissim dolor vel magna lobortis, sit amet</p>
    </div>

    <div class="listItem fade-up">
        <div class="listItem__img">
            <img src="https://tools.arashichang.com/300x200/cccccc/ffffff" />
        </div>
        <p>consectetur adipiscing elit. Vivamus consectetur odio in felis vulputate, a viverra mi molestie. Suspendisse vehicula ligula turpis, nec dapibus tellus aliquam et. Vivamus luctus luctus libero, non placerat nisl
            feugiat nec. Duis ultrices enim in dolor egestas bibendum eget non urna. Fusce consequat accumsan mauris ut sollicitudin. Donec lorem nisl, laoreet non urna at, feugiat feugiat dui. Fusce dignissim dolor vel magna lobortis, sit amet</p>
    </div>

    <div class="listItem fade-up">
        <div class="listItem__img">
            <img src="https://tools.arashichang.com/300x200/cccccc/ffffff" />
        </div>
        <p>consectetur adipiscing elit. Vivamus consectetur odio in felis vulputate, a viverra mi molestie. Suspendisse vehicula ligula turpis, nec dapibus tellus aliquam et. Vivamus luctus luctus libero, non placerat nisl
            feugiat nec. Duis ultrices enim in dolor egestas bibendum eget non urna. Fusce consequat accumsan mauris ut sollicitudin. Donec lorem nisl, laoreet non urna at, feugiat feugiat dui. Fusce dignissim dolor vel magna lobortis, sit amet</p>
    </div>

    <div class="listItem fade-up">
        <div class="listItem__img">
            <img src="https://tools.arashichang.com/300x200/cccccc/ffffff" />
        </div>
        <p>consectetur adipiscing elit. Vivamus consectetur odio in felis vulputate, a viverra mi molestie. Suspendisse vehicula ligula turpis, nec dapibus tellus aliquam et. Vivamus luctus luctus libero, non placerat nisl
            feugiat nec. Duis ultrices enim in dolor egestas bibendum eget non urna. Fusce consequat accumsan mauris ut sollicitudin. Donec lorem nisl, laoreet non urna at, feugiat feugiat dui. Fusce dignissim dolor vel magna lobortis, sit amet</p>
    </div>
</div>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
