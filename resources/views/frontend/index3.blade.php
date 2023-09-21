@extends('frontend.layouts.master')
@section('content')
    <style>
        .gauge-container {
            position: absolute;
            left: 19px;
            top: 15px;
            z-index: 1;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;
        }

        .big-box .campaign-box-single .gauge-container {
            left: auto;
            right: 19px;
            top: 20px;
        }

        .big-box .campaign-box-single .gauge-container {
            left: auto;
            right: 19px;
            top: 20px;
        }



        .newLoadingCircle {
            position: relative;
            width: 147px;
            height: 93px;
        }

        .newLoadingCircle .bgLot {
            position: static;
            left: 0;
            top: 0;
            z-index: 1;
        }


        .newLoadingCircle .remaining {
            position: absolute;
            left: 20px;
            right: 19px;
            top: 18px;
            z-index: 3;
        }

        .newLoadingCircle .remaining .number:lang(en) {
            font-weight: 500;
        }

        .newLoadingCircle .remaining .number:lang(en) {
            font-family: Rubik, sans-serif;
        }

        .newLoadingCircle .remaining .number {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 54px;
            letter-spacing: -1px;
            font-size: 19px;
            line-height: 18px;
            border-right: 2px solid hsla(0, 0%, 71.4%, .5);
            float: left;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin-right: 4px;
            padding-top: 1px;
            text-align: center;
        }

        .newLoadingCircle .remaining .second-liner .small-text:lang(en) {
            font-family: Rubik, sans-serif;
        }

        .newLoadingCircle .remaining .second-liner .small-text {
            font-size: 9px;
            line-height: 11px;
            letter-spacing: -.665px;
            text-align: center;
            font-weight: 400;
        }

        .newLoadingCircle svg {
            z-index: 2;
            position: absolute;
            left: 0;
            right: 0;
            top: -3px;
            z-index: 1;
        }

        .newLoadingCircle.start-campaign svg path {
            stroke: #61c652 !important;
        }


        .newLoadingCircle .remaining .number .sold-label:lang(en) {
            font-family: Rubik, sans-serif;
        }

        .newLoadingCircle .remaining .number .sold-label {
            font-size: 9px;
            line-height: 11px;
            letter-spacing: -.665px;
            text-align: center;
            font-weight: 400;
        }

        .newLoadingCircle .remaining .second-liner:lang(en) {
            font-family: Rubik, sans-serif;
        }

        .newLoadingCircle .remaining .second-liner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 50px;
            letter-spacing: -.8px;
            font-size: 19px;
            line-height: 18px;
            float: right;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            font-weight: 400;
        }

        .newLoadingCircle .remaining {
            position: absolute;
            left: 20px;
            right: 19px;
            top: 18px;
            z-index: 3;
        }
    </style>

    <section class="hero">
        <div class="hero__shape hero-car ">
            {{-- <img src="{{ asset('frontend4/images/elements/hero-shape.jpg.png') }}" alt="image" class="heroshape"> --}}
        </div>
        <div class="hero__element">
            {{-- <img src="{{ asset('frontend4/images/elements/hero-building.png') }}" alt="image"> --}}
        </div>
        @if (count($banner) > 0)
            @foreach ($banner as $banersingle)
                <!--<div class="hero__car wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="1s">-->




                <!--<img src="{{ asset('frontend4/images/elements/car-shadow.png') }}" alt="image" class="car-shadow">-->
                <!--<img src="{{ asset('frontend4/images/elements/car-ray.png') }}" alt="image" class="car-ray">-->
                <!--<img src="{{ asset('frontend4/images/elements/car-light.png') }}" alt="image" class="car-light">-->

                <!--<div class="videoyoutube d-none d-sm-none d-md-none d-lg-none d-xxl-block " >-->
                <!--    <iframe width="500" height="450" style="border-radius: 25px;  box-shadow:  rgba(0, 0, 0, 0.25) 0 5px 15px 0;" class="hero-car d-sm-none d-md-none d-lg-none d-xxl-block  "-->
                <!--        src="{{ $banersingle->name }}" style="height: 400px;width: 600px;" >-->
                <!--    </iframe>-->
                <!--</div>-->


                <!--{{-- <img src="{{ $banersingle->photo }}" alt="image" class="hero-car d-none d-sm-block d-md-block"> --}}-->
                <!--<img src="{{ asset('frontend4/images/elements/car-star.png') }}" alt="image" class="car-star">-->
                <!--</div>-->
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-start pb-35">
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


                                    <a class=" cmn-btn btn-epic" data-rel="lightcase:myCollection"
                                        href="{{ $banersingle->youtube }}">
                                        <div>
                                            {{-- <span> Participate Now</span> --}}
                                            <span>How To Participate</span>
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
                            <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
                                <div class="videoyoutube">
                                    <iframe
                                        style="border-radius: 25px; box-shadow: rgba(0, 0, 0, 0.25) 0 5px 15px 0; height: 415px; width: 100%;"
                                        class="hero-car" src="{{ $banersingle->name }}" style="height: 400px;width: 600px;">
                                    </iframe>
                                </div>
                            </div>


                        </div>
                        <!--<div class="hero__thumb">-->
                        <!--    <img src="{{ asset('frontend4/images/elements/car-main.png') }}" alt="">-->
                        <!--</div>-->
                    </div>
                </div>
                </div>
            @endforeach
        @endif

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 newimg">
                    <img src="{{ asset('frontend4/assets/images/222.jpg') }}" alt="SmartBox" srcset=""
                        style="border-radius: 25px;">
                </div>
            </div>
        </div>

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

            <div class="row wow fadeInUp mt-2" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="col-lg-12">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="row mb-none-30">
                                @if (count($box) > 0)
                                    @foreach ($box as $boxoneNext)
                                        <div class="col-xl-3 col-md-6 mb-30" style="margin-bottom:6%;">
                                            <div
                                                class="contest-card zoom {{ $loop->first ? 'launched' : '' }} {{ $loop->index == 1 ? 'closing' : '' }}">
                                                @if ($loop->index == 1)
                                                    <div class="product-countdown"
                                                        data-expire="{{ Carbon\Carbon::parse($boxoneNext->edate)->format('Y/m/d h:i:s') }}">
                                                    </div>
                                                @endif
                                                <div class="contest-card__thumb ">
                                                    <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}">
                                                        @php
                                                            $photos = explode(',', $boxoneNext->photo);
                                                        @endphp


                                                        <img src="{{ $photos[0] }}" alt="image">
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
                                                                <h5 class="contest-card__name" style="font-size: 89%;">
                                                                    {{ $boxoneNext->title }}</h5>
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
                                                                        class="center text-light">Add To Cart</a>
                                                                @endif
                                                            </div>
                                                            <div class="container" style="padding-top: 8%;">

                                                                {{--
                                                            @if (count($countOfOrder) > 0)
                                                            @foreach ($countOfOrder as $totalOrder)

                                                            <h1>{{ $totalOrder->pivot->qty}}</h1>
                                                            @endforeach

                                                            @endif --}}


                                                                {{-- <div class="row">
                                                                <div class="col-12">
                                                                    <div class="newLoadingCircle" style="margin-left: 10%">
                                                                        <div class="gauge-container">
                                                                            <div class="newLoadingCircle lozad start-campaign" data-circle="99" id="CR-00100Loader" data-newid="CR-00100Loader" data-itemsold="188" data-itemallocated="1950" data-loaded="true">
                                                                            <svg width="147" height="66" viewBox="0 0 147 66" fill="none" xmlns="http://www.w3.org/2000/svg" class="bgLot">
                                                                            <rect x="7" y="7" width="133" height="51.87" rx="25.935" fill="white" stroke="#ECECEC" stroke-width="13.3"></rect>
                                                                            </svg>
                                                                            <div class="remaining">
                                                                            <span class="number">188<span class="sold-label">SOLD</span></span>
                                                                            <span class="second-liner"><span class="small-text">OUT OF</span>{{ $boxoneNext->stock }}</span>
                                                                            </div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 147 66" width="147" height="66" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 79%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_16"><rect width="147" height="66" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_16)"><g transform="matrix(1.4199999570846558,0,0,1.326640009880066,73.37000274658203,32.99300003051758)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(31,197,7)" stroke-opacity="1" stroke-width="9.5" d=" M21.374000549316406,-19.611000061035156 C12.621999740600586,-19.611000061035156 0.6669999957084656,-19.611000061035156 0.6669999957084656,-19.611000061035156 C0.6669999957084656,-19.611000061035156 0.4790000021457672,-19.611000061035156 0.13099999725818634,-19.61199951171875"></path></g><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(31,197,7)" stroke-opacity="1" stroke-width="10" d="M0 0"></path></g></g></g></svg></div>
                                                                            </div>

                                                                    </div>
                                                                </div>
                                                            </div> --}}



                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:{{$boxoneNext->periodID}}%">{{$boxoneNext->periodID}}%</div>
                                                                  </div>





                                                                <div class="inner-slide">
                                                                    <h4 style=" margin-top: 7%;line-height: 0.6;" >
                                                                        {{-- {{ Carbon\Carbon::parse($boxoneNext->edate)->format('Y/m/d h:i:s') }} --}}
                                                                        <b style="font-size: 12px" >Draw date  {{ Carbon\Carbon::parse($boxoneNext->edate)->format('d F y') }} </b>
                                                                        <br>  <span style="font-size:10px ">or earlier if
                                                                        the campaign is sold out.</span>
                                                                    </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        {{-- <li>
                                                            <i class="las la-clock"></i>
                                                            <span style="color: #542760;">
                                                                {{ Carbon\Carbon::parse($boxoneNext->edate)->format('d') }}
                                                            </span>
                                                        </li> --}}
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
                            {{-- STATIC PRODUCT BEGIN --}}
                            {{-- <div class="row mb-none-30 pt-120" style="padding-top: 4%;">
                                <div class="col-xl-3 col-md-6 mb-30">
                                    <div class="contest-card zoom">
                                        <p class="center m-auto "
                                            style="
                                                    color: #767474;
                                                    font-weight: 400;
                                                    letter-spacing: -.406956px;
                                                    font-size: 14px;
                                                    line-height: 17px;
                                                    margin: 0;
                                                    text-align: center;"></p>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('frontend4/images/cashn.jpg') }}" class=""
                                                alt="image">
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="container hr">
                                                <div class="col-12 text-cart">
                                                    <p>Get a chance to <span>WIN</span></p>
                                                    <h6>10000 AED</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 cart-text">
                                                    </div>
                                                    <div class="col-12 cart-text d-none">
                                                        <h5 class="contest-card__name"></h5>
                                                    </div>
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

                            </div> --}}
                            {{-- STATIC PRODUCT END --}}
                            <div class="row mt-5 offersRow">
                                <div class="col-md-6">
                                    <div class="offerSeparate ">
                                        <a href="#" class=" zoom ">
                                            <img src="{{ asset('frontend4/assets/images/iphone.png') }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="offerSeparate">
                                        <div class="offerLeft   zoom  ">
                                            <h3>BUY 1 GET Entry Into 2 Prize Draws</h3>
                                            <a href="#" class="offerBtn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (count($box) > 0)
                                @foreach ($box as $boxoneNext)
                                    <div class="row mt-5 campaignCard zoom">
                                        <div class="col-md-4 ">
                                            <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}">
                                                @php
                                                    $photos = explode(',', $boxoneNext->photo);
                                                @endphp
                                                <img src="{{ $photos[0] }}" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('frontend4/assets/images/win1.png') }}" alt=""
                                                style="width: 10%;">

                                            <h3>{{ $boxoneNext->title }}</h3>
                                            <h4 class="priceTag">AED{{ $boxoneNext->showPrice }}</h4>
                                            <div class="campaign__buttons">
                                                <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}">

                                                    <button class="campaign__info_button">Prize Details</button>
                                                </a>
                                                <button class="campaign__purchase_button add_to_cart " data-quantity="1"
                                                    data-product-id="{{ $boxoneNext->id }}"
                                                    id="add_to_cart{{ $boxoneNext->id }}">Add to Cart</button>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                            @endif
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
                                Pick your Campaign & Complete Your Purchase</p>
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
    <section class="position-relative pt-120 pb-120 d-none">
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
                                    number 1 customer service in the market
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
                                    <img src="{{ asset('frontend4/assets/images/1t.jpeg') }}" alt="image">
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
                                    <img src="{{ asset('frontend4/assets/images/2t.jpeg') }}" alt="image">
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
                                    <img src="{{ asset('frontend4/assets/images/3t.jpeg') }}" alt="image">
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
            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-md-12">

                    <div class="img-container2">
                        <img class="contactImg" src="{{ asset('frontend4/images/icon2-lite.png') }}" alt="icon2"
                            srcset="">
                        <p class="section-title3"> Talk To Our Support Team </p>
                        <p class="section-content">Expert Assistance at Your Fingertips</p>

                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-6">
                                    <a href="#" class="cmn-btn btn-sm text-capitalize">Call us </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="cmn-btn btn-sm text-capitalize">Email Us </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">

                    <div class="img-container2">
                        <img class="faqImg" src="{{ asset('frontend4/images/icon3-lite.png') }}" alt="icon3"
                            srcset="">
                        <p class="section-title3">Our Guide to SmartBox</p>
                        <p class="section-content">Checkout our FAQs to see if we can help you
                            out</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <a href="" class="cmn-btn btn-sm text-capitalize"> FAQs </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-lg-6 col-md-12 callus-container">-->
            <!--        <img src="{{ asset('frontend4/images/icon2.png') }}" alt="" srcset="">-->
            <!--        <div class="img-container">-->
            <!--            <p class="section-title2" style="/*margin-bottom: 18%;*/"> Talk To Our Support Team </p>-->
            <!--            {{-- <p class="contant-callus">Got a question about Lotteries? Get in touch with our friendly staff.</p> --}}-->
            <!--            <div class="container">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-6">-->
            <!--                        <a href="" class="cmn-btn btn-sm text-capitalize "> Call us </a>-->
            <!--                    </div>-->
            <!--                    <div class="col-6">-->
            <!--                        <a href="" class="cmn-btn btn-sm text-capitalize ">Email Us </a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-6 col-md-12 callus-container">-->
            <!--        <img src="{{ asset('frontend4/images/icon3.png') }}" alt="">-->
            <!--        <div class="img-container">-->
            <!--            <p class="section-title2" style="/*margin-bottom: 18%;*/">Our Guide to SmartBox</p>-->
            <!--            <p class="contant-callus" style="margin-bottom: 12%;">Checkout our FAQs to see if we can help you-->
            <!--                out</p>-->
            <!--            <div class="row">-->
            <!--                <div class="col-8 offset-2">-->
            <!--                    <a href="" class="cmn-btn btn-sm text-capitalize"> FAQs </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>




    <script>
        $(document).on('click', '.add_to_cart', function(e) {
            e.preventDefault();
            //var innum = document.getElementById("innum").value;

            var product_id = $(this).data('product-id');
            // var product_qty = $(this).data('quantity');

            var product_qty = 1;

            //alert(product_id);
            var token = "{{ csrf_token() }}";
            var path = "{{ route('cart.store') }}";
            //alert(token);
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
                    $('#add_to_cart' + product_id).html('<i class="fa fa-spinner"> </i> loading...');
                },
                complete: function() {
                    $('#add_to_cart' + product_id).html(
                        '<i class="fa fa-cart-plus"> </i> added to cart...');
                },
                success: function(data) {
                    console.log(data);
                    $('body  #header-ajax').html(data['header']);

                    // $('body #header-ajax').html(data['header'])
                    $('body #cart_count').html(data['cart_count'])

                    if (data['status']) {
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "Go to Checkout ",
                        });

                    } else {
                        alert('false')
                    }
                }
            });
        });
    </script>






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
                    if ($(".product-countdown").length > 0) {
                        $(".product-countdown").each(function(index, el) {
                            var _this = $(this),
                                _expire = _this.data('expire');
                            _this.countdown(_expire, function(event) {
                                $(this).html(event.strftime(
                                    `<span>Closing in </span>
                                    <span><b>%D</b> :</span>
                                    <span><b>%-H</b> :</span>
                                    <span><b>%M</b> :</span>
                                    <span><b>%S</b></span>`
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
    <script>
        let options = {
            startAngle: -1.55,
            size: 150,
            value: 0.90,
            fill: {
                gradient: ['#F9D423', '#e65c00']
            }
        }
        $(".circle .bar").circleProgress(options).on('circle-animation-progress',
            function(event, progress, stepValue) {
                $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
            });
        $(".js .bar").circleProgress({
            value: 0.80
        });
        $(".react .bar").circleProgress({
            value: 0.70
        });
    </script>
@endsection
