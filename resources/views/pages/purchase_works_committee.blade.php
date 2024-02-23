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
                            <h3 class="dir-dsk-title mt-3"> Purchase / Works / Committee </h3>
                        <form action="{{route('purchase-works-committee-filter')}}" method="post" id="myform" enctype="multipart/form-data">
                            @csrf
                            <div class="row my-3">
                                <div class="col-md-4 ps-md-0 ps-0">
                                    <label for="select_type" class="form-label">Select Type</label>
                                    <select class="form-select" name="work_Type" aria-label="Default select example" id="select_type">
                                        <option value="">Select Type</option>
                                        @foreach($purchaseWorksCommittesTypes as $purchaseWorksCommittesType)
                                            <option value="{{ $purchaseWorksCommittesType->uid }}" {{ $purchaseWorksCommittesType->uid == $selectedWorkType ? 'selected' : '' }}>
                                                {{ $purchaseWorksCommittesType->pwc_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="year" class="form-label">Year</label>
                                    <select class="form-select" name="start_date" aria-label="Default select example" id="year">
                                        <option value="">Select Year</option>
                                        @php
                                            $currentYear = now()->year;
                                        @endphp
                                        @for ($year = 1998; $year <= $currentYear; $year++)
                                        <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex align-items-end py-md-0 py-3">
                                    <button type="submit" class=" btn-primary"> Apply</button>
                                </div>
                            </div>
                        </form>
                            <table class="views-table" id="example">
                                <thead>
                                    <tr>
                                        <th class="views-field views-field-counter" scope="col">
                                            S.No </th>
                                        <th class="views-field views-field-field-order-contract-no-" scope="col">
                                            Order/Contract No. </th>
                                        <th class="views-field views-field-field--date" scope="col">
                                            Date </th>
                                        <th class="views-field views-field-body" scope="col">
                                            Product/Work Description </th>
                                        <th class="views-field views-field-field-quality-supplied" scope="col">
                                            Quality Supplied </th>
                                        <th class="views-field views-field-field-name-of-supplier-party-" scope="col">
                                            Name of Supplier/Party </th>
                                        <th class="views-field views-field-field-amount-rs-" scope="col">
                                            Amount(Rs) </th>
                                        <th class="views-field views-field-field-select-type" scope="col">
                                            Type </th>
                                        {{-- <th class="views-field views-field-field-related-document" scope="col">
                                            Related Document </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($purchaseWorksCommittes as $key => $purchaseWorksCommitte)
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            {{ $loop->iteration }} </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            {{ @$purchaseWorksCommitte->order_contract_no }} </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-29T00:00:00+05:30"> {{ date("d-m-Y",strtotime($purchaseWorksCommitte->start_date)) }}</span>
                                        </td>
                                        @if (Session::get('Lang') == 'hi')
                                            <td>{!! $purchaseWorksCommitte->description_hi  ?? '' !!}</td>
                                        @else
                                            <td>{!! $purchaseWorksCommitte->description_en ?? '' !!}</td>
                                        @endif
                                        @if (Session::get('Lang') == 'hi')
                                            <td>{!! $purchaseWorksCommitte->quality_supplied_hi   ?? '' !!}</td>
                                        @else
                                            <td>{!! $purchaseWorksCommitte->quality_supplied_en  ?? '' !!}</td>
                                        @endif
                                        @if (Session::get('Lang') == 'hi')
                                            <td>{!! $purchaseWorksCommitte->name_of_supplier_party_hi    ?? '' !!}</td>
                                        @else
                                            <td>{!! $purchaseWorksCommitte->name_of_supplier_party_en   ?? '' !!}</td>
                                        @endif
                                        <td class="views-field views-field-field-amount-rs-">
                                            {{ $purchaseWorksCommitte->amount   ?? '' }}</td>
                                        <td class="views-field views-field-field-select-type">
                                            {{ $purchaseWorksCommitte->pwc_type   ?? '' }} </td>
                                        {{-- <td class="views-field views-field-field-related-document">
                                            Releted Document
                                        </td> --}}
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