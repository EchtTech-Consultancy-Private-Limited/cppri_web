@extends('layout.master')
@section('title')
    {{ __('RAV') }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        @if (isset($organizedData['banner']) && $organizedData['banner'] != '')
            <div id="flexSlider" class="flexslider bigbanner"
                style="background-image: url('{{ asset('resources/uploads/pagebanner/' . $organizedData['banner']->public_url) }}');">
                <div class="inner-banner-text">
                    <div class="text-banner-content">
                        <h2>
                            {{ ucfirst(strtolower($title_name)) ?? '' }}
                        </h2>
                    </div>
                </div>
            </div>
        @else
            <div id="flexSlider" class="flexslider bigbanner"
                style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
                <div class="inner-banner-text">
                    <div class="text-banner-content">
                        <h2>
                            {{ ucfirst(strtolower($title_name)) ?? '' }}
                        </h2>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content ">
                <ul>
                    <li><a href="{{ route('/') }}">
                              @if (Session::get('Lang') == 'hi')
                                होम पेज
                              @else
                                Home
                              @endif
                        </a></li>

                    <li>{{ $title_name ?? '' }}</li>

                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper" id="skipCont"></div>
    <div class="sidebar-main-nav ptb-50">
        <div class="container common-container pr-0">
            <!--/.nav-wrapper-->
            <div class="row pr-0">
                <div class="col-md-3 sidebar-main-nav-colmd3">
                    @if (isset($sideMenuChild) && count($sideMenuChild) > 0)
                        <div class="main-sidebar">

                            @foreach ($sideMenuChild as $sideMenuChilds)
                                @php
                                    $sideMenuChildsurl = $sideMenuChilds->url ?? 'javascript:void(0)';
                                @endphp
                                <ul>

                                    <li class="   @if (request()->is($sideMenuChildsurl)) qm-active @endif">
                                        <div class="list-start">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            <a href="{{ url($sideMenuChildsurl) }}" class="nav-link">
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $sideMenuChilds->name_hi ?? '' }}
                                                @else
                                                    {{ $sideMenuChilds->name_en ?? '' }}
                                                @endif
                                            </a>
                                        </div>
                                    </li>

                                </ul>
                            @endforeach

                        </div>
                    @endif
                </div>



                @if (isset($sideMenuChild) && count($sideMenuChild) > 0)
              
                  <div class="col-md-9 m-p-0">
                @else
                   <div class="col m-p-0">
                @endif

                
                    <div class="main-content">
                        <!--/#skipCont-->
                        <div id="fontSize" class="wrapper body-wrapper ">
                            @if (isset($content))
                                <h1>{{ $content }}</h1>
                            @endif

                            <!--/#page-head-->
                            <section id="paragraph" class="wrapper paragraph-wrapper">
                                <div class="container common-container four_content pm-0">
                                    <div class="align-lt">
                                        <h2 class="mt-0 mb-20">
                                            @if (isset($organizedData['metatag']->page_title_en) && !blank($organizedData['metatag']->page_title_en))
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ $organizedData['metatag']->page_title_hi ?? '' }}
                                                @else
                                                    {{ $organizedData['metatag']->page_title_en ?? '' }}
                                                @endif
                                            @endif
                                        </h2>
                                        {{-- <img src="{{ asset('assets-cppri/images/paragraph-img/cppri-admin-block.jpg') }}"
                                            alt> --}}
                                        <!-- <h3>Headline goes here...</h3> -->
                                        @if (isset($organizedData['content']->page_content_en) && !blank($organizedData['content']->page_content_en))
                                            <p>
                                                @if (Session::get('Lang') == 'hi')
                                                    {!! $organizedData['content']->page_content_hi ?? '' !!}
                                                @else
                                                    {!! $organizedData['content']->page_content_en ?? '' !!}
                                                @endif
                                            </p>
                                        @endif
                                        {{-- <div class="text-center">
                                            <a href="#" class="more more gallery-more-btn"
                                                title="View more about heading 2">View More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </section>
                            <!--/#paragraph-->
                            {{-- <section id="list" class="wrapper list-wrapper ptb-30">
                                <div class="container common-container four_content pm-0">
                                    <h3 class="master-title mt-0">List</h3>
                                    <div class="list list-circle">
                                        <!-- <h4 class="head-style-list" >List 1</h4> -->
                                        <ul class="clearfix mb-0">
                                            <li>To make CPPRI a Centre of Excellence with Focus in the area of Technology
                                                Transfer</li>
                                            <li>To make Indian Paper Industry sustainable and Globally Competitive.</li>
                                            <li>In pursuit of cleaner Production, Resource Conversation & Quality Excellence
                                                in Pulp & Paper Industry</li>
                                            <!-- <li>List Item 4</li> -->
                                        </ul>
                                    </div>
                                    <hr />
                                    <!-- <h3 class="master-title" >Ordered List</h3>
                                      <div class="order-list mg-top">
                                         <h4 class="head-style-list" >List 2</h4>
                                         <ol type="1" class="clearfix">
                                            <li>List Item </li>
                                            <li>List Item </li>
                                            <li>List Item </li>
                                            <li>List Item </li>
                                         </ol>
                                      </div> -->
                                </div>
                            </section> --}}
                            <!--/#list-->
                            <!--/#article-->
                            @if (isset($organizedData['pdf']) && count($organizedData['pdf']) > 0)
                                <section id="datatable">
                                    <div class="container common-container">
                                        <div class="row p-0 ">
                                            <div class="col-md-12">
                                                {{-- <h3 class="master-title mt-0 mb-20">DataTable</h3> --}}

                                                <div class="scroller-tbl">

                                                    <table id="example" class="display" style="width:100%">

                                                        <thead>
                                                            <tr>
                                                                <th> Title</th>
                                                                <th> Date</th>
                                                                <th> View/Download</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>
                                                            @foreach ($organizedData['pdf'] as $data)
                                                                <tr>
                                                                    <td>{{ $data->pdf_title ?? '' }}</td>
                                                                    <td>{{ date('d F Y', strtotime($data->start_date ?? '')) }}
                                                                    </td>
                                                                    <td><a href="{{ asset('resources/uploads/PageContentPdf/' . $data->public_url) }}"
                                                                            download>View</a> <i class="fa fa-file-pdf-o">
                                                                            ({{ $data->pdfimage_size ?? '' }})
                                                                        </i>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                </section>
                            @endif

                            @if (isset($organizedData['gallery']) && count($organizedData['gallery']) > 0)
                                <section class="image-gallery">
                                    <div class="container common-container">
                                        <h3 class="master-title mt-0 mb-20">Image Gallery</h3>
                                        <div class="row main-gallery p-0">
                                            @foreach ($organizedData['gallery'] as $data)
                                                <div class=" col-md-4 ">
                                                    <div class="img-con-sec">
                                                        <div class="img-card">
                                                            <img src="{{ asset('resources/uploads/PageContentGallery/' . $data->public_url) }}"
                                                                alt="{{ $data->image_title ?? '' }}"
                                                                title="{{ $data->image_title ?? '' }}">
                                                        </div>
                                                        <p>{{ $data->image_title ?? '' }}</p>
                                                    </div>
                                                </div>
                                            @endforeach

                                            {{-- <div class="col-md-12 text-center">
                                            <a href="#" class="more gallery-more-btn"
                                                title="View more about heading 1">View More</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </section>
                            @endif

                            {{-- <section class="vid-image-gallery ptb-30">
                                <div class="container common-container">
                                    <h3 class="master-title mb-20 mt-0">Video Gallery</h3>
                                    <div class="row vid-main-gallery p-0">
                                        <div class="col-md-6">
                                            <div class="vid-card">
                                                <video controls="controls">
                                                    <source
                                                        src="{{ asset('assets-cppri/images/photo_gallery/video.mp4') }}"
                                                        type="video/mp4" />
                                                </video>
                                                <p>Video title 1 go here</p>
                                            </div>
                                        </div>
                                        <div class=" col-md-6 ">
                                            <div class="vid-card">
                                                <video controls="controls">
                                                    <source
                                                        src="{{ asset('assets-cppri/images/photo_gallery/video.mp4') }}"
                                                        type="video/mp4" />
                                                </video>
                                                <p>Video title 2 go here</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="more gallery-more-btn"
                                                title="View more about heading 1">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}


                            {{-- <section class="cppri-tabs-section">
                                <div class="container common-container">
                                    <h3 class="master-title mb-20 mt-0">Tabs Section</h3>
                                    <div class="tabs">
                                        <input type="radio" id="tab1" name="tab-control" checked>
                                        <input type="radio" id="tab2" name="tab-control">
                                        <input type="radio" id="tab3" name="tab-control">
                                        <input type="radio" id="tab4" name="tab-control">
                                        <ul>
                                            <li title="Features"><label for="tab1">
                                                    <span>Features</span></label>
                                            </li>
                                            <li title="Delivery Contents"><label for="tab2">
                                                    <span>Contents</span></label>
                                            </li>
                                            <li title="Shipping"><label for="tab3">
                                                    <span>Shipping</span></label>
                                            </li>
                                            <li title="Returns"><label for="tab4">
                                                    <span>Returns</span></label>
                                            </li>
                                        </ul>
                                        <div class="slider">
                                            <div class="indicator"></div>
                                        </div>
                                        <div class="content">
                                            <section>
                                                <h2>Features</h2>
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                            </section>
                                            <section>
                                                <h2>Delivery Contents</h2>
                                                Lorem ipsum dolor sit amet, consectetur2 adipisicing elit.
                                                Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla,
                                                ipsa qui. Quasi temporibus eos commodi aliquid impedit
                                                amet, similique nulla.
                                                Lorem ipsum dolor sit amet, consectetur2 adipisicing elit.
                                                Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla,
                                                ipsa qui. Quasi temporibus eos commodi aliquid impedit
                                                amet, similique nulla.
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                            </section>
                                            <section>
                                                <h2>Shipping</h2>
                                                Lorem ipsum dolor sit amet, consectetur3 adipisicing elit.
                                                Quam nemo ducimus eius, magnam error quisquam sunt voluptate
                                                labore, excepturi numquam! Alias libero optio sed harum
                                                debitis! Veniam, quia in eum.
                                                Lorem ipsum dolor sit amet, consectetur3 adipisicing elit.
                                                Quam nemo ducimus eius, magnam error quisquam sunt voluptate
                                                labore, excepturi numquam! Alias libero optio sed harum
                                                debitis! Veniam, quia in eum.
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                            </section>
                                            <section>
                                                <h2>Returns</h2>
                                                Lorem ipsum dolor sit amet, consectetur4 adipisicing elit.
                                                Ipsa dicta vero rerum?
                                                Eaque repudiandae architecto libero reprehenderit
                                                aliquam magnam ratione quidem?
                                                Nobis doloribus molestiae enim deserunt
                                                necessitatibus eaque quidem incidunt.
                                                Lorem ipsum dolor sit amet, consectetur4 adipisicing elit.
                                                Ipsa dicta vero rerum?
                                                Eaque repudiandae architecto libero reprehenderit
                                                aliquam magnam ratione quidem?
                                                Nobis doloribus molestiae enim deserunt
                                                necessitatibus eaque quidem incidunt.
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                                Lorem ipsum dolor sit amet1, consectetur
                                                adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                                atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                                numquam. Voluptas voluptates quibusdam cum?
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}

                            {{-- <section class="ptb-30 pb-0">
                                <div class="container common-container">
                                    <h3 class="master-title mt-0 mb-20">Accordions</h3>
                                    <div class="row">
                                        <div class="col-md-12 p-0">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseOne">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                            put a bird on it squid single-origin coffee nulla assumenda
                                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                            haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                            put a bird on it squid single-origin coffee nulla assumenda
                                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                            haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                            put a bird on it squid single-origin coffee nulla assumenda
                                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                            haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
