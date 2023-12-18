@extends('layout.master')
@section('title')
    {{ __('RAV') }}
@endsection
@section('content')


<section class="wrapper banner-wrapper">
        <h1 style="display: none">Banner</h1>
        <div id="flexSlider" class="flexslider">
            <ul class="slides">
                @if (isset($banner) && count($banner) > 0)
                    @foreach ($banner as $banners)
                        @if ($banners->public_url != '')
                            <li>
                                <img src="{{ asset('resources/uploads/banner/' . $banners->public_url) }}"
                                    alt="{{ $banners->banner_title ?? '' }}"
                                    title="{{ $banners->banner_title ?? '' }}">
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
        <h3 style="display: none;">Latest News</h3>
        <div class="row">
            <div class="col-md-2">
                <div class="latest-new-title">
                    <p>
                        Latest News :
                    </p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="marquee">

{{-- news management start --}}
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
                                            <a href="{{ url($url) }}"
                                                onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                                style="font-weight:bold">

                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $title_hi }}
                                                @else
                                                    {{ $title_en }}
                                                @endif

                                            </a>
                                        @endif
                                    @else
                                        @if (!empty($url))
                                            <a href="{{ url($url) }}" style="font-weight: bold">
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $title_hi }}
                                                @else
                                                    {{ $title_en }}
                                                @endif
                                            </a>

                                        @endif
                                    @endif    
                                </span>
                            @endforeach
                        @else
                            <h5 style="font-weight:bold">No news available.</h5>
                        @endif

{{-- news management end --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper" id="skipCont"></div>
    <!--/#skipCont-->
    <section id="fontSize" class="wrapper body-wrapper ">
        <h2 style="display: none;">Body</h2>
        <div class="bg-wrapper top-bg-wrapper gray-bg padding-top-bott">
            <div class="container common-container four_content body-container top-body-container padding-top-bott2">
                <div class="minister clearfix">
                    <div class="minister-box clearfix">
                        <div class="minister-sub1">
                            <div class="minister-image"><img src="{{ asset('assets-cppri/images/minister.jpg') }}"
                                    alt="Hon’ble Minister" title="Ministry/Department, Minister Name"></div>
                            <div class="min-info">
                                <h4><a href="javascript:void(0);" title="Minister Name"> Shri Som Parkash</a></h4>
                                <h5 class="prime"><a href="javascript:void(0);" title="Hon’ble Prime Minister">
                                        Minister of
                                        State for Commerce and Industry</a></h5>
                                <a href="javascript:void(0);"
                                    title="External link open in new tab,Portfolio of Hon’ble minister"
                                    class="portgolio-button">
                                    View Portfolio <i class="fa fa-external-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="minister-sub">
                            <div class="minister-image"><img src="{{ asset('assets-cppri/images/M-K-Gupta_0.png') }}"
                                    alt="Hon’ble Minister" title="Ministry/Department,Minister Name"></div>
                            <div class="min-info">
                                <h4>Dr. M K Gupta</h4>
                                <h5><a href="javascript:void(0);" title="Minister of Coal"><span>Director </span></a>
                                </h5>
                            </div>
                        </div>
                        <div class="minister-sub">
                            <div class="minister-image"><img src="{{ asset('assets-cppri/images/a_k_dixit.png') }}"
                                    alt="minister of state coal and mines" title="Ministry/Department, Minister Name">
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
                <div class="banner-content-wrapper">
                    <h2>Welcome to <span>CPPRI</span></h2>
                    <!-- <p class="banner-title-tag-line">Welcome to the website of Ministry/Department, Government of India.</p> -->
                    <p class="banner-content mb-0"> The origin of Central Pulp & Paper Research Institute (CPPRI) dates
                        back
                        to
                        the year 1975 when the UNDP-GOI Project became operational with an objective to create the
                        required
                        R&D facilities for evaluation of fibrous raw materials for the Indian paper industry. After the
                        conclusion of the above project, CPPRI came into existence as "National Level Research
                        Institute"
                        dedicated for the assistance to the Indian paper industry.
                    </p>
                    <p class="banner-content">
                        The Institute has redeemed itself in the service of Indian Pulp and Paper Industry through a
                        number of
                        R&D initiatives and continued support through high quality of technical & consultancy services.
                        The
                        11th Five Year Plan Schemes are mainly dedicated to the core issues of the paper industry
                        namely: (i)
                        Conservation & Upgradation of Raw Material (ii) Quality Improvement (iii) Energy Management &
                        Environment Management and (iv) Human Resource & Skill Development
                    </p>
                    <br>
                    <a href="javascript:void(0);" title="Click here to know more">Read more <i
                            class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="links-wrapper">
            <div class="container common-container">
                <div class="icon-box">
                    <a href="javascript:void();">
                        <span class="icon-box-ico">
                            <img src="{{ asset('assets-cppri/theme/images/icons/publication.png') }}" alt="">
                        </span>
                        <span class="icon-box-text">Publications & Reports</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="javascript:void();">
                        <span class="icon-box-ico">
                            <img src="{{ asset('assets-cppri/theme/images/icons/achive.png') }}" alt="">
                        </span>
                        <span class="icon-box-text">Our Achievements</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="javascript:void();">
                        <span class="icon-box-ico">
                            <img src="{{ asset('assets-cppri/theme/images/icons/research.png') }}" alt="">
                        </span>
                        <span class="icon-box-text">R & D Projects</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="javascript:void();">
                        <span class="icon-box-ico">
                            <img src="{{ asset('assets-cppri/theme/images/icons/member-card.png') }}" alt="">
                        </span>
                        <span class="icon-box-text">Institute Membership</span>
                    </a>
                </div>

                <div class="icon-box">
                    <a href="javascript:void();">
                        <span class="icon-box-ico">
                            <img src=" {{ asset('assets-cppri/theme/images/icons/technical-support.png') }}"
                                alt="">
                        </span>
                        <span class="icon-box-text">Technical Services </span>
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
        </div>

        <div class="wrapper home-banner">
            <div class="container common-container four_content banner-container body-container top-body-container">

                <div class="left-block">
                    <div class="left-col-2">
                        <div class="page-tab clearfix">
                            <div class="page-tab-res clearfix">
                                <div id="parentHorizontalTab">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="border-l"><a href="javascript:viod(0)"
                                                id="tab-list-1">Notification</a></li>
                                        <li><a href="javascript:viod(0)">Press Release</a></li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1">
                                        <div class="clearfix" id="hor_1_tab_item-0">
                                            <div class="content-wrapper">
                                                <p class="text-slide pause" onclick="changeClass()"></p>
                                                <div class="scroll-text scroll-left">
                                                    <ul class="list">
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

                                                    </ul>
                                                </div>
                                                <div class="view-footer"><a href="javascript:void();"
                                                        title="Read More"><span>Read
                                                            More <i class="fa fa-angle-right"></i></span></a></div>
                                            </div>
                                        </div>
                                        <div class="clearfix" id="hor_1_tab_item-1">
                                            <div class="content-wrapper">
                                                <p class="text-slide01 pause" onclick="changeClass01()"></p>
                                                <div class="scroll-text01 scroll-left">
                                                    <ul class="list">
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
                                                    </ul>
                                                </div>
                                                <div class="view-footer"><a href="javascript:void();"
                                                        title="Read More"><span>Read
                                                            More <i class="fa fa-angle-right"></i></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-col-2">
                        <div class="tender">

                            <h2>Tenders</h2>
                        </div>
                        <p class="text-slide1 pause" onclick="changeClass1()"></p>
                        <div class="scroll-text-1 scroll-left">
                            <ul class="list">
                                {{-- <li>
                                    <div class="date"><span>29</span><em>Nov 2022</em></div>
                                    <div class="list-content">Description of Tenders 1 goes here - File type (size).
                                    </div>
                                </li> --}}


                                @if(isset($tender_management) && count($tender_management) > 0)
                                    
                               


                                @foreach ($tender_management as $tender_managements)
                                <li>
                                <div class="date">
                                   
                                    <span>{{ date('d', strtotime($tender_managements->start_date)) }}</span>
                                    <em>{{ date('M Y', strtotime($tender_managements->start_date)) }}</em>
                            
                                </div>
                                <div class="list-content">
                                    {{ $tender_managements->title_name_en }} - File type ({{ $tender_managements->file_extension  }} - {{ $tender_managements->pdfimage_size  }})
                                </div>
                                </li>
                                 @endforeach

                                 @else
                

                                  <li>
                                    <div class="date"><span>{{ \Carbon\Carbon::now()->format('d') }}</span><em>{{ \Carbon\Carbon::now()->format('M Y') }}</em></div>
                                    <div class="list-content">No Tender available
                                    </div>
                                </li>

                                @endif
                               
                            </ul>
                        </div>
                        <div class="view-footer"><a href="javascript:void(0);"
                                title="Know More About Tenders"><span>View all
                                    Tenders <i class="fa fa-angle-right"></i></span></a></div>
                    </div>
                </div>
                <div class="banner-right-wrapper">
                    <div class="banner-box-wrapper">
                        <div class="banner-box banner-box-1">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 2</h2> -->
                                <a href="javascript:void(0);" title="External link that opens in new tab">

                                    <img src="{{ asset('assets-cppri/images/rti.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>RTI</p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-5">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 1</h2> -->
                                <a href="javascript:void(0);" title="External link that opens in new tab">

                                    <img src="{{ asset('assets-cppri/images/grivence_rti.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>Grievance Cell</p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-2">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 2</h2> -->
                                <a href="javascript:void(0);" title="External link that opens in new tab">

                                    <img src="{{ asset('assets-cppri/images/public.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>Public Grievance Cell</p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-3">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 3</h2> -->
                                <a href="javascript:void(0);" title="External link that opens in new tab">

                                    <img src="{{ asset('assets-cppri/images/tsc.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>TSC Cell</p>
                                </a>
                            </div>
                        </div>
                        <div class="banner-box banner-box-4">
                            <div class="banner-box-content">
                                <!-- <h2>External Link 3</h2> -->
                                <a href="javascript:void(0);" title="External link that opens in new tab">

                                    <img src="{{ asset('assets-cppri/images/mail.png') }}" alt="icon"
                                        class="cell-icon-sec">
                                    <p>Webmail</p>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="wrapper banner-bg-white">
            <div class="container common-container four_content banner-container body-container top-body-container">

                <div class="col-md-4">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2>Facebook Feed</h2>
                        </div>
                        <div class="facebook-feed-content text-center">
                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100090718134100"
                                data-tabs="timeline" data-width="360" data-height="400" data-small-header="true"
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
                <div class="col-md-4">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2>Twitter Feed</h2>
                        </div>
                        <div class="twitter-feed-content p-2">
                            <blockquote class="twitter-tweet">
                                <p lang="en" dir="ltr">On 18.10.2023, Old Newspapers, Old Magazines and
                                    Shredded Office waste
                                    was disposed of under the ongoing # Special Campaign 3.0. The total space freed
                                    after
                                    disposal of paper waste was 700 sqr. ft. <a
                                        href="https://t.co/e8nghNwqSj">pic.twitter.com/e8nghNwqSj</a></p>&mdash;
                                Central Pulp
                                &amp; Paper Research Institute (@CppriSaharanpur) <a
                                    href="https://twitter.com/CppriSaharanpur/status/1714938725103464730?ref_src=twsrc%5Etfw">October
                                    19, 2023</a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-box">
                        <div class="sub-sec">
                            <h2>Linkedin Feed</h2>
                        </div>

                        <div class="linkedinfeed">
                            <img src="{{ asset('assets-cppri/images/linkedin_feed.PNG') }}" alt="">
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="wrapper home-btm-slider">
            <div class="container common-container four_content gallery-container">
                <div class="gallery-area clearfix">
                    <div class="gallery-heading">
                        <h3>Photo Gallery</h3>
                        <a class="bttn-more bttn-view" href="javascript:viod(0)"
                            title="View all Photo Gallery"><span>View
                                All</span></a>
                    </div>
                    <div class="gallery-holder">
                        <div id="galleryCarousel" class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{ asset('assets-cppri/images/photo_gallery/g4.jpg') }}"
                                    data-thumb-alt="Slide 1">
                                    <img src="{{ asset('assets-cppri/images/photo_gallery/g4.jpg') }}" alt="gallery2"
                                        title="Slide 1">
                                </li>
                                <li data-thumb="{{ asset('assets-cppri/images/photo_gallery/g1.jpg') }}"
                                    data-thumb-alt="Slide 2">
                                    <img src="{{ asset('assets-cppri/images/photo_gallery/g1.jpg') }}" alt="gallery1"
                                        title="Slide 2">
                                </li>
                                <li data-thumb="{{ asset('assets-cppri/images/photo_gallery/g2.jpg') }}"
                                    data-thumb-alt="Slide 3">
                                    <img src="{{ asset('assets-cppri/images/photo_gallery/g2.jpg') }}" alt="gallery3"
                                        title="Slide 3">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="gallery-right">
                    <div class="video-heading">
                        <h3>Video Gallery</h3>
                        <a class="bttn-more bttn-view" href="javascript:viod(0)"
                            title="View all Video Gallery"><span>View
                                All</span></a>
                    </div>
                    <div class="video-wrapper">
                        <video src="{{ asset('assets-cppri/images/photo_gallery/video.mp4') }}"
                            title="The Union Minister for Railways and Coal, Shri Piyush Goyal addressing a press conference on Neyveli Lignite Corporation."
                            controls autoplay muted>
                            <span>Your browser does not support HTML5 video.</span>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.body-wrapper-->
    <!--/.banner-wrapper-->
    <section class="wrapper carousel-wrapper">
        <h2 style="display: none;">Carousel</h2>
        <div class="container common-container four_content carousel-container">
            <div id="flexCarousel" class="flexslider carousel">
                <ul class="slides">
                    <li><a target="_blank" href="http://digitalindia.gov.in/"
                            title="Digital India, External Link that opens in a new window"><img
                                src="{{ asset('assets-cppri/images/carousel/digital-india.png') }}"
                                alt="Digital India"></a></li>
                    <li><a target="_blank" href="http://www.makeinindia.com/"
                            title="Make In India, External Link that opens in a new window"> <img
                                src="{{ asset('assets-cppri/images/carousel/makeinindia.png') }}"
                                alt="Make In India"></a></li>
                    <li><a target="_blank" href="http://india.gov.in/"
                            title="National Portal of India, External Link that opens in a new window"><img
                                src="{{ asset('assets-cppri/images/carousel/india-gov.png') }}"
                                alt="National Portal of India"></a></li>
                    <li><a target="_blank" href="http://goidirectory.nic.in/"
                            title="GOI Web Directory, External Link that opens in a new window"><img
                                src="{{ asset('assets-cppri/images/carousel/goidirectory.png') }}"
                                alt="GOI Web Directory"></a></li>
                    <li><a target="_blank" href="https://data.gov.in/"
                            title="Data portal, External Link that opens in a new window"><img
                                src="{{ asset('assets-cppri/images/carousel/data-gov.png') }}" alt="Data portal"></a>
                    </li>
                    <li><a target="_blank" href="https://mygov.in/"
                            title="MyGov, External Link that opens in a new window"><img
                                src="{{ asset('assets-cppri/images/carousel/mygov.png') }}" alt="MyGov Portal"></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection