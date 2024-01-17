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
                        Overview
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content ">
                <ul>
                    <li><a href="home.html">Home </a></li>
                    <li><a href="javascript:void();">About us</a></li>
                    <li><a href="javascript:void();">Overview</a></li>

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
                            <div class=" common-container four_content">
                                <h3 class="dir-dsk-title mt-3">Overview </h3>
                                <div class="row p-0 mb-20">

                                    <div class="col-md-8">
                                        <p>
                                            Central Pulp & Paper Research Institute, a National level Institute was
                                            established in 1980 as an autonomous body under the administrative control of
                                            Department of Industrial Policy & Promotion, Ministry of Commerce and Industry,
                                            Govt. of India to promote R&D in the field of pulp & paper. The origin of CPPRI
                                            dates back to the year 1975 when the UNDP-GOI Project became operational. After
                                            the conclusion of the UNDP Project, the facilities thus created were utilized to
                                            fulfill the long felt need for R&D needs of Indian Pulp and Paper Industry. Thus
                                            after the approval of the Cabinet, Central Pulp & Paper Research Institute
                                            (CPPRI) came into existence in November 1980. Existing R&D facilities were
                                            continuously upgraded with the aid of Plan Funds received from the Government of
                                            India.
                                        </p>
                                        <p>All affairs of CPPRI are managed by 18 membered Council of Association,
                                            comprising of representatives from Paper Industry, Department of Industrial
                                            Policy & Promotion (DIPP), and Department of Science & Technology (DST),
                                            Council of Scientific and Industrial Research (CSIR), Indian Council of Forestry
                                            Research & Education (ICFRE) and IIT Roorkee. The Secretary (DIPP), Ministry of
                                            Commerce and Industry, Govt. of India is the President of the Council of
                                            Association. The Council of Association performs various functions such as
                                            deciding the budget, approval of annual plan, purchase and disposal of equipment
                                            etc.</p>
                                        <p>Planning & monitoring of research activities is looked after by the Research
                                            Advisory Committee (RAC). The committee is represented by Senior Executives from
                                            Pulp & Paper Industry, Associations, Research Organizations and Ministry of
                                            Commerce and Industry.</p>
                                    </div>

                                    <div class="col-md-4 mt-20 mb-20">
                                        <div class="img-box-overview">
                                            <img src="{{ asset('assets-cppri/images/about-overview.png') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-4">
                                    <h3 class="dir-dsk-title mt-3">Quality Policy</h3>
                                        <blockquote>
                                            CPPRI is committed to develop itself into a premier research institute, with
                                            focus on the Pulp & Paper industry both in India and abroad. A quality
                                            management system meeting the requirements of ISO 9001:2000 has been established
                                            to realize the quality policy by achieving the quality objectives. The
                                            Management and Staff are committed to continually improve while complying with
                                            applicable statutory and regulatory requirements of the Quality Management
                                            System.
                                        </blockquote>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <div class="rs-cta style7 main-content">
                            <div class="partition-bg-wrap vision-mission">
                                <div class="container common-container">
                                    <div class="row ptb-40">
                                        <div class="col-lg-6">
                                            <div class="sec-title2 mb-40">
                                                <h2 class="title white-color mb-16">Vision</h2>
                                                <ul>
                                                    <li>To make CPPRI a Centre of Excellence with Focus in the area of
                                                        Technology Transfer</li>
                                                    <li>To make Indian Paper Industry sustainable and Globally Competitive.
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="sec-title2 mb-40">
                                                <h2 class="title white-color mb-16">Mission</h2>
                                                <ul>
                                                    <li>In pursuit of cleaner Production, Resource Conversation & Quality
                                                        Excellence in Pulp & Paper Industry</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>    
        </section>

    </div>
@endsection
