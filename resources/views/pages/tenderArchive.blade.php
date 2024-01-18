@extends('layout.master')
@section('title')
    {{ __('CPPRI |' . ' ' . $title) }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        @if (isset($organizedData['banner']) && $organizedData['banner'] != '')
            <div id="flexSlider" class="flexslider bigbanner"
                style="background-image: url('{{ asset('resources/uploads/pagebanner/' . $organizedData['banner']->public_url) }}');">
                <div class="inner-banner-text">
                    <div class="text-banner-content">
                        <h2>
                            Tender Archive
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
                            Tender Archive
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
                    <li><a href="{{ url('/') }}">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>

                    <li>
                        Tender Archive
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper" id="skipCont"></div>
    <div class="sidebar-main-nav ptb-50">
        <div class="container common-container pr-0">
            <!--/.nav-wrapper-->
            <div class="row pr-0">
                <div class="main-content">
                    <!--/#skipCont-->
                    <div id="fontSize" class="wrapper body-wrapper ">
                        @if (isset($content))
                            <h1>{{ $content }}</h1>
                        @endif
                        <!--/#page-head-->
                        <section id="datatable">
                            <div class="container common-container">
                                <div class="row p-0 ">
                                    <div class="col-md-12">
                                        {{-- <h3 class="master-title mt-0 mb-20">DataTable</h3> --}}
                                        {{-- <a href="javascript:void(0);" title="Click here to Archive"
                                            class="archive-btn">Archive</a> --}}
                                        <div class="scroller-tbl">
                                          
                                                <table id="example" class="display">

                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Title</th>
                                                            <th>Published Date</th>
                                                            <th>Submission Date</th>
                                                            <th>Opening Date</th>
                                                            <th> View/Download</th>
                                                            <th>Apply Here</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @if (isset($tender_pdfs) && count($tender_pdfs) > 0)
                                                        @foreach ($tender_pdfs as $k=>$data)
                                                            <tr>
                                                                <td>{{ $k+1 ?? '' }}</td> 
                                                                <td>{{ $data->pdf_title ?? '' }}</td>
                                                                <td class="date-nowrap">
                                                                    @if($data->start_date !='')
                                                                    {{ date('d F Y', strtotime($data->start_date ?? '')) }}
                                                                    @endif
                                                                </td>

                                                                <td class="date-nowrap">
                                                                    @if($data->end_date !='')
                                                                    {{ date('d F Y', strtotime($data->end_date ?? '')) }}
                                                                    @endif
                                                                </td>
                                                                
                                                                <td class="date-nowrap">
                                                                    @if($data->opening_date !='')
                                                                    {{ date('d F Y', strtotime($data->opening_date ?? '')) }}
                                                                    @endif
                                                                </td>

                                                                <td class=''>
                                                                    <span class='multiple-pdf'> <a
                                                                            href="{{ asset('resources/uploads/TenderManagement/' . $data->public_url) }}"
                                                                            download>View</a> <i
                                                                            class="fa fa-file-pdf-o text-danger"></i>
                                                                        ({{ $data->pdfimage_size ?? '' }})
                                                                    </span>
                                                                </td>
                                                                
                                                                <td>
                                                                    @if($data->apply_url !='')
                                                                    <a href="{{ $data->apply_url ?? '' }}"></a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                       
                                                        @endif
                                                    </tbody>
                                                </table>
                                           
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
