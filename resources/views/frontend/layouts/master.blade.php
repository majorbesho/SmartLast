
<!DOCTYPE html>
<html lang="en">

<head>


@include('frontend.layouts.head')

	<!-- Document Title
	============================================= -->

</head>


<!-- scroll-to-top start -->
{{-- <div class="scroll-to-top">
    <span class="scroll-icon">
  <i class="las la-arrow-up"></i>
</span>
</div> --}}
<!-- scroll-to-top end -->


<body >


{{-- <body class="stretched">

	<!-- Document Wrapper
	============================================= -->--}}


        <div class="page-wrapper">



          {{-- <div id="header" class="full-header"> --}}
            <header class="header" id="header-ajax">
                @include('frontend.layouts.header')
            </header><!-- #header end -->
          {{-- </div> --}}

    @yield('content')


    @include('frontend.layouts.footer')

        <!-- Go To Top
        ============================================= -->
        {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

    @include('frontend.layouts.script')


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




</body>
</html>
