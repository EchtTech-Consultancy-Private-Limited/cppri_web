@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')


    <section class="wrapper banner-wrapper">
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
            <div class="col-md-2">
                <div class="latest-new-title">
                    <p class="change-color-code">
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Latest_News') }} :
                        @else
                            {{ __('messages.Latest_News') }} :
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="marquee">


                    <div>
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
                                            <a href="{{ url($url) }}" onclick="return confirm('{{ $alertMessage  ??''}}')"
                                                target="_blank" >

                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $title_hi ?? '' }}
                                                @else
                                                    {{ $title_en ?? '' }}
                                                @endif

                                            </a>
                                        @endif
                                    @else
                                        @if (!empty($url))
                                            <a href="{{ url($url) }}" >
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
                            <h5 >No news available.</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper" id="skipCont"></div>
    <!--/#skipCont-->
    <section id="fontSize" class="wrapper body-wrapper ">
        <h2 class="d-none">Body</h2>
        <div class="bg-wrapper top-bg-wrapper gray-bg padding-top-bott">
            <div class="container common-container four_content body-container top-body-container padding-top-bott2">
                <div class="minister clearfix animate__animated animate__backInRight animate__delay-3s">
                    <div class="minister-box clearfix">
                        <div class="minister-sub">
                            <div class="minister-image"><img src="{{ asset('assets-cppri/images/director.jpg') }}"
                                    alt="Hon’ble Minister" title="Dr. M K Gupta Director"></div>
                            <div class="min-info">
                                <h4>Dr. M K Gupta</h4>
                                <h5><a href="javascript:void(0);" title="Minister of Coal"><span>Director </span></a>
                                </h5>
                            </div>
                        </div>
                        <div class="minister-sub">
                            <div class="minister-image"><img src="{{ asset('assets-cppri/images/a_k_dixit.png') }}"
                                    alt="minister of state coal and mines" title="Dr. A. K. Dixit Scientist-F">
                            </div>
                            <div class="min-info">
                                <h4>Dr. A. K. Dixit</h4>
                                <h5><a href="javascript:void(0);" title="Minister of State"><span>Scientist-F</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content-wrapper animate__animated animate__backInLeft animate__delay-3s">
                    <h2 class="border-bottom-color">

                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Welcome_to') }} :
                        @else
                            {{ __('messages.Welcome_to') }} :
                        @endif


                        <span>CPPRI</span>
                    </h2>
                    <!-- <p class="banner-title-tag-line">Welcome to the website of Ministry/Department, Government of India.</p> -->
                    <p class="banner-content mb-0">

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
                    <br>
                    <a href="javascript:void(0);" title="Click here to know more">Read more <i
                            class="fa fa-angle-right"></i></a> 
                </div>
            </div>
        </div>

        <!-- Services section Start-->

        <section class="wf100 p75-50  depart-info">
            <div class="container common-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-content-wrapper services-heading">
                            <h2 class="mt-0">
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
                    <div class="col-md-8">
                        <!-- <div class="title-style-3 mb-20">
                                                                                                                    <h2 class="border-bottom-color">Services</h2>
                                                                                                                </div> -->
                        <div class="row p-0">
                            <!--Icon Box Start-->
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/publication.png') }}"
                                        alt="">
                                    <h6> <a href="javascript:void(0);">
                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.R_&_D_Projects') }}
                                            @else
                                                {{ __('messages.R_&_D_Projects') }}
                                            @endif
                                        </a> </h6>
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
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/achive.png') }}" alt="">
                                    <h6> <a href="javascript:void(0);">

                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.Technical_Services') }}
                                            @else
                                                {{ __('messages.Technical_Services') }}
                                            @endif



                                        </a> </h6>
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
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/research.png') }}" alt="">
                                    <h6> <a href="javascript:void(0);">
                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.Our_Achievements') }}
                                            @else
                                                {{ __('messages.Our_Achievements') }}
                                            @endif


                                        </a> </h6>
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
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/member-card.png') }}"
                                        alt="">
                                    <h6> <a href="javascript:void(0);">


                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.Publications_Reports') }}
                                            @else
                                                {{ __('messages.Publications_Reports') }}
                                            @endif

                                        </a> </h6>
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
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/technical-support.png') }}"
                                        alt="">
                                    <h6> <a href="javascript:void(0);">


                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.Institute_Membership') }}
                                            @else
                                                {{ __('messages.Institute_Membership') }}
                                            @endif


                                        </a> </h6>
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
                            <div class="col-md-4 col-sm-4">
                                <div class="deprt-icon-box">
                                    <img src="{{ asset('assets-cppri/theme/images/icons/tender.png') }}" alt="">
                                    <h6> <a href="javascript:void(0);">

                                            @if (Session::get('Lang') == 'hi')
                                                {{ __('messages.Tender') }}
                                            @else
                                                {{ __('messages.Tender') }}
                                            @endif

                                        </a> </h6>
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
                    <div class="col-md-4">
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
                                    <a href="{{ url('grievance-cell') }}" title="External link that opens in new tab">
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
                                    <a href="{{ url('public-grievance-cell') }}"
                                        title="External link that opens in new tab"
                                        onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank">

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
                                    <a href="{{ url('rules-and-regulation') }}"
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
                                    <a href="{{ url('webmail') }}" title="External link that opens in new tab"
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



        <!-- <div class="links-wrapper change-color-code">
                                                                                                    <div class="container common-container ptb-10">


                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="banner-content-wrapper services-heading">
                                                                                                                    <h2 class="text-white mt-0">
                                                                                                                        @if (Session::get('Lang') == 'hi')
    {{ __('messages.Services') }}
@else
    {{ __('messages.Services') }}
    @endif
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>


                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/publication.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">R &amp; D Projects</span>
                                                                                                            </a>
                                                                                                        </div>

                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/achive.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">Technical Services </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/research.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">Our Achievements</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/member-card.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">Publications &amp; Reports</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/technical-support.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">Institute Membership</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="icon-box">
                                                                                                            <a href="javascript:void();">
                                                                                                                <span class="icon-box-ico">
                                                                                                                    <img src="{{ asset('assets-cppri/theme/images/icons/tender.png') }}" alt="">
                                                                                                                </span>
                                                                                                                <span class="icon-box-text">Tender</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div> -->


        <!-- <div class="wrapper home-banner"> -->
        <div class="wrapper banner-bg-white">
            <div class="container common-container four_content banner-container body-container top-body-container">

                <div class="left-block">
                    <div class="left-col-2">
                        <div class="page-tab clearfix">
                            <div class="page-tab-res clearfix">
                                <div id="parentHorizontalTab">
                                    <ul class="resp-tabs-list hor_1 change-color-code">
                                        <li class="border-l"><a href="javascript:viod(0)" id="tab-list-1">

                                                @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.Notification') }}
                                                @else
                                                    {{ __('messages.Notification') }}
                                                @endif


                                            </a>
                                        </li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1">
                                        <div class="clearfix" id="hor_1_tab_item-0">
                                            <div class="content-wrapper">
                                                <p class="text-slide pause" onclick="changeClass()"></p>
                                                <div class="scroll-text scroll-left">
                                                    <ul class="list">


                                                        @if (isset($notification) && count($notification) > 0)
                                                            @foreach ($notification as $notifications)
                                                                <li>
                                                                    @php
                                                                        $notiUrl = $notifications->url_link ?? 'javascript:void(0)';
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
                                                                                target="_blank"
                                                                                href="{{ $notiUrl ?? '' }}"
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
                                                            <h5 >No notifications available.</h5>
                                                        @endif

                                                        {{-- <li>
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
                                                        </li> --}}

                                                    </ul>
                                                </div>
                                                <div class="view-footer"><a href="javascript:void();"
                                                        title="Read More"><span>


                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ __('messages.Read_More') }}
                                                            @else
                                                                {{ __('messages.Read_More') }}
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

                    <div class="left-col-2">
                        <div class="page-tab clearfix">
                            <div class="page-tab-res clearfix">
                                <div id="parentHorizontalTab">
                                    <ul class="resp-tabs-list hor_1 change-color-code">
                                        <li class="border-l resp-tab-item hor_1 resp-tab-active"><a
                                                href="javascript:viod(0)" id="tab-list-1">

                                                @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.Press_Release') }}
                                                @else
                                                    {{ __('messages.Press_Release') }}
                                                @endif


                                            </a>
                                        </li>

                                    </ul>
                                    <div class="resp-tabs-container hor_1">
                                        <div class="clearfix" id="hor_1_tab_item-1">
                                            <div class="content-wrapper">
                                                <p class="text-slide01 pause" onclick="changeClass01()"></p>
                                                <div class="scroll-text01 scroll-left">
                                                    <ul class="list">
                                                        @if (isset($press_release) && count($press_release) > 0)
                                                            @foreach ($press_release as $press_releases)
                                                            
                                                                @php
                                                                    $pressUrl = $press_releases->url_link ?? 'javascript:void(0)';
                                                                @endphp

                                                                <li>
                                                                    @if ($press_releases->tab_type == 1)
                                                                        <a onclick="return confirm('{{ $alertMessage ?? '' }}')"
                                                                            target="_blank"
                                                                            href="{{ $pressUrl ?? '' }}">
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
                                                            <h5 >No press releases available.</h5>
                                                        @endif


                                                        {{-- <li>
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
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                                <div class="view-footer"><a href="{{url('press-released')}}"
                                                        title="Read More"><span>
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ __('messages.Read_More') }}
                                                            @else
                                                                {{ __('messages.Read_More') }}
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

                    <div class="left-col-2">
                        <div class="box-bg-color change-color-code">
                            <div class="tender">
                                <h2>
                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Tender') }}
                                    @else
                                        {{ __('messages.Tender') }}
                                    @endif

                                </h2>
                            </div>
                            <p class="text-slide1 pause tender-play-btn" onclick="changeClass1()"></p>
                        </div>
                        <div class="bg-white-tender">
                            <div class="scroll-text-1 scroll-left">
                                <ul class="list">


                                    @if (isset($tender_management) && count($tender_management) > 0)
                                        @foreach ($tender_management as $tender_managements)
                                            <li>
                                                <a href="{{ asset('resources/uploads/TenderManagement/' . $tender_managements->public_url) }}"
                                                    download>
                                                    <div class="date">

                                                        <span>{{ date('d', strtotime($tender_managements->start_date)) }}</span>
                                                        <em>{{ date('M Y', strtotime($tender_managements->start_date)) }}</em>

                                                    </div>

                                                    <div class="list-content">
                                                        {{ $tender_managements->pdf_title ?? '' }} - File type
                                                        ({{ $tender_managements->file_extension ?? '' }} -
                                                        {{ $tender_managements->pdfimage_size ?? '' }})
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <div class="date">
                                                <span>{{ \Carbon\Carbon::now()->format('d') }}</span><em>{{ \Carbon\Carbon::now()->format('M Y') }}</em>
                                            </div>
                                            <div class="list-content">No Tender available
                                            </div>
                                        </li>
                                    @endif

                                </ul>

                            </div>
                            <div class="view-footer"><a href="{{ url('tender') }}"
                                    title="Know More About Tenders"><span>

                                        @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.View_all_Tenders') }}
                                        @else
                                            {{ __('messages.View_all_Tenders') }}
                                        @endif

                                        <i class="fa fa-angle-right"></i>
                                    </span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="wf100 city-news p75">
            <div class="container common-container four_content banner-container">
                <div class="title-style-3">
                    <!-- <h3 class="h11">Our Programs</h3> -->
                    <!-- <p>Read the News Updates and Articles about Government </p> -->
                </div>
                <div class="row">
                    <!--News Box Start-->
                    <div class="col-md-6 col-sm-6 PL-LG-0">

                        <div class="news-box">
                            <div class="row">
                                <div class="col-md-4 p-0">
                                    <div class="new-thumb">
                                        <div>
                                            <span class="cat c1">Academic Program</span> <img
                                                src="{{ asset('assets-cppri/images/msc.jpg') }}" alt="">

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="new-txt">

                                        <h6><a href="javascript:void(0);">Academic Program</a></h6>
                                        <span class="duration">Duration- Two year (4 semesters) </span>
                                        <p> To meet the Indian Pulp &amp; Paper Industry’s requirement of technically
                                            trained manpower, Forest
                                            Research University ( Deemed University)...
                                        </p>
                                        <a class="button" href="javascript:void(0)">More Details <i
                                                class="fa fa-chevron-right" aria-hidden="true"></i></a>

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
                                            <span class="cat c1">Training Program</span> <img
                                                src="{{ asset('assets-cppri/images/phd.jpg') }}" alt="">

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="new-txt">

                                        <h6><a href="javascript:void(0);">Training Program</a></h6>
                                        <span class="duration">Duration- Depends on program stream </span>
                                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi vitae laudantium
                                            similique
                                            molestiae, quod laborum natus molestias...
                                        </p>
                                        <a class="button" href="javascript:void(0)">More Details <i
                                                class="fa fa-chevron-right" aria-hidden="true"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Box End-->
                    <!--News Box Start-->
                    <!-- <div class="col-md-3  col-sm-6">
                                                                                                                               <div class="news-box">
                                                                                                                                 <div class="new-thumb"> <span class="cat c3">Policies</span> <img src="images/cppri/modi.jpg" alt="">
                                                                                                                                 </div>
                                                                                                                                 <div class="new-txt">
                                                                                                                                   
                                                                                                                                   <h6><a href="javascript:void(0);">Our Policies Programs</a></h6>
                                                                                                                                   <p> How all this mistaken idea of denounce pleasure and praising pain was born I will give you an. <a href="javascript:void(0);" title="">...read more</a>
                                                                                                                                   </p>
                                                                                                                                 </div>
                                                                                                                                
                                                                                                                               </div>
                                                                                                                             </div> -->
                    <!--News Box End-->
                    <!--News Box Start-->
                    <!-- <div class="col-md-3  col-sm-6">
                                                                                                                               <div class="news-box">
                                                                                                                                 <div class="new-thumb"> <span class="cat c4">Education</span> <img src="images/h3citynews-4.jpg" alt="">
                                                                                                                                 </div>
                                                                                                                                 <div class="new-txt">
                                                                                                                                   
                                                                                                                                   <h6><a href="javascript:void(0);">Our Education Programs</a></h6>
                                                                                                                                   <p> How all this mistaken idea of denounce pleasure and praising pain was born I will give you an. <a href="javascript:void(0);" title="">...read more</a>
                                                                                                                                   </p>
                                                                                                                                 </div>
                                                                                                                               </div>
                                                                                                                             </div> -->
                    <!--News Box End-->
                </div>
            </div>
        </section>

        <div class="wrapper banner-bg-white ptb-30 pb-0">
            <div class="container common-container four_content banner-container body-container top-body-container p-0">

                <div class="col-md-3">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2>
                                <div class="img-b"><img src="{{ asset('assets-cppri/images/facebook.png') }}"
                                        alt="icon">
                                </div>

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
                <div class="col-md-3">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="twitter-c">
                                <div class="img-b"><img src="{{ asset('assets-cppri/images/twitter.png') }}"
                                        alt="icon">
                                </div>

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
                                    was disposed of under the ongoing # Special Campaign 3.0. The total space freed after
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
                <div class="col-md-3">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="linkedin-c">
                                <div class="img-b"><img src="{{ asset('assets-cppri/images/linkedin1.png') }}"
                                        alt="icon">
                                </div>

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

                <div class="col-md-3">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2 class="instagram-c">
                                <div class="img-b"><img src="{{ asset('assets-cppri/images/instagram.png') }}"
                                        alt="icon">
                                </div>

                                @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Instagram') }}
                                @else
                                    {{ __('messages.Instagram') }}
                                @endif
                            </h2>
                        </div>

                        <div class="plug-box linkedinfeed">
                            <img src="{{ asset('assets-cppri/images/linkedin_feed.PNG') }}" alt="">
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- video and image section start --}}
        @if (
            (isset($image_management) && $image_management !== '' && $image_management !== null) ||
                (isset($video_management) && $video_management !== '' && $video_management !== null))
            <div class="wrapper home-btm-slider">
                <div class="container common-container four_content gallery-container">

                    @if (isset($image_management) && $image_management !== '' && $image_management !== null && isset($image_management->uid))

                        <div class="gallery-area clearfix">
                            <div class="gallery-heading">
                                <h3 class="change-color-code">

                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Photo_Gallery ') }}
                                     @else
                                       {{ __('messages.Photo_Gallery') }}
                                    @endif


                                </h3>
                                <a class="bttn-more bttn-view" href="{{ url('photo-gallery') }}"
                                    title="View all Photo Gallery"><span>View
                                        All</span></a>
                            </div>
                            <div class="gallery-holder">
                                <div id="galleryCarousel" class="flexslider">
                                    @if (isset($image_gallery_details) && count($image_gallery_details) > 0)
                                        <ul class="slides">

                                            @foreach ($image_gallery_details->slice(0,3) as $image_gallerys)
                                                <li data-thumb="{{ asset('resources/uploads/GalleryManagement/' . $image_gallerys->public_url) ?? '' }}"
                                                    data-thumb-alt="Slide 1">
                                                    <img src="{{ asset('resources/uploads/GalleryManagement/' . $image_gallerys->public_url) ?? '' }}"
                                                        alt="{{ $image_gallerys->title ?? '' }}"
                                                        title="{{ $image_gallerys->title ?? '' }}">
                                                </li>
                                            @endforeach

                                        </ul>
                                    @else
                                        <p class="p-item-center">No images found in the gallery.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @else
                        <p>No Image gallery management data found.</p>
                    @endif



                    @if (isset($video_management) && $video_management !== '' && $video_management !== null)
                        <div class="gallery-right">
                            <div class="video-heading">
                                <h3 class="change-color-code">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Video_Gallery ') }}
                                    @else
                                        {{ __('messages.Video_Gallery') }}
                                    @endif
                                </h3>
                                <a class="bttn-more bttn-view" href="javascript:viod(0)"
                                    title="View all Video Gallery"><span>View
                                        All</span></a>
                            </div>
                            <div class="video-wrapper">
                                @if (isset($video_gallery_details) && $video_gallery_details !== '')
                                    @php
                                        $videourl = $video_gallery_details->public_url ?? 'javascript:void(0)';
                                    @endphp

                                    <video src="{{ url($videourl) ?? '' }}"
                                        title="{{ $video_gallery_details->title ?? '' }}" controls autoplay muted>
                                        <span>Your browser does not support HTML5 video.</span>
                                    </video>
                                @else
                                    <p class="p-item-center text-white">No Video found in the gallery.</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <p>No Video gallery management data found.</p>
                    @endif
                </div>
            </div>
        @endif
        {{-- video and image section end --}}
    </section>
    <!--/.body-wrapper-->


    <!--Client logo start-->
    <section class="wrapper carousel-wrapper clientail">
        <h2 class="d-none">Carousel</h2>
        <div class="container common-container four_content carousel-container">
            <div id="flexCarousel" class="flexslider carousel">
                <ul class="slides">
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="http://digitalindia.gov.in/" title="Digital India"><img
                                src="{{ asset('assets-cppri/images/carousel/digital-india.png') }}"
                                alt="Digital India"></a>
                    </li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="http://www.makeinindia.com/" title="Make In India"> <img
                                src="{{ asset('assets-cppri/images/carousel/makeinindia.png') }}"
                                alt="Make In India"></a>
                    </li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="http://india.gov.in/" title="National Portal of India"><img
                                src="{{ asset('assets-cppri/images/carousel/india-gov.png') }}"
                                alt="National Portal of India"></a></li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="http://goidirectory.nic.in/" title="GOI Web Directory"><img
                                src="{{ asset('assets-cppri/images/carousel/goidirectory.png') }}"
                                alt="GOI Web Directory"></a></li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="https://data.gov.in/" title="Data portal"><img
                                src="{{ asset('assets-cppri/images/carousel/data-gov.png') }}" alt="Data portal"></a>
                    </li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="https://mygov.in/" title="MyGov"><img
                                src="{{ asset('assets-cppri/images/carousel/mygov.png') }}" alt="MyGov Portal"></a>
                    </li>
                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                            href="http://www.dcpulppaper.org/index.html"
                            title="Development Council for Pulp Paper & Allied Industries"><img
                                src="{{ asset('assets-cppri/images/carousel/Development-logo.png') }}"
                                alt="MyGov Portal"></a>
                    </li>
                </ul>
            </div>
    </section>
    <!--Client logo end-->

@endsection
