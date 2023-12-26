@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')

<section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "  style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
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
    <div class="container common-container">
      
       

    </div>

@endsection