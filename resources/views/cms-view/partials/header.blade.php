<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
               <!--begin::Header-->
               <div id="kt_header" style="" class="header  align-items-stretch" >
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                     <!--begin::Aside mobile toggle-->
                     <div class="d-flex align-items-center d-lg-none ms-n4 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                           <i class="ki-outline ki-burger-menu fs-1"></i>				
                        </div>
                     </div>
                     <!--end::Aside mobile toggle-->
                     <!--begin::Mobile logo-->
                     <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="{{ route('dashboard') }}" class="d-lg-none">
                        @if(isset(Auth::user()->role_id) == '1' && Auth::user()->role_id == '1')
                           <img alt="Logo" src="{{ asset('assets/logo-light.png') }}" class="h-25px"/>
                        @else
                        <p>{{ env('COMPANY_NAME') }}</p>
                        @endif
                        </a>
                     </div>
                     <!--end::Mobile logo-->
                     <!--begin::Wrapper-->
                     <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                           <!--begin::Menu wrapper-->
                           <div class="header-menu align-items-stretch"
                              data-kt-drawer="true"
                              data-kt-drawer-name="header-menu"
                              data-kt-drawer-activate="{default: true, lg: false}"
                              data-kt-drawer-overlay="true"
                              data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                              data-kt-drawer-direction="end"
                              data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                              data-kt-swapper="true"
                              data-kt-swapper-mode="prepend"
                              data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"
                              >
                              <!--begin::Menu-->
                              <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-400 align-items-stretch my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6" 
                                 id="#kt_header_menu" 
                                 data-kt-menu="true">
                                 <!--begin:Menu item-->
                                 <div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2" >
                                    <!--begin:Menu link--><span class="menu-link py-3" ><span  class="menu-title" >Dashboards</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                 </div>
                                 <!--end:Menu item-->
                              </div>
                              <!--end::Menu-->
                           </div>
                           <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Toolbar wrapper-->
                        <div class="topbar d-flex align-items-stretch flex-shrink-0">
                           <!--begin::Search-->
                           <div class="d-flex align-items-stretch">
                              <!--begin::Search-->
                              <div 
                                 id="kt_header_search" 
                                 class="header-search d-flex align-items-stretch" 
                                 data-kt-search-keypress="true"
                                 data-kt-search-min-length="2"
                                 data-kt-search-enter="enter"     
                                 data-kt-search-layout="menu"
                                 data-kt-menu-trigger="auto" 
                                 data-kt-menu-overflow="false" 
                                 data-kt-menu-permanent="true" 
                                 data-kt-menu-placement="bottom-end">
                                 <!--begin::Search toggle-->
                                 @if(isset(Auth::user()->role_id) == '1' && Auth::user()->role_id == '1')
                                 <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                    <div class="topbar-item px-3 px-lg-4">
                                       <i class="ki-outline ki-magnifier fs-1"></i>                    
                                    </div>
                                 </div>
                                 <!--end::Search toggle-->
                                 <!--begin::Menu-->
                                 <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                       <!--begin::Form-->
                                       <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                          <!--begin::Icon-->
                                          <i class="ki-outline ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>    <!--end::Icon-->
                                          <!--begin::Input-->
                                          <input type="text" class="search-input  form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
                                          <!--end::Input-->
                                          <!--begin::Spinner-->
                                          <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                          <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                          </span>
                                          <!--end::Spinner-->
                                          <!--begin::Reset-->
                                          <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                          <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>    </span>
                                          <!--end::Reset-->
                                          <!--begin::Toolbar-->
                                          <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                             <!--begin::Preferences toggle-->
                                             <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
                                                <i class="ki-outline ki-setting-2 fs-2"></i>        
                                             </div>
                                             <!--end::Preferences toggle-->
                                             <!--begin::Advanced search toggle-->
                                             <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
                                                <i class="ki-outline ki-down fs-2"></i>        
                                             </div>
                                             <!--end::Advanced search toggle-->
                                          </div>
                                          <!--end::Toolbar-->
                                       </form>
                                       <!--end::Form-->
                                       <!--begin::Separator-->
                                       <div class="separator border-gray-200 mb-6"></div>
                                       <!--end::Separator-->
<<<<<<< HEAD
=======
                                       <!--begin::Recently viewed-->
                                       <div data-kt-search-element="results" class="d-none">
                                          <!--begin::Items-->
                                          <div class="scroll-y mh-200px mh-lg-350px">
                                             <!--begin::Category title-->
                                             <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                                                Users            
                                             </h3>
                                             <!--end::Category title-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <img src="{{ asset('assets') }}/media/avatars/300-6.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Karina Clark</span>
                                                   <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <img src="{{ asset('assets') }}/media/avatars/300-2.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                   <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <img src="{{ asset('assets') }}/media/avatars/300-9.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Ana Clark</span>
                                                   <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <img src="{{ asset('assets') }}/media/avatars/300-14.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                   <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <img src="{{ asset('assets') }}/media/avatars/300-11.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                   <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Category title-->
                                             <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                                Customers            
                                             </h3>
                                             <!--end::Category title-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <img class="w-20px h-20px" src="{{ asset('assets') }}/media/svg/brand-logos/volicity-9.svg" alt=""/>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                   <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <img class="w-20px h-20px" src="{{ asset('assets') }}/media/svg/brand-logos/tvit.svg" alt=""/>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                   <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <img class="w-20px h-20px" src="{{ asset('assets') }}/media/svg/misc/infography.svg" alt=""/>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                   <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <img class="w-20px h-20px" src="{{ asset('assets') }}/media/svg/brand-logos/leaf.svg" alt=""/>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                   <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <img class="w-20px h-20px" src="{{ asset('assets') }}/media/svg/brand-logos/tower.svg" alt=""/>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                   <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                   <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Category title-->
                                             <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                                Projects            
                                             </h3>
                                             <!--end::Category title-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-notepad fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                   <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-frame fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                   <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                   <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <a href="javascript:void(0);" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-profile-circle fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                   <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                             </a>
                                             <!--end::Item-->
                                          </div>
                                          <!--end::Items-->
                                       </div>
                                       <!--end::Recently viewed-->
                                       <!--begin::Recently viewed-->
                                       <div class="mb-5" data-kt-search-element="main">
                                          <!--begin::Heading-->
                                          <div class="d-flex flex-stack fw-semibold mb-4">
                                             <!--begin::Label-->
                                             <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Heading-->
                                          <!--begin::Items-->
                                          <div class="scroll-y mh-200px mh-lg-325px">
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-laptop fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                   <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-chart-simple fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                   <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-chart fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                   <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                   <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-sms fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                   <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-bank fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                   <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                   <span class="symbol-label bg-light">                             
                                                   <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                   <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Item-->
                                          </div>
                                          <!--end::Items-->
                                       </div>
                                       <!--end::Recently viewed-->
                                       <!--begin::Empty-->
                                       <div data-kt-search-element="empty" class="text-center d-none">
                                          <!--begin::Icon-->
                                          <div class="pt-10 pb-10">
                                             <i class="ki-outline ki-search-list fs-4x opacity-50"></i>    
                                          </div>
                                          <!--end::Icon-->
                                          <!--begin::Message-->
                                          <div class="pb-15 fw-semibold">
                                             <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                             <div class="text-muted fs-7">Please try again with a different query</div>
                                          </div>
                                          <!--end::Message-->
                                       </div>
                                       <!--end::Empty-->        
>>>>>>> e776c11d649efb506e0135ad216ebf2c349a7b29
                                    </div>
                                    <!--end::Wrapper-->
                                 </div>
                                 @endif
                                 <!--end::Menu-->
                              </div>
                              <!--end::Search-->    
                           </div>
                           <!--end::Search-->
                           @if(isset(Auth::user()->role_id) == '1' && Auth::user()->role_id == '1')
                           <!--begin::Activities-->
                           <div class="d-flex align-items-stretch">
                              <!--begin::drawer toggle-->
                              <div class="topbar-item px-3 px-lg-4" id="kt_activities_toggle">
                                 <i class="ki-outline ki-js-2 fs-1"></i>            
                              </div>
                              <!--end::drawer toggle-->
                           </div>
                           <!--end::Activities-->   
                           <!--begin::Notifications-->
                           <div class="d-flex align-items-stretch">
                              <!--begin::Menu wrapper-->
                              <div class="topbar-item px-3 px-lg-4 position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                 <i class="ki-outline ki-soft-3 fs-1"></i>        
                              </div>
                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                                 <!--begin::Heading-->
                                 <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{ asset('assets') }}/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->                                   
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                       Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                       <li class="nav-item">
                                          <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                       </li>
                                    </ul>
                                    <!--end::Tabs-->
                                 </div>
                                 <!--end::Heading-->
                                 <!--begin::Tab content-->
                                 <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                       <!--begin::Items-->
                                       <div class="scroll-y mh-325px my-5 px-8">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-primary">      
                                                   <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                   <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">1 hr</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-danger">      
                                                   <i class="ki-outline ki-information fs-2 text-danger"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                   <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">2 hrs</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-warning">      
                                                   <i class="ki-outline ki-briefcase fs-2 text-warning"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                   <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">5 hrs</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-success">      
                                                   <i class="ki-outline ki-abstract-12 fs-2 text-success"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                   <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">2 days</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-primary">      
                                                   <i class="ki-outline ki-colors-square fs-2 text-primary"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                   <div class="text-gray-400 fs-7">Product launch status update</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">21 Jan</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-info">      
                                                   <i class="ki-outline ki-picture
                                                      fs-2 text-info"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner {{ asset('assets') }}</a>
                                                   <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">21 Jan</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                   <span class="symbol-label bg-light-warning">      
                                                   <i class="ki-outline ki-color-swatch fs-2 text-warning"></i>                                                    
                                                   </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                   <a href="javascript:void(0);" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon {{ asset('assets') }}</a>
                                                   <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                </div>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">20 March</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                       <!--end::Items-->
                                       <!--begin::View more-->
                                       <div class="py-3 text-center border-top">
                                          <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                          View All 
                                          <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
                                       </div>
                                       <!--end::View more--> 
                                    </div>
                                    <!--end::Tab panel-->      
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex flex-column px-9">
                                          <!--begin::Section-->
                                          <div class="pt-10 pb-0">
                                             <!--begin::Title-->
                                             <h3 class="text-dark text-center fw-bold">
                                                Get Pro Access                
                                             </h3>
                                             <!--end::Title-->
                                             <!--begin::Text-->
                                             <div class="text-center text-gray-600 fw-semibold pt-1">
                                                Outlines keep you honest. They stoping you from amazing poorly about drive
                                             </div>
                                             <!--end::Text-->
                                             <!--begin::Action-->
                                             <div class="text-center mt-5 mb-9">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary px-6"  data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" >Upgrade</a>                  
                                             </div>
                                             <!--end::Action-->
                                          </div>
                                          <!--end::Section-->
                                          <!--begin::Illustration-->
                                          <div class="text-center px-4">
                                             <img class="mw-100 mh-200px" alt="image" src="{{ asset('assets') }}/media/illustrations/unitedpalms-1/1.png"/>
                                          </div>
                                          <!--end::Illustration-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
<<<<<<< HEAD
=======
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                       <!--begin::Items-->
                                       <div class="scroll-y mh-325px my-5 px-8">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Just now</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">2 hrs</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">5 hrs</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">2 days</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">1 week</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Mar 5</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">May 15</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Apr 3</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Jun 30</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Jul 10</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Sep 10</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-stack py-4">
                                             <!--begin::Section-->
                                             <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                <!--end::Title-->
                                             </div>
                                             <!--end::Section-->
                                             <!--begin::Label-->
                                             <span class="badge badge-light fs-8">Dec 10</span>
                                             <!--end::Label-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                       <!--end::Items-->
                                       <!--begin::View more-->
                                       <div class="py-3 text-center border-top">
                                          <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                          View All 
                                          <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
                                       </div>
                                       <!--end::View more--> 
                                    </div>
                                    <!--end::Tab panel-->
>>>>>>> e776c11d649efb506e0135ad216ebf2c349a7b29
                                 </div>
                                 <!--end::Tab content-->
                              </div>
                              <!--end::Menu-->        <!--end::Menu wrapper-->
                           </div>
                           <!--end::Notifications-->
                           <!--begin::Chat-->
                           <div class="d-flex align-items-stretch">
                              <!--begin::Menu wrapper-->
                              <div class="topbar-item px-3 px-lg-4 position-relative" id="kt_drawer_chat_toggle">
                                 <i class="ki-outline ki-tablet-text-down fs-1"></i>
                                 <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink">
                                 </span>
                              </div>
                              <!--end::Menu wrapper-->
                           </div>
                           <!--end::Chat-->
                           <!--begin::Quick links-->
                           <div class="d-flex align-items-stretch">
                              <!--begin::Menu wrapper-->
                              <div class="topbar-item px-3 px-lg-4" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                 <i class="ki-outline ki-chart-simple-2 fs-1"></i>        
                              </div>
                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                                 <!--begin::Heading-->
                                 <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('{{ asset('assets') }}/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">
                                       Quick Links 
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Status-->
                                    <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                                    <!--end::Status-->
                                 </div>
                                 <!--end::Heading-->
                                 <!--begin:Nav-->
                                 <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                       <a href="apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                       <i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                       <span class="fs-7 text-gray-400">eCommerce</span>
                                       </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                       <a href="apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                       <i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                       <span class="fs-7 text-gray-400">Console</span>
                                       </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                       <a href="apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                       <i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                       <span class="fs-7 text-gray-400">Pending Tasks</span>
                                       </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                       <a href="apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                       <i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                       <span class="fs-7 text-gray-400">Latest cases</span>
                                       </a>
                                    </div>
                                    <!--end:Item-->
                                 </div>
                                 <!--end:Nav-->
                                 <!--begin::View more-->
                                 <div class="py-2 text-center border-top">
                                    <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                    View All 
                                    <i class="ki-outline ki-arrow-right fs-5"></i>        </a>			 
                                 </div>
                                 <!--end::View more--> 
                              </div>
                              <!--end::Menu-->
                              <!--end::Menu wrapper-->
                           </div>
                           <!--end::Quick links-->
                           @endif
                           <!--begin::Theme mode-->
                           <div class="d-flex align-items-center">
                              <!--begin::Menu toggle-->
                              <a href="javascript:void(0);" class="topbar-item px-3 px-lg-4" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                              <i class="ki-outline ki-night-day theme-light-show fs-1"></i>    <i class="ki-outline ki-moon theme-dark-show fs-1"></i></a>
                              <!--begin::Menu toggle-->
                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-night-day fs-2"></i>            </span>
                                    <span class="menu-title">
                                    Light
                                    </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-moon fs-2"></i>            </span>
                                    <span class="menu-title">
                                    Dark
                                    </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-screen fs-2"></i>            </span>
                                    <span class="menu-title">
                                    System
                                    </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                              </div>
                              <!--end::Menu-->
                           </div>
                           
                           <!--end::Theme mode-->
                           <!--begin::User-->
                           <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
                              <!--begin::Menu wrapper-->
                              <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                 <span class="symbol-label font-size-h5 font-weight-bold">
                                 {{ strtoupper(substr(isset(Auth::user()->name)?Auth::user()->name:'', 0, 1)) }}   
                                 </span>
                              </div>
                              <!--begin::User account menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                       <!--begin::Avatar-->
                                       <div class="symbol symbol-50px me-5">
                                          @if(isset(Auth::user()->avatar) && Auth::user()->avatar)
                                          <img alt="Logo" src="{{ asset('resources/uploads/userImage/').'/'.Auth::user()->avatar??'' }}"/>
                                          @else
                                          <img alt="Logo" src="{{ asset('assets/media/avatars/300-1.jpg') }}"/>
                                          @endif
                                       </div>
                                       <!--end::Avatar-->
                                       <!--begin::Username-->
                                       <div class="d-flex flex-column">
                                          <div class="fw-bold d-flex align-items-center fs-5">
                                          <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi, 
                                                @isset(Auth::user()->name){{ Auth::user()->name }}@endisset </span>            
                                             <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">CMS</span>
                                          </div>
                                          <a href="javascript:void(0);" class="fw-semibold text-muted text-hover-primary fs-7">
                                          @isset(Auth::user()->email){{ Auth::user()->email }}@endisset              
                                          </a>
                                          <div class="fw-bold d-flex align-items-left fs-7">               
                                             <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Role:</span>
                                             @isset(Auth::user()->role_name){{ Auth::user()->role_name }}@endisset   
                                          </div>
                                       </div>
                                       <!--end::Username-->
                                    </div>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 <div class="separator my-2"></div>
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                 <!-- <div class="menu-item px-5">
                                    <a href="account/overview.html" class="menu-link px-5">
                                    My Profile
                                    </a>
                                 </div> -->
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 <div class="separator my-2"></div>
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5 my-1">
                                    <a href="javascript:void(0);" class="menu-link px-5">
                                    Account Settings
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5">
                                    <a href="{{ route('logout') }}" class="menu-link px-5">
                                    Sign Out
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                              </div>
                              <!--end::User account menu-->
                              <!--end::Menu wrapper-->
                           </div>
                           <!--end::User -->
                           <!--begin::Heaeder menu toggle-->
                           <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
                              <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                                 <i class="ki-outline ki-burger-menu-2 fs-1"></i>            
                              </div>
                           </div>
                           <!--end::Heaeder menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->		
                     </div>
                     <!--end::Wrapper-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Header-->
      @if(isset(Auth::user()->role_id) == '1' && Auth::user()->role_id == '1')
      <div class="app-engage " id="kt_app_engage">
         <!--begin::Prebuilts toggle-->
         <a href="https://cms.staggings.in/login"
            target="_blank" class="app-engage-btn hover-dark">			
            <i class="ki-outline ki-abstract-41 fs-1 pt-1 mb-2"></i>Dev URL
         </a>
<<<<<<< HEAD
         <a href="#" class="app-engage-btn hover-primary">			
            <i class="ki-outline ki-like-shapes fs-1 pt-1 mb-2"></i>Pro URL
         </a>
         <a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">			
            <i class="ki-outline ki-cross fs-2x"></i>				
         </a>
         <a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="CMS (Content Management System) URLs">		
=======
         <!--end::Prebuilts toggle-->
         <!--begin::Get help-->
         <a href="javascript:void(0);" class="app-engage-btn hover-primary">			
            <i class="ki-outline ki-like-shapes fs-1 pt-1 mb-2"></i>Pro URL
         </a>
         <!--end::Get help-->
         <!--begin::Prebuilts toggle-->
         <!-- <a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">			
             <i class="ki-outline ki-basket fs-2 pt-1 mb-2"></i>ON Roard URL
         </a> -->
         <!--end::Prebuilts toggle-->
         <!--begin::Engage close-->
         <a href="javascript:void(0);" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">			
            <i class="ki-outline ki-cross fs-2x"></i>				
         </a>
         <!--end::Engage close-->
         <!--begin::Engage close-->
         <a href="javascript:void(0);" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="CMS (Content Management System) URLs">		
>>>>>>> e776c11d649efb506e0135ad216ebf2c349a7b29
            <i class="ki-outline ki-question fs-2 text-primary"></i>				
         </a>
      </div>
      @endif
