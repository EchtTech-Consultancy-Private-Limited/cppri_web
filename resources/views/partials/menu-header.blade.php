<div class="container common-container four_content">
    <p class="showhide"><em></em><em></em><em></em></p>
    <nav class="main-menu clearfix" id="main_menu" style="">
        <ul class="nav-menu">
            <li class="nav-item"> <a href="index.html" class="home"><i class="fa fa-home"></i></a> </li>
            @if (Session::get('Lang') == 'hi')
            <?php $text = 'यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।'; ?>
            @else
            <?php $text = 'This link will take you to an external web site.'; ?>
            @endif

            @if (isset($headerMenu) && count($headerMenu) > 0)
                @foreach ($headerMenu as $headerMenus)
                    @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                        @if ($headerMenus->tab_type == 1)
                            <li class="nav-item"> 
                                <a onclick="return confirm('{{$text}}')" target="_blank" href="javascript:void(0)">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $headerMenus->name_hi ?? '' }}
                                    @else
                                        {{ $headerMenus->name_en ?? '' }}
                                    @endif
                                </a>
                            @else
                            <li class="nav-item"><a href="javascript:void(0)">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $headerMenus->name_hi ?? '' }}
                                    @else
                                        {{ $headerMenus->name_en ?? '' }}
                                    @endif
                                </a>
                        @endif
                        <div class="sub-nav">
                            <ul class="sub-nav-group">
                                @foreach ($headerMenus->children as $subMenus)
                                    @if (isset($subMenus->children) && count($subMenus->children) > 0)
                                        @if ($subMenus->tab_type == 1)
                                            {{ $subMenus->tab_type }}
                                            <li> 
                                                <a onclick="return confirm('{{$text}}')" target="_blank" href="javascript:void(0)">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            @else
                                            <li><a href="java:script(0)">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                        @endif
                                            {{-- <div class="sub-nav">
                                                <ul class="sub-nav-group">
                                                    @foreach ($subMenus->children as $childMenus)
                                                        
                                                            <li><a
                                                                    href="javascript:void();">{{ $childMenus->name_en ?? '' }}</a>
                                                            </li>
                                                    
                                                    @endforeach
                                                </ul>
                                            </div> --}}


                                        </li>
                                    @else
                                        @if ($subMenus->tab_type == 1)
                                            <li>
                                                <a onclick="return confirm('{{$text}}')" target="_blank" href="javascript:void(0)">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a></li>
                                        @else
                                            <li><a href="javascript:void(0)">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a></li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        </li>
                    @else
                        @if ($headerMenus->tab_type == 1)
                            <li class="nav-item">
                                <a onclick="return confirm('{{$text}}')" target="_blank" href="javascript:void(0)">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $headerMenus->name_hi ?? '' }}
                                    @else
                                        {{ $headerMenus->name_en ?? '' }}
                                    @endif
                                </a>
                            </li>
                        @else
                            <li class="nav-item"><a href="javascript:void(0)">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $headerMenus->name_hi ?? '' }}
                                    @else
                                        {{ $headerMenus->name_en ?? '' }}
                                    @endif
                                </a></li>
                        @endif
                    @endif
                @endforeach
            @else
                <h5>No menu items available.</h5>
            @endif







            {{--
        <li class="nav-item"> <a href="index.html" class="home"><i class="fa fa-home"></i></a> </li>
        <li class="nav-item"> <a href="javascript:void();">About Us</a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">Overview </a></li>
                <li><a href="javascript:void();">Director Desk </a></li>
                <li><a href="javascript:void();">Employee Directory</a></li>
                <li><a href="javascript:void();">Facility</a></li>
                <li><a href="javascript:void();">Organisation Structure </a></li>
                <li><a href="javascript:void();">Paper Museum(Kagaj Sangralya)</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item"> <a href="javascript:void();"> Division </a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">Pulping & Bleaching</a></li>
                <li><a href="javascript:void();">Stock Preparation & Paper Making</a></li>
                <li><a href="javascript:void();">Paper Testing</a></li>
                <li><a href="javascript:void();">Chemical Recovery</a></li>
                <li>
                    <a href="javascript:void();">Environmental Management</a>
                    <!-- <ul class="sub-nav-group">
                        <li><a href="javascript:void();">Pulping & Bleaching</a></li>
                        <li><a href="javascript:void();">Stock Preparation & Paper Making</a></li>
                    </ul> -->
                </li>
                <li><a href="javascript:void();">Biotechnology</a></li>
                <li><a href="javascript:void();">Industry Coordination & International Cooperation</a></li>
                <li><a href="javascript:void();">Engineering & Maintenance</a></li>
                <li><a href="javascript:void();">Library & Documentation</a></li>
                <li><a href="javascript:void();">Energy Management</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item"> <a href="javascript:void();"> Training Programs </a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">Training Calender</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item"> <a href="javascript:void();"> Academic </a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">M.Sc Program</a></li>
                <li><a href="javascript:void();">Ph.D</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item"><a href="javascript:void();">Downloads</a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">Annual Reports</a></li>
                <li><a href="javascript:void();">Forms</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item"><a href="javascript:void();">Quick Links</a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                <li><a href="javascript:void();">MoU</a></li>
                <li><a href="javascript:void();">Overseas client</a></li>
                <li><a href="javascript:void();">Client list</a></li>
                <li><a href="javascript:void();">Rules and Regulation</a></li>
                <li><a href="javascript:void();">MoU</a></li>
                <li><a href="javascript:void();">MoU</a></li>
                <li><a href="javascript:void();">MoU</a></li>
                <li><a href="javascript:void();">Other Act And Rules</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item"><a href="javascript:void();">Careers</a></li>
        <li class="nav-item"><a href="javascript:void();">Contact Us</a></li>


     --}}




        </ul>
    </nav>
    <nav class="main-menu clearfix" id="overflow_menu">
        <ul class="nav-menu clearfix">
        </ul>
    </nav>
</div>
