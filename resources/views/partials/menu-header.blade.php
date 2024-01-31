<div class="container common-container four_content" id = "menuHeader">
<p class="showhide" tabindex="0"><em></em><em></em><em></em></p>
    <nav class="main-menu clearfix " id="main_menu">
        <ul class="nav-menu">
            <li class="nav-item"> <a href="{{ url('/') }}" class="home"><i class="fa fa-home"></i></a> </li>


            @if (isset($headerMenu) && count($headerMenu) > 0)
                @foreach ($headerMenu as $headerMenus)
                    @php
                        $url = $headerMenus->url ?? 'javascript:void(0)';
                    @endphp
                    @if (isset($headerMenus->children) && count($headerMenus->children) > 0)
                        @if ($headerMenus->tab_type == 1)
                            <li class="nav-item">
                                <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
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
                                    @php
                                        $subMenusurl = $subMenus->url ?? 'javascript:void(0)';
                                    @endphp

                                    @if (isset($subMenus->children) && count($subMenus->children) > 0)
                                        @if ($subMenus->tab_type == 1)
                                            <li class="env">
                                                <a href="javascript:void(0)"
                                                    onclick="return confirm('{{ $alertMessage }}')" target="_blank">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            @else
                                            <li class="env">
                                                <a href="javascript:void();" class="sub-menu-drop-f">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                        @endif
                                        <ul class="sub-nav-group sng-env">
                                            @foreach ($subMenus->children as $ChildMenus)
                                                @php
                                                    $ChildMenusurl = $ChildMenus->url ?? 'javascript:void(0)';
                                                    $ChildMenusurlfixed = $ChildMenus->footer_url ?? 'javascript:void(0)';
                                                @endphp

                                                @if (isset($ChildMenus->children) && count($ChildMenus->children) > 0)
                                                    @if ($ChildMenus->tab_type == 1)
                                                        <li class="env sub-menu-drop-g">
                                                            <a href="{{ url($ChildMenusurlfixed) }}"
                                                                onclick="return confirm('{{ $alertMessage }}')"
                                                                target="_blank">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $ChildMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $ChildMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                        @else
                                                        <li class="env sub-menu-drop-g">
                                                            <a href="{{ url($ChildMenusurlfixed) }}" class="sub-menu-drop-f">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $ChildMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $ChildMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                    @endif
                                                    </li>
                                                @else
                                                    @if ($ChildMenus->tab_type == 1)
                                                        <li class="remove-show-class">
                                                            <a onclick="return confirm('{{ $alertMessage }}')"
                                                                target="_blank" href="{{ $ChildMenusurl ?? '' }}">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $ChildMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $ChildMenus->name_en ?? '' }}
                                                                @endif
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="remove-show-class"><a
                                                                href="{{ url($url . '/' . $subMenusurl . '/' . $ChildMenusurl) ?? '' }}">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $ChildMenus->name_hi ?? '' }}
                                                                @else
                                                                    {{ $ChildMenus->name_en ?? '' }}
                                                                @endif
                                                            </a></li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                        </li>
                                    @else
                                    
                                        @if ($subMenus->tab_type == 1)
                                            @if($subMenusurl != 'feedback' && $subMenusurl != 'website-information-manage' && $subMenusurl != 'vigilance-cell' )
                                            <li class="remove-show-class">
                                                <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                                    href="{{ $subMenusurl ?? '' }}">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            </li>
                                            @endif
                                        @else
                                        @if($subMenusurl != 'feedback' && $subMenusurl != 'website-information-manage' && $subMenusurl != 'vigilance-cell' )
                                            <li class="remove-show-class"><a
                                                    href="{{ url($url . '/' . $subMenusurl) ?? '' }}">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $subMenus->name_hi ?? '' }}
                                                    @else
                                                        {{ $subMenus->name_en ?? '' }}
                                                    @endif
                                                </a></li>
                                              @endif  
                                        @endif
                                    @endif
                                @endforeach
                                
                            </ul>
                        </div>

                        </li>
                    @else
                        @if ($headerMenus->tab_type == 1)
                            <li class="nav-item">
                                <a onclick="return confirm('{{ $alertMessage }}')" target="_blank"
                                    href="{{ $url ?? '' }}">
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $headerMenus->name_hi ?? '' }}
                                    @else
                                        {{ $headerMenus->name_en ?? '' }}
                                    @endif
                                </a>
                            </li>
                        @else
                            <li class="nav-item"><a href="{{ url($url) ?? '' }} ">
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
                <li>No menu items available.</li>
            @endif
</ul>

    </nav>
    <!-- <nav class="main-menu clearfix" id="overflow_menu">
        <ul class="nav-menu clearfix">
        </ul>
    </nav> -->
</div>
