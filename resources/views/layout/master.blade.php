<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-script')
</head>

<body id="body">
    <!-- <div id="fb-root"></div> -->

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
<!-- Preloader -->

    <header>
        <div class="region region-header-top">
            <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
                <noscript class="no_scr">"JzavaScript is a standard programming language that is included to provide
                    interactive features, Kindly enable Javascript in your browser. For details visit help page"
                </noscript>
                @include('partials.top-head')
            </div>
            <p id="scroll" class="change-color-code "><span></span></p>
        </div>
        <!--Top-Header Section end-->
        <section class="wrapper header-wrapper">
            <h3   class="d-none">Top-Header Section end</h3>
            <div class="container common-container four_content  header-container">
                <div class="logo">
                    <a href="{{ url('/') }}" title="Home" rel="home" class="header__logo" id="logo">
                        <div class="d-flex-logo">
                            @if (isset($logo) && $logo != '')
                                <img class="national_emblem"
                                    src="{{ asset('resources/uploads/WebsiteCoreSettings/' . $logo->header_logo) }}"
                                    title="{{ $logo->logo_title }}" alt="{{ $logo->logo_title }}">
                            @endif
                            <div class="logo-text">
                                <h3 class="hindi mt-0">केन्द्रीय लुग्दी एवं कागज अनुसंधान संस्थान</h3>
                                <h3 class="english">Central Pulp & Paper Research Institute</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="header-right clearfix">
                    <div class="right-content clearfix">
                        <div class="float-element">
                           
                            <a class="sw-logo g20-logo" onclick="return confirm('{{ $alertMessage ??'' }}')" target="_blank" href="https://www.g20.org/en/"
                                title="G20">
                                <img src="{{ asset('assets-cppri/images/g20-logo.png') }}" alt="Swachh Bharat">
                            </a>
                            <a class="sw-logo swachhbharat" onclick="return confirm('{{ $alertMessage ??''}}')" target="_blank" href="https://swachhbharat.mygov.in/"
                                title="Swachh Bharat">
                                <img src="{{ asset('assets-cppri/images/swach-bharat.png') }}" alt="Swachh Bharat">
                            </a>
                            <a class="sw-logo Beti_Bachao mr-2" onclick="return confirm('{{ $alertMessage ??'' }}')" target="_blank" href="https://www.pmindia.gov.in/en/government_tr_rec/beti-bachao-beti-padhao-caring-for-the-girl-child/"
                                title="Beti Bachao Beti Padhao">
                                <img src="{{ asset('assets-cppri/images/Beti_Bachao.png') }}" alt="Swachh Bharat">
                            </a>
                            <a class="sw-logo envelop" onclick="return confirm('{{ $alertMessage  ??''}}')" target="_blank" href="https://www.india.gov.in/"
                                title="Satyamev Jayate">
                                <img src="{{ asset('assets-cppri/images/emblem-dark.png') }}" alt="Swachh Bharat">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.header-wrapper-->
        <section class="wrapper megamenu-wraper change-color-code">
            <!-- <h3 >Megamenu</h3> -->
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
