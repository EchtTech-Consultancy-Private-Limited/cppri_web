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
                                <a onclick="return confirm('{{ $text }}')" target="_blank"
                                    href="javascript:void(0)">
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
                                            <li class="env">
                                                <a href="javascript:void();"
                                                    onclick="return confirm('{{ $text }}')" target="_blank">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            @else
                                            <li class="env">
                                                <a href="javascript:void();">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                        @endif

                                        <ul class="sub-nav-group sng-env">
                                            @foreach ($subMenus->children as $ChildMenus)
                                                @if ($ChildMenus->tab_type == 1)
                                                    <li><a href="javascript:void();">
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ $ChildMenus->name_hi ?? '' }}
                                                            @else
                                                                {{ $ChildMenus->name_en ?? '' }}
                                                            @endif
                                                    </li>
                                                @else
                                                    <li><a href="javascript:void();">
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ $ChildMenus->name_hi ?? '' }}
                                                            @else
                                                                {{ $ChildMenus->name_en ?? '' }}
                                                            @endif
                                                    </li>
                                                @endif
                                                </a>
                                               
                                            @endforeach
                                        </ul>
                                        </li>
                                    @else
                                        @if ($subMenus->tab_type == 1)
                                            <li>
                                                <a onclick="return confirm('{{ $text }}')" target="_blank"
                                                    href="javascript:void(0)">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            </li>
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
                                <a onclick="return confirm('{{ $text }}')" target="_blank"
                                    href="javascript:void(0)">
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


    </nav>
    <nav class="main-menu clearfix" id="overflow_menu">
        <ul class="nav-menu clearfix">
        </ul>
    </nav>
</div>
