@section('head')
<meta charset="UTF-8">
<title>@yield('title') | yokusulu</title>
<meta name="description" itemprop="description" content="@yield('description')">
<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
@yield('pageCss')
@endsection
