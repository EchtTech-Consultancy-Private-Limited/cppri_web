<footer class="wrapper footer-wrapper">
    <div class="footer-top-wrapper change-color-code">
        <div class="back-drop">
            <div class="container common-container four_content footer-top-container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row p-0">

                            {{-- slice(0, 6)   0= start index , 6= lenght  --}}

                            <div class="col-md-4">
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
                                    $footerurl = $footerMenus->footer_url ?? 'javascript:void(0)';
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

                            <div class="col-md-4">
                                <h3 class="footer-title">


                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.Divisions/Cells') }}
                                    @else
                                    {{ __('messages.Divisions/Cells') }}
                                    @endif


                                </h3>

                                @if (isset($footerMenu) && count($footerMenu) > 0)
                                <ul>
                                    @foreach ($footerMenu->slice(6, 6) as $footerMenus)
                                    @php
                                    $footerurl = $footerMenus->footer_url ?? 'javascript:void(0)';
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

                            </div>
                            <!-- 
                            <div class="col-md-4">
                                <h3 class="footer-title">&nbsp;</h3>
                              
                                    @if (isset($footerMenu) && count($footerMenu) > 0)
                                        <ul>
                                            @foreach ($footerMenu->slice(12, 6) as $footerMenus)
                                                @php
                                                    $footerurl = $footerMenus->footer_url ?? 'javascript:void(0)';
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
                            
                            </div> -->


                            @if (isset($quickLink) && count($quickLink) > 0)
                            <div class="col-md-4">
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
                                    $footerurl = $quickLinks->footer_url ?? 'javascript:void(0)';
                                    @endphp

                                    @if ($quickLinks->tab_type == 1)
                                    <li><a onclick="return confirm('{{ $alertMessage ?? '' }}')" target="_blank"
                                            href="{{ $footerurl ?? '' }}">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ $quickLinks->name_hi ?? '' }}
                                            @else
                                            {{ $quickLinks->name_en ?? '' }}
                                            @endif
                                        </a></li>
                                    @else
                                    <li>
                                        <a href="{{ url($footerurl) ?? '' }}">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ $quickLinks->name_hi ?? '' }}
                                            @else
                                            {{ $quickLinks->name_en ?? '' }}
                                            @endif
                                        </a>
                                    </li>
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
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                @if (Session::get('Lang') == 'hi')
                                {{ __('messages.address') }}
                                @else
                                {{ __('messages.address') }}
                                @endif</li>
                            <li><i class="fa fa-phone"></i>
                                (0132) - 2714050, 2714061,
                                2714062,
                                2714059</li>
                            <li><i class="fa fa-fax"></i> (0132)-2714052</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                director[dot]cppri[at]gmail[dot]com
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
                        © Copyright {{ now()->year }} <strong>CPPRI Sahranpur.</strong><span> All Rights
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
                <div class="last-updated d-flex align-items-center">
                    <span>

                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Last_Updated') }} :
                        @else
                        {{ __('messages.Last_Updated') }} :
                        @endif

                        <strong>

                            <?php echo date('d-m-Y ', strtotime(date('y-m-d'))); ?>

                        </strong>
                    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>

                        @if (Session::get('Lang') == 'hi')
                        {{ __('messages.Total_Visitors') }}:
                        @else
                        {{ __('messages.Total_Visitors') }}:
                        @endif

                        <strong>{{ $visitCounter ?? '' }}</strong>
                    </span>

                </div>
            </div>
        </div>
    </div>

</footer>

<div id="costumModal8" class="modal fade" data-bs-easein="shrinkIn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"> <i
                        class="fa fa-times" aria-hidden="true"></i> </button>
                <img src="{{ asset('assets-cppri/images/CoronaAppeal.gif') }}" data-id="show" alt=""
                    class="md-img show-model">
            </div>
        </div>
    </div>
</div>
<div class="loader-bg"></div>
<div class="loader">

    <div class="loading-dots" id="cppri_loader">
        <img src="{{ asset('assets-cppri/images/logo.png') }}" alt="">
        <div>
            <div class="loading-dots--dot"></div>
            <div class="loading-dots--dot"></div>
            <div class="loading-dots--dot"></div>
        </div>

    </div>
</div>