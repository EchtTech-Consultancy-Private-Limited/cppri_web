@extends('layout.master')
@section('title')
    {{ __('CPPRI |' . ' ' . $title) }}
@endsection

@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.video_gallery') }}
                        @else
                            {{ __('messages.video_gallery') }}
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content ">
                <ul>
                    <li><a href="{{ url('/') }}">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>

                    <li><a href="javascript:void();">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.video_gallery') }}
                            @else
                                {{ __('messages.video_gallery') }}
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container common-container">
        <section class="sidebar-main-nav">
            <div class="col-md-12 p-0">
                <div class="main-content">
                    <section id="fontSize" class="wrapper body-wrapper rs-blog main-home">
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class=" common-container four_content mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="heading-title mt-3 pb-1 px-lg-3">
                                                @if (isset($galleryVideo) && count($galleryVideo) > 0)
                                                    @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.video_gallery') }}
                                                    @else
                                                    {{ __('messages.video_gallery') }}
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        @if (isset($galleryVideo) && count($galleryVideo) > 0)
                                            <div class="rs-blog main-home col-md-12">
                                                <div class="container1 row">
                                                    <div class="col-md-6">
                                                        @foreach ($galleryVideo as $videos)
                                                            @if (count($videos['gallery_details']) > 0)
                                                                @foreach ($videos['gallery_details'] as $key => $videoId)
                                                                    <div class="mySlides">
                                                                        @if ($videoId->public_url)
                                                                            {!! '<div class="youtube-player youtube-iframe" data-video-id="' . $videoId->public_url . '"></div>' !!}
                                                                        @else
                                                                            <p>No video available for this gallery.</p>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                                            @endif
                                                        @endforeach
                                                    </div>                                              
                                                    <div class="col-md-6">
                                                        <div class="col-box-g">
                                                        <div class="row ps-0">
                                                            @foreach ($galleryVideo as $key => $videos)
                                                                @if (count($videos['gallery_details']) > 0)                                                        
                                                                    @foreach ($videos['gallery_details'] as $videoId)
                                                                        <div class="col-md-3 mb-2">
                                                                            <img class="demo cursor fancybox-close" @if (!blank($videoId->public_url))
                                                                                src="https://i.ytimg.com/vi/{{ $videoId->public_url }}/maxresdefault.jpg"
                                                                                style="width:100%" onclick="currentSlide({{ $key + 1 }})"
                                                                                alt=""
                                                                            @endif>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                </div>
                                            </div>
                                        @else
                                        <p>No video found in the gallery.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
