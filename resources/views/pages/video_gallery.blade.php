@extends('layout.master')
@section('title')
    {{ __('CPPRI |'.' '.$title) }}
@endsection

@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.photo_gallery') }}
                        @else
                            {{ __('messages.photo_gallery') }}
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
                                {{ __('messages.photo_gallery') }}
                            @else
                                {{ __('messages.photo_gallery') }}
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container common-container">
        <!--/.nav-wrapper-->
        <section class="sidebar-main-nav">
            <div class="col-md-12 p-0">
                <div class="main-content">
                    <!--/#skipCont-->
                    <section id="fontSize" class="wrapper body-wrapper ">
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class=" common-container four_content mb-5">
                                <h3 class="dir-dsk-title mt-3">

                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.video_gallery') }}
                                    @else
                                        {{ __('messages.video_gallery') }}
                                    @endif

                                </h3>

                                
                                        <p>No images found in the gallery.</p>

                                    </div>

                            </div>
                        </section>

                    </section>
                </div>
            </div>
        </section>

    </div>


@endsection
