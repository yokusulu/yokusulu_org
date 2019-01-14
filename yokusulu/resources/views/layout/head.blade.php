@section('head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | yokusulu</title>
<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
@yield('pageCss')
@endsection
