<div class="wrapper common-wrapper">
    <div class="container common-container four_content top-header">
        <div class="common-left clearfix">
            <ul>
                <li class="border-r">
                    <div class="circle-boxes">
                        <div onclick="changeToAfterbefore()" class="c-box blue  color" data-id="#1a4f91" title="Blue"></div>
                        <div onclick="changeToAfterbefore()" class="c-box green color" data-id="#007473" title="Green"></div>
                        <div onclick="changeToAfterbefore()" class="c-box orange color" data-id="#ca5e04" title="Orange"></div>
                        <div onclick="changeToAfterbefore()" class="c-box purple color" data-id="#2a2f67" title="Purple"></div>
                    </div>
                </li>
                <li class="gov-india timer-date-c">
                    <span class="li_eng responsive_go_eng">
                        <?php echo date('d F Y', strtotime(date('y-m-d'))); ?> 
                        <span id=timeid> </span>
                    </span>
                </li>
                <!-- <li class="ministry">
                    <span class="responsive_go_hindi" lang="hi">
                        <a target="_blank" href="https://india.gov.in/hi"
                            title="भारत सरकार ( बाहरी वेबसाइट जो एक नई विंडो में खुलती है)">भारत
                            सरकार</a>
                    </span>
                </li>
                <li class="ministry">
                    <span class="li_eng responsive_go_eng"><a target="_blank"
                            href="https://india.gov.in/"
                            title="Government of india,External Link that opens in a new window">Government of india</a>
                    </span>
                </li> -->
            </ul>
        </div>
        <div class="common-right clearfix">
            <ul id="header-nav">
                <li class="ico-skip cf"><a href="#skipCont" title="Skip to main content"> <img class="top" src="{{ asset('assets-cppri/images/ico-skip.png') }}"
                            alt="Site Search"></a></a>
                </li>
                <li class="ico-site-search cf">
                    <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                        <img class="top" src="{{ asset('assets-cppri/images/ico-site-search.png') }}"
                            alt="Site Search"></a>
                    <div class="search-drop both-search">
                        <div class="google-find">
                            
                            {{-- <form action="{{ url('search') }}" method="get" > --}}
                                <label for="search_key_g" class="notdisplay">Search</label>
                                <input type="text" name="query"  id="search_key_g">
                                <input type="submit" value="Search" class="submit">
                            {{-- </form> --}}
                            
                        </div>
                        <div class="find">
                            <form name="searchForm" action="{{ url('search') }}" method="get" >
                                <label for="search_key" class="notdisplay">Search</label>
                                <input type="text" name="search_key" id="search_key"
                                    onKeyUp="autoComplete()" autocomplete="off" required
                                    value="{{ request('search_key') ?? '' }}"
                                    placeholder="Search here...">
                                <input type="submit" value="Search" class="bttn-search">
                            </form>
                            <div id="auto_suggesion"></div>
                        </div>
                    </div>
                </li>

                <li class="ico-sitemap screen-reader cf"><a href="{{url('/screen-reader-access')}}" title="Screen Reader Access"><i class="fa fa-volume-up"></i></a> </li>

                
                <li class="ico-accessibility cf screen-reader cf">
                    <a href="javascript:void(0);" id="toggleAccessibility"
                        title="Accessibility Dropdown">
                        <!-- <img class="top"
                            src="{{ asset('assets-cppri/images/ico-accessibility.png') }}"
                            alt="Accessibility Dropdown"> -->
                            <i class="fa fa-wheelchair" aria-hidden="true"></i>
                    </a>
                    <ul class='invisible'>
                        <li> <a onClick="set_font_size(&#39;increase&#39;)" title="Increase font size"
                                href="javascript:void(0);">A<sup>+</sup>
                            </a>
                        </li>
                        <li> <a onClick="set_font_size()" title="Reset font size"
                                href="javascript:void(0);">A<sup>&nbsp;</sup></a> </li>
                        <li> <a onClick="set_font_size(&#39;decrease&#39;)" title="Decrease font size"
                                href="javascript:void(0);">A<sup>-</sup></a> </li>
                        <li> <a href="javascript:void(0);" class="high-contrast dark"
                                title="High Contrast">A</a>
                        </li>
                        <li> <a href="javascript:void(0);" class="high-contrast light d-none"
                                title="Normal Contrast" >A</a> </li>
                    </ul>
                </li>
                <li class="ico-social cf">
                    <a href="javascript:void(0);" id="toggleSocial" title="Social Medias"> 
                        <img class="top" src="{{ asset('assets-cppri/images/ico-social.png') }}"
                            alt="Social Medias"></a>
                    @if (isset($social_links) && $social_links != '')   
                    
                     @php
                       $facebookUrl = $social_links->facebook ?? 'javascript:void(0)';
                       $twitterUrl = $social_links->twitter ?? 'javascript:void(0)';
                       $instagramUrl = $social_links->instagram ?? 'javascript:void(0)';
                       $linkedinUrl = $social_links->linkedin ?? 'javascript:void(0)';
                     @endphp
                         
                    <ul>
                        @if ($social_links->facebook != '' && $social_links->facebook != 0)
                        <li><a target="_blank" title="Facebook"
                            href="{{ url($facebookUrl) ?? '' }}"><img alt="Facebook Page"
                                    src="{{ asset('assets-cppri/images/ico-facebook.png') }}"></a></li>
                        @endif      
                        @if ($social_links->twitter != '' && $social_links->twitter != 0)      
                        <li><a target="_blank" title="Twitter"
                            href="{{ url($twitterUrl) ?? '' }}"><img alt="Twitter Page"
                                    src="{{ asset('assets-cppri/images/ico-twitter.png') }}"></a></li>
                        @endif   
                       
                        {{-- <li><a target="_blank" title="Youtube"
                                href="http://www.youtube.com/"><img alt="youtube Page"
                                    src="{{ asset('assets-cppri/images/ico-youtube.png') }}"></a></li> --}}

                        @if ($social_links->instagram != '' && $social_links->instagram != 0)            
                        <li><a target="_blank" title="Instagram"
                            href="{{ url($instagramUrl) ?? '' }}"><img alt="Instagram Page"
                                    src="{{ asset('assets-cppri/images/instagram.png') }}"></a></li>
                        @endif            
                        @if ($social_links->linkedin != '' && $social_links->linkedin != 0)       
                        <li><a target="_blank" title="Linkedin"
                            href="{{ url($linkedinUrl) ?? '' }}"><img alt="Linkedin"
                                    src="{{ asset('assets-cppri/images/linkedin1.png') }}"></a></li>
                        @endif            
                    </ul>
                    @endif
                </li>

                <li class="ico-sitemap cf"><a href="{{ url('/site-map') }}" title="Sitemap">
                        <img class="top" src="{{ asset('assets-cppri/images/ico-sitemap.png') }}"
                            alt="Sitemap"></a>
                </li>
               
                <li class="hindi cmf_lan d-hide">
                    <label class="de-lag">
                        <span class="d-none">Language</span>
                        <select class="Select Language" onchange="setlang(value);" tabindex="0">
                            <option value="en" @if (Session::get('Lang') == 'en') selected @endif>
                                English</option>
                            <option value="hi" @if (Session::get('Lang') == 'hi') selected @endif>
                                हिन्दी</option>
                        </select>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>