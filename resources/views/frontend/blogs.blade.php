@extends('frontend.layouts.master')


@section('content')


<div class="inner-hero-section style--four">
    {{-- <div class="bg-shape"><img src="{{asset('frontend2/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <ul class="page-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#0">Pages</a></li>
                    <li class="active">Blog</li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- blog section start  -->
<section class="mt-minus-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- blog-card end -->
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-lg-8 mb-none-30">
                @if (count($arts)>0)
                @foreach ($arts as $art )
                <div class="blog-card style--two mb-30 has-link">
                    {{-- <a href="{{route('artsDispaly',$art->slug)}}" class="item-link"></a> --}}



                    <a href="#" class="item-link"></a>
                    <div class=" card card-blog">
                        <img class=" blog-card__thumb card-img-top" src="{{$art->photo}}" alt="{{$art->title}}">
                        <div class="card-body">
                          <h5 class="blog-card__content card-title">{{$art->title}}</h5>
                          <p class="card-text">{{$art->discreption}} </p>
                          <ul class="blog-card__meta">
                            <li>
                                <i class="far fa-comments"></i>
                                <span>20 Comments</span>
                            </li>
                            <li>
                                <i class="far fa-eye"></i>
                                <span>466 Views</span>
                            </li>
                        </ul>
                        </div>

                        <div class="card-body">
                            <span class="post-date">{{ Carbon\Carbon::parse($art->created_at)->format('Y/m/d h:i:s') }} </span>

                        </div>
                      </div>




                    {{-- <a href="{{route('artsDispaly',$art->slug)}}" class="item-link"></a>
                    <div class="blog-card__thumb"><img src="{{$art->photo}}" alt="image"></div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title">{{$art->title}}?</h3>
                        <ul class="blog-card__meta">
                            <li>
                                <i class="far fa-comments"></i>
                                <span>20 Comments</span>
                            </li>
                            <li>
                                <i class="far fa-eye"></i>
                                <span>466 Views</span>
                            </li>
                        </ul>
                        <p>{{$art->discreption}}</p>
                        <div class="blog-card__footer">
                            <div class="left">
                                <span class="post-date">{{ Carbon\Carbon::parse($art->created_at)->format('Y/m/d h:i:s') }} </span>
                                <div class="post-author">
                                    <img src="{{asset('frontend2/assets/images/blog/author.png')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                @endforeach

                @endif

                <!-- blog-card end -->

            </div>
            <aside class="col-lg-4">
                <div class="sidebar">
                    <div class="widget">
                        <h3 class="widget__title">sidebar</h3>
                        <form class="sidebar-search">
                            <input type="search" name="sidebar-search" id="sidebar-search" placeholder="Enter your Search Content">
                            <button type="submit"><i class="fas fa-search"></i> search</button>
                        </form>
                    </div>
                    <!-- widget end -->
                    <div class="widget">
                        <h3 class="widget__title">Latest Post</h3>
                        <div class="small-post-slider">

                            <!-- small-post end -->
                          @if (count($lastarts)>0)
                          @foreach ( $lastarts as $lastart )
                          <div class="small-post">
                            <div class="small-post__thumb"><img src="{{$art->photo}}" alt="image"></div>
                            <div class="small-post__content">
                                <h3 class="small-post__title">{{$art->title}}</h3>
                                <ul class="blog-card__meta">
                                    <li>
                                        <i class="far fa-comments"></i>
                                        <span>20 Comments</span>
                                    </li>
                                    <li>
                                        <i class="far fa-eye"></i>
                                        <span>466 Views</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                          @endforeach

                          @endif
                            <!-- small-post end -->
                        </div>
                        <!-- small-post-slider end -->
                    </div>
                    <!-- widget end -->
                    <div class="widget">
                        <h3 class="widget__title">Follow Us</h3>
                        <ul class="social-link-list">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-reddit-alien"></i></a></li>
                        </ul>
                    </div>
                    <!-- widget end -->
                    <div class="widget">
                        <h3 class="widget__title">Categories</h3>
                        <ul class="category-list">
                            <li><a href="#0">All <span>50</span></a></li>
                            <li><a href="#0">Jackpot <span>40</span></a></li>
                            <li><a href="#0">Winners <span>55</span></a></li>
                            <li><a href="#0">Powerball <span>36</span></a></li>
                            <li><a href="#0">Mega Millions <span>26</span></a></li>
                            <li><a href="#0">Inspiration <span>22</span></a></li>
                            <li><a href="#0">Bonus <span>38</span></a></li>
                        </ul>
                    </div>
                    <!-- widget end -->
                    <div class="widget">
                        <h3 class="widget__title">Featured Tags</h3>
                        <div class="tags">
                            <a href="#0">Loot tips</a>
                            <a href="#0">Mega Millions </a>
                            <a href="#0">Lotto</a>
                            <a href="#0">Winners</a>
                            <a href="#0">Bonus</a>
                        </div>
                    </div>
                    <!-- widget end -->
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- blog section end -->




@endsection

