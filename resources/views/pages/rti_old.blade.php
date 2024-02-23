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
    </div>
    <div class="wrapper" id="skipCont"></div>
    <div class="sidebar-main-nav ptb-50">
        <div class="container common-container pr-0">
            <!--/.nav-wrapper-->
            <div class="row pr-0">
                <div class="main-content">
                    <!--/#skipCont-->
                    <div id="fontSize" class="wrapper body-wrapper ">
                        <!--/#page-head-->
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class="container common-container four_content pm-0">
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="align-lt">                                    
                                        @if (isset($rties) && !blank($rties))
                                        <ol type="I">
                                        @foreach($rties as $rti)                                            
                                                <li> 
                                                    <a href="{{ route('rti-detail', $rti->uid) }}">
                                                        @if (Session::get('Lang') == 'hi')
                                                            {{ $rti->page_title_hi ?? '' }}
                                                        @else
                                                            {{ $rti->page_title_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </li>                                              
                                        @endforeach
                                    </ol>
                                    @endif
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
