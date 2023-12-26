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
        <div class="container">
            <div class="master">
                <h3 class="master-title mt-0">Website Link</h3>
                <div class="list list-circle">
                    <h4>Main menu</h4>
                    <ul class="clearfix sitemap">
                        @if (isset($headerMenu) && count($headerMenu) > 0)
                            @foreach ($headerMenu as $headerMenus)
                                @php
                                    $url = $headerMenus->url ?? 'javascript:void(0)';
                                @endphp
                                @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                                    <li class="menu-item-has-children pb-0">
                                        <a href="javascript:void(0)">
                                            @if (Session::get('locale') == 'hi')
                                                {{ $headerMenus->name_hi ?? '' }}
                                            @else
                                                {{ $headerMenus->name_en ?? '' }}
                                            @endif
                                        </a>
                                        <ul class="unorder-list pt-10">
                                            @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                                                @foreach ($headerMenus->children as $subMenus)
                                                    @php
                                                        $suburl = $subMenus->url ?? 'javascript:void(0)';
                                                    @endphp

                                                    <li>
                                                        @if ($subMenus->tab_type == 1)
                                                            <a onclick="return confirm('{{ $alertMessage }}')"
                                                                target="_blank" href="{{ url($suburl) }}">
                                                                @if (Session::get('locale') == 'hi')
                                                                    {{ $subMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $subMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                        @else
                                                            <a href="{{ url($suburl) }}">
                                                                @if (Session::get('locale') == 'hi')
                                                                    {{ $subMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $subMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            @else
                                                <h5>No menu available.</h5>
                                            @endif
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        @if ($headerMenus->tab_type == 1)
                                            <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                                href="{{ url($url) }}">
                                                @if (Session::get('locale') == 'hi')
                                                    {{ $headerMenus->name_hi ?? '' }}
                                                @else
                                                    {{ $headerMenus->name_en ?? '' }}
                                                @endif
                                            </a>
                                        @else
                                            <a href="{{ url($url) }}">
                                                @if (Session::get('locale') == 'hi')
                                                    {{ $headerMenus->name_hi ?? '' }}
                                                @else
                                                    {{ $headerMenus->name_en ?? '' }}
                                                @endif
                                            </a>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        @else
                            <h5>No menu available.</h5>
                        @endif
                    </ul>
                </div>


                <h2>
                    Footer Menu
                </h2>

                <div class="list list-circle">

                    @if (isset($footerMenu) && count($footerMenu) > 0)
                        <ul class="clearfix sitemap">
                            @foreach ($footerMenu as $footerMenus)
                                @php
                                    $footerMenusurl = $footerMenus->url ?? 'javascript:void(0)';
                                @endphp
                                @if ($footerMenus->tab_type == 1)
                                    <li class="first leaf">
                                        <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                            href="{{ url($footerMenusurl) ?? '' }}">
                                            @if (Session::get('locale') == 'hi')
                                                {{ $footerMenus->name_hi ?? '' }}
                                            @else
                                                {{ $footerMenus->name_en ?? '' }}
                                            @endif
                                        </a>
                                    </li>
                                @else
                                    <li class="first leaf"><a href="{{ url($footerMenusurl) ?? '' }}">
                                            @if (Session::get('locale') == 'hi')
                                                {{ $footerMenus->name_hi ?? '' }}
                                            @else
                                                {{ $footerMenus->name_en ?? '' }}
                                            @endif
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <h5>No menu available.</h5>
                    @endif
                </div>
            </div>
        </div>
    </section>




@endsection
