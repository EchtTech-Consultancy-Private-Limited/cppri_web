@extends('layout.master')
@section('title')
{{ __('CPPRI |'.' '.$title) }}
@endsection
@section('content')
<section class="wrapper banner-wrapper">
    @if (isset($organizedData['banner']) && $organizedData['banner'] != '')
    <div id="flexSlider" class="flexslider bigbanner"
        style="background-image: url('{{ asset('resources/uploads/pagebanner/' . $organizedData['banner']->public_url) }}');">
        <div class="inner-banner-text">
            <div class="text-banner-content">
                <h2>
                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.RTI') }}
                    @else
                    {{ __('messages.RTI') }}
                    @endif
                </h2>
            </div>
        </div>
    </div>
    @else
    <div id="flexSlider" class="flexslider bigbanner"
        style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
        <div class="inner-banner-text">
            <div class="text-banner-content">
                <h2>

                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.RTI') }}
                    @else
                    {{ __('messages.RTI') }}
                    @endif

                </h2>
            </div>
        </div>
    </div>
    @endif
</section>
<div class="bg-wrapper inner-wrapper">
    <div class="breadcam-bg breadcam">
        <div class="container common-container four_content ">
            <ul>
                <li><a href="{{ route('/') }}">
                        @if (Session::get('Lang') == 'hi')
                        होम पेज
                        @else
                        Home
                        @endif
                    </a></li>

                <li>
                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.RTI') }}
                    @else
                    {{ __('messages.RTI') }}
                    @endif
                </li>

            </ul>
        </div>
    </div>
    <div class="wrapper" id="skipCont"></div>
    <div class="sidebar-main-nav ptb-50 rti" id="mainsidebar">
        <div class="container common-container pr-0">
            <!--/.nav-wrapper-->
            @if (isset($rties) && !blank($rties) && isset($rtiesDetails) && !blank($rtiesDetails))
            <div class="row pr-0">
                <div class="col-md-3 sidebar-main-nav-colmd3 position-relative">
    
                    <div class="main-sidebar" id="main-sidebar">
                        <ul>
                            @if (isset($rties) && !blank($rties))
                            @foreach($rties as $rti)
                                <li class="{{ (Request::fullUrl() == route('rti-data', $rti->custom_slug)) || (isset($rtiesFirst) && route('rti-data', $rtiesFirst->custom_slug) == route('rti-data', $rti->custom_slug)) ? 'qm-active' : '' }}">
                                    <div class="list-start">
                                        <a href="{{ route('rti-data', $rti->custom_slug) }}" class="nav-link" tabindex="0">
                                            @if (Session::get('Lang') == 'hi')
                                                {{ $rti->page_title_hi ?? '' }}
                                            @else
                                                {{ $rti->page_title_en ?? '' }}
                                            @endif
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                        </ul>
                    </div>
                    <br>
                   
                </div>    
                <div class="col-md-9 m-p-0">   
                    <div class="main-content ditiector-desk">
                        <!--/#skipCont-->
                        <div id="fontSize" class="wrapper body-wrapper " style="font-size: 100%;">
    
                            <section id="paragraph" class="wrapper paragraph-wrapper">
                                <div class="container common-container four_content pm-0">
                                   
    
                                    <!-- Organisation and Function -->
    
                                    <div class="align-lt">
                                        {{-- <h2 class="mt-0 mb-20" tabindex="0">
                                            Organisation and Function
                                        </h2> --}}
    
                                        {{-- <p tabindex="0"></p> --}}
                                        <section id="paragraph" class="wrapper paragraph-wrapper">
                                            
                                            <div class=" common-container four_content">
                                            <button class="btn btn-primary float-end mb-2 rounded-2"><a class="text-white" href="{{ route('rti-applications-responses') }}">RTI Application & Responses</a></button>
                                                @if (isset($rtiesDetails) && !blank($rtiesDetails))
                                                @if (Session::get('Lang') == 'hi')
                                                    {!! $rtiesDetails->page_content_hi !!}
                                                @else
                                                    {!! $rtiesDetails->page_content_en ?? '' !!}
                                                @endif
                                                @endif
                                            </div>
                                        </section>    
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <h1>No Record Found !</h1>
            @endif
        </div>
    </div>
@endsection
