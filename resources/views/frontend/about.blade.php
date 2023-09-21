@extends('frontend.layouts.master')


@section('content')




        <section style="padding-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <img src="{{asset('frontend4/assets/images/who-we-are.jpg')}}" alt="" srcset=""
                        style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <h2 class=" section-title style--two center pt-1"> Who we are </h2>
                        <p>


                                Smart Box is a global entertainment & lifestyle website and application, Established in 2022 and based in Dubai, UAE.

                                Smart Box has entered the entrainment world with a firstly unique concept in the draw market with unlimited striking activities, prizes, and strong partnerships with international brands and stores.

                                Our website and application feature great multiple discounts on different products and various campaigns to get a chance to win big prizes.

                                As per our very creative concept: our users always win, they can redeem their points with a voucher for their chosen store.

                                As well, we are building a smart merger between our vendors and our users,  and we offering an innovative approach to the overall economy and tourism in UAE.

                        </p>
                    </div>
                </div>
            </div>
        </section>


{{--
        @endforeach

@endif --}}

<section class="post">

<div class="container" style="padding-top: 30px;">
    <div class="row">

        <div id="posts" class="row grid-container gutter-40">

            <div class="entry col-12">
                <div class="grid-inner row g-0 pt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="entry-image">
                            {{-- <a href="{{asset('frontend4/assets/images/what-we-do.jpg')}}" data-lightbox="image"> --}}
                                <img src="{{asset('frontend4/assets/images/what-we-do.jpg')}}"
                                 alt="Standard Post with Image" style="width: 100%;">
                                {{-- </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="entry-title title-sm center">


                            <h2 class=" section-title style--two center pt-1"> what we do </h2>

                        </div>

                        <div class="entry-content">
                            <p>


                                We are an entertainer website and application for all people of different ages and genders all over the world, where we can entertain your free time.

                                Our tradition is providing a variety of different entertainment activities for every type of your interests, we give you options based on your interests; for example, fashion, beauty care& makeup, sports, travel, and cars, and the list goes on.

                                While just visiting our website or downloading our app you will find various discounts and unlimited campaigns, You will find entertainment, professionalism, and let’s not forget for sure fun.

                                We just create a premium experience for our users through our high-quality products.

                                One click to win amazing prizes, get points, and boost your maximum excitement.

                            </p>
                        </div>
                    </div>
                </div>



                <div class="grid-inner row g-0 pt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="entry-image">
                            {{-- <a href="{{asset('frontend4/assets/images/whyus.jpg')}}" data-lightbox="image"> --}}
                                <img src="{{asset('frontend4/assets/images/whyus.jpg')}}"
                                 alt="Standard Post with Image" style="width: 100%;"></a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12  ps-md-4">
                        <div class="entry-title title-sm center">


                            <h2 class=" section-title style--two center pt-1">why us </h2>

                        </div>

                        <div class="entry-content">
                            <p>


                                We are an entertainer website and application for all people of different ages and genders all over the world, where we can entertain your free time.

                                Our tradition is providing a variety of different entertainment activities for every type of your interests, we give you options based on your interests; for example, fashion, beauty care& makeup, sports, travel, and cars, and the list goes on.

                                While just visiting our website or downloading our app you will find various discounts and unlimited campaigns, You will find entertainment, professionalism, and let’s not forget for sure fun.

                                We just create a premium experience for our users through our high-quality products.

                                One click to win amazing prizes, get points, and boost your maximum excitement.

                            </p>
                        </div>
                    </div>
                </div>


            </div>



        </div><!-- #posts end -->

    </div>
</div>




</section>
        <!-- testimonial section start -->
        <section class="has-bg--shape pt-120 pb-120">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-xl-8 col-lg-9">
                        <div class="section-header text-center">
                            <span class="section-sub-title">Testimonial</span>
                            <h2 class="section-title">our Happy Customers All Around the World</h2>
                            <p>With over 12 years of experience as the world’s leading online lottery service provider. Find out what our members have to say about us!</p>
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

        <!-- team section start -->
        {{-- @if (count($abouts)>0)
@foreach ($abouts as $abouttems ) --}}


        {{-- <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-header text-center">
                            <span class="section-sub-title"> Meet Our most Valued</span>
                            <h2 class="section-title style--two">Expert Team Members</h2>
                            <p>{{$abouttems->team_caption}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif
                <div class="row mb-none-30 justify-content-center">

                    @if (count($team)>0)
                    @foreach ($team as $steam )



                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{$steam->photo}}" alt="image">
                                <div class="obj"><img src="{{asset('frontend2/assets/images/elements/team-obj.png')}}" alt="image"></div>
                            </div>
                            <div class="team-card__content">
                                <h3 class="name">{{$steam->name}}</h3>
                                <span class="designation">{{$steam->name}}</span>
                            </div>
                        </div>
                        <!-- team-card end -->
                    </div>


                    @endforeach
                    @endif

                </div>
            </div>
        </section> --}}

					<div class="clear"></div>

@endsection
