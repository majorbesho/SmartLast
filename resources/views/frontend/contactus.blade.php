@extends('frontend.layouts.master')


@section('content')

    <style>
        .postcontent {}
    </style>




    <section>
        <div class="container" style="padding-top: 12%;">
            <div class="row">
                <div class="col-lg-12 center pb-5">
                    <img src="{{asset('frontend4/assets/images/CONTACTUS.jpg')}}" alt="" style="width: 100%;border-radius: 25px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Content
            ============================================= -->
    <section style="padding-bottom: 10%">

            <div class="container ">

                <div class="row ">
                    <div class=" col-lg-8 col-md-12  contest-card zoom ">

                        <h3 style="padding-top: 3%">Send us an Email</h3>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="row mb-0" id="template-contactform" name="template-contactform"
                                action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name" style="color: #000">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name"
                                        value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email" style="color: #000">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email"
                                        value="" class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone" style="color: #000" >Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                        value="" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-subject" style="color: #000">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value=""
                                        class="required sm-form-control" />
                                </div>



                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message" style="color: #000" >Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message"
                                        rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck"
                                        name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">

                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6Ldz2mUnAAAAAI1eZYkcj2QGzZxGgtL88ll0rHoA"></div>

                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                        name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>

                        </div>

                    </div><!-- .postcontent end -->

                    <div class=" col-lg-3 offset-lg-1 col-md-12 contest-card zoom" style="padding-top: 3%;">


                                <address>
                                    <strong>Headquarters:</strong><br>
                                    Al Moosa Tower 2, 1403 - Sheikh Zayed Rd, Dubai, United Arab Emirates. Metro, Emirates Towers
                                    <br>

                                </address>
                                <a title="Phone Number"><strong>Phone:</strong></a>
                                 <a href="tel:+971502746822">+971502746822</a>
                                 <br>
                                {{-- <abbr title="Fax"><strong>Fax:</strong></abbr>  +971545060739<br> --}}
                                <a title="Email Address"><strong>Email:</strong></a>
                                <a href="mailto:info@smartboxuae.ae" style="padding-bottom: 5%">info@smartboxuae.ae</a>

                                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q= Al Moosa Tower 2- Sheikh Zayed Rd, Dubai, United Arab Emirates. Metro, Emirates Towers&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>


                                <div class="widget border-0 pt-0">

                                    <a href="#" class="social-icon si-small si-dark si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small si-dark si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small si-dark si-dribbble">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>



                                </div>


                    </div><!-- .sidebar end -->
                </div>
            </div>


    </section><!-- #content end -->

<section>

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
                        <p class="section-title2" style="/*margin-bottom: 18%;*/"> Talk To Our Support Team </p>
                        {{-- <p class="contant-callus">Got a question about Lotteries? Get in touch with our friendly staff.</p> --}}
                        <div class="container">
                            <div class="row" style="padding-top: 18%">
                                <div class="col-6">
                                    <a  href="tel:+971502746822" class="cmn-btn btn-sm text-capitalize "> Call us </a>



                                </div>
                                <div class="col-6">
                                    <a href="mailto: abc@example.com" class="cmn-btn btn-sm text-capitalize ">Email Us </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 callus-container">
                    <img src="{{ asset('frontend4/images/icon3.png') }}" alt="">
                    <div class="img-container">
                        <p class="section-title2" style="/*margin-bottom: 18%;*/">Our Guide to SmartBox</p>
                        <p class="contant-callus" style="margin-bottom: 12%;">Checkout our FAQs to see if we can help you
                            out</p>
                        <div class="row">
                            <div class="col-8 offset-2">
                                <a href="{{route('user.faqs')}}" class="cmn-btn btn-sm text-capitalize"> FAQs </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</section>



@endsection
