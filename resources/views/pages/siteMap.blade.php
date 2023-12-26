@extends('layout.master')
@section('title')
{{ __('CPPRI') }}
@endsection
@section('content')

<section class="wrapper banner-wrapper">
    <div id="flexSlider" class="flexslider "
        style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
        <div class="inner-banner-text">
            <div class="text-banner-content">
                <h2>
                    SiteMap
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
                <li><a href="javascript:void();">SiteMap</a></li>
            </ul>
        </div>
    </div>
</div>


<section id="list" class="wrapper list-wrapper ptb-30">
    <div class="container common-container four_content">
        <h3 class="master-title mt-0">Website Link</h3>
        <div class="list list-circle">
            <h4 class="">Menu</h4>
            <!-- <ul class="clearfix mb-0">
                <li>a</li>
                <li>To make Indian Paper Industry sustainable and Globally Competitive.</li>
                <li>In pursuit of cleaner Production, Resource Conversation &amp; Quality Excellence in Pulp &amp; Paper
                    Industry</li>
            </ul> -->
            <ul class="clearfix sitemap">
                <li class="">
                    <a href="#" tabindex="0">Home</a>
                </li>
                <li class="menu-item-has-children pb-0">
                    <a href="#" class="main-anchor" tabindex="0">About</a>

                    <ul class="unorder-list pt-10">
                        <li>
                            <a href="#" tabindex="0">About NRCP</a>
                        </li>
                        <li>
                            <a href="#" tabindex="0">About NAPRE</a>
                        </li>
                        <li>
                            <a href="#" tabindex="0">Programme Strategies</a>
                        </li>
                        <li>
                            <a href="#" tabindex="0">Directories</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" tabindex="0">Downloads</a>
                </li>
              
            </ul>
        </div>

    </div>
</section>



@endsection