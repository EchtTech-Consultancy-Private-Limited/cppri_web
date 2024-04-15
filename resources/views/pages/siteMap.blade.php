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
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.SiteMap') }}
                        @else
                            {{ __('messages.SiteMap') }}
                        @endif
                    </h2>
                </div>
            </div>
        </div>
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
                    <li><a href="javascript:void();">
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.SiteMap') }}
                    @else
                        {{ __('messages.SiteMap') }}
                    @endif
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="list" class="wrapper list-wrapper ptb-30">
        <div class="container">
            <div class="master">
                {{-- <h3 class="master-title mt-0">Website Link</h3> --}}
                <div class="list list-circle">
                    <h2>
                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Main_menu') }}
                        @else
                        {{ __('messages.Main_menu') }}
                        @endif
                    </h2>
                    <ul class="clearfix sitemap">
                        @if (isset($headerMenu) && count($headerMenu) > 0)
                            @foreach ($headerMenu as $headerMenus)
                                @php
                                    $url = $headerMenus->url ?? 'javascript:void(0)';
                                @endphp
                                @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                                    <li class="menu-item-has-children pb-0">
                                        <b>
                                            @if (Session::get('Lang') == 'hi')
                                                {{ $headerMenus->name_hi ?? '' }}
                                            @else
                                                {{ $headerMenus->name_en ?? '' }}
                                            @endif
                                        </b>
                                        <ul class="unorder-list pt-10">
                                            @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                                                @foreach ($headerMenus->children as $subMenus)
                                                    @php
                                                        $suburl = $subMenus->url ?? 'javascript:void(0)';
                                                    @endphp
                                                    @if($suburl != 'feedback' && $suburl != 'website-information-manage' && $suburl != 'vigilance-cell' )
                                                    <li>
                                                        @if ($subMenus->tab_type == 1)
                                                            <a onclick="return confirm('{{ $alertMessage }}')"
                                                                target="_blank" href="{{ url($suburl) }}">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $subMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $subMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                        @elseif(isset($subMenus->children) && count($subMenus->children) > 0)
                                                            <b>
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $subMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $subMenus->name_en ?? '' }}
                                                                @endif
                                                            </b>
                                                        @else
                                                                <a href="{{ url($url.'/'.$suburl) }}">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $subMenus->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $subMenus->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                        @endif
                                                    </li>
                                                    @endif
                                                    @if (isset($subMenus->children) && count($subMenus->children) > 0)
                                                    <ul class="unorder-list pt-10 pl-15">
                                                    @foreach ($subMenus->children as $ChildMenus)
                                                    @php
                                                        $ChildMenusurl = $ChildMenus->url ?? 'javascript:void(0)';
                                                        $ChildMenusurlfixed = $ChildMenus->footer_url ?? 'javascript:void(0)';
                                                    @endphp
                                                    @if (isset($ChildMenus->children) && count($ChildMenus->children) > 0)
                                                        @if ($ChildMenus->tab_type == 1)
                                                            <li class="env sub-menu-drop-g">
                                                                <a href="{{ url($ChildMenusurlfixed) }}"
                                                                    onclick="return confirm('{{ $alertMessage }}')"
                                                                    target="_blank">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $ChildMenus->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $ChildMenus->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                            @else
                                                            <li class="env sub-menu-drop-g">
                                                                <a href="{{ url($ChildMenusurlfixed) }}" class="sub-menu-drop-f">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $ChildMenus->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $ChildMenus->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                        @endif
                                                        </li>
                                                    @else
                                                        @if ($ChildMenus->tab_type == 1)
                                                            <li class="remove-show-class">
                                                                <a onclick="return confirm('{{ $alertMessage }}')"
                                                                    target="_blank" href="{{ $ChildMenusurl ?? '' }}">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $ChildMenus->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $ChildMenus->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                            </li>
                                                        @else
                                                            <li class="remove-show-class"><a
                                                                    href="{{ url($url . '/' . $suburl . '/' . $ChildMenusurl) ?? '' }}">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $ChildMenus->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $ChildMenus->name_en ?? '' }}
                                                                    @endif
                                                                </a></li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                                            </ul>
                                                @endif
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
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $headerMenus->name_hi ?? '' }}
                                                @else
                                                    {{ $headerMenus->name_en ?? '' }}
                                                @endif
                                            </a>
                                        @else
                                            <a href="{{ url($url) }}">
                                                @if (Session::get('Lang') == 'hi')
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
                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.Footer_Menu') }}
                    @else
                    {{ __('messages.Footer_Menu') }}
                    @endif
                </h2>
                <div class="list list-circle">
                    @if (isset($footerMenu) && count($footerMenu) > 0)
                        <ul class="clearfix sitemap">
                            @foreach ($footerMenu as $footerMenus)
                                @php
                                    $footerMenusurl = $footerMenus->footer_url ?? 'javascript:void(0)';
                                @endphp
                                @if ($footerMenus->tab_type == 1)
                                    <li class="first leaf">
                                        <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                            href="{{ url($footerMenusurl) ?? '' }}">
                                            @if (Session::get('Lang') == 'hi')
                                                {{ $footerMenus->name_hi ?? '' }}
                                            @else
                                                {{ $footerMenus->name_en ?? '' }}
                                            @endif
                                        </a>
                                    </li>
                                @else
                                    <li class="first leaf"><a href="{{ url($footerMenusurl) ?? '' }}">
                                            @if (Session::get('Lang') == 'hi')
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
