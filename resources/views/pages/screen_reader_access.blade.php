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

                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Screen_Reader_Access') }}
                        @else
                            {{ __('messages.Screen_Reader_Access') }}
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
                    <li><a href="home.html">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>
                    <li><a href="javascript:void();">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Screen_Reader_Access') }}
                            @else
                                {{ __('messages.Screen_Reader_Access') }}
                            @endif
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="wrapper paragraph-wrapper ptb-30">
        <div class="container common-container four_content">
            <div class="align-lt">
                <h2 class="mt-0 mb-20">
                    @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Screen_Reader_Access') }}
                    @else
                        {{ __('messages.Screen_Reader_Access') }}
                    @endif
                </h2>
                <!-- <h3>Headline goes here...</h3> -->

                <p tabindex="0">
                    The website of National Rabies Control Program complies with Guidelines for Indian Government Websites
                    and World Wide Web Consortium (W3C) Web Content Accessibility Guidelines (WCAG) 2.0 level A. This will
                    enable people with visual impairments access the website using technologies, such as screen readers. The
                    information of the website is accessible with different screen readers, such as JAWS, NVDA, SAFA,
                    Supernova and Window-Eyes.
                </p>
                <p tabindex="0" class="mb-20"> Following table lists the information about different screen readers:
                    <b>Information related to the various screen readers</b>
                </p>

                <table id="example" class="display" style="width:100%">

                    <thead>

                        <tr>
                            <th>Screen Reader</th>
                            <th>Website</th>
                            <th>Free / Commercial
                            </th>
                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td>Non Visual Desktop Access (NVDA)</td>
                            <td><a class="ext" href="http://www.nvda-project.org/" target="_BLANK"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.nvda-project.org/ (link is external)</a><br>(External website
                                that opens in a new window)</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>System Access To Go</td>
                            <td><a class="ext" href="http://www.satogo.com/" target="_BLANK"
                                    title="External site that opens in a new window" tabindex="0">http://www.satogo.com/
                                    (link is external)</a><br>(External website that opens in a new window)</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Web Anywhere</td>
                            <td><a class="ext" href="http://webanywhere.cs.washington.edu/wa.php" target="_BLANK"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://webanywhere.cs.washington.edu/wa.php (link is
                                    external)</a><br>(External website that opens in a new window)</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Hal</td>
                            <td><a class="ext" href="http://www.yourdolphin.co.uk/productdetail.asp?id=5" target="_BLANK"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.yourdolphin.co.uk/productdetail.asp?id=5 (link is
                                    external)</a><br>(External website that opens in a new window)</td>
                            <td>Commercial</td>
                        </tr>
                        <tr>
                            <td>JAWS</td>
                            <td><a class="ext" href="http://www.freedomscientific.com/jaws-hq.asp" target="_BLANK"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.freedomscientific.com/jaws-hq.asp (link is external)</a><br>
                                (External website that opens in a new window)</td>
                            <td>Commercial</td>
                        </tr>
                        <tr>
                            <td> Supernova</td>
                            <td> <a class="ext" href="http://www.yourdolphin.co.uk/productdetail.asp?id=1"
                                    target="_BLANK" title="External site that opens in a new window"
                                    tabindex="0">http://www.yourdolphin.co.uk/productdetail.asp?id=1 (link is
                                    external)</a><br> (External website that opens in a new window)</td>
                            <td> Commercial</td>
                        </tr>
                        <tr>
                            <td> Window-Eyes</td>
                            <td> <a class="ext" href="http://www.gwmicro.com/Window-Eyes/" target="_BLANK"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.gwmicro.com/Window-Eyes/ (link is external)</a><br> (External
                                website that opens in a new window)</td>
                            <td>Commercial</td>


                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
@endsection
