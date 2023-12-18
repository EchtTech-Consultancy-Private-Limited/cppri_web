<div class="wrapper common-wrapper">
    <div class="container common-container four_content top-header">
        <div class="common-left clearfix">
            <ul>
                <li class="border-r">
                    <div class="circle-boxes">
                        <div class="c-box blue  color" data-id="#1a4f91" title="Blue"></div>
                        <div class="c-box green color" data-id="#007473" title="Green"></div>
                        <div class="c-box orange color" data-id="#ca5e04" title="Orange"></div>
                        <div class="c-box purple color" data-id="#2a2f67" title="Purple"></div>
                    </div>
                </li>
                <li class="gov-india">
                    <span class="li_eng responsive_go_eng">
                        Last Updated on:
                        <?php echo date('d F Y', strtotime(date('y-m-d'))); ?>
                    </span>
                </li>
                <li class="ministry">
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
                </li>
            </ul>
        </div>
        <div class="common-right clearfix">
            <ul id="header-nav">
                <li class="ico-skip cf"><a href="#skipCont" title="">Skip to main content</a>
                </li>
                <li class="ico-site-search cf">
                    <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                        <img class="top" src="{{ asset('assets-cppri/images/ico-site-search.png') }}"
                            alt="Site Search"></a>
                    <div class="search-drop both-search">
                        <div class="google-find">
                            <form method="get" action="#" target="_blank">
                                <label for="search_key_g" class="notdisplay">Search</label>
                                <input type="text" name="q" value="" id="search_key_g">
                                <input type="submit" value="Search" class="submit">
                                <div class="">
                                    <input type="radio" name="sitesearch" value=""
                                        id="the_web">
                                    <label for="the_web">The Web</label>
                                    <input type="radio" name="sitesearch" value="india.gov.in" checked
                                        id="the_domain"> <label for="the_domain"> INDIA.GOV.IN</label>
                                </div>
                            </form>
                        </div>
                        <div class="find">
                            <form name="searchForm">
                                <label for="search_key" class="notdisplay">Search</label>
                                <input type="text" name="search_key" id="search_key"
                                    onKeyUp="autoComplete()" autocomplete="off" required
                                    placeholder="Search here...">
                                <input type="submit" value="Search" class="bttn-search">
                            </form>
                            <div id="auto_suggesion"></div>
                        </div>
                    </div>
                </li>

                <li class="ico-accessibility cf">
                    <a href="javascript:void(0);" id="toggleAccessibility"
                        title="Accessibility Dropdown">
                        <img class="top"
                            src="{{ asset('assets-cppri/images/ico-accessibility.png') }}"
                            alt="Accessibility Dropdown">
                    </a>
                    <ul style="visibility: hidden;">
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
                        <li> <a href="javascript:void(0);" class="high-contrast light"
                                title="Normal Contrast" style="display: none;">A</a> </li>
                    </ul>
                </li>
                <li class="ico-social cf">
                    <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                        <img class="top" src="{{ asset('assets-cppri/images/ico-social.png') }}"
                            alt="Social Medias"></a>
                    <ul>
                        <li><a target="_blank" title="External Link that opens in a new window"
                                href="http://www.facebook.com/"><img alt="Facebook Page"
                                    src="{{ asset('assets-cppri/images/ico-facebook.png') }}"></a></li>
                        <li><a target="_blank" title="External Link that opens in a new window"
                                href="http://www.twitter.com/"><img alt="Twitter Page"
                                    src="{{ asset('assets-cppri/images/ico-twitter.png') }}"></a></li>
                        <li><a target="_blank" title="External Link that opens in a new window"
                                href="http://www.youtube.com/"><img alt="youtube Page"
                                    src="{{ asset('assets-cppri/images/ico-youtube.png') }}"></a></li>
                    </ul>
                </li>
                <li class="ico-sitemap cf"><a href="javascript:viod(0)" title="Sitemap">
                        <img class="top" src="{{ asset('assets-cppri/images/ico-sitemap.png') }}"
                            alt="Sitemap"></a>
                </li>
                <li class="hindi cmf_lan d-hide">
                    <label class="de-lag">
                        <span style="display: none;">Language</span>
                        <select class="Select Language" onchange="setlang(value);" tabindex="0">
                            <option value="en" @if (Session::get('Lang') == 'en') selected @endif>
                                English</option>
                            <option value="hi" @if (Session::get('Lang') == 'hi') selected @endif>
                                हिन्दी</option>
                        </select>
                    </label>
                </li>
                {{-- <li class="hindi cmf_lan m-hide">
                    <a href="javascript:;" title="Select Language">Language</a>
                    <ul>
                        <li><a target="_blank" href="" lang="hi" class="alink"
                                title="Click here for हिन्दी version.">हिन्दी</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>