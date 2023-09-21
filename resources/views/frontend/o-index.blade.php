@extends('frontend.layouts.master')
@section('content')
    <section class="hero">
        <div class="hero__shape hero-car ">
            {{-- <img src="{{ asset('frontend4/images/elements/hero-shape.jpg.png') }}" alt="image" class="heroshape"> --}}
        </div>
        <div class="hero__element">
            {{-- <img src="{{ asset('frontend4/images/elements/hero-building.png') }}" alt="image"> --}}
        </div>
        @if (count($banner) > 0)
            @foreach ($banner as $banersingle)
                <div class="hero__car wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="1s">
                    <!--<img src="{{ asset('frontend4/images/elements/car-shadow.png') }}" alt="image" class="car-shadow">-->
                    <!--<img src="{{ asset('frontend4/images/elements/car-ray.png') }}" alt="image" class="car-ray">-->
                    <!--<img src="{{ asset('frontend4/images/elements/car-light.png') }}" alt="image" class="car-light">-->
                    <img src="{{ $banersingle->photo }}" alt="image" class="hero-car">
                    <!--<img src="{{ asset('frontend4/images/elements/car-star.png') }}" alt="image" class="car-star">-->
                </div>
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-lg-6 col-md-8">
                            <div class="hero__content">
                                <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                                    {{ $banersingle->title }}</div>
                                <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    {{ $banersingle->bigTitle }}</h2>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                                    {!! $banersingle->discreption !!}
                                </p>
                                <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">


                                    <a class=" cmn-btn btn-epic" data-rel="lightcase:myCollection" href="{{ $banersingle->youtube }}">
                                        <div>
                                            <span> Participate Now</span><span>How To  Participate</span>
                                        </div>
                                    </a>




                                    {{-- @if (Auth::check())
                                        <a href="{{ route('allbox') }}" class="cmn-btn">Participate Now</a>
                                    @else
                                        <a href="#popup1" class="cmn-btn">Participate Now</a>
                                    @endif --}}
                                    <a class="video-btn" href="{{ $banersingle->youtube }}"
                                        data-rel="lightcase:myCollection"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__thumb">
                                <img src="{{ asset('frontend4/images/elements/car-main.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </section>


    {{-- <div class="popup-link">
    <a href="#popup1">Click Me (Style 1)</a>
</div> --}}

    {{-- <div class="container-fluid pt-120 pb-120" style="padding-top: 2rem;">
        <div class="row">



            <div class="col-lg-12">
                <video autoplay loop muted style="width: 100%;height: auto;border-radius: 25px;" class="img-fluid">
                    <source src="{{ asset('frontend4/c.mp4') }}" type="video/mp4" />
                    <source src="{{ asset('frontend4/c.mp4') }}" type="video/ogg" />
                </video>
            </div>
        </div>
    </div> --}}

    <section class="position-relative pt-120 pb-120" id="participate">
        <div class="bg-el"><img src="{{ asset('frontend4/images/elements/contest-bg.png') }}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Try your chance at winning</span>
                        <h2 class="section-title" id="campaigns">Explore Campaigns</h2>
                        <p>With SmartBox we believe everyone should win </p>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    {{-- <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn style--two d-flex align-items-center active" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">
                                <span style="color: #fff">Box</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn style--two d-flex align-items-center" id="profile-tab"
                                data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                                <span style="color: #fff">Cash</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn style--two d-flex align-items-center"
                                style="background: rgb(146,56,96);
                                background: linear-gradient(45deg, rgba(146,56,96,1) 0%, rgba(28,23,96,1) 50%, rgba(50,162,200,1) 95%, rgba(53,181,214,1) 100%);
                                text-decoration: none;"
                                id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button"
                                role="tab" aria-controls="product-tab-pane" aria-selected="false">
                                <span style="color: #fff">Products</span>
                            </button>
                        </li>
                    </ul> --}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="row mb-none-30">
                                @if (count($box) > 0)
                                    @foreach ($box as $boxoneNext)
                                        <div class="col-xl-3 col-md-6 mb-30">
                                            <div class="contest-card zoom">

                                                <div class="contest-card__thumb ">
                                                 <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}">
                                                    @php
                                                    $photos = explode(',', $boxoneNext->photo);
                                                    @endphp


                                                <img src="{{ $photos[0] }}" alt="image" >
   </a>
                                                </div>

                                                <div class="contest-card__content">
                                                    <div class="container hr">
                                                        <div class="col-12 text-cart">
                                                            <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}">
                                                            <p>
                                                                Get a chance to <span style="color: #f00">WIN</span>
                                                            </p>
                                                        </a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 cart-text">
                                                                <h5 class="contest-card__name" style="font-size: 89%;">{{ $boxoneNext->title }}</h5>
                                                            </div>
                                                            <div class="col-12 cart-text d-none">
                                                                <h5 class="contest-card__name">
                                                                    {{ $boxoneNext->showPrice }}</h5>
                                                            </div>
                                                            <div class="col-12 cmn-btn-cart style--three ">
                                                                @if (Auth::check())
                                                                    <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}"
                                                                        class="center text-light">
                                                                        <span style="color: #fff;margin: -1px 0px;"> Add To
                                                                            Cart </span>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}"
                                                                        class="center text-light">Participate</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span style="color: #542760;">
                                                                {{ Carbon\Carbon::parse($boxoneNext->edate)->format('d') }}
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            {{-- <span>9805</span> --}}
                                                            <p style="color: #542760;">{{ $boxoneNext->supplier }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- contest-card end -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="row mb-none-30 pt-120" style="padding-top: 4%;">
                                <div class="col-xl-3 col-md-6 mb-30">
                                    <div class="contest-card zoom">
                                        <p class="center m-auto "
                                            style="
                                                    /* padding-top: 5%; */
                                                    color: #767474;
                                                    font-weight: 400;
                                                    letter-spacing: -.406956px;
                                                    font-size: 14px;
                                                    line-height: 17px;
                                                    margin: 0;
                                                    text-align: center;"></p>
                                        {{-- <hr class="hrtop center" style=" margin-top: 5px; color: #d3d3d3;"> --}}
                                        {{-- <a href="" class="item-link"></a> --}}
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('frontend4/images/cashn.jpg') }}" class=""
                                                alt="image">
                                        </div>
                                        {{-- @php
                                            $percentage = 10;
                                            $accounts = \App\Models\order::sum('total_amount');
                                            if (is_null($accounts)) {
                                            } else {
                                                $newaccounts = ($percentage / 100) * $accounts;
                                            }
                                        @endphp --}}
                                        <div class="contest-card__content">
                                            <div class="container hr">
                                                <div class="col-12 text-cart">
                                                    <p>Get a chance to <span>WIN</span></p>
                                                    <h6>10000 AED</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 cart-text">
                                                        {{-- <h5 class="contest-card__name">
                                                            Cash Prize
                                                        </h5> --}}
                                                    </div>
                                                    <div class="col-12 cart-text d-none">
                                                        <h5 class="contest-card__name"></h5>
                                                    </div>
                                                {{--  <div class="col-12 cmn-btn-cart style--three ">
                                                        <a href="" class="center text-light">Add To Cart</a>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span> {{ Carbon\Carbon::parse($boxoneNext->edate)->format('d') }}
                                                    </span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <p> SmartBox</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- contest-card end -->
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade  pt-120 pb-120 " id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">

                        </div>
                        <div class="tab-pane fade" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab"
                            tabindex="0">
                            <div class="row mb-none-30">
                                @if (count($prod_index_main) > 0)
                                    @foreach ($prod_index_main as $pim)
                                        <div class="col-xl-3 col-md-6 mb-30">
                                            <div class="contest-card zoom">
                                                <p class="center m-auto "
                                                    style="
                                                    padding-top: 5%;
                                                    color: #767474;
                                                    font-weight: 400;
                                                    letter-spacing: -.406956px;
                                                    font-size: 14px;
                                                    line-height: 17px;
                                                    margin: 0;
                                                    text-align: center;">
                                                    1328 sold out of 2985</p>
                                                <hr class="hrtop center" style=" margin-top: 5px; color: #d3d3d3;">
                                                <a href="{{ route('sProduct', $pim->slug) }}" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{ $pim->photo }}" alt="image">
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="container hr">
                                                        <div class="col-12 text-cart">
                                                            <p>
                                                                Get a chance to <span>WIN</span>
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 cart-text">
                                                                <h5 class="contest-card__name">{{ $pim->title }}</h5>
                                                            </div>
                                                            <div class="col-12 cart-text d-none">
                                                                <h5 class="contest-card__name">{{ $pim->Price }}</h5>
                                                            </div>
                                                            <div class="col-12 cmn-btn-cart style--three ">
                                                                @if (Auth::check())
                                                                    <a href="{{ route('groupOfProduct', $pim->slug) }}"
                                                                        class="center text-light">
                                                                        <span> Add To Cart </span>
                                                                    </a>
                                                                @else
                                                                    <a href="#popup1" class="center text-light">
                                                                        <span> Add To Cart </span>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span> {{ Carbon\Carbon::parse($pim->edate)->format('d') }}
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <p>{{ $pim->supplier }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- contest-card end -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end-->

        </div>
    </section>
    {{-- <div class="row mt-30">
        <div class="col-lg-12">
            <div class="btn-grp">
                <a href="{{route('allgroupOfProduct')}}" class="btn-border">browse more</a>
            </div>
        </div>
    </div> --}}


    <div id="popup1" class="popup-container">
        <div class="popup-content">

            <div class="containerpop">

                <div class="container popupedit">
                    <div class="row">
                        <a href="#participate" class="close">&times;</a>

                        <div class="col-lg-12 ">
                            <h2 class="center text-popup">ONE TIME OFFER</h2>
                            <p class="center pop">GET 5 AED </p>
                            <h2 class="h2popup"> TO MAKE YOUR FIRST <br> PURCHASE</h2>
                            <div class="col-lg-12  popupbtn ">
                                <a class="cmn-btn style--two pop-f-a"
                                    style="
                                    margin-top: 2%;
                                    margin-bottom: 4%;
                                    width: 100%;
                                    text-align: center;
                                    margin-top: 2%;
                                    width: 100%;
                                    padding: 2%;
                                    background: linear-gradient(180deg, rgb(251, 185, 54) 0%, rgba(255,145,0,1) 100%);
                                    font-style: italic;
                                    font-size: 1.4rem;
                                    text-shadow: 1px 1px 3px black;
                                    font-weight: 900; "
                                    href="{{ route('user.auth') }}#myTabContent"> SIGNUP NOW </a>
                                <a class="cmn-btn style--two d-flex align-items-center"
                                    style="margin-bottom: 4%;width: 100%;justify-content: center;"
                                    href="{{ route('user.auth') }}#profile-tab"> Existing User Login </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div id="popupdetails" class="popup-container-d ">
        <div class="popup-content-d">

            <div class="containerpop-d">

                <div class="container popupedit-d">
                    <div class="row">
                        <a href="#" class="close">&times; </a>


                        <div class="col-lg-12  " style="background-color:#fff ">
                            <div class="img-popup">
                                <img src="{{ asset('frontend4/images/contest/1.png') }}" class="d-block w-100">
                                <div class="row">
                                    <div class="">
                                        <p>Win</p>
                                    </div>
                                    <div>
                                        <span
                                            style="
                                            display: flex;
                                            font-size: 2rem;
                                            font-style: italic;
                                            font-weight: 800;">New
                                            Sport Car </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                                <ul class="nav nav-tabs  mb-30 border-0" id="myTab" role="tablist"
                                    style="padding-left: 11%;">
                                    <li class="nav-item" role="presentation">
                                        <button class="cmn-btn style--two d-flex active" id="home-tab"
                                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                            role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                            <span class="me-3"><img
                                                    src="{{ asset('frontend4/images/icon/btn/car.png') }}"
                                                    alt="icon"></span>Details
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="cmn-btn style--two d-flex " id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">
                                            <span class="me-3"><img
                                                    src="{{ asset('frontend4/images/icon/btn/box.png') }}"
                                                    alt="icon"></span>Discreption
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <h3>

                                            Details Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos quas
                                            commodi
                                            nesciunt ipsum esse debitis quidem error, delectus natus possimus voluptatum
                                            nemo
                                            cum? Excepturi laborum consectetur aliquam id reprehenderit eaque.
                                        </h3>

                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <div class="row mb-none-30">
                                            <h3>
                                                Discreption Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                Minima,
                                                obcaecati! Doloribus consectetur delectus repellendus, quas nostrum corrupti
                                                maxime, possimus aut minima iure ex asperiores ducimus sapiente illum
                                                reprehenderit. Porro, cumque.
                                                </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12  popupbtn ">
                                <a class="cmn-btn style--two pop-f-a"
                                    style="
                                            margin-top: 2%;
                                            margin-bottom: 4%;
                                            width: 100%;
                                            text-align: center;
                                            margin-top: 2%;
                                            width: 100%;
                                            padding: 2%;
                                            background: linear-gradient(180deg, rgb(251, 185, 54) 0%, rgba(255,145,0,1) 100%);
                                            font-style: italic;
                                            font-size: 1.4rem;
                                            text-shadow: 1px 1px 3px black;
                                            font-weight: 900; "
                                    href="{{ route('user.auth') }}">
                                    <i class="las la-shopping-basket icon-2x"></i>
                                    Add to cart </a>
                                {{-- <a class="cmn-btn style--two d-flex align-items-center"
                                    style="margin-bottom: 4%;width: 100%;justify-content: center;"
                                    href="{{ route('register') }}"> Existing User Login </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- hero start -->

    <!-- how to play section start -->
    <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden">
        <!--<div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">-->
        <!--    <img src="{{ asset('frontend4/images/elements/play-el.png') }}" alt="image">-->
        <!--</div>-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header">
                        <span class="section-title" style="line-height: 0.9;">Find out </span>
                        <h2 class="section-title">How it works</h2>
                        <p>Follow these 3 easy steps! </p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="assets/images/elements/card-bg-1.jpg">
                        <div class="play-card__icon">
                            <img src="{{ asset('frontend4/assets/images/icon1.png') }}" alt="image-icon">
                            <span class="play-card__number">01</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Create Account</h3>
                            <p>Create An Account & Participate Today</p>
                        </div>
                    </div>
                    <!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="assets/images/elements/card-bg-2.jpg">
                        <div class="play-card__icon">
                            <img src="{{ asset('frontend4/assets/images/icon2.png') }}" alt="image-icon">
                            <span class="play-card__number">02</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Package</h3>
                            <p
                                style="margin-top: 10px;
                            font-weight: 700;
                            font-size: 0.8rem; font-size: 12px">
                               Pick your Campaign  & Complete Your Purchase</p>
                        </div>
                    </div>
                    <!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="assets/images/elements/card-bg-3.jpg">
                        <div class="play-card__icon">
                            <img src="{{ asset('frontend4/assets/images/icon3.png') }}" alt="image-icon">
                            <span class="play-card__number">03</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Win Or Redeem</h3>
                            <p>Start Winning Or Redeem Your Ticket </p>
                        </div>
                    </div>
                    <!-- play-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- how to play section end -->

    <!-- contest section start -->

    <!-- contest section end -->

    <!-- winner section start -->
    <section class="position-relative pt-120 pb-120">
        <div class="bg-el"><img src="{{ asset('frontend4/images/bg/winner.jpg') }}" alt="image"></div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Winner of the month</span>
                        <h2 class="section-title">Top Winner</h2>
                        <p>
                            There have been numerous winnings, but some winners were luckier
                            than others
                        </p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        {{-- <div class="winner-wrapper"> --}}
                        <div class="backimg" style="position: relative">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 indexwinner-container">
                                        <img src="{{ asset('frontend4/images/bannerindex.jpg') }}" alt=""
                                            style="width: 100%;height: auto;border-radius: 25px;"
                                            class=" indexwinner-container ">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="right winner-imag">
                            <div class="winner-prize-thumb wow bounceIn winner-image" data-wow-duration="0.5s"
                                data-wow-delay="0.5s">
                                <img src="{{ asset('frontend4/assets/images/winner-1.png') }}" alt="image">
                                <p class="winnername"> Omran Kharifan</p>

                            </div>
                        </div>
                        {{--  <div class="right">
                            <div class="winner-slider">
                                <div class="winner-slide-item">
                                    <div class="winner-thumb"><img src="{{ asset('frontend4/images/winner/w-1.png') }}"
                                            alt="image"></div>
                                    <div class="winner-content bg_img"
                                        data-background="{{ asset('frontend4//images/elements/winner-content-bg.jpg') }}">
                                        <h6 class="winner-name">Breeze Zodiac</h6>
                                        <p>Draw took place on</p>
                                        <span class="draw-date">19/04/2023</span>
                                    </div>
                                </div>
                                <!-- winner-slide-item end -->
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- winner section end -->






    <section class="overview-section pt-120">
        {{-- <div class="map-el"><img src="{{ asset('frontend4/images/elements/map.png') }}" alt="image"></div>
        <div class="obj-1"><img src="{{ asset('frontend4/images/elements/overview-obj-1.png') }}" alt="image">
        </div>
        <div class="obj-2"><img src="{{ asset('frontend4/images/elements/overview-obj-2.png') }}" alt="image">
        </div>
        <div class="obj-3"><img src="{{ asset('frontend4/images/elements/overview-obj-3.png') }}" alt="image">
        </div>
        <div class="obj-4"><img src="{{ asset('frontend4/images/elements/overview-obj-4.png') }}" alt="image">
        </div> --}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Our Users Around the UAE</span>
                        <h3 class="section-title">Let the number speak for us</h3>
                        <p> we are providing a chance for everyone to participate

                        </p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->


        <div class="container">
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">

                        </div>
                        <div class="edit_content ">
                            <img src="{{ asset('frontend4/images/block2.png') }}" alt="">
                            <div class="edit_content2">
                                <span class="number count">12000</span> <span>+</span>
                                <p>Verified Users</p>
                            </div>
                        </div>
                    </div>
                    <!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                        </div>
                        <div class="edit_content">
                            <img src="{{ asset('frontend4/images/block1.png') }}" alt="">
                            <div class="edit_content2">
                                <span class="number count">1</span>
                                <p>
                                    New Kid On The Block
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">

                        </div>
                        <div class="edit_content">
                            <img src="{{ asset('frontend4/images/block.png') }}" alt="">
                            <div class="edit_content2">
                                <span class="number count">100%</span>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                    </div>
                    <!-- overview-card end -->
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>

    <!-- overview section end -->

    <!-- features section start -->
    <section class="pt-120 pb-120 d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="row mb-none-30">
                        <div class="col-lg-6 mb-30">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{ asset('frontend4/images/icon/feature/1.png') }}" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Safe Service</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div>
                                    <!-- feature-card end -->
                                </div>
                                <!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{ asset('frontend4/images/icon/feature/3.png') }}" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Network</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div>
                                    <!-- feature-card end -->
                                </div>
                                <!-- feature-card end -->
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30 mt-lg-5">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{ asset('frontend4/images/icon/feature/2.png') }}" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Security</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div>
                                    <!-- feature-card end -->
                                </div>
                                <!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{ asset('frontend4/images/icon/feature/4.png') }}" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Support</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div>
                                    <!-- feature-card end -->
                                </div>
                                <!-- feature-card end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-lg-start text-center wow fadeInRight"
                    data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="section-header">
                        <span class="section-sub-title">An Exhaustive list of</span>
                        <h2 class="section-title">Our features.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, elit quis vehicula interdum,
                            sem metus iaculis sapien, sed bibendum lectus augue eu metus.</p>
                        <a href="#0"
                            class="d-flex align-items-center mt-3 justify-content-lg-start justify-content-center">Show
                            all features<i class="las la-angle-double-right text-danger"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- features section end -->

    <!-- testimonial section start -->
    <section class="has-bg--shape pt-120 pb-120">
        <div class="bg-shape">
            <div class="round-shape d-sm-block d-none"><img
                    src="{{ asset('frontend4/images/elements/round-shape.png') }}" alt="image"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
            <div class="shape-4"></div>
            <div class="shape-5"></div>
            <div class="shape-6"></div>
        </div>
        <div class="container" style="padding-top: 5%">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-title">Testimonial</span>
                        <h2 class="section-title">our Happy Customers All Around the UAE</h2>
                        <p>With over 12 years combined of experience as the world’s
                            leading online participat service provider. Find out what
                            our members have to say about us!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-area bg_img" data-background="assets/images/elements/testimonial-single.jpg">
                        <div class="testimonial-slider">
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{ asset('frontend4/images/winner/winner1.jpg') }}" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Shevs Newal</h4>
                                    <p>“Smartbox is AMAZING. I participated in Smartbox and didn't win
                                        the prize draw the first time i took part but i
                                        got my money back so i didn't lose a single dirham. ” </p>
                                    <div class="ratings">
                                        <div class="starpng">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">

                                        </div>
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-single end -->
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{ asset('frontend4/images/winner/winner3.jpg') }}" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">newal S. johan</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a car
                                        like this.” </p>
                                    <div class="ratings">
                                        <div class="starpng">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{ asset('frontend4/images/winner/winner4.jpg') }}" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Salem Khan</h4>
                                    <p>“A new and distinctive idea, participate and earn or get your money back, I have
                                        never seen anything like it before.

                                        ” </p>
                                    <div class="ratings">
                                        <div class="starpng">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{ asset('frontend4/images/winner/winner5.jpg') }}" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Osama Slaem </h4>
                                    <p>“At first, I was unsure because I've never heard of a company like
                                        this before that says everyone is a winner. But after, I got my money back
                                        as a voucher so I didn't lose any money. Thanks SMARTBOX!.
                                        ” </p>
                                    <div class="ratings">
                                        <div class="starpng">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">
                                            <img src="{{ asset('frontend4/images/star.png') }}" alt="star">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- testimonial-single end -->
                        </div>
                        <!-- testimonial-slider end -->
                    </div>
                    <!-- testimonial-area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- support section start  -->

    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Get in touch with our friendly staff</span>
                        <h2 class="section-title">Customer Support</h2>
                        <p>Have a question or need help? Contact our friendly support team.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 callus-container">
                    <img src="{{ asset('frontend4/images/icon2.png') }}" alt="" srcset="">
                    <div class="img-container">
                        <p class="section-title2"style="margin-bottom: 18%;"> talk To Our Support Team </p>
                        {{-- <p class="contant-callus">Got a question about Lotteries? Get in touch with our friendly staff.</p> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="cmn-btn btn-sm text-capitalize "> call us </a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="cmn-btn btn-sm text-capitalize ">Email Us </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 callus-container">
                    <img src="{{ asset('frontend4/images/icon3.png') }}" alt="">
                    <div class="img-container">
                        <p class="section-title2" style="margin-bottom: 18%;">Our Guide to SmartBox</p>
                        <p class="contant-callus" style="margin-bottom: 12%;">checkout our FAQs  to see if we can help you out</p>
                        <div class="row">
                            <div class="col-8 offset-2">
                                <a href="" class="cmn-btn btn-sm text-capitalize"> FAQs  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section>
        <div>
            <div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="clear bottommargin-sm"></div>
                <div class="container">
                    <div class="row">
                        <div class="row justify-content-center col-mb-50 mb-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- New Arrivals Men
                                                ============================================= -->
            @php
                $new_product = \App\Models\product::where(['status' => 'active'])
                    ->orderBy('id', 'DESC')
                    ->limit('10')
                    ->get();
            @endphp
            <div class="container clearfix">
                <div class="clear"></div>
            </div>
        </div>
    </section><!-- #content end -->




    <script src="{{ asset('frontend4/js/vendor/jquery-3.5.1.min.js') }}"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).on('click', '.add_to_wishlist', function(e) {
            e.preventDefault();
            var product_id = $(this).data('product-id');
            var product_qty = $(this).data('quantity');
            // alert(product_id);
            var token = "{{ csrf_token() }}";
            var path = "{{ route('wishlist.store') }}";
            $.ajax({
                url: path,
                type: "POST",
                dataType: "JSON",
                data: {
                    product_id: product_id,
                    product_qty: product_qty,
                    _token: token,
                },
                beforeSend: function() {
                    $('#add_to_wishlist_' + product_id).html('<i class="fa fa-spinner"> </i>');
                },
                complete: function() {
                    $('#add_to_wishlist_' + product_id).html('<i class="fa fa-cart-plus"> </i> ');

                },
                success: function(data) {
                    console.log(data);
                    $('body #header-ajax').html(data['header'])
                    $('body #cart_count').html(data['cart_count'])

                    if (data['status']) {
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "Ok!",
                        });
                    } else if (data['present']) {

                        swal({
                            title: "Oooops",
                            text: data['message'],
                            icon: "warning",
                            button: "Ok!",
                        });
                        //alert('false')
                    } else {
                        swal({
                            title: "Sorry",
                            text: "you can't add ",
                            icon: "error",
                            button: "Ok!",
                        });
                    }
                }
            });
        });
    </script>

    <script src="{{ asset('frontend/1/js/jquery.countdown.min.js') }}"></script>



    <script>
        ;
        (function($) {

            var MERCADO_JS = {
                init: function() {
                    this.mercado_countdown();

                },
                mercado_countdown: function() {
                    if ($(".mercado-countdown").length > 0) {
                        $(".mercado-countdown").each(function(index, el) {
                            var _this = $(this),
                                _expire = _this.data('expire');
                            _this.countdown(_expire, function(event) {
                                $(this).html(event.strftime(
                                    '<span><b>%D</b>d|</span><span><b>%-H</b>h|</span> <span><b>%M</b> m|</span><span><b>%S</b> s|</span>'
                                ));
                            });
                        });
                    }
                },

            }

            window.onload = function() {
                MERCADO_JS.init();
            }

        })(window.Zepto || window.jQuery, window, document);
    </script>


    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

@endsection
