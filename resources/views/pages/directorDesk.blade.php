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
                            {{ __('messages.Director_Desk') }}
                        @else
                            {{ __('messages.Director_Desk') }}
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
                    <li><a href="home.html">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>
                    <li><a href="javascript:void();">About us</a></li>   
                    <li><a href="javascript:void();">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Director_Desk') }}
                            @else
                                {{ __('messages.Director_Desk') }}
                            @endif
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container common-container">
        <!--/.nav-wrapper-->
        <section class="sidebar-main-nav">
            <div class="col-md-12 m-p-0 pl-0">
                <div class="main-content">
                    <!--/#skipCont-->
                    <section id="fontSize" class="wrapper body-wrapper ">
                        <!--/#page-head-->
                        @if (isset($Director) && $Director != '')
                            <section id="paragraph" class="wrapper paragraph-wrapper">
                                <div class=" common-container four_content">
                                    <h3 class="dir-dsk-title mt-3 mb-3">

                                     @if (Session::get('Lang') == 'hi')
                                         {{ __('messages.Director_Desk') }}
                                     @else
                                        {{ __('messages.Director_Desk') }}
                                     @endif

                                    </h3>
                                    <div class="row p-0">
                                        <div class="col-md-3">
                                            <div class="addevent-box text-center">
                                                <div class="profile-img">
                                                    @if ($Director->public_url != '')
                                                        <img src="{{ asset('resources/uploads/empDirectory/' . $Director->public_url) }}"
                                                            alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                            title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                            loading="lazy">
                                                    @else
                                                        <img src="{{ asset('assets-cppri/images/profile--.jpg') }}"
                                                            alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                            title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                            loading="lazy">
                                                    @endif


                                                    <h4 class="pb-10" tabindex="0">

                                                        @if (Session::get('Lang') == 'hi')
                                                            {{ $Director->fname_hi ?? '' }}
                                                            {{ $Director->mname_hi ?? '' }}
                                                            {{ $Director->lname_hi ?? '' }}
                                                        @else
                                                            {{ $Director->fname_en ?? '' }}
                                                            {{ $Director->mname_en ?? '' }}
                                                            {{ $Director->lname_en ?? '' }}
                                                        @endif



                                                    </h4>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>


                                                @if (Session::get('Lang') == 'hi')
                                                    {!! $Director->description_hi !!}
                                                @else
                                                    {!! $Director->description_en !!}
                                                @endif

                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif

                        @if (isset($content))
                            <h1> {{ $content ?? '' }} </h1>
                        @endif


                </div>
            </div>
        </section>

    </div>
@endsection
