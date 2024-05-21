
{{--  Add Meta Tag Here   --}}

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keyword" content="@yield('meta_keyword')">
<meta name="description" content="@yield('meta_description')">
<link rel="icon" href="{{asset('assets/images/logos/logo.png')}}"/>
<meta property="og:type" content="website">
<meta property="og:url" content="{{url('/')}}">
<meta property="og:title" content="{{config('app.name')}}">
<meta property="og:description" content="@yield('meta_description')">
<meta property="og:image" content="{{asset('assets/images/logos/logo.png')}}">
<!-- Twitter -->
<meta property="twitter:card" content="{{asset('assets/images/logos/logo.png')}}">
<meta property="twitter:url" content="{{url('/')}}">
<meta property="twitter:title" content="@yield('title_Page',config('app.name'))">
<meta property="twitter:description" content="@yield('meta_description')">
<meta property="twitter:image" content="{{asset('assets/images/logos/logo.png')}}">
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{url('/')}}" />
<title>@yield('title_Page',config('app.name'))</title>
