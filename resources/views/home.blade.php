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
            <div class="wrapper common-wrapper">
               <div class="container common-container four_content top-header">
                  <div class="common-left clearfix">
                     <ul>
                        <li class="gov-india">
                           <span class="li_eng responsive_go_eng">
                              Last Updated on: 20/10/2022
                           </span>
                        </li>
                        <li class="ministry">
                           <span class="responsive_go_hindi" lang="hi">
                              <a target="_blank" href="https://india.gov.in/hi"
                                 title="भारत सरकार ( बाहरी वेबसाइट जो एक नई विंडो में खुलती है)">भारत सरकार</a>
                           </span>
                        </li>
                        <li class="ministry">
                           <span class="li_eng responsive_go_eng"><a target="_blank" href="https://india.gov.in/"
                                 title="Government of india,External Link that opens in a new window">Government of
                                 india</a>
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
                              <img class="top" src="{{ asset('/') }}assets-cppri/images/ico-site-search.png" alt="Site Search"></a>
                           <div class="search-drop both-search">
                              <div class="google-find">
                                 <form method="get" action="#" target="_blank">
                                    <label for="search_key_g" class="notdisplay">Search</label>
                                    <input type="text" name="q" value="" id="search_key_g">
                                    <input type="submit" value="Search" class="submit">
                                    <div class="">
                                       <input type="radio" name="sitesearch" value="" id="the_web">
                                       <label for="the_web">The Web</label>
                                       <input type="radio" name="sitesearch" value="india.gov.in" checked
                                          id="the_domain"> <label for="the_domain"> INDIA.GOV.IN</label>
                                    </div>
                                 </form>
                              </div>
                              <div class="find">
                                 <form name="searchForm">
                                    <label for="search_key" class="notdisplay">Search</label>
                                    <input type="text" name="search_key" id="search_key" onKeyUp="autoComplete()"
                                       autocomplete="off" required placeholder="Search here...">
                                    <input type="submit" value="Search" class="bttn-search">
                                 </form>
                                 <div id="auto_suggesion"></div>
                              </div>
                           </div>
                        </li>

                        <li class="ico-accessibility cf">
                           <a href="javascript:void(0);" id="toggleAccessibility" title="Accessibility Dropdown">
                              <img class="top" src="{{ asset('/') }}assets-cppri/images/ico-accessibility.png" alt="Accessibility Dropdown">
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
                              <li> <a href="javascript:void(0);" class="high-contrast dark" title="High Contrast">A</a>
                              </li>
                              <li> <a href="javascript:void(0);" class="high-contrast light" title="Normal Contrast"
                                    style="display: none;">A</a> </li>
                           </ul>
                        </li>
                        <li class="ico-social cf">
                           <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                              <img class="top" src="{{ asset('/') }}assets-cppri/images/ico-social.png" alt="Social Medias"></a>
                           <ul>
                              <li><a target="_blank" title="External Link that opens in a new window"
                                    href="http://www.facebook.com/"><img alt="Facebook Page"
                                       src="{{ asset('/') }}assets-cppri/images/ico-facebook.png"></a></li>
                              <li><a target="_blank" title="External Link that opens in a new window"
                                    href="http://www.twitter.com/"><img alt="Twitter Page"
                                       src="{{ asset('/') }}assets-cppri/images/ico-twitter.png"></a></li>
                              <li><a target="_blank" title="External Link that opens in a new window"
                                    href="http://www.youtube.com/"><img alt="youtube Page"
                                       src="{{ asset('/') }}assets-cppri/images/ico-youtube.png"></a></li>
                           </ul>
                        </li>
                        <li class="ico-sitemap cf"><a href="" title="Sitemap">
                              <img class="top" src="{{ asset('/') }}assets-cppri/images/ico-sitemap.png" alt="Sitemap"></a>
                        </li>
                        <li class="hindi cmf_lan d-hide">
                           <label class="de-lag">
                              <span style="display: none;">Language</span>
                              <select title="Select Language">
                                 <option>English</option>
                                 <option>हिन्दी</option>
                              </select>
                           </label>
                        </li>
                        <li class="hindi cmf_lan m-hide">
                           <a href="javascript:;" title="Select Language">Language</a>
                           <ul>
                              <li><a target="_blank" href="" lang="hi" class="alink"
                                    title="Click here for हिन्दी version.">हिन्दी</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <p id="scroll" style="display: none;"><span></span></p>
      </div>
      <!--Top-Header Section end-->
      <section class="wrapper header-wrapper">
         <h3 style="display: none;">Top-Header Section end</h3>
         <div class="container common-container four_content  header-container">
            <p class="logo">
               <a href="index.html" title="Home" rel="home" class="header__logo" id="logo">
                  <img class="national_emblem" src="{{ asset('/') }}assets-cppri/images/logo.png" alt="CPPRI logo">
               </a>
            </p>
            <div class="header-right clearfix">
               <div class="right-content clearfix">
                  <div class="float-element">
                     <a class="sw-logo g20-logo" target="_blank" href="https://www.g20.org/en/"
                        title="G20, External link that open in a new windows">
                        <img src="{{ asset('/') }}assets-cppri/images/g20-logo.png" alt="Swachh Bharat">
                     </a>
                     <a class="sw-logo swachhbharat" target="_blank" href="https://swachhbharat.mygov.in/"
                        title="Swachh Bharat, External link that open in a new windows">
                        <img src="{{ asset('/') }}assets-cppri/images/swach-bharat.png" alt="Swachh Bharat">
                     </a>
                     <a class="sw-logo envelop" target="_blank" href="https://www.india.gov.in/"
                        title="Satyamev Jayate, External link that open in a new windows">
                        <img src="{{ asset('/') }}assets-cppri/images/emblem-dark.png" alt="Swachh Bharat">
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
   <section class="wrapper banner-wrapper">
      <h1 style="display: none">Banner</h1>
      <div id="flexSlider" class="flexslider">
         <ul class="slides">
            <li> <img src="{{ asset('/') }}assets-cppri/images/banner1.jpg" alt="home page slider1" title="Image 1 description"></li>
            <li> <img src="{{ asset('/') }}assets-cppri/images/banner2.png" alt="home page slider2" title="Image 2 description"></li>
            <li> <img src="{{ asset('/') }}assets-cppri/images/banner3.jpg" alt="home page slider3" title="Image 3 description"></li>
            <li> <img src="{{ asset('/') }}assets-cppri/images/banner4.jpg" alt="home page slide4" title="Image 4 description"></li>
            <li> <img src="{{ asset('/') }}assets-cppri/images/banner5.jpg" alt="home page slider5" title="Image 5 description"></li>
         </ul>
      </div>
   </section>
   <section class="latest-news">
      <h3 style="display: none;">Latest News</h3>
      <div class="row">
         <div class="col-md-2">
            <div class="latest-new-title">
               <p>
                  Latest News :
               </p>
            </div>
         </div>
         <div class="col-md-10">
            <div class="marquee">

               <div>
                  <span>
                     <a href="https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6"
                        target="_blank" style="font-weight:bold">Online Public Grievance Redressal through VC Hosted by
                        CPPRI (4PM to 5PM) at
                        https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6</a></span>

                  <span><a
                        href="https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6"
                        target="_blank" style="font-weight:bold">Online Public Grievance Redressal through VC Hosted by
                        CPPRI (4PM to 5PM) at
                        https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6</a></span>

               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="wrapper" id="skipCont"></div>
   <!--/#skipCont-->
   <section id="fontSize" class="wrapper body-wrapper ">
      <h2 style="display: none;">Body</h2>
      <div class="bg-wrapper top-bg-wrapper gray-bg padding-top-bott">
         <div class="container common-container four_content body-container top-body-container padding-top-bott2">
            <div class="minister clearfix">
               <div class="minister-box clearfix">
                  <div class="minister-sub1">
                     <div class="minister-image"><img src="{{ asset('/') }}assets-cppri/images/minister.jpg" alt="Hon’ble Minister"
                           title="Ministry/Department, Minister Name"></div>
                     <div class="min-info">
                        <h4><a href="javascript:void(0);" title="Minister Name"> Shri Som Parkash</a></h4>
                        <h5 class="prime"><a href="javascript:void(0);" title="Hon’ble Prime Minister"> Minister of
                              State for Commerce and Industry</a></h5>
                        <a href="javascript:void(0);"
                           title="External link open in new tab,Portfolio of Hon’ble minister" class="portgolio-button">
                           View Portfolio <i class="fa fa-external-link"></i>
                        </a>
                     </div>
                  </div>
                  <div class="minister-sub">
                     <div class="minister-image"><img src="{{ asset('/') }}assets-cppri/images/M-K-Gupta_0.png" alt="Hon’ble Minister"
                           title="Ministry/Department,Minister Name"></div>
                     <div class="min-info">
                        <h4>Dr. M K Gupta</h4>
                        <h5><a href="javascript:void(0);" title="Minister of Coal"><span>Director </span></a></h5>
                     </div>
                  </div>
                  <div class="minister-sub">
                     <div class="minister-image"><img src="{{ asset('/') }}assets-cppri/images/a_k_dixit.png"
                           alt="minister of state coal and mines" title="Ministry/Department, Minister Name"></div>
                     <div class="min-info">
                        <h4>Dr. A. K. Dixit</h4>
                        <h5><a href="javascript:void(0);" title="Minister of State"><span>Scientist-F</span>
                           </a>
                        </h5>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner-content-wrapper">
               <h2>Welcome to <span>CPPRI</span></h2>
               <!-- <p class="banner-title-tag-line">Welcome to the website of Ministry/Department, Government of India.</p> -->
               <p class="banner-content mb-0"> The origin of Central Pulp & Paper Research Institute (CPPRI) dates back
                  to
                  the year 1975 when the UNDP-GOI Project became operational with an objective to create the required
                  R&D facilities for evaluation of fibrous raw materials for the Indian paper industry. After the
                  conclusion of the above project, CPPRI came into existence as "National Level Research Institute"
                  dedicated for the assistance to the Indian paper industry.
               </p>
               <p class="banner-content">
                  The Institute has redeemed itself in the service of Indian Pulp and Paper Industry through a number of
                  R&D initiatives and continued support through high quality of technical & consultancy services. The
                  11th Five Year Plan Schemes are mainly dedicated to the core issues of the paper industry namely: (i)
                  Conservation & Upgradation of Raw Material (ii) Quality Improvement (iii) Energy Management &
                  Environment Management and (iv) Human Resource & Skill Development
               </p>
               <br>
               <a href="javascript:void(0);" title="Click here to know more">Read more <i
                     class="fa fa-angle-right"></i></a>
            </div>
         </div>
      </div>


      <div class="links-wrapper">
         <div class="container common-container">
            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/publication.png" alt="">
                  </span>
                  <span class="icon-box-text">Publications & Reports</span>
               </a>
            </div>

            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/achive.png" alt="">
                  </span>
                  <span class="icon-box-text">Our Achievements</span>
               </a>
            </div>

            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/research.png" alt="">
                  </span>
                  <span class="icon-box-text">R & D Projects</span>
               </a>
            </div>

            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/member-card.png" alt="">
                  </span>
                  <span class="icon-box-text">Institute Membership</span>
               </a>
            </div>

            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/technical-support.png" alt="">
                  </span>
                  <span class="icon-box-text">Technical Services </span>
               </a>
            </div>

            <div class="icon-box">
               <a href="javascript:void();">
                  <span class="icon-box-ico">
                     <img src="theme/images/icons/tender.png" alt="">
                  </span>
                  <span class="icon-box-text">Tender</span>
               </a>
            </div>
         </div>
      </div>

      <div class="wrapper home-banner">
         <div class="container common-container four_content banner-container body-container top-body-container">

            <div class="left-block">
               <div class="left-col-2">
                  <div class="page-tab clearfix">
                     <div class="page-tab-res clearfix">
                        <div id="parentHorizontalTab">
                           <ul class="resp-tabs-list hor_1">
                              <li class="border-l"><a href="#" id="tab-list-1">Notification</a></li>
                              <li><a href="#">Press Release</a></li>
                           </ul>
                           <div class="resp-tabs-container hor_1">
                              <div class="clearfix" id="hor_1_tab_item-0">
                                 <div class="content-wrapper">
                                    <p class="text-slide pause" onclick="changeClass()"></p>
                                    <div class="scroll-text scroll-left">
                                       <ul class="list">
                                          <li>
                                             <div class="list-content">
                                                <a href="https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6"
                                                   target="_blank">Online Public Grievance Redressal through VC Hosted
                                                   by CPPRI (4PM to 5PM) at
                                                   https://centralpulppaperresearchinstitute.webex.com/centralpulppaperresearchinstitute/j.php?MTID=m639c2a7e8a854b99da321b648df0ade6</a>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="list-content">
                                                ADVERTISEMENT No. 03/2023 Recruitment to the post of Sr. Scientific
                                                Assistants, Technicians Gr.III(i) and Technicians Gr. II &nbsp; <a
                                                   href="https://cppri.in" target="_blank" class="text-danger">Click
                                                   here to apply</a>
                                             </div>
                                          </li>

                                       </ul>
                                    </div>
                                    <div class="view-footer"><a href="javascript:void();" title="Read More"><span>Read
                                             More <i class="fa fa-angle-right"></i></span></a></div>
                                 </div>
                              </div>
                              <div class="clearfix" id="hor_1_tab_item-1">
                                 <div class="content-wrapper">
                                    <p class="text-slide01 pause" onclick="changeClass01()"></p>
                                    <div class="scroll-text01 scroll-left">
                                       <ul class="list">
                                          <li>
                                             <div class="list-content">Description of Press Release 1 goes here
                                                mm-dd-yyyy - File type (size) DD-MM-YYYY. </div>
                                          </li>
                                          <li>
                                             <div class="list-content">Description of Press Release 2 goes here
                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                          </li>
                                          <li>
                                             <div class="list-content">Description of Press Release 3 goes here
                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                          </li>
                                          <li>
                                             <div class="list-content">Description of Press Release 4 goes here
                                                mm-dd-yyyy - File type (size) DD-MM-YYYY.</div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="view-footer"><a href="javascript:void();" title="Read More"><span>Read
                                             More <i class="fa fa-angle-right"></i></span></a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="left-col-2">
                  <div class="tender">

                     <h2>Tenders</h2>
                  </div>
                  <p class="text-slide1 pause" onclick="changeClass1()"></p>
                  <div class="scroll-text-1 scroll-left">
                     <ul class="list">
                        <li>
                           <div class="date"><span>29</span><em>Nov 2022</em></div>
                           <div class="list-content">Description of Tenders 1 goes here - File type (size).</div>
                        </li>
                        <li>
                           <div class="date"><span>22</span><em>Nov 2020</em></div>
                           <div class="list-content">Description of Tenders 2 goes here - File type (size).</div>
                        </li>
                        <li>
                           <div class="date"><span>29</span><em>Sept 2023</em></div>
                           <div class="list-content">Description of Tenders 3 goes here - File type (size).</div>
                        </li>
                     </ul>
                  </div>
                  <div class="view-footer"><a href="javascript:void(0);" title="Know More About Tenders"><span>View all
                           Tenders <i class="fa fa-angle-right"></i></span></a></div>
               </div>
            </div>
            <div class="banner-right-wrapper">
               <div class="banner-box-wrapper">
                  <div class="banner-box banner-box-1">
                     <div class="banner-box-content">
                        <!-- <h2>External Link 2</h2> -->
                        <a href="javascript:void(0);" title="External link that opens in new tab">

                          <img src="{{ asset('/') }}assets-cppri/images/rti.png" alt="icon" class="cell-icon-sec">
                           <p>RTI</p>
                        </a>
                     </div>
                  </div>
                  <div class="banner-box banner-box-5">
                     <div class="banner-box-content">
                        <!-- <h2>External Link 1</h2> -->
                        <a href="javascript:void(0);" title="External link that opens in new tab">

                           <img src="{{ asset('/') }}assets-cppri/images/grivence_rti.png" alt="icon" class="cell-icon-sec">
                           <p>Grievance Cell</p>
                        </a>
                     </div>
                  </div>
                  <div class="banner-box banner-box-2">
                     <div class="banner-box-content">
                        <!-- <h2>External Link 2</h2> -->
                        <a href="javascript:void(0);" title="External link that opens in new tab">

                           <img src="{{ asset('/') }}assets-cppri/images/public.png" alt="icon" class="cell-icon-sec">
                           <p>Public Grievance Cell</p>
                        </a>
                     </div>
                  </div>
                  <div class="banner-box banner-box-3">
                     <div class="banner-box-content">
                        <!-- <h2>External Link 3</h2> -->
                        <a href="javascript:void(0);" title="External link that opens in new tab">

                           <img src="{{ asset('/') }}assets-cppri/images/tsc.png" alt="icon" class="cell-icon-sec">
                           <p>TSC Cell</p>
                        </a>
                     </div>
                  </div>
                  <div class="banner-box banner-box-4">
                     <div class="banner-box-content">
                        <!-- <h2>External Link 3</h2> -->
                        <a href="javascript:void(0);" title="External link that opens in new tab">

                           <img src="{{ asset('/') }}assets-cppri/images/mail.png" alt="icon" class="cell-icon-sec">
                           <p>Webmail</p>
                        </a>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>


      <div class="wrapper banner-bg-white">
         <div class="container common-container four_content banner-container body-container top-body-container">

            <div class="col-md-4">
               <div class="social-box">
                  <div class="sub-sec">
                     <h2>Facebook Feed</h2>
                  </div>
                  <div class="facebook-feed-content text-center">
                     <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100090718134100"
                        data-tabs="timeline" data-width="360" data-height="400" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/profile.php?id=100090718134100"
                           class="fb-xfbml-parse-ignore"><a
                              href="https://www.facebook.com/profile.php?id=100090718134100">Central Pulp and Paper
                              Research Institute</a></blockquote>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="social-box">
                  <div class="sub-sec">
                     <h2>Twitter Feed</h2>
                  </div>
                  <div class="twitter-feed-content p-2">
                     <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr">On 18.10.2023, Old Newspapers, Old Magazines and Shredded Office waste
                           was disposed of under the ongoing # Special Campaign 3.0. The total space freed after
                           disposal of paper waste was 700 sqr. ft. <a
                              href="https://t.co/e8nghNwqSj">pic.twitter.com/e8nghNwqSj</a></p>&mdash; Central Pulp
                        &amp; Paper Research Institute (@CppriSaharanpur) <a
                           href="https://twitter.com/CppriSaharanpur/status/1714938725103464730?ref_src=twsrc%5Etfw">October
                           19, 2023</a>
                     </blockquote>
                     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="social-box">
                  <div class="sub-sec">
                     <h2>Linkedin Feed</h2>
                  </div>

                  <div class="linkedinfeed">
                     <img src="{{ asset('/') }}assets-cppri/images/linkedin_feed.PNG" alt="">
                  </div>

               </div>
            </div>

         </div>
      </div>


      <div class="wrapper home-btm-slider">
         <div class="container common-container four_content gallery-container">
            <div class="gallery-area clearfix">
               <div class="gallery-heading">
                  <h3>Photo Gallery</h3>
                  <a class="bttn-more bttn-view" href="#" title="View all Photo Gallery"><span>View All</span></a>
               </div>
               <div class="gallery-holder">
                  <div id="galleryCarousel" class="flexslider">
                     <ul class="slides">
                        <li data-thumb="{{ asset('/') }}assets-cppri/images/photo_gallery/g4.jpg" data-thumb-alt="Slide 1">
                           <img src="{{ asset('/') }}assets-cppri/images/photo_gallery/g4.jpg" alt="gallery2" title="Slide 1">
                        </li>
                        <li data-thumb="{{ asset('/') }}assets-cppri/images/photo_gallery/g1.jpg" data-thumb-alt="Slide 2">
                           <img src="{{ asset('/') }}assets-cppri/images/photo_gallery/g1.jpg" alt="gallery1" title="Slide 2">
                        </li>
                        <li data-thumb="{{ asset('/') }}assets-cppri/images/photo_gallery/g2.jpg" data-thumb-alt="Slide 3">
                           <img src="{{ asset('/') }}assets-cppri/images/photo_gallery/g2.jpg" alt="gallery3" title="Slide 3">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="gallery-right">
               <div class="video-heading">
                  <h3>Video Gallery</h3>
                  <a class="bttn-more bttn-view" href="#" title="View all Video Gallery"><span>View All</span></a>
               </div>
               <div class="video-wrapper">
                  <video src="{{ asset('/') }}assets-cppri/images/photo_gallery/video.mp4" poster="theme/images/"
                     title="The Union Minister for Railways and Coal, Shri Piyush Goyal addressing a press conference on Neyveli Lignite Corporation."
                     controls autoplay muted>
                     <span>Your browser does not support HTML5 video.</span>
                  </video>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/.body-wrapper-->
   <!--/.banner-wrapper-->
   <section class="wrapper carousel-wrapper">
      <h2 style="display: none;">Carousel</h2>
      <div class="container common-container four_content carousel-container">
         <div id="flexCarousel" class="flexslider carousel">
            <ul class="slides">
               <li><a target="_blank" href="http://digitalindia.gov.in/"
                     title="Digital India, External Link that opens in a new window"><img
                        src="{{ asset('/') }}assets-cppri/images/carousel/digital-india.png" alt="Digital India"></a></li>
               <li><a target="_blank" href="http://www.makeinindia.com/"
                     title="Make In India, External Link that opens in a new window"> <img
                        src="{{ asset('/') }}assets-cppri/images/carousel/makeinindia.png" alt="Make In India"></a></li>
               <li><a target="_blank" href="http://india.gov.in/"
                     title="National Portal of India, External Link that opens in a new window"><img
                        src="{{ asset('/') }}assets-cppri/images/carousel/india-gov.png" alt="National Portal of India"></a></li>
               <li><a target="_blank" href="http://goidirectory.nic.in/"
                     title="GOI Web Directory, External Link that opens in a new window"><img
                        src="{{ asset('/') }}assets-cppri/images/carousel/goidirectory.png" alt="GOI Web Directory"></a></li>
               <li><a target="_blank" href="https://data.gov.in/"
                     title="Data portal, External Link that opens in a new window"><img
                        src="{{ asset('/') }}assets-cppri/images/carousel/data-gov.png" alt="Data portal"></a></li>
               <li><a target="_blank" href="https://mygov.in/"
                     title="MyGov, External Link that opens in a new window"><img src="{{ asset('/') }}assets-cppri/images/carousel/mygov.png"
                        alt="MyGov Portal"></a></li>
            </ul>
         </div>
      </div>
   </section>
    <!--/.carousel-wrapper-->
         @include('partials.footer')
        @include('partials.footer-script')
    </body>
</html>