@extends('frontend.layouts.master')
@section('content')


        <div class="container">
            <div class="row">

                <section id="slider" class="slider-element revslider-wrap ">

                    <div class="rev_slider_wrapper" style="background-color:#2d3032;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.1.6 fullscreen mode -->
                        <div id="rev_slider_17_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.1.6">
                            <ul>	<!-- SLIDE  -->
                                @if (count($banners) > 0)
                                @foreach ($banners as $key => $banneritem)
                                    {{-- <div class="item {{ $key == 0 ? 'active' : '' }}"> --}}

                        <li class="dark" data-index="rs-{{$key}}" data-transition="fadethroughtransparent"    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="include/rs-plugin/demos/assets/images/100x50_blur1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ $banneritem->photo }}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div id="rrzt_41" class="rev_row_zone rev_row_zone_top" style="z-index: 9; padding-top: 2%">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption  "
                                         id="slide-41-layer-14"
                                         data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                         data-y="['center','center','center','center']" data-voffset="['100','100','100','100']"
                                                    data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"

                                        data-type="row"
                                        data-columnbreak="2"
                                        data-basealign="slide"
                                        data-responsive_offset="on"
                                        data-responsive="on"
                                        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[150,100,50,50]"
                                        data-paddingright="[100,50,40,40]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[100,50,40,40]"

                                        style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgb(0, 0, 0);">
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption  "
                                         id="slide-41-layer-15"
                                         data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                         data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"

                                        data-type="column"
                                        data-responsive_offset="on"
                                        data-responsive="off"
                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'data-columnwidth="100%"
                                        data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','center','center']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"

                                        style="z-index: 10; width: 100%;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme  blurslider-gradient"
                                         id="slide-41-layer-1"
                                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                                    data-fontsize="['110','90','100','70']"
                                        data-lineheight="['100','90','100','70']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"

                                        data-type="text"
                                        data-basealign="slide"
                                        data-responsive_offset="on"

                                        data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]"
                                        data-marginbottom="[30,20,30,30]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','center','center']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,40,40]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,40,40]"

                                        style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 400; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;">{{ $banneritem->title }}<br/>{{ $banneritem->name }}. </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-41-layer-2"
                                         data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','430','460','290']"
                                                    data-fontsize="['40','30','40','25']"
                                        data-lineheight="['50','40','50','30']"
                                        data-width="['640','360','100%','100%']"
                                        data-height="none"
                                        data-whitespace="normal"

                                        data-type="text"
                                        data-basealign="slide"
                                        data-responsive_offset="on"

                                        data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]"
                                        data-marginbottom="[40,30,20,20]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','center','center']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"

                                        style="z-index: 12; min-width: 640px; max-width: 640px; white-space: normal; font-size: 40px; line-height: 50px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;"> {{ $banneritem->discreption }} </div>

                                    <!-- LAYER NR. 5 -->
                                    <a class="tp-caption rev-btn  tp-resizeme"
                                        href="{{ $banneritem->yourube }}" target="_blank"			 id="slide-41-layer-13"
                                         data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','540','590','400']"
                                                    data-width="none"
                                        data-height="none"
                                        data-whitespace="['normal','nowrap','nowrap','nowrap']"

                                        data-type="button"
                                        data-actions=''
                                        data-basealign="slide"
                                        data-responsive_offset="on"

                                        data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                                        data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[35,35,35,35]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[35,35,35,35]"

                                        style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:1px 1px 1px 1px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Buy NOW </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper   blurslider-line"
                                         id="slide-41-layer-9"
                                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                                    data-width="['380','380','240','100%']"
                                        data-height="['100','100','152','152']"
                                        data-whitespace="nowrap"

                                        data-type="shape"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;fb:20px;","ease":"Power4.easeOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"

                                        style="z-index: 5;background-color:rgba(255, 255, 255, 0.15);cursor:pointer;"> </div>

                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption  "
                                         id="slide-41-layer-10"
                                         data-x="['left','left','left','center']" data-hoffset="['100','100','45','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','40','83','88']"
                                                    data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"

                                        data-type="text"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"

                                        style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 700; color: rgb(0, 0, 0);font-family:Georgia, serif;font-style:italic;">Start Scrolling </div>

                                    <!-- LAYER NR. 8 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-41-layer-11"
                                         data-x="['left','left','left','center']" data-hoffset="['278','278','120','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['32','32','35','36']"
                                                    data-width="1"
                                        data-height="40"
                                        data-whitespace="nowrap"

                                        data-type="shape"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"delay":1100,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:0;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"

                                        style="z-index: 7;background-color:rgba(255, 255, 255, 1.00);"> </div>

                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption  "
                                         id="slide-41-layer-12"
                                         data-x="['left','left','left','center']" data-hoffset="['272','272','114','0']"
                                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['32','32','34','35']"
                                                    data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"

                                        data-type="image"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"delay":1100,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:0;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"

                                        style="z-index: 8;">
                                        <div class="rs-looped rs-slideloop"  data-easing="Power2.easeInOut" data-speed="1" data-xs="0" data-xe="0" data-ys="-34" data-ye="0"><img src="include/rs-plugin/demos/assets/images/arrow2x.png" alt="Image" data-ww="['13px','13px','13px','13px']" data-hh="['7px','7px','7px','7px']" data-no-retina> </div></div>
                            </li>
                            @endforeach
                            @endif

                            </ul>
                            <div class="tp-static-layers">

                                    <!-- LAYER NR. 28 -->

                                    <!-- LAYER NR. 29 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                         id="slider-17-layer-22"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','bottom','bottom']" data-voffset="['-50','-50','102','102']"
                                                    data-width="['300','300','240','30%']"
                                        data-height="50"
                                        data-whitespace="nowrap"
                                        data-visibility="['on','on','on','off']"

                                        data-type="shape"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-startslide="0"
                                        data-endslide="2"
                                        data-frames='[{"delay":"bytrigger","speed":800,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 18;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> </div>

                                    <!-- LAYER NR. 30 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                         id="slider-17-layer-21"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','bottom','bottom']" data-voffset="['-50','-50','102','102']"
                                                    data-width="['300','300','240','30%']"
                                        data-height="50"
                                        data-whitespace="nowrap"
                                        data-visibility="['on','on','on','off']"

                                        data-type="shape"
                                        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slider-17-layer-22","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slider-17-layer-22","delay":""},{"event":"click","action":"jumptoslide","slide":"rs-41","delay":""}]'
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-startslide="0"
                                        data-endslide="2"
                                        data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Power4.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"

                                        style="z-index: 19;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>

                                    <!-- LAYER NR. 31 -->


                                    <!-- LAYER NR. 32 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                         id="slider-17-layer-24"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','bottom','bottom']" data-voffset="['1','1','51','51']"
                                                    data-width="['300','300','240','30%']"
                                        data-height="50"
                                        data-whitespace="nowrap"
                                        data-visibility="['on','on','on','off']"

                                        data-type="shape"
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-startslide="0"
                                        data-endslide="2"
                                        data-frames='[{"delay":"bytrigger","speed":800,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 21;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> </div>

                                    <!-- LAYER NR. 33 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                         id="slider-17-layer-23"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','bottom','bottom']" data-voffset="['1','1','51','51']"
                                                    data-width="['300','300','240','30%']"
                                        data-height="50"
                                        data-whitespace="nowrap"
                                        data-visibility="['on','on','on','off']"

                                        data-type="shape"
                                        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slider-17-layer-24","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slider-17-layer-24","delay":""},{"event":"click","action":"jumptoslide","slide":"rs-42","delay":""}]'
                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        data-responsive="off"
                                        data-startslide="0"
                                        data-endslide="2"
                                        data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Power4.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-blendmode="overlay"

                                        style="z-index: 22;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>

                                    <!-- LAYER NR. 34 -->

                            <div class="tp-bannertimer" style="height: 10px; background-color: rgba(255, 255, 255, 0.25);"></div>

                        </div><!-- END REVOLUTION SLIDER -->
                    </div><!-- END REVOLUTION SLIDER WRAPPER -->

                </section>

            </div>
        </div>




        <div class="shap-new d-xs-none d-sm-none d-lg-block d-xl-block d-xxl-block">
            <svg width="250" height="1011" viewBox="0 0 409 1011" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="-246" width="655" height="1011" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_11_3" transform="matrix(0.00279116 0 0 0.00180832 -0.0163646 0)" />
                    </pattern>
                    <image id="image0_11_3" width="370" height="553"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>


            <div class="shap-newimg d-xs-none d-sm-none d-lg-block d-xl-block d-xxl-block">
                <img src="{{ asset('frontend3/images/shapSQU-removebg-preview.png') }}" alt=""
                    srcset="">
            </div>

        </div>


        <section class="position-relative pt-60 pb-60 center">

            {{-- <div class="bg-el"><img src="{{asset('frontend2/assets/images/bg/contest-bg.jpg')}}" alt="image"></div> --}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <div class="section-header text-center">
                            <span class="section-sub-title">Try your chance at winning</span>
                            <h2 class="section-title">Current Contest</h2>
                            <p>Participants buy tickets and lots are drawn to determine the winners.</p>
                        </div>
                    </div>
                </div>

                <main class="shop-page style-5 style-grad">
                    <section class="shop ">
                        <div class="container">
                            <div class="row gx-4">
                                <div class="col-lg-12">
                                    <div class="products-content">
                                        <div class="top-filter mb-10">
                                            <div class="row align-items-center">
                                            </div>
                                        </div>
                                        <div class="products">
                                            <div class="row gx-2 gx-lg-4">
                                                @if (count($box) > 0)
                                                    @foreach ($box as $boxoneNext)
                                                        <div class="col-6 col-lg-3 col-sm-6 card-width">
                                                            <div class="product-card">
                                                                <div class="img">
                                                                    <img src="{{ $boxoneNext->photo }}" alt="">
                                                                    {{-- <span class="label new"></span> --}}
                                                                    <span class="fav-btn active"> <i class="fas fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="category">{{ $boxoneNext->name }}</h6>
                                                                    <h5 class="title">{{ $boxoneNext->title }}</h5>
                                                                    {{-- <div class="rate">
                                                                        <div class="stars">
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                        <span class="rev">3 Reviews</span>
                                                                    </div> --}}
                                                                    <div class="caption">
                                                                      <p> {{ $boxoneNext->supplier_id }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price text-bg-dark btnprice">
                                                                    {{ $boxoneNext->price }}
                                                                </div>
                                                                <a href="{{ route('groupOfProduct', $boxoneNext->slug) }}"
                                                                    class="btn rounded-pill mt-20">
                                                                    <span>Read More</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- row end -->
                <div class="row mt-10">
                    <div class="col-lg-12">
                        <div class="btn-grp ">
                            <a href="{{ route('allgroupOfProduct') }}" class="btn-border ">browse more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- End slider section -->

{{--
<div class="container pt-50">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Try your chance at winning</span>
                    <h2 class="section-title">Our Product</h2>
                    <p>Participants buy tickets and lots are drawn to determine the winners.</p>
                </div>
            </div>
        </div>

        <main class="shop-page style-5 style-grad">
            <section class="shop section-padding pt-50">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-lg-12">
                            <div class="products-content">
                                <div class="top-filter mb-10">
                                    <div class="row align-items-center">
                                    </div>
                                </div>
                                <div class="products">
                                    <div class="row gx-2 gx-lg-4">
                                        @if (count($prod_index_main) > 0)
                                            @foreach ($prod_index_main as $pim)
                                                <div class="col-6 col-lg-3 col-sm-6 card-width">
                                                    <div class="product-card">
                                                        <div class="img">
                                                            <img src="{{ $pim->photo }}" alt="">

                                                            <span class="fav-btn active"> <i class="fas fa-heart"></i>
                                                            </span>
                                                        </div>
                                                        <div class="info">
                                                            <h6 class="category">{{ $pim->name }}</h6>
                                                            <h5 class="title">{{ $pim->title }}</h5>
                                                            <div class="rate">

                                                                <span class="rev">3 Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            {{ $pim->price }}
                                                        </div>
                                                        <a href="{{ route('sProduct', $pim->slug) }}"
                                                            class="btn rounded-pill mt-20">
                                                            <span>Add To Cart</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <div class="col-lg-12">
            <div class="btn-grp">
                <a href="{{ route('allproduct') }}" class="btn-border">browse more</a>
            </div>
        </div>
    </div>
</div> --}}



    <div class="container shape ">
        <div class="liqued_shape"></div>
        <div class="cr_shape"></div>
        <div class="sq_shape"></div>
    </div>
    <div class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">



                    <div class="next-draw-area timer">
                        <div class="left">
                            <h3 class="title">NEXT DRAW</h3>
                            <p>Choose Your Dream car Tickets</p>

                        </div>
                        <div class="middle">
                            <p>Entries Close:</p>
                            @if (count($box) > 0)
                                @foreach ($box as $boxone)
                                    @if ($loop->first)
                                        {{-- <p> {{ Carbon\Carbon::parse($boxone->edate)->format(' Y/m/d h:i:s ') }}</p>
                               <p> {{ Carbon\Carbon::parse($boxone->edate)->format(' M d, Y h:i:s ') }}</p> --}}
                                        <p>
                                        <div class="wrap-countdown mercado-countdown"
                                            data-expire="{{ Carbon\Carbon::parse($boxone->edate)->format('Y/m/d h:i:s') }}">
                                        </div>
                                        </p>

                                        {{-- <p id="demo2"></p> --}}

                                        {{-- <p class="clock2 " id="demo" data-clock="{{ Carbon\Carbon::parse($boxone->edate)->format('Y/m/d h:i:s') }}">
                                    {{ Carbon\Carbon::parse($boxone->edate)->format('Y/m/d h:i:s') }}

                                </p> --}}
                                    @endif
                                @endforeach
                            @endif

                        </div>
                        <div class="right">
                            <a href="{{ route('allgroupOfProduct') }}"
                                class="cmn-btn style--three btn--sm d-flex align-items-center justify-content-center">
                                <img src="{{ asset('frontend3/images/icon/btn/tag.png') }}" alt="icon"
                                    class="mr-2"> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container entry">


        <div class="row">
            <h3>Upcoming Events</h3>

@if (count($upcoming)>0)
@foreach ($upcoming as $upcomingitem )


            <div class="entry event col-12 ">
                <div class="grid-inner row align-items-center g-0 p-4">
                    <div class="col-md-4 mb-md-0">
                        <a href="#" class="entry-image">
                            <img src="{{$upcomingitem->photo}}" alt="{{$upcomingitem->title}}">
                            <div class="entry-date">10<span>Apr</span></div>
                        </a>
                    </div>
                    <div class="col-md-8 ps-md-4">
                        <div class="entry-title title-sm">
                            <h2><a href="#">{{$upcomingitem->title}}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><span class="badge bg-warning text-dark px-2 py-1">{{$upcomingitem->showPrice}}</span></li>
                                <li><a href="#"><i class="icon-time"></i>
                                    <div class="wrap-countdown mercado-countdown upcoming"
                                            data-expire="{{ Carbon\Carbon::parse($boxone->edate)->format('Y/m/d h:i:s') }}">
                                        </div>

                                    </a></li>
                                <li><a href="#"><i class="icon-map-marker2"></i>Dubai </a></li>
                            </ul>
                        </div>
                        <div class="entry-content">


                            <p>{{$upcomingitem->title}} </p>
                            <a href="#" class="btn btn-secondary" disabled="disabled">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            @endif
        </div>
</div>





    <!-- how to play section start -->
    <section class="position-relative pt-60 pb-60 ">

        <div class="container player">
            <div class="row">
                <div class="col-lg-6 text-sm-start ps-5 text-center wow fadeInUp palyer-text" data-wow-duration="0.5s"
                    data-wow-delay="0.3s">
                    <div class="section-header">
                        <span class="section-sub-title">Need to know about</span>
                        <h2 class="section-title">How To Play</h2>
                        <p>Follow these 6 easy steps! </p>
                    </div>
                </div>
            </div>

            <div class="row mb-none-30 justify-content-xl-start justify-content-center playervideo">
                <div class="col-lg-12 col-md-8 mb-30 ">

                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5JaEdf6i63o"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <img src="{{ asset('frontend2/assets/images/elements/play-el.png') }}" alt="image">
                </div>
            </div>
        </div>


    </section>


<div class="container ">
    <div class="row">

    </div>
</div>

    <!-- how to play section end -->
    <!-- contest section start -->

    <!-- contest section end -->

    <!-- latest winner section start  -->



    <!-- latest winner section end  -->

    <!-- testimonial section start -->
    {{-- <section class="has-bg--shape pt-120 pb-120">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Testimonial</span>
                        <h2 class="section-title">our Happy Customers All Around the World</h2>
                        <p>With over 12 years of experience as the world’s leading online lottery service provider. Find out
                            what our members have to say about us!</p>
                    </div>
                </div>
            </div>
            <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20"
                data-items-sm="1" data-items-md="2" data-items-xl="3">
                @if (count($testim) > 0)
                    @foreach ($testim as $testionsingli)
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ $testionsingli->photo }}"
                                            alt="{{ $testionsingli->name }}"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{ $testionsingli->discreption }}</p>
                                    <div class="testi-meta">
                                        {{ $testionsingli->name }}
                                        <span>{{ $testionsingli->company }}.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section> --}}
    <!-- testimonial section end -->

    <!-- support section start  -->

    {{-- <section class="pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <h1 class="line1">UnBoxing</h1>
                    <h1 class="line2">YourLife</h1>
                    <h1 class="line3">Chance</h1>

                    <div class=" unboxing1">
                        <img src="{{asset('frontend3/images/shaps-bg.png') }}" style="opacity: 0.6;" >
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="row row-unboxing">
                        <div class="unboxing">
                            <div class="">
                                <img src="{{ asset('frontend3/images/winnerhome-org.png') }}" class="unboxing2">

                            </div>
                        </div>
                    </div>
                    <div class="btn-grpP ">
                        <a href="{{ route('allgroupOfProduct') }}" class="btn-border"> Participate Now</a>
                    </div>

                </div>

            </div>
        </div>
    </section> --}}



    <section class="pt-lg-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Get in touch with our friendly support</span>
                        <h2 class="section-title">Customer Support</h2>
                        <p>Have a question or need help? Contact our friendly support team.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-6 mb-30 mx-auto wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="support-card">
                        <div class="support-card__thumb">
                            <img src="{{ asset('frontend2/assets/images/icon/support/1.png') }}" alt="image">
                        </div>
                        <div class="support-card__content">
                            <h3 class="support-card__title">Talk to our support team</h3>
                            <p>Got a question about Lotteries? Get in touch with our friendly staff.</p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="tel:6564545" class="btn-border btn-sm text-capitalize">Call us <i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="/cdn-cgi/l/email-protection#64000c000e240309050d084a070b09"
                                    class="cmn-btn btn-sm text-capitalize">Email us <i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- support-card end -->
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

            {{-- new section --}}


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

                <section class="brand">

                    <div class="fancy-title title-border title-center topmargin-sm">
                        <h4>Popular Brands</h4>
                    </div>

                    <div class="has-bg--shape pt-120 pb-120">


                        <div class="shap-new d-xs-none d-sm-none">
                            <svg width="250" height="1011" viewBox="0 0 409 1011" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect x="-246" width="655" height="1011" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_11_3"
                                            transform="matrix(0.00279116 0 0 0.00180832 -0.0163646 0)" />
                                    </pattern>
                                    <image id="image0_11_3" width="370" height="553"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>



                        <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">




                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/1.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/2.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/3.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/4.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/5.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/6.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/7.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/8.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/9.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/10.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/11.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/12.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/13.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/14.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/15.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/16.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/19.png') }}" alt="Clients"></a>
                            </li>
                            <li class="grid-item"><a href="#"><img
                                        src="{{ asset('frontend3/images/clients/logo/18.png') }}" alt="Clients"></a>
                            </li>
                        </ul>
                    </div>
                </section>



            </div>




        </div>
    </section><!-- #content end -->


    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                <div class="subscribe-area">
                    <div class="left">
                        <span class="subtitle">Subscribe to SmartBox</span>
                        <h3 class="title">To Get Exclusive Benefits</h3>
                    </div>
                    <div class="right">
                        <form class="subscribe-form">
                            <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('frontend2/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>


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




@endsection

