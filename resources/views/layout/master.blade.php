<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.header-script')
</head>
<body>
    <div id="fb-root"></div>
    <header>
        <div class="region region-header-top">
            <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
                <noscript class="no_scr">"JzavaScript is a standard programming language that is included to provide
                    interactive features, Kindly enable Javascript in your browser. For details visit help page"
                </noscript>
                @include('partials.top-head')
            </div>
            <p id="scroll" style="display: none;"><span></span></p>
        </div>
        <!--Top-Header Section end-->
        <section class="wrapper header-wrapper">
            <h3 style="display: none;">Top-Header Section end</h3>
            <div class="container common-container four_content  header-container">
                <p class="logo">
                    <a href="index.html" title="Home" rel="home" class="header__logo" id="logo">
                        <img class="national_emblem" src="{{ asset('assets-cppri/images/logo.png') }}"
                            alt="CPPRI logo">
                    </a>
                </p>
                <div class="header-right clearfix">
                    <div class="right-content clearfix">
                        <div class="float-element">
                            <a class="sw-logo g20-logo" target="_blank" href="https://www.g20.org/en/"
                                title="G20, External link that open in a new windows">
                                <img src="{{ asset('assets-cppri/images/g20-logo.png') }}" alt="Swachh Bharat">
                            </a>
                            <a class="sw-logo swachhbharat" target="_blank" href="https://swachhbharat.mygov.in/"
                                title="Swachh Bharat, External link that open in a new windows">
                                <img src="{{ asset('assets-cppri/images/swach-bharat.png') }}" alt="Swachh Bharat">
                            </a>
                            <a class="sw-logo envelop" target="_blank" href="https://www.india.gov.in/"
                                title="Satyamev Jayate, External link that open in a new windows">
                                <img src="{{ asset('assets-cppri/images/emblem-dark.png') }}" alt="Swachh Bharat">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.header-wrapper-->
        <section class="wrapper megamenu-wraper">
            <h3 style="display: none;">Megamenu</h3>
            @include('partials.menu-header')
        </section>
    </header>
    <!--/.nav-wrapper-->
    @yield('content')
    <!--/.carousel-wrapper-->
    @include('partials.footer')
    @include('partials.footer-script')
</body>

</html>
