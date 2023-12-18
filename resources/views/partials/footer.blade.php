<footer class="wrapper footer-wrapper">
    <div class="footer-top-wrapper">
        <div class="back-drop">
            <div class="container common-container four_content footer-top-container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row p-0">

                            {{-- slice(0, 6)   0= start index , 6= lenght  --}}

                            <div class="col-md-3">
                                <h3 class="footer-title">About Us</h3>
                                @if (isset($footerMenu) && count($footerMenu) > 0)
                                    <ul>
                                        @foreach ($footerMenu->slice(0, 6) as $footerMenus)
                                            @php
                                                $footerurl = $footerMenus->url ?? 'javascript:void(0)';
                                            @endphp


                                            @if ($footerMenus->tab_type == 1)
                                                <li>
                                                    <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                                        href="{{ $footerurl  ?? '' }}">
                                                        @if (Session::get('Lang') == 'hi')
                                                            {{ $footerMenus->name_hi ?? '' }}
                                                        @else
                                                            {{ $footerMenus->name_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </li>
                                            @else
                                                <li><a href="{{ url($footerurl) ?? '' }}">

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
                                    <p>No footer menu items available.</p>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <h3 class="footer-title">Divisions/Cells</h3>
                                <ul>
                                    @if (isset($footerMenu) && count($footerMenu) > 0)
                                        <ul>
                                            @foreach ($footerMenu->slice(6, 6) as $footerMenus)
                                                @php
                                                    $footerurl = $footerMenus->url ?? 'javascript:void(0)';
                                                @endphp
                                                @if ($footerMenus->tab_type == 1)
                                                    <li>
                                                        <a onclick="return confirm('{{ $alertMessage }}')"
                                                            target="_blank" href="{{ $footerurl ?? '' }}">
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ $footerMenus->name_hi ?? '' }}
                                                            @else
                                                                {{ $footerMenus->name_en ?? '' }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ url($footerurl) ?? '' }}">
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
                                        <p>No footer menu items available.</p>
                                    @endif
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h3 class="footer-title">&nbsp;</h3>
                                <ul>
                                    @if (isset($footerMenu) && count($footerMenu) > 0)
                                        <ul>
                                            @foreach ($footerMenu->slice(12, 6) as $footerMenus)
                                                @php
                                                    $footerurl = $footerMenus->url ?? 'javascript:void(0)';
                                                @endphp
                                                @if ($footerMenus->tab_type == 1)
                                                    <li>
                                                        <a onclick="return confirm('{{ $alertMessage }}')"
                                                            target="_blank" href="{{ $footerurl ?? '' }}">
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ $footerMenus->name_hi ?? '' }}
                                                            @else
                                                                {{ $footerMenus->name_en ?? '' }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ url($footerurl) ?? '' }}">

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
                                        <p>No footer menu items available.</p>
                                    @endif
                                </ul>
                            </div>


                            @if (isset($quickLink) && count($quickLink) > 0)
                                <div class="col-md-3">
                                    <h3 class="footer-title">Quick Links</h3>
                                    <ul>
                                        @foreach ($quickLink as $quickLinks)
                                            @php
                                                $quickLinkurl = $quickLinks->url ?? 'javascript:void(0)';
                                            @endphp

                                            @if ($quickLinks->tab_type == 1)

                                            <li><a onclick="return confirm('{{ $alertMessage }}')"
                                                target="_blank" href="{{ $quickLinkurl ??"" }}">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $quickLinks->name_hi ?? '' }}
                                                    @else
                                                        {{ $quickLinks->name_en ?? '' }}
                                                    @endif
                                                </a></li>
                                            @else

                                            <li><a href="{{ url($quickLinkurl) ?? '' }}">
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $quickLinks->name_hi ?? '' }}
                                                @else
                                                    {{ $quickLinks->name_en ?? '' }}
                                                @endif
                                            </a></li>

                                            @endif    
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3 class="footer-title">Contact Us</h3>
                        <ul class="contact-us-footer">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="javascript:void();">Post
                                    Box
                                    174,
                                    Paper Mill Road, Himmat Nagar,
                                    Saharanpur-247001, India</a></li>
                            <li><i class="fa fa-phone"></i> <a href="javascript:void();">(0132) - 2714050, 2714061,
                                    2714062,
                                    2714059</a></li>
                            <li><i class="fa fa-fax"></i> <a href="javascript:void();">(0132)-2714052</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:director.cppri@gmail.com">director.cppri@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrapper">
        <div class="container common-container four_content footer-bottom-container">
            <div class="footer-content">
                <div class="copyright-content"> © Copyright 2023 <strong>CPPRI Sahranpur.</strong><span> All Rights
                        Reserved. </span></div>
                <div class="last-updated">
                    <!-- <span> Last Updated: <strong> 12/10/2022</strong></span> &nbsp; &nbsp; &nbsp; -->
                    <span>Total Visitors: <strong>{{ $visitCounter   ??"" }}</strong></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/.footer-wrapper-->
<!-- Modal Popup -->
<div id="costumModal8" class="modal" data-easein="shrinkIn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <img src="{{ asset('assets-cppri/images/CoronaAppeal.gif') }}" alt="" class="md-img">
            </div>
        </div>
    </div>
</div>
