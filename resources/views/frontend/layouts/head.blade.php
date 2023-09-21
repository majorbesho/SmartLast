
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZRSQERSTD0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZRSQERSTD0');
    </script>



{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}
{{-- {!! JsonLdMulti::generate() !!} --}}
{!! SEO::generate() !!}
{!! SEO::generate(true) !!}
{!! app('seotools')->generate() !!}


<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta name="author" content="beshog32@gmail.com" >
    <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}" >
    	<!-- Stylesheets
	============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="canonical" href="https://smartboxuae.ae/" />
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- old css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
      {{-- <link rel="stylesheet" href="{{asset('frontend3/css/bootstrap.css')}}" type="text/css" > --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend3/css/shop/bootstrap.min.css')}}"> --}}

    <link rel="icon" type="image/x-icon" href="{{asset('frontend4/images/favicon.ico')}}">

{{--

	<link rel="stylesheet" href="{{asset('frontend3/css/style.css')}}" type="text/css" >
	<link rel="stylesheet" href="{{asset('frontend3/css/dark.css')}}" type="text/css" > --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/settings.css')}}" media="screen" >
	<link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/navigation.css')}}">
    <!-- site favicon --> --}}
    <link rel="icon" type="image/png" href="{{asset('frontend4/images/favicon.png')}}" sizes="16x16">
    <!-- bootstrap 4  -->
    {{-- <link rel="stylesheet" href="{{asset('frontend4/css/vendor/bootstrap.min.css')}}"> --}}
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset('frontend4/css/all.min.css')}}">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('frontend4/css/line-awesome.min.css')}}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/nice-select.css')}}">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/animate.min.css')}}">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/lightcase.css')}}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/slick.css')}}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/jquery-ui.min.css')}}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('frontend4/css/vendor/datepicker.min.css')}}">
    <!-- style main css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
{{-- ///font-family: 'Lato', sans-serif; --}}
    <link rel="stylesheet" href="{{asset('frontend4/css/main.min.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('frontend4/css/main.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend4/css/custom.css')}}" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend4/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('frontend4/css/mediaQuery.css')}}">



