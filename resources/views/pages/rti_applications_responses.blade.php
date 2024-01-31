@extends('layout.master')
@section('title')
{{ __('CPPRI |'.' '.$title) }}
@endsection
@section('content')
<section class="wrapper banner-wrapper">
    <div id="flexSlider" class="flexslider "
        style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
        <div class="inner-banner-text">
            <div class="text-banner-content">
                <h2>
                   {{ ucfirst(strtolower($title)) ?? '' }}
                </h2>
            </div>
        </div>
    </div>
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
                <li><a href="javascript:void();">{{ ucfirst(strtolower($title)) ?? '' }}</a></li>

            </ul>
        </div>
    </div>
</div>
<div class="container common-container">
    <!--/.nav-wrapper-->
    <section class="sidebar-main-nav">
        <div class="col-md-12 p-0">
            <div class="main-content">
                <!--/#skipCont-->
                <section id="fontSize" class="wrapper body-wrapper ">
                    <section id="paragraph" class="wrapper paragraph-wrapper">
                        <div class=" common-container four_content my-4">
                            <h3 class="dir-dsk-title mt-3">Rti Applications Response </h3>
                        <form action="{{route('rti-applications-responses-filter')}}" method="post" id="myform" enctype="multipart/form-data">
                            @csrf
                            <div class="row my-3">
                                <div class="col-md-4 px-0">
                                    <label for="exampleDataList" class="form-label">Registration No.</label>
                                    <input type="text" class="form-control" name="registration_no" id="registration_no">
                                </div>

                                <div class="col-md-3 d-flex align-items-end py-md-0 py-3">
                                    <button type="submit" class="btn btn-primary"> Apply</button>
                                </div>
                            </div>
                        </form>

                            <table class="views-table" id="example">
                                <thead>
                                    <tr>
                                        <th class="views-field views-field-counter" scope="col">
                                            S.No </th>
                                        <th class="views-field views-field-field-order-contract-no-" scope="col">
                                            Requester Name </th>
                                        <th class="views-field views-field-field--date" scope="col">
                                            Registration No </th>
                                        <th class="views-field views-field-body" scope="col">
                                            PIO Name </th>
                                        <th class="views-field views-field-field-quality-supplied" scope="col">
                                            Received Date </th>
                                        <th class="views-field views-field-field-name-of-supplier-party-" scope="col">
                                            Request Doc </th>
                                        <th class="views-field views-field-field-amount-rs-" scope="col">
                                            Reply Doc </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rtiApplications as $key => $rtiApplication)
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            {{ $loop->iteration }}
                                        </td>
                                        @if (Session::get('Lang') == 'hi')
                                            <td>{!! $rtiApplication->request_name_hi   ?? '' !!}</td>
                                        @else
                                            <td>{!! $rtiApplication->request_name_en ?? '' !!}</td>
                                        @endif

                                        <td>{!! $rtiApplication->registration_number    ?? '' !!}</td>

                                        @if (Session::get('Lang') == 'hi')
                                            <td>{!! $rtiApplication->pio_name_hi    ?? '' !!}</td>
                                        @else
                                            <td>{!! $rtiApplication->pio_name_en   ?? '' !!}</td>
                                        @endif

                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-29T00:00:00+05:30"> {{ date("d-m-Y",strtotime($rtiApplication->start_date)) }}</span>
                                        </td>

                                        <td class="views-field views-field-field-amount-rs- download">
                                            <a href="{{ asset('resources/uploads/RtiApplicationResponses/' . $rtiApplication->request_document) }}" download="" tabindex="0">
                                                {!! $rtiApplication->request_document ? 'View' : 'N/A' !!}
                                            </a><i class="fa fa-file-pdf-o text-danger"></i> <span class="size">({{  $rtiApplication->reply_doc_pdfimage_size }})</span>
                                        </td>
                                        <td class="views-field views-field-field-select-type download">
                                            <a href="{{ asset('resources/uploads/RtiApplicationResponses/' . $rtiApplication->reply_document) }}" download="" tabindex="0">
                                                {!! $rtiApplication->reply_document ? 'View' : 'N/A' !!}
                                            </a><i class="fa fa-file-pdf-o text-danger"></i> <span class="size">({{  $rtiApplication->reply_doc_pdfimage_size }})</span>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>

                </section>
            </div>
        </div>
    </section>

</div>
@endsection