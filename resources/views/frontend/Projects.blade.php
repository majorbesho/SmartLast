@extends('frontend.layouts.master')


@section('content')


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Projects</h1>
				<span>Our Great project </span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Projects</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="grid-filter-wrap">

						<!-- Portfolio Filter
						============================================= -->
						<ul class="grid-filter" data-container="#portfolio">
                            <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>

                            @if (count($project)>0)
                            @foreach (\app\Models\Projects::orderBy('id','DESC')->distinct()->get('type');  as $item)
							<li>
                                <a href="#" data-filter=".pf-{{$item->type}}">{{$item->type}}</a>
                            </li>

                            @endforeach
							@endif


						</ul><!-- .grid-filter end -->

						<div class="grid-shuffle rounded" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
                        @if (count($project)>0)
                        @foreach ($project  as $project )
                            <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 {{$project->type}}">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="{{$project->youtubeUrl}}">
                                            <img src="{{$project->photo}}" alt="{{$project->title}}">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{$project->photo}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                                <a href="{{$project->photo}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="{{$project->photo}}">{{$project->title}}</a></h3>
                                        <span><a href="#">{{$project->company}}</a>, <a href="#">{{$project->title}}</a></span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        @endif

						{{-- <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
									<span><a href="#">Illustrations</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</div>
						</article> --}}

						{{-- <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-uielements pf-media">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/5.jpg" alt="Console Activity">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-1.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-2.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-3.jpg" alt="Shake It"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</div>
						</article> --}}

						{{-- <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</article> --}}

					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->



@endsection

