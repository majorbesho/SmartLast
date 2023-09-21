@extends('frontend.layouts.master')


@section('content')

 <!-- Main Content -->
 <div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div id="post-181" class="post-181 post  format-video has-post-thumbnail  category-motion category-photography category-uncategorized tag-eclipse   no-title">
                <div class="section section-post-header">
                    <div class="section_wrapper clearfix">
                        {{-- column one single-photo-wrapper --}}
                        <div class="">
                            <img width="1200" height="480" src="{{$artsUrls->photo}}" class="scale-with-grid wp-post-image" alt=" {{$artsUrls->title}}" />

                            <div class="image_frame scale-with-grid">
                                <div class="image_wrapper">
                                    <a href="{{$artsUrls->photo}}" rel="prettyphoto">
                                        <div class="mask"></div>
                                        <img width="1200" height="480" src="{{$artsUrls->photo}}" class="scale-with-grid wp-post-image"
                                         alt=" {{$artsUrls->title}}" />
                                    </a>
                                    <div class="image_links">
                                        <a href="{{$artsUrls->photo}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                    </div>
                                </div>
                                <div class="image_wrapper">
                                <x-embed url="{{$artsUrls->youtubeUrl}}" />
                                </div>
                            </div>
                        </div>

                        <div class="column one post-header">
                            <div class="button-love">
                                <a href="#" class="mfn-love " data-id="181"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span></a>
                            </div>
                            <div class="title_wrapper">
                                <div class="post-meta clearfix">
                                    <div class="author-date">
                                        <span class="author">Published by <i class="icon-user"></i>
                                             <a href="#">Samina Team</a>
                                            </span><span class="date">at <i class="icon-clock"></i>
                                                <time class="entry-date" datetime="2014-05-13T15:30:36+00:00" >
                                                    {{$artsUrls->created_at}}
                                                </time></span>
                                </div>
                           {{-- // $echo get_youtube_id_from_url($artsUrls->youtubeUrl); --}}
                                    {{-- {{$artsUrls->photo}} --}}
                                </div>
                            </div>
                        </div>
                        <!-- One full width row-->

                        <div class="column one single-photo-wrapper">

                            <div class="image_frame scale-with-grid">
                                <div class="image_wrapper">
                                    {{$artsUrls->youtubeUrl}}
                                    <iframe class="scale-with-grid"
                                        {{-- src="https://www.youtube.com/embed/{{get_youtube_id_from_url($artsUrls->youtubeUrl)}}" --}}
                                        allowFullScreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Content-->
                <div class="post-wrapper-content">
                    <div class="entry-content">
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                  {{$artsUrls->discreption}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-post-footer">
                        <div class="section_wrapper clearfix">
                            <!-- One full width row-->
                            <div class="column one post-pager"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Sidebar area-->

    </div>
</div>



@endsection


