<footer class="wrapper footer-wrapper">
    <div class="footer-top-wrapper change-color-code">
        <div class="back-drop">
            <div class="container common-container four_content footer-top-container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row p-0">

                            {{-- slice(0, 6)   0= start index , 6= lenght  --}}

                            <div class="col-md-3">
                                <h3 class="footer-title">


                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.About_Us') }}
                                    @else
                                        {{ __('messages.About_Us') }}
                                    @endif


                                </h3>
                                @if (isset($footerMenu) && count($footerMenu) > 0)
                                    <ul>
                                        @foreach ($footerMenu->slice(0, 6) as $footerMenus)
                                            @php
                                                $footerurl = $footerMenus->url ?? 'javascript:void(0)';
                                            @endphp


                                            @if ($footerMenus->tab_type == 1)
                                                <li>
                                                    <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                                        href="{{ $footerurl ?? '' }}">
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
                                <h3 class="footer-title">


                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.Divisions/Cells') }}
                                    @else
                                        {{ __('messages.Divisions/Cells') }}
                                    @endif


                                </h3>
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
                                    <h3 class="footer-title">

                                        @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.Quick_Links') }}
                                        @else
                                            {{ __('messages.Quick_Links') }}
                                        @endif



                                    </h3>
                                    <ul>
                                        @foreach ($quickLink as $quickLinks)
                                            @php
                                                $quickLinkurl = $quickLinks->url ?? 'javascript:void(0)';
                                            @endphp



                                            @if ($quickLinks->tab_type == 1)
                                                <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')"
                                                        target="_blank" href="{{ $quickLinkurl ?? '' }}">
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
                        <h3 class="footer-title">

                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Contact_Us') }}
                            @else
                                {{ __('messages.Contact_Us') }}
                            @endif

                        </h3>
                        <ul class="contact-us-footer">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="javascript:void();">

                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.address') }}
                                    @else
                                        {{ __('messages.address') }}
                                    @endif

                                </a></li>
                            <li><i class="fa fa-phone"></i> <a href="javascript:void();">(0132) - 2714050, 2714061,
                                    2714062,
                                    2714059</a></li>
                            <li><i class="fa fa-fax"></i> <a href="javascript:void();">(0132)-2714052</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:director.cppri@gmail.com">director.cppri[at]gmail.com </a>
                            </li>
                            <li>
                                <div class="footer-img-logo">
                                    <img src="{{ asset('assets-cppri/images/footer-logos.png') }}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-wrapper">
        <div class="container common-container four_content footer-bottom-container">
            <div class="footer-content align-items-center">
                <div class="copyright-content"> 
                    <p class='m-0 text-left text-white'>
                    © Copyright  {{ now()->year }} <strong>CPPRI Sahranpur.</strong><span> All Rights
                        Reserved. </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="f-link-t">
                        <a href="{{ url('linking-policy') }}">

                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Linking_Policy') }}
                            @else
                                {{ __('messages.Linking_Policy') }}
                            @endif

                        </a> |
                        <a href="{{ url('privacy-policy') }}">

                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Privacy_Policy') }}
                            @else
                                {{ __('messages.Privacy_Policy') }}
                            @endif

                        </a> |
                        <a href="{{ url('disclaimer') }}">

                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Disclaimer') }}
                            @else
                                {{ __('messages.Disclaimer') }}
                            @endif

                        </a> |
                        <a href="{{ url('help') }}">


                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Help') }}
                            @else
                                {{ __('messages.Help') }}
                            @endif

                        </a> |
                        <a href="{{ url('cookies-policy') }}">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Cookies_Policy') }}
                            @else
                                {{ __('messages.Cookies_Policy') }}
                            @endif
                        </a> |
                        <a href="{{ url('terms-&-conditions') }}">


                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Terms_&_Conditions') }}
                            @else
                                {{ __('messages.Terms_&_Conditions') }}
                            @endif
                        </a>
                    </span>
                
                </div>
                <div class="last-updated d-flex">
                    <span>

                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Last_Updated') }} :
                        @else
                            {{ __('messages.Last_Updated') }} :
                        @endif

                        <strong>28-12-23</strong>
                    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>

                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Total_Visitors') }}:
                        @else
                            {{ __('messages.Total_Visitors') }}:
                        @endif

                        <strong>{{ $visitCounter ?? '' }}</strong>
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--/.footer-wrapper-->
<!-- Modal Popup -->
{{-- <div id="costumModal8" class="modal" data-easein="shrinkIn" tabindex="-1" role="dialog" aria-hidden="true">
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
</div> --}}
<div id="costumModal8" class="modal" data-easein="shrinkIn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <img src="{{ asset('assets-cppri/images/CoronaAppeal.gif') }}" data-id="show" alt=""
                    class="md-img show-model">
            </div>
        </div>
    </div>
</div>
