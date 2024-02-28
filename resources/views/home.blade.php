@extends('layout.master')
@section('title')
{{ __('CPPRI | Home') }}
@endsection
@section('content')
<section class="wrapper banner-wrapper" role="banner">
    <h1 class="d-none">Banner</h1>
    <div id="flexSlider" class="flexslider">
        <ul class="slides">
            @if (isset($banner) && count($banner) > 0)
            @foreach ($banner as $banners)
            @if ($banners->public_url != '')
            <li>
                <img src="{{ asset('resources/uploads/banner/' . $banners->public_url) }}"
                    alt="{{ $banners->banner_title ?? '' }}" title="{{ $banners->banner_title ?? '' }}">
            </li>
            @else
            <li>
                <img src="{{ asset('resources/uploads/banner/default.jpg') }}" alt="Default Banner"
                    title="Default Banner">
            </li>
            @endif
            @endforeach
            @else
            <li>
                <img src="{{ asset('resources/uploads/banner/default.jpg') }}" alt="Default Banner"
                    title="Default Banner">
            </li>
            @endif
        </ul>
    </div>
</section>
<section class="latest-news">
    <h3 class="d-none">Latest News</h3>
    <div class="row px-0">
        <div class="col-md-3 col-4">
            <div class="latest-new-title position-relative z-index-9">
                <p class="change-color-code">
                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.Latest_News') }} :
                    @else
                    {{ __('messages.Latest_News') }} :
                    @endif
                </p>
            </div>
        </div>
        <div class="col-md-9 col-8">
            <div class="latest_news_marquee marquee-vertical" data-speed="40">
                <div class="marquee-wrapper">
                    <div class="marquee-content">
                        <div class="float-left d-inline-block ">
                            @if (isset($news_management) && count($news_management) > 0)
                            @foreach ($news_management as $news_managements)
                            <span>
                                @php
                                $url = $news_managements->public_url ?? '';
                                $title_hi = $news_managements->title_name_hi ?? '';
                                $title_en = $news_managements->title_name_en ?? '';
                                @endphp
                                @if ($news_managements->tab_type == '1')
                                @if (!empty($url))
                                <a href="{{ url($url) ??'' }}" target="_blank" class="me-3"
                                    onclick="return confirm('{{ $alertMessage  ??''}}')">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ $title_hi ?? '' }}
                                    @else
                                    {{ $title_en ?? '' }}
                                    @endif
                                </a>
                                @endif
                                @else
                                @if (!empty($url))
                                <a href="{{ $url  ??'' }}" target="_blank" class="me-3">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ $title_hi ?? '' }}
                                    @else
                                    {{ $title_en ?? '' }}
                                    @endif
                                </a>
                                @endif
                                @endif
                            </span>
                            @endforeach
                            @else
                            @if (Session::get('Lang') == 'hi')
                            <h5>{{ __('messages.comming_soon') }}</h5>
                            @else
                            <h5>{{ __('messages.comming_soon') }}</h5>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wrapper" id="skipCont"></div>
<!--/#skipCont-->
<section id="fontSize" class="wrapper body-wrapper ">
    <div class="bg-wrapper top-bg-wrapper gray-bg padding-top-bott">
        <div class="container common-container four_content body-container top-body-container padding-top-bott2">
            <div class="row">
                <div
                    class="banner-content-wrapper animate__animated animate__backInLeft animate__delay-3s col-md-8 col-lg-10 order-2 order-lg-1 pe-md-5 ">
                    <h2 class="border-bottom-color">
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Welcome_to') }}
                        @else
                        {{ __('messages.Welcome_to') }}
                        @endif
                        <span>CPPRI</span>
                    </h2>
                    <!-- <p class="banner-title-tag-line">Welcome to the website of Ministry/Department, Government of India.</p> -->
                    <p class="banner-content ">
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.about1') }}
                        @else
                        {{ __('messages.about1') }}
                        @endif
                    </p>
                    <p class="banner-content">
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.about2') }}
                        @else
                        {{ __('messages.about2') }}
                        @endif
                    </p>
                    <a href="{{url('about-us/overview')}}" title="Click here to know more"
                        class="change-border-color-text">
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Read_More') }}
                        @else
                        {{ __('messages.Read_More') }}
                        @endif
                        <i class="fa fa-angle-right"></i></a>
                </div>
                <div
                    class="minister clearfix animate__animated animate__backInRight animate__delay-3s col-md-4 col-lg-2 order-1 order-lg-2">
                    <div class=" clearfix ">
                        <div class="row px-lg-0 d-flex justify-content-end">
                            <div class="minister-sub col-md-12 minister-box">
                                <div class="minister-image"><img src="{{ asset('assets-cppri/images/director.jpg') }}"
                                        alt="Hon’ble Minister" title="Dr. M K Gupta Director"></div>
                                <div class="min-info">
                                    @if (Session::get('Lang') == 'hi')
                                    <h4>डॉ. एम. के. गुप्ता</h4>
                                    <h5><a href="{{url('about-us/director-desk')}}" title="कोयला मंत्री"><span>निदेशक
                                            </span></a>
                                    </h5>
                                    @else
                                    <h4>Dr. M. K. Gupta</h4>
                                    <h5><a href="{{url('about-us/director-desk')}}"
                                            title="Minister of Coal"><span>Director
                                            </span></a>
                                    </h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services section Start-->
    <section class="wf100 p75-50  depart-info">
        <div class="container common-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-content-wrapper services-heading">
                        <h2 class="mt-0 change-border-color-text">
                            @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Services') }}
                            @else
                            {{ __('messages.Services') }}
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-md-12 col-lg-8">
                    <!-- <div class="title-style-3 mb-20"><h2 class="border-bottom-color">Services</h2>
                                                                                                                </div> -->
                    <div class="row p-0">
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/publication.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.R_&_D_Projects') }}
                                        @else
                                        {{ __('messages.R_&_D_Projects') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('r-&-d-projects') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/achive.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Technical_Services') }}
                                        @else
                                        {{ __('messages.Technical_Services') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('technical-services') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/research.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Our_Achievements') }}
                                        @else
                                        {{ __('messages.Our_Achievements') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('our-achievements') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/member-card.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Publications_Reports') }}
                                        @else
                                        {{ __('messages.Publications_Reports') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('publications-&-reports') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/technical-support.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Institute_Membership') }}
                                        @else
                                        {{ __('messages.Institute_Membership') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('institute-membership') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <div class="col-md-4 col-6">
                            <div class="deprt-icon-box">
                                <img src="{{ asset('assets-cppri/theme/images/icons/tender.png') }}" alt="">
                                <div class="serv-h"> <a href="javascript:void(0);">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Tender') }}
                                        @else
                                        {{ __('messages.Tender') }}
                                        @endif
                                    </a> </div>
                                <a class="rm" href="{{ url('tender') }}">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Read_More') }}
                                    @else
                                    {{ __('messages.Read_More') }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!--Icon Box End-->
                        <!--Icon Box Start-->
                        <!--Icon Box End-->
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="banner-box-wrapper">
                        <div class="banner-box banner-box-1">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 2</h2> -->
                                <a href="{{ url('rti') }}" title="External link that opens in new tab">
                                    <img src="{{ asset('assets-cppri/images/rti.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.RTI') }}
                                        @else
                                        {{ __('messages.RTI') }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-5 ">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 1</h2> -->
                                <a href="https://www.pgportal.gov.in/" title="GRIEVANCE CELL" target="_blank"
                                    onclick="return confirm('This link will take you to an external web site.')">
                                    <img src="{{ asset('assets-cppri/images/grivence_rti.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Grievance_Cell') }}
                                        @else
                                        {{ __('messages.Grievance_Cell') }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-2 ">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 2</h2> -->
                                <a href="https://www.pgportal.gov.in/" target="_blank"
                                    title="External link that opens in new tab"
                                    onclick="return confirm('{{ $alertMessage ?? '' }}')">
                                    <img src="{{ asset('assets-cppri/images/public.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Public_Grievance_Cell') }}
                                        @else
                                        {{ __('messages.Public_Grievance_Cell') }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-3 ">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 3</h2> -->
                                <a href="{{ url('quick-links/rules-and-regulation') }}"
                                    title="External link that opens in new tab">
                                    <img src="{{ asset('assets-cppri/images/regulation.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Rules_and_Regulation') }}
                                        @else
                                        {{ __('messages.Rules_and_Regulation') }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-4 ">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 3</h2> -->
                                <a href="https://mail.gov.in/iwc_static/c11n/allDomain/layout/login_gov2.jsp?lang=en&3.0.1.2.0_15121607&svcs=abs,mail,smime,calendar,c11n"
                                    title="External link that opens in new tab"
                                    onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank">
                                    <img src="{{ asset('assets-cppri/images/mail.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Webmail') }}
                                        @else
                                        {{ __('messages.Webmail') }}
                                        @endif
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section END-->
    <div class="wrapper banner-bg-white overflow-hidden" role="main">
        <div class="press-release-overlay"></div>
        <div class="press-release-background-image position-absolute z-index-0 h-100 w-100">
            <img src="{{ asset('assets-cppri/images/press-release.png') }}" class="h-100 w-100" alt="background image">
        </div>
        <div
            class="container common-container four_content banner-container body-container top-body-container  z-index-2">
            <div class="left-block   ">
                <div class="row py-md-5 py-0 px-0">
                    <div class="col-md-4 col-lg-4 mb-3 mb-md-0 pe-md-0">
                        <div class="left-col-2 notification">
                            <div class="page-tab clearfix">
                                <div class="page-tab-res clearfix">
                                    <div>
                                        <ul class="resp-tabs-list hor_1 change-color-code ">
                                            <li
                                                class="border-l change-border-color-text resp-tab-item hor_1 resp-tab-active">
                                                <a href="javascript:viod(0)" class="change-text-color pe-none">
                                                    @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.Notification') }}
                                                    @else
                                                    {{ __('messages.Notification') }}
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1 ">
                                            <div class="clearfix">
                                                <div class="content-wrapper">
                                                    <p class="text-slide pause" onclick="changeClass()"></p>
                                                    <div class="scroll-left p-2">
                                                        <ul class=" scroll-text  list scroll-animation">
                                                            @if (isset($notification) && count($notification) > 0)
                                                            @foreach ($notification as $notifications)
                                                            <li>
                                                                @php
                                                                $notiUrl = $notifications->url_link ??
                                                                'javascript:void(0)';
                                                                @endphp
                                                                <div class="list-content">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                    {{ $notifications->recent_activities_hi ?? '' }}
                                                                    @else
                                                                    {{ $notifications->recent_activities_en ?? '' }}
                                                                    @endif
                                                                    &nbsp;
                                                                    @if ($notifications->tab_type == 1)
                                                                    <a onclick="return confirm('{{ $alertMessage ?? '' }}')"
                                                                        target="_blank" href="{{ $notiUrl ?? '' }}"
                                                                        class="text-danger">Click
                                                                        here to apply</a>
                                                                    @else
                                                                    <a href="{{ $notiUrl ?? '' }}"
                                                                        class="text-danger">Click
                                                                        here to apply</a>
                                                                    @endif
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                            @else
                                                            @if (Session::get('Lang') == 'hi')
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @else
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @endif
                                                            @endif
                                                        {{--
                                                            <li>
                                                            <div class="list-content">
                                                                <a href="https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6"
                                                                    target="_blank">Online Public Grievance Redressal
                                                                    through VC Hosted
                                                                    by CPPRI (4PM to 5PM) at
                                                                    https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-content">
                                                                ADVERTISEMENT No. 03/2023 Recruitment to the post of Sr.
                                                                Scientific
                                                                Assistants, Technicians Gr.III(i) and Technicians Gr. II
                                                                &nbsp; <a href="https://cppri.in" target="_blank"
                                                                    class="text-danger">Click
                                                                    here to apply</a>
                                                            </div>
                                                        </li>

                                                        <li>
                                                                <div class="date">
                                                                    <span class="change-color-code">
                                                                        2
                                                                    </span>
                                                                    <em>
                                                                        JAN 2024
                                                                    </em>
                                                                </div>
                                                                <div class="list-content">
                                                                    <a href="http://localhost/cppri-website/cppri-website/tender" tabindex="0">
                                                                        Lorem ipsum dolor sit amet consectetur
                                                                        adipisicing elit.
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            --}}
                                                        </ul>
                                                    </div>
                                                    <div class="view-footer"><a href="{{route('notification')}}"
                                                            title="View A ll" class="change-border-color-text"><span>
                                                                @if (Session::get('Lang') == 'hi')
                                                                {{ __('messages.View_all') }}
                                                                @else
                                                                {{ __('messages.View_all') }}
                                                                @endif
                                                                <i class="fa fa-angle-right"></i>
                                                            </span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 mb-3 mb-md-0 pe-md-0">
                        <div class="left-col-2 press_released">
                            <div class="page-tab clearfix">
                                <div class="page-tab-res clearfix">
                                    <div>
                                        <ul class="resp-tabs-list hor_1 change-color-code ">
                                            <li
                                                class="border-l resp-tab-item hor_1 resp-tab-active change-border-color-text">
                                                <a href="javascript:viod(0)" class="change-text-color pe-none">
                                                    @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.Press_Release') }}
                                                    @else
                                                    {{ __('messages.Press_Release') }}
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1" >
                                            <div class="clearfix" id="hor_1_tab_item-1">
                                                <div class="content-wrapper">
                                                    <p class="text-slide01 pause" onclick="changeClass01()"></p>
                                                    <div class="scroll-left p-2">
                                                        <ul class="scroll-text01 list scroll-animation">
                                                            @if (isset($press_release) && count($press_release) > 0)
                                                            @foreach ($press_release as $press_releases)
                                                            @php
                                                            $pressUrl = $press_releases->url_link ??
                                                            'javascript:void(0)';
                                                            @endphp
                                                            <li>
                                                                @if ($press_releases->tab_type == 1)
                                                                <a onclick="return confirm('{{ $alertMessage ?? '' }}')"
                                                                    target="_blank" href="{{ $pressUrl ?? '' }}">
                                                                    <div class="list-content">
                                                                        @if (Session::get('Lang') == 'hi')
                                                                        {{ $press_releases->recent_activities_hi ?? '' }}
                                                                        @else
                                                                        {{ $press_releases->recent_activities_en ?? '' }}
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                                @else
                                                                <a href="{{ $pressUrl ?? '' }}">
                                                                    <div class="list-content">
                                                                        @if (Session::get('Lang') == 'hi')
                                                                        {{ $press_releases->recent_activities_hi ?? '' }}
                                                                        @else
                                                                        {{ $press_releases->recent_activities_en ?? '' }}
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                                @endif
                                                            </li>
                                                            @endforeach
                                                            @else
                                                            @if (Session::get('Lang') == 'hi')
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @else
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @endif
                                                            @endif
                                                         {{--
                                                            <li>
                                                            <div class="list-content">Description of Press Release 1
                                                                goes here
                                                                mm-dd-yyyy - File type (size) DD-MM-YYYY. </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-content">Description of Press Release 2
                                                                goes here
                                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                                        </li>
                                                        <li>
                                                            <div class="list-content">Description of Press Release 3
                                                                goes here
                                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                                        </li>
                                                        <li>
                                                            <div class="list-content">Description of Press Release 4
                                                                goes here
                                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                                        </li>
                                                            --}}
                                                        </ul>
                                                    </div>
                                                    <div class="view-footer"><a href="{{route('press-release')}}"
                                                            title="View All" class="change-border-color-text"><span>
                                                                @if (Session::get('Lang') == 'hi')
                                                                {{ __('messages.View_all') }}
                                                                @else
                                                                {{ __('messages.View_all') }}
                                                                @endif
                                                                <i class="fa fa-angle-right"></i>
                                                            </span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ************ -->
                    <div class="col-md-4 col-lg-4 mb-3 mb-md-0 pe-md-0">
                        <div class="left-col-2 ">
                            <div class="page-tab clearfix">
                                <div class="page-tab-res clearfix">
                                    <div>
                                        <ul class="resp-tabs-list hor_1 change-color-code">
                                            <li
                                                class="border-l resp-tab-item hor_1 resp-tab-active change-border-color-text">
                                                <a href="javascript:viod(0)" class="change-text-color pe-none">
                                                    @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.Tender') }}
                                                    @else
                                                    {{ __('messages.Tender') }}
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1">
                                            <div class="clearfix">
                                                <div class="content-wrapper">
                                                    <p class="text-slide01 pause" onclick="changeClass1()"
                                                        id="tender_pause_button"></p>
                                                    <div class=" scroll-left p-2" >
                                                        <ul class="list scroll-animation" id="tender_scroll">
                                                            @if (isset($tender_management) && count($tender_management)
                                                            > 0)
                                                            @foreach ($tender_management as $tender_managements)
                                                            <li>
                                                                <a href="{{ url('tender') }}">
                                                                    <div class="date">
                                                                        <span class="change-color-code">
                                                                            @if($tender_managements->start_date != '')
                                                                            {{ date('d', strtotime($tender_managements->start_date)) }}
                                                                            @endif
                                                                        </span>
                                                                        <em>
                                                                            @if($tender_managements->start_date != '')
                                                                            {{ date('M Y', strtotime($tender_managements->start_date)) }}
                                                                            @endif
                                                                        </em>
                                                                    </div>
                                                                    <div class="list-content">
                                                                        {{ $tender_managements->title_name_en ?? '' }}
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <!-- ********************* -->
                                                            <!-- ********************* -->
                                                            @endforeach
                                                            @else
                                                            @if (Session::get('Lang') == 'hi')
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @else
                                                            <li class="list-unstyled border-0">
                                                                {{ __('messages.comming_soon') }}</li>
                                                            @endif
                                                            @endif

                                                           {{--
                                                            <li>
                                                                <div class="date">
                                                                    <span class="change-color-code">
                                                                        2
                                                                    </span>
                                                                    <em>
                                                                        JAN 2024
                                                                    </em>
                                                                </div>
                                                                <div class="list-content">
                                                                    <a href="{{ url('tender') }}">
                                                                        Lorem ipsum dolor sit amet consectetur
                                                                        adipisicing elit.
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            --}}


                                                        </ul>
                                                    </div>
                                                    <div class="view-footer"><a href="{{ url('tender') }}"
                                                            title="Know More About Tenders"
                                                            class="change-border-color-text"><span>
                                                                @if (Session::get('Lang') == 'hi')
                                                                {{ __('messages.View_all') }}
                                                                @else
                                                                {{ __('messages.View_all') }}
                                                                @endif
                                                                <i class="fa fa-angle-right"></i>
                                                            </span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ************ -->
                </div>
            </div>
        </div>
    </div>
    <section class="wf100 city-news p75 bg-white">
        <div class="container common-container four_content banner-container">
            <div class="title-style-3">
            </div>
            <div class="row">
                <!--News Box Start-->
                <div class="col-md-6 col-sm-6 PL-LG-0">
                    <div class="news-box">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <div class="new-thumb">
                                    <div>
                                        <span class="cat c1 change-color-code">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.academic_program') }}
                                            @else
                                            {{ __('messages.academic_program') }}
                                            @endif
                                        </span>
                                        <img src="{{ asset('assets-cppri/images/msc.jpg') }}" alt="Academic Program">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 p-0">
                                <div class="new-txt">
                                    <h6><a href="{{url('academic-program')}}">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.academic_program') }}
                                            @else
                                            {{ __('messages.academic_program') }}
                                            @endif
                                        </a></h6>
                                    <span class="duration">
                                        @if (Session::get('Lang') == 'hi')
                                        अवधि - दो वर्ष (4 सेमेस्टर) </span>
                                    <p> भारतीय पल्प से मिलने के लिए &amp; कागज उद्योग की तकनीकी आवश्यकता
                                        प्रशिक्षित जनशक्ति, वन
                                        रिसर्च यूनिवर्सिटी (डीम्ड यूनिवर्सिटी)...
                                    </p>
                                    @else
                                    Duration- Two year (4 semesters) </span>
                                    <p> To meet the Indian Pulp &amp; Paper Industry’s requirement of technically
                                        trained manpower, Forest
                                        Research University ( Deemed University)...
                                    </p>
                                    @endif
                                    <a class="button change-text-color"
                                        href="{{url('academic/academic-program/m-sc-program')}}">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.more_details') }}
                                        @else
                                        {{ __('messages.more_details') }}
                                        @endif
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Box End-->
                <!--News Box Start-->
                <div class="col-md-6  col-sm-6 PR-LG-0">
                    <div class="news-box mb-0">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <div class="new-thumb">
                                    <div>
                                        <span class="cat c1 change-color-code">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.training_program') }}
                                            @else
                                            {{ __('messages.training_program') }}
                                            @endif
                                        </span> <img src="{{ asset('assets-cppri/images/phd.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 p-0">
                                <div class="new-txt">
                                    <h6><a href="{{url('academic-program')}}">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.training_program') }}
                                            @else
                                            {{ __('messages.training_program') }}
                                            @endif
                                        </a></h6>
                                    <span class="duration">
                                        @if (Session::get('Lang') == 'hi')
                                        अवधि- प्रोग्राम स्ट्रीम पर निर्भर करता है
                                        <p> एक व्यापक और अच्छी तरह से संरचित प्रशिक्षण कार्यक्रम लागू करना आवश्यक है
                                            इष्टतम को बढ़ावा देने के लिए...
                                        </p>
                                        @else
                                        Duration- Depends on program stream
                                    </span>
                                    <p> Implementing a comprehensive and well-structured training program is essential
                                        for fostering optimal ...
                                    </p>
                                    @endif
                                    <a class="button change-text-color" href="{{url('academic/training-program')}}">
                                        @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.more_details') }}
                                        @else
                                        {{ __('messages.more_details') }}
                                        @endif
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper banner-bg-white ptb-30 pb-0" role="feed">
        <div class="container common-container four_content banner-container body-container top-body-container p-0">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2>
                                <span class="img-b"><img src="{{ asset('assets-cppri/images/facebook.png') }}"
                                        alt="icon">
                                </span>
                                @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Facebook') }}
                                @else
                                {{ __('messages.Facebook') }}
                                @endif
                            </h2>
                        </div>
                        <div class="plug-box facebook-feed-content text-center">
                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100090718134100"
                                data-tabs="timeline" data-width="360" data-height="295" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/profile.php?id=100090718134100"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/profile.php?id=100090718134100">Central Pulp and
                                        Paper
                                        Research Institute</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="twitter-c">
                                <span class="img-b"><img src="{{ asset('assets-cppri/images/twitter.png') }}"
                                        alt="icon">
                                </span>
                                @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Twitter') }}
                                @else
                                {{ __('messages.Twitter') }}
                                @endif
                            </h2>
                        </div>
                        <div class="plug-box twitter-feed-content p-2">
                            <blockquote class="twitter-tweet">
                                <p lang="en" dir="ltr">On 18.10.2023, Old Newspapers, Old Magazines and Shredded
                                    Office waste
                                    was disposed of under the ongoing # Special Campaign 3.0. The total space freed
                                    after
                                    disposal of paper waste was 700 sqr. ft. <a
                                        href="https://t.co/e8nghNwqSj">pic.twitter.com/e8nghNwqSj</a></p>&mdash; Central
                                Pulp
                                &amp; Paper Research Institute (@CppriSaharanpur) <a
                                    href="https://twitter.com/CppriSaharanpur/status/1714938725103464730?ref_src=twsrc%5Etfw">October
                                    19, 2023</a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js"></script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="linkedin-c">
                                <span class="img-b"><img src="{{ asset('assets-cppri/images/linkedin1.png') }}"
                                        alt="icon">
                                </span>
                                @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Linkedin') }}
                                @else
                                {{ __('messages.Linkedin') }}
                                @endif
                            </h2>
                        </div>
                        <div class="plug-box linkedinfeed">
                            <img src="{{ asset('assets-cppri/images/linkedin_feed.PNG') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="instagram-c">
                                <span class="img-b"><img src="{{ asset('assets-cppri/images/instagram.png') }}"
                                        alt="icon">
                                </span>
                                @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Instagram') }}
                                @else
                                {{ __('messages.Instagram') }}
                                @endif
                            </h2>
                        </div>
                        <div class="plug-box linkedinfeed">
                            <!-- <img src="{{ asset('assets-cppri/images/linkedin_feed.PNG') }}" alt=""> -->
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/cpprisocial/"
                                data-instgrm-version="12"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:288px; min-width:280px; padding:0; width:288px; width:288px;height:295px;max-height:100%; width:288px;">
                                <div style="padding:16px;"> <a id="main_link" href="cpprisocial"
                                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                        target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                                width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div
                                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                View this post on Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div
                                            style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                </div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                </div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div
                                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                            </div>
                                        </div>
                                    </a>
                                    <p
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="cpprisocial"
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                            target="_blank">Shared post</a> on <span
                                            style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;">Time</span>
                                    </p>
                                </div>
                            </blockquote>
                            <script src="https://www.instagram.com/embed.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- photo gallery section start -->
<div class="gallery-section p-32">
    <div class="">
        <div class="container">
            <div class="row px-0">
                <div class="col-md-6">
                    <div class="gallery-lbox new_gall_boxhead_change">
                        <div class="content">
                            <div class="sec-title3 text-center  ">
                                <h2 class="title mb-10">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Photo_Gallery') }}
                                    @else
                                    {{ __('messages.Photo_Gallery') }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="rs-carousel owl-carousel nav-style2 gallery-carausel" data-loop="true"
                                data-items="4" data-margin="10" data-autoplay="true" data-hoverpause="true"
                                data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
                                data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2"
                                data-md-device-nav="false" data-md-device-dots="false" id="banner3">
                                @if (isset($galleryData) && !empty($galleryData))
                                @foreach ($galleryData as $k => $galleryDatas)
                                <div class="team-item">
                                    <div class="gallery-box">
                                        @if (count($galleryDatas['gallery_details']) > 0)
                                        <img @if (isset($galleryDatas['gallery_details'][0]->public_url) &&
                                        !blank($galleryDatas['gallery_details'][0]->public_url))
                                        src="{{ asset('resources/uploads/GalleryManagement/' . $galleryDatas['gallery_details'][0]->public_url) }}"
                                        @endif
                                        alt="" rel="noopener noreferrer">
                                        <div class="text-gallery">
                                            {{ $galleryDatas['gallery']->title_name_en ?? '' }}
                                        </div>
                                        @else
                                        <p>No images available for this gallery.</p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="btn-view_play">
                            <div class="btn-part  text-center">
                                <a class="readon2" href="{{ route('photo-gallery') }}" rel="noopener noreferrer">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.View_all') }}
                                    @else
                                    {{ __('messages.View_all') }}
                                    @endif
                                </a>
                            </div>
                            <div class="btns">
                                <div id="customPreviousBtn3"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div id="customPause3"><i class="fa fa-pause" aria-hidden="true"></i></div>
                                <div id="customPlay3" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <div id="customNextBtn3"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery-lbox video-sec new_gall_boxhead_change">
                        <div class="content">
                            <div class="sec-title3 text-center ">
                                <h2 class="title mb-10">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.video_gallery') }}
                                    @else
                                    {{ __('messages.video_gallery') }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="rs-carousel owl-carousel nav-style2 gallery-carausel" data-loop="true"
                                data-items="4" data-margin="10" data-autoplay="true" data-hoverpause="true"
                                data-autoplay-timeout="4500" data-smart-speed="900" data-dots="false" data-nav="false"
                                data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2"
                                data-md-device-nav="false" data-md-device-dots="false" id="banner4">
                                @if (isset($galleryVideo) && !empty($galleryVideo))
                                @foreach($galleryVideo as $videos)
                                @foreach($videos['gallery_details'] as $videoId)
                                <div class="team-item">
                                    <div class="gallery-box media-icon orange-color">
                                        @if($videoId->public_url)
                                        {!! '<div class="youtube-player" data-video-id="' . $videoId->public_url . '">
                                        </div>'!!}
                                        @else
                                        <p>No images available for this gallery.</p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="btn-view_play">
                            <div class="btn-part  text-center">
                                <a class="readon2 mt-2" href="{{ route('video-gallery') }}" rel="noopener noreferrer"
                                    tabindex="0">
                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.View_all') }}
                                    @else
                                    {{ __('messages.View_all') }}
                                    @endif
                                </a>
                            </div>
                            <div class="btns">
                                <div id="customPreviousBtn4"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div id="customPause4"><i class="fa fa-pause" aria-hidden="true"></i></div>
                                <div id="customPlay4" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <div id="customNextBtn4"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- photo gallery section end -->
<!--/.body-wrapper-->
<!--Client logo start-->
<section class="wrapper carousel-wrapper clientail">
    <h2 class="d-none">Carousel</h2>
    <div class="container common-container four_content carousel-container">
        <div id="flexCarousel" class="flexslider carousel">
            <ul class="slides">
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                        href="http://digitalindia.gov.in/" title="Digital India"><img
                            src="{{ asset('assets-cppri/images/carousel/digital-india.png') }}" alt="Digital India"></a>
                </li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                        href="http://www.makeinindia.com/" title="Make In India"> <img
                            src="{{ asset('assets-cppri/images/carousel/makeinindia.png') }}" alt="Make In India"></a>
                </li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank" href="http://india.gov.in/"
                        title="National Portal of India"><img
                            src="{{ asset('assets-cppri/images/carousel/india-gov.png') }}"
                            alt="National Portal of India"></a></li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                        href="http://goidirectory.nic.in/" title="GOI Web Directory"><img
                            src="{{ asset('assets-cppri/images/carousel/goidirectory.png') }}"
                            alt="GOI Web Directory"></a></li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank" href="https://data.gov.in/"
                        title="Data portal"><img src="{{ asset('assets-cppri/images/carousel/data-gov.png') }}"
                            alt="Data portal"></a>
                </li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank" href="https://mygov.in/"
                        title="MyGov"><img src="{{ asset('assets-cppri/images/carousel/mygov.png') }}"
                            alt="MyGov Portal"></a>
                </li>
                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                        href="http://www.dcpulppaper.org/index.html"
                        title="Development Council for Pulp Paper & Allied Industries"><img
                            src="{{ asset('assets-cppri/images/carousel/Development-logo.png') }}"
                            alt="MyGov Portal"></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Client logo end-->

<div class="loader-bg"></div>
<div class="loader">

    <div class="loading-dots" id="cppri_loader">
        <img src="{{ asset('assets-cppri/images/logo.png') }}" alt="">
        <div>
            <div class="loading-dots--dot"></div>
            <div class="loading-dots--dot"></div>
            <div class="loading-dots--dot"></div>
        </div>

    </div>
</div>
<div id="costumModal8" class="modal fade" data-bs-easein="shrinkIn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"> <i
                        class="fa fa-times" aria-hidden="true"></i> </button>
                <img src="{{ asset('assets-cppri/images/CoronaAppeal.gif') }}" data-id="show" alt=""
                    class="md-img show-model">
            </div>
        </div>
    </div>
</div>
@endsection
