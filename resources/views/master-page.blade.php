@extends('layout.master')
@section('title')
{{ __('CPPRI |' . ' ' . $title_name) }}
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
                @if (isset($finalBred))
                <li><a>{{ ucfirst(strtolower($finalBred)) ?? '' }}</a></li>
                @endif

                @if (isset($lastBred))
                <li><a>{{ ucfirst(strtolower($lastBred)) ?? '' }}</a></li>
                @endif

                @if (isset($middelBred))
                <li><a>{{ ucfirst(strtolower($middelBred)) ?? '' }}</a></li>
                @endif

                <li>{{ ucfirst(strtolower($title_name)) ?? '' }}</li>

            </ul>
        </div>
    </div>
</div>
<div class="wrapper" id="skipCont"></div>
<div class="sidebar-main-nav ptb-50" id="mainsidebar">
    <div class="container common-container pr-0">
        <!--/.nav-wrapper-->
        <div class="row pr-0">
            @if (isset($parentMenut) != '')
            <div class="col-md-3 sidebar-main-nav-colmd3 position-relative">

                <div class="main-sidebar" id="main-sidebar">
                <ul>
    @if (isset($tree) && count($tree) > 0)
        @foreach ($tree as $index => $trees)
            @php
                $parentMenuUrl = $parentMenut->url ?? '';
                $treesUrl = $trees->url ?? '';
            @endphp
            @if (count($trees->children) > 0)
                <li class="accordion accordion-flush position-relative sl-accordion" id="sidebarDropdown_{{ $index }}">
                    <div class="accordion-item">
                        <div class="list-start" id="flush-headingOne_{{ $index }}">
                            <a class="nav-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne_{{ $index }}" aria-expanded="false"
                                aria-controls="flush-collapseOne" tabindex="0">
                                @if (Session::get('Lang') == 'hi')
                                    {{ $trees->name_hi ?? '' }}
                                @else
                                    {{ $trees->name_en ?? '' }}
                                @endif
                            </a>
                        </div>

                        <div id="flush-collapseOne_{{ $index }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne_{{ $index }}" data-bs-parent="#sidebarDropdown_{{ $index }}">
                            <div class="accordion-body p-0">
                                <ul class='p-0 m-0 mt-3'>
                                    @foreach ($trees->children as $k => $childTree)
                                        @php
                                            $chiltreeUrl = $childTree->url ?? '';
                                        @endphp
                                        @if (isset($childTree->children) && count($childTree->children) > 0)
                                            <li class="accordion accordion-flush position-relative fl-accordion"
                                                id="fl_sidebarDropdown_{{$k}}">
                                                <div class="accordion-item">
                                                    <div class="list-start" id="fl_flush_headingOne_{{$k}}">
                                                        <a class="nav-link collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#fl_flush_collapseOne_{{$k}}"
                                                            aria-expanded="false"
                                                            aria-controls="fl_flush_collapseOne_{{$k}}" tabindex="0">
                                                            @if (Session::get('Lang') == 'hi')
                                                                {{ $childTree->name_hi ?? '' }}
                                                            @else
                                                                {{ $childTree->name_en ?? '' }}
                                                            @endif
                                                        </a>
                                                    </div>

                                                    <div id="fl_flush_collapseOne_{{$k}}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="fl_flush_headingOne_{{$k}}"
                                                        data-bs-parent="#fl_sidebarDropdown_{{$k}}">
                                                        <div class="accordion-body p-0">
                                                            <ul class="p-0 m-0 mt-3">
                                                                @foreach ($childTree->children as $finalChild)
                                                                    @php
                                                                        $finalChildUrl = $finalChild->url ??''
                                                                    @endphp

                                                                    <li
                                                                        class="@if (request()->is($parentMenuUrl.'/'.$treesUrl.'/'.$chiltreeUrl.'/'.$finalChildUrl)) qm-active @endif">

                                                                        <a
                                                                            href="{{ url($parentMenuUrl.'/'.$treesUrl.'/'.$chiltreeUrl.'/'.$finalChildUrl) }}">
                                                                            @if (Session::get('Lang') == 'hi')
                                                                                {{ $finalChild->name_hi ?? '' }}
                                                                            @else
                                                                                {{ $finalChild->name_en ?? '' }}
                                                                            @endif
                                                                        </a>
                                                                    </li>
                                                                @endforeach

                                                                <!-- nested layer -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @else
                                            <li
                                                class="@if (request()->is($parentMenuUrl . '/' . $treesUrl . '/' . $chiltreeUrl)) qm-active @endif">
                                                <a href="{{ url($parentMenuUrl . '/' . $treesUrl . '/' . $chiltreeUrl) }}"
                                                    class="">

                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $childTree->name_hi ?? '' }}
                                                    @else
                                                        {{ $childTree->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            @else
                @if ($treesUrl != 'feedback' && $treesUrl != 'website-information-manage' && $treesUrl != 'vigilance-cell')
                    <li class="@if (request()->is($parentMenuUrl . '/' . $treesUrl)) qm-active @endif">
                        <div class="list-start">
                            <a href="{{ url($parentMenuUrl . '/' . $treesUrl) }}" class="nav-link">
                                @if (Session::get('Lang') == 'hi')
                                    {{ $trees->name_hi ?? '' }}
                                @else
                                    {{ $trees->name_en ?? '' }}
                                @endif
                            </a>
                        </div>
                    </li>
                @endif
            @endif
        @endforeach
    @endif
</ul>

                </div>
            </div>


            @endif

            @if (isset($parentMenut))
            <div class="col-md-9 m-p-0">
                @else
                <div class="col m-p-0">
                    @endif

                    {{-- <div class="col-md-9 m-p-0"> --}}
                    <div class="main-content ditiector-desk">
                        <!--/#skipCont-->
                        <div id="fontSize" class="wrapper body-wrapper ">
                            @if (isset($content))
                            <h1>{{ $content }}</h1>
                            @endif

                            @if (isset($organizedData) && isset($organizedData['metatag']) != '')
                            <section id="paragraph" class="wrapper paragraph-wrapper">
                                <div class="container common-container four_content pm-0">
                                    <div class="align-lt">
                                        <h2 class="mt-0 mb-20">
                                            @if (isset($organizedData['metatag']->page_title_en) &&
                                            !blank($organizedData['metatag']->page_title_en))
                                            @if (Session::get('Lang') == 'hi')
                                            {{ $organizedData['metatag']->page_title_hi ?? '' }}
                                            @else
                                            {{ $organizedData['metatag']->page_title_en ?? '' }}
                                            @endif
                                            @endif
                                        </h2>

                                        @if (isset($organizedData['content']->page_content_en) &&
                                        !blank($organizedData['content']->page_content_en))
                                        <p>
                                            @if (Session::get('Lang') == 'hi')
                                            {!! $organizedData['content']->page_content_hi ?? '' !!}
                                            @else
                                            {!! $organizedData['content']->page_content_en ?? '' !!}
                                            @endif
                                        </p>
                                        @endif

                                    </div>
                                </div>
                            </section>
                            @endif


                            @if (isset($organizedData['pdf']) && count($organizedData['pdf']) > 0)
                            <section id="datatable">
                                <div class="container common-container">
                                    <div class="row p-0 ">
                                        <div class="col-md-12">
                                            {{-- <a href="javascript:void(0);" title="Click here to Archive" class="archive-btn">Archive</a> --}}

                                            <div class="scroller-tbl">

                                                <table id="example" class="display w-100">

                                                    <thead>
                                                        <tr>
                                                            <th> Title</th>
                                                            <th>Published Date</th>
                                                            <th> View/Download</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        @foreach ($organizedData['pdf'] as $data)
                                                        <tr>
                                                            <td>{{ $data->pdf_title ?? '' }}</td>
                                                            <td class="date-nowrap">
                                                                {{ date('d F Y', strtotime($data->start_date ?? '')) }}
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="{{ asset('resources/uploads/PageContentPdf/' . $data->public_url) }}"
                                                                        download>View</a> <i
                                                                        class="fa fa-file-pdf-o text-danger"></i>
                                                                    ({{ $data->pdfimage_size ?? '' }})
                                                                </span>
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
                                    {{-- <h3 class="master-title mt-0 mb-20">Image Gallery</h3> --}}
                                    <div class="row main-gallery p-0">
                                        @foreach ($organizedData['gallery'] as $data)
                                        <div class=" col-md-4 ">
                                            <div class="img-con-sec">
                                                <div class="img-card">
                                                    <img src="{{ asset('resources/uploads/PageContentGallery/' . $data->public_url) ?? '' }}"
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


                            @if (isset($Director) && $Director != '')
                            <section id="paragraph" class="wrapper paragraph-wrapper">
                                <div class="common-container four_content">

                                    <div class="row">
                                        <h2 class="dir-dsk-title mt-0 mb-3">
                                            @if (Session::get('Lang') == 'hi')
                                            {{ __('messages.Director_Desk') }}
                                            @else
                                            {{ __('messages.Director_Desk') }}
                                            @endif
                                        </h2>
                                        <!-- <div class="col-md-4 col-lg-3">
                                                        <div class="addevent-box text-center">
                                                            <div class="profile-img">
                                                                @if ($Director->public_url != '')
    <img src="{{ asset('resources/uploads/empDirectory/' . $Director->public_url) }}"
                                                                    alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                                    title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                                    loading="lazy">
@else
    <img src="{{ asset('assets-cppri/images/profile--.jpg') }}"
                                                                    alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                                    title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                                    loading="lazy">
    @endif


                                                                <h4 class="pb-10" tabindex="0">

                                                                    @if (Session::get('Lang') == 'hi')
    {{ $Director->fname_hi ?? '' }}
                                                                    {{ $Director->mname_hi ?? '' }}
                                                                    {{ $Director->lname_hi ?? '' }}
@else
    {{ $Director->fname_en ?? '' }}
                                                                    {{ $Director->mname_en ?? '' }}
                                                                    {{ $Director->lname_en ?? '' }}
    @endif



                                                                </h4>
                                                            </div>



                                                        </div>
                                                    </div> -->
                                        <div class="col-md-12 col-lg-12">
                                            <div class="addevent-box text-center">
                                                <div class="profile-img">
                                                    @if ($Director->public_url != '')
                                                    <img src="{{ asset('resources/uploads/empDirectory/' . $Director->public_url) }}"
                                                        alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                        title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                        loading="lazy">
                                                    @else
                                                    <img src="{{ asset('assets-cppri/images/profile--.jpg') }}"
                                                        alt="{{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                        title=" {{ $Director->fname_en ?? '' }} {{ $Director->mname_en ?? '' }} {{ $Director->lname_en ?? '' }}"
                                                        loading="lazy">
                                                    @endif


                                                    <h4 class="pb-10" tabindex="0">

                                                        @if (Session::get('Lang') == 'hi')
                                                        {{ $Director->fname_hi ?? '' }}
                                                        {{ $Director->mname_hi ?? '' }}
                                                        {{ $Director->lname_hi ?? '' }}
                                                        @else
                                                        {{ $Director->fname_en ?? '' }}
                                                        {{ $Director->mname_en ?? '' }}
                                                        {{ $Director->lname_en ?? '' }}
                                                        @endif



                                                    </h4>
                                                </div>



                                            </div>
                                            <p>


                                                @if (Session::get('Lang') == 'hi')
                                                {!! $Director->description_hi !!}
                                                @else
                                                {!! $Director->description_en !!}
                                                @endif

                                            </p>

                                        </div>
                                    </div>


                                </div>
                            </section>
                            @endif

                            @if (isset($sortedDesignationData) && count($sortedDesignationData) > 0)
                            @foreach ($sortedDesignationData as $item)
                            @if ($item['department']->name_en == 'Director')
                            <div class="row">
                                <div class="col-md-12 display-content  ">
                                    <div class="employee-directry-type employee-dir-page pt-3">
                                        <div data-aos-mirror="true" data-aos="fade-right" class="title-before">
                                        </div>
                                        <h3>

                                            @if (Session::get('Lang') == 'hi')
                                            <h2>{{ $item['department']->name_hi ?? '' }}</h2>
                                            @else
                                            <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                            @endif


                                        </h3>
                                        <div data-aos-mirror="true" data-aos="fade-left" class="title-after">
                                        </div>
                                    </div>
                                </div>
                                @if (isset($item['data']) && count($item['data']) > 0)
                                @foreach ($item['data'] as $profile)
                                <div class="direct-centre emp-card-det">
                                    <div class="card-emp-dir">

                                        <div class="emp-crddir-inf">
                                            <div class="img-circle-prof">
                                                <img @if ($profile->public_url != '')
                                                src="{{ asset('resources/uploads/empDirectory/' . $profile->public_url) }}"
                                                @else
                                                src="{{ asset('assets-cppri/images/profile--.jpg') }}" @endif
                                                alt=""
                                                tittle= "{{ $profile->fname_en ?? '' }} {{ $profile->mname_en ?? '' }}
                                                {{ $profile->lname_en ?? '' }}">
                                            </div>



                                            @if (Session::get('Lang') == 'hi')
                                            <h3> {{ $profile->fname_hi ?? '' }}
                                                {{ $profile->mname_hi ?? '' }}
                                                {{ $profile->lname_hi ?? '' }}</h3>
                                            @else
                                            <h3> {{ $profile->fname_en ?? '' }}
                                                {{ $profile->mname_en ?? '' }}
                                                {{ $profile->lname_en ?? '' }}</h3>
                                            @endif



                                            @if (Session::get('Lang') == 'hi')
                                            <h5>({{ $profile->desi_name_hi ?? '' }})</h5>
                                            @else
                                            <h5>({{ $profile->desi_name_en ?? '' }})</h5>
                                            @endif

                                            @if ($profile->landline_number != '' && $profile->landline_number != null)
                                            <p><strong><i class="fa fa-phone"></i> :</strong>
                                                {{ $profile->landline_number ?? '' }} </p>
                                            @else
                                            <p><strong><i class="fa fa-phone"></i> :</strong>
                                                {{ $profile->mobile }}
                                            </p>
                                            @endif

                                            <p>{{ $profile->extention_number ?? '' }}</p>


                                            <?php
                                                            $email_address = $profile->email;
                                                            $str = $email_address;
                                                            $var = str_replace('@', '[at]', $str);
                                                            $email = str_replace('.', '[dot]', $var);
                                                            ?>

                                            <p><strong><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                                    :</strong>
                                                <span>{{ $email ?? '' }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="employee-directry-type employee-dir-page">
                                        <div data-aos-mirror="true" data-aos="fade-right" class="title-before">
                                        </div>

                                        @if (Session::get('Lang') == 'hi')
                                        <h2>{{ $item['department']->name_hi ?? '' }}</h2>
                                        @else
                                        <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                        @endif

                                        <div data-aos-mirror="true" data-aos="fade-left" class="title-after">
                                        </div>
                                    </div>
                                </div>
                                @if (isset($item['data']) && count($item['data']) > 0)
                                @foreach ($item['data'] as $profile)
                                <div class="col-md-6 col-lg-4 emp-card-det">
                                    <div class="card-emp-dir emp-dir-main">

                                        <div class="emp-crddir-inf">
                                            <div class="img-circle-prof">
                                                <img @if ($profile->public_url != '')
                                                src="{{ asset('resources/uploads/empDirectory/' . $profile->public_url) }}"
                                                @else
                                                src="{{ asset('assets-cppri/images/profile--.jpg') }}" @endif
                                                alt=""
                                                tittle= "{{ $profile->fname_en ?? '' }} {{ $profile->mname_en ?? '' }}
                                                {{ $profile->lname_en ?? '' }}">
                                            </div>

                                            @if (Session::get('Lang') == 'hi')
                                            <h3> {{ $profile->fname_hi ?? '' }}
                                                {{ $profile->mname_hi ?? '' }}
                                                {{ $profile->lname_hi ?? '' }}</h3>
                                            @else
                                            <h3> {{ $profile->fname_en ?? '' }}
                                                {{ $profile->mname_en ?? '' }}
                                                {{ $profile->lname_en ?? '' }}</h3>
                                            @endif

                                            @if (Session::get('Lang') == 'hi')
                                            <h5>({{ $profile->desi_name_hi ?? '' }})</h5>
                                            @else
                                            <h5>({{ $profile->desi_name_en ?? '' }})</h5>
                                            @endif


                                            @if ($profile->landline_number != '' && $profile->landline_number != null)
                                            <p><strong><i class="fa fa-phone"></i> :</strong>
                                                {{ $profile->landline_number ?? '' }} </p>
                                            @else
                                            <p><strong><i class="fa fa-phone"></i> :</strong>
                                                {{ $profile->mobile }}
                                            </p>
                                            @endif


                                            <p> {{ $profile->extention_number ?? '' }}</p>

                                            <?php
                                                            $email_address = $profile->email;
                                                            $str = $email_address;
                                                            $var = str_replace('@', '[at]', $str);
                                                            $email = str_replace('.', '[dot]', $var);
                                                            ?>

                                            <p class="email-text-styl"><i class="fa fa-envelope-o mr-2 w-10"
                                                    aria-hidden="true"></i>
                                                <span class="w-90">{{ $email }}</span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            @endif
                            @endforeach
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection