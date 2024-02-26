@extends('layout.master')
@section('title')
    {{ __('CPPRI |' . ' ' . $title ?? '') }}
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
                                {{ __('messages.Notification') }}
                            @else
                                {{ __('messages.Notification') }}
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
                                {{ __('messages.Notification') }}
                            @else
                                {{ __('messages.Notification') }}
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
                    <li><a href="{{ url('/') }}">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>
                    <li>
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Notification') }}
                        @else
                            {{ __('messages.Notification') }}
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
                        <section id="datatable">
                            <div class="container common-container">
                                <div class="row p-0 ">
                                    <div class="col-md-12">
                                        <div class="scroller-tbl">                                           
                                                <table id="example" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Title</th>
                                                            <th>Date</th>
                                                            <th>Apply Here</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(isset($notifications) &&  count($notifications) > 0 )
                                                        @foreach ($notifications as $k=> $notifications)
                                                        <tr>
                                                            <td class="views-field views-field-counter">
                                                                {{ $loop->iteration }} </td>                                                            
                                                            @if (Session::get('Lang') == 'hi')
                                                                <td>{{ $notifications->recent_activities_hi  ?? '' }}</td>
                                                            @else
                                                                <td>{{ $notifications->recent_activities_en ?? '' }}</td>
                                                            @endif
                                                            <td class="views-field views-field-field--date">
                                                                <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                                    content="2020-10-29T00:00:00+05:30"> {{ date("d-m-Y",strtotime($notifications->start_date)) }}</span>
                                                            </td>                                                            
                                                            <td class="views-field views-field-field-order-contract-no-">
                                                                <a href="{{ @$notifications->url_link }}">Click</a>
                                                            </td>
                                                        </tr>
                                                          @endforeach
                                                          @endif
                                                    </tbody>
                                                </table>
                                        </div>
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
