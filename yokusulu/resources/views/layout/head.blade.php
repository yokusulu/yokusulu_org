@section('head')
<meta charset="UTF-8">
<title>@yield('title') | yokusulu</title>
<meta name="description" itemprop="description" content="@yield('description')">
<link rel="stylesheet" href="{{ asset('/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
@yield('pageCss')
@endsection
