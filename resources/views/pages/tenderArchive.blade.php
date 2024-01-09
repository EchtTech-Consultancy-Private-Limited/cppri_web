@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        @if (isset($organizedData['banner']) && $organizedData['banner'] != '')
            <div id="flexSlider" class="flexslider bigbanner"
                style="background-image: url('{{ asset('resources/uploads/pagebanner/' . $organizedData['banner']->public_url) }}');">
                <div class="inner-banner-text">
                    <div class="text-banner-content">
                        <h2>
                            Archive
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
                            Archive
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

                    <li >
                        Archive
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
                        @if (isset($tenderData) && count($tenderData) > 0)
                            <section id="datatable">
                                <div class="container common-container">
                                    <div class="row p-0 ">
                                        <div class="col-md-12">
                                            {{-- <h3 class="master-title mt-0 mb-20">DataTable</h3> --}}
                                            <a href="javascript:void(0);" title="Click here to Archive" class="archive-btn">Archive</a>
                                            <div class="scroller-tbl">

                                                <table id="example" class="display">

                                                    <thead>
                                                        <tr>
                                                            <th> Title</th>
                                                            <th> Date</th>
                                                            <th> View/Download</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        @foreach ($tenderData as $data)
                                                            <tr>
                                                                <td>{{ $data['tender']->title_name_en ?? '' }}</td>
                                                                <td>{{ date('d F Y', strtotime($data['tender']->created_at ?? '')) }}
                                                                </td>

                                                                <td class=''>
                                                                    @foreach ($data['tender_pdfs'] as $pdf)
                                                                       <span class='multiple-pdf'> <a href="{{ asset('resources/uploads/TenderManagement/' . $pdf->public_url) }}"
                                                                            download>View</a> <i class="fa fa-file-pdf-o text-danger"></i>
                                                                            ({{ $pdf->pdfimage_size ?? '' }})
                                                                        </span>
                                                                    @endforeach
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


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
