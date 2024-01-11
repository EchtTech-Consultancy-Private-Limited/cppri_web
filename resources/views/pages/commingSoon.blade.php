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
                    Comming Soon
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
                <li><a href="javascript:void();">Comming Soon</a></li>

            </ul>
        </div>
    </div>
</div>

<section class="wrapper paragraph-wrapper ptb-30">
    <div class="container common-container four_content">
        <div class="align-lt">
            <div class="coming-box">
                <img src="{{ asset('assets-cppri/assets/images/coming_soon.gif') }}" alt="">
                <h4>Coming Soon...</h4>
            </div>
        </div>
    </div>
</section>

@endsection