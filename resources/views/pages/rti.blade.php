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
                        @if (isset($content))
                            <h1>{{ $content }}</h1>
                        @endif

                        <!--/#page-head-->
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class="container common-container four_content pm-0">
                                <div class="align-lt">
                                    <h2 class="mt-0 mb-20">
                                        @if (isset($rtiData) && !blank($rtiData))
                                            @if (Session::get('Lang') == 'hi')
                                                {{ $rtiData->title_name_hi ?? '' }}
                                            @else
                                                {{ $rtiData->title_name_en ?? '' }}
                                            @endif

                                    </h2>
                                    <p>
                                        @if (Session::get('Lang') == 'hi')
                                            {!! $rtiData->description_hi ?? '' !!}
                                        @else
                                            {!! $rtiData->description_en ?? '' !!}
                                        @endif
                                    </p>
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
