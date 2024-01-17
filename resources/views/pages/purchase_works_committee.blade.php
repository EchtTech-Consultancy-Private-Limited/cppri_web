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
                    Purchase / Works / Committee
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="bg-wrapper inner-wrapper">
    <div class="breadcam-bg breadcam">
        <div class="container common-container four_content ">
            <ul>
                <li><a href="home.html">Home </a></li>
                <li><a href="javascript:void();">About us</a></li>
                <li><a href="javascript:void();"> Purchase / Works / Committee</a></li>

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

                            <div class="row my-3">
                                <div class="col-md-4 ps-md-0 ps-0">
                                    <label for="exampleDataList" class="form-label">Select Type</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="exampleDataList" class="form-label">Year</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">2004</option>
                                        <option value="2">2005</option>
                                        <option value="3">2006</option>
                                    </select>
                                </div>

                                <div class="col-md-3 d-flex align-items-end py-md-0 py-3">
                                    <a href="#" class="btn btn-primary"> Apply</a>
                                </div>
                            </div>

                            <table class="views-table ">
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
                                        <th class="views-field views-field-field-related-document" scope="col">
                                            Related Document </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            1 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/26/Biotech/Eqpt/2019-20/700 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-29T00:00:00+05:30">29-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Atomic Absorption Spectrometer (AAS)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s AJ Instruments India Pvt Ltd., </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            35321 (Euro) </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            2 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/48/Biotech/Eqpt/2019-20/865 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-12-22T00:00:00+05:30">22-12-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Gas Chromatograph&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s Shimadzu (Asia Pacific) Pte. Ltd </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            23600 (USD) </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            3 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/63/PT/Eqpt./2018-19/1408 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Digital Burst Strength Tester (Mullen Type) Model -180</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/a ABB AB / Lorentzen </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            23005 (Euro) </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            4 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/62/PT/Eqpt./18-19/1409 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Digital Surface Roughness Tester (Bendtsen Type) Model - 264</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/a ABB AB / Lorentzen </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            14625 (Euro) </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            5 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687795873067 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-08-01T00:00:00+05:30">01-08-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Keptron 5.0 kVA UPS</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Keptron Electronics Proprietorship, Patparganj Village, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            105396.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            6 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687718834833 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-31T00:00:00+05:30">31-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>7Ah 12V SMF Battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            08 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Cavitak Marketing Pvt. Ltd., Ahmedabad, Gujarat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            7056.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            7 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733019818 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-31T00:00:00+05:30">31-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 30A Black LaserJet Toner Cartridge CF230A&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Docket Care System, Lucknow, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            11469.12 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            8 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687797924638 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-26T00:00:00+05:30">26-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Tuff Power 1 kVA</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            SM Trade and Agency, Tezpur, Assam </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            15284.70 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            9 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687738902313 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-09T00:00:00+05:30">09-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Flushing Cistern with Flush Pipe White</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Deepak Enterprises, Indore, Madhya Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            8110.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            10 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687739149015 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-05T00:00:00+05:30">05-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 30A Black Original LaserJet Toner CF230A&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Docket Care System, Lucknow, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            11487.51 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            11 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687765646931 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-13T00:00:00+05:30">13-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Sandhu Door Closure (61-80 kg)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            B.N. Enterprises, South Delhi, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            12500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            12 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687779252027 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-06T00:00:00+05:30">06-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Brass Ball Valve</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ShriGanpati Tube Compony, Secunderabad, Telangana </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            10500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            13 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687720891164 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-06T00:00:00+05:30">06-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Bib Tap 15 mm</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Yashraj Enterprises, Allahabad, Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            11600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            14 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687757559722 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-06T00:00:00+05:30">06-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>GL HEX Nipple 20MM ISI Marked</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Zento Industries, Jalandhar, Punjab </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2595.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            15 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/41/Pur. Of Items/Engg &amp; Maint. DI/2019-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-02-27T00:00:00+05:30">27-02-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>pur. Of Speaker. Mike</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Gramophone &amp; Musical House </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            87135 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            16 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            305/CPPRI/Abhiyantriki/PKG/UP11BE-7879/208-19-2019-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-02-12T00:00:00+05:30">12-02-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Purchase of Tyre</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            08 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shakti tyre </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            39200 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            17 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/CRBD/RSC-DCPPAI-Training/2019-20/01 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-12-03T00:00:00+05:30">03-12-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>for training Prog</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Solitaire Inn </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            131216 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            18 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/CRBD/RSC-DCPPAI-Training/2019-20/01 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-01-14T00:00:00+05:30">14-01-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Bags</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            65 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Bag Centre </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            40625 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            19 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/37/Misc Purchase-PCPB/2019-20/649 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-10-10T00:00:00+05:30">10-10-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Portable Steam Boiler</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Cleancare Garment Machines Pvt. Ltd. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            53100 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            20 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/RSCDCPPAI(Cont. Edu) Trag priog/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-18T00:00:00+05:30">18-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Bags</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shri Sai Ram enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            28910 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            21 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/PT/Dehumidifier/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-21T00:00:00+05:30">21-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Dehumidifier Model FFB-300</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Bry-Air (ASIA) Pvt. Ltd. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            175525 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            22 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/PCIV/RSC-DCPPAI/2019/142 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-21T00:00:00+05:30">21-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Bags</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shri Sai Ram enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            57820 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            23 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/Lab Coat/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-15T00:00:00+05:30">15-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Lab Coat</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            12 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shatakshi Uniform Shoppe </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6960 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            24 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/2/Lab Coat/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-01T00:00:00+05:30">01-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Lab Coat</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            64 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shatakshi Uniform Shoppe </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            37120 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            25 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/RSCDCPPAI (Cont. Edu) Training Prog/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-06T00:00:00+05:30">06-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Bags</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shri Sai ram Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            57820 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            26 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/RSCDCPPAI (Cont. Edu) Training Prog/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-05T00:00:00+05:30">05-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Bags</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shri Sai ram Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            57820 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            27 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Director Bunglow/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-28T00:00:00+05:30">28-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Curtain</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Janta Home Furnishing </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            177810 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            28 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Director Bunglow/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-11T00:00:00+05:30">11-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Repair. Of Furniture</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            V. K. Steel Furniture </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            48720 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            29 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Director Bunglow/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-11T00:00:00+05:30">11-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>pur. Of Furniture</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            V. K. Steel Furniture </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            239776 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            30 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/52/EMD/Ind items/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-29T00:00:00+05:30">29-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of AC</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            National Electronics </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            42900 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            31 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/P/M/9/18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-21T00:00:00+05:30">21-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>pur. Of Furniture</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Manku Furniture </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            33630 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            32 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/8/Sainitary items/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-23T00:00:00+05:30">23-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply od Pipe</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Agarwal Sainitary Mart </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            130526 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            33 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/7/Office Stationery/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-16T00:00:00+05:30">16-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Letter Head</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Deepak Printing Press </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            53032 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            34 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Abhiyantriki/PKG/sam/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-14T00:00:00+05:30">14-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of GI Pipe</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sindh Auto Store </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            59472 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            35 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/24/LED TV/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-24T00:00:00+05:30">24-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Camera&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            D. S. Infosystems </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            182096 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            36 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Engg/ CCTV Camera/2017-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-12T00:00:00+05:30">12-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Camera and Cable</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            D. S. Infosystems </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            121658 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            37 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/15/Misc. Items/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-24T00:00:00+05:30">24-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of Electrical Items</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Classicals </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            32506 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            38 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/15/Misc. Items/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-11T00:00:00+05:30">11-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of Electrical Items</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Classicals </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            93309 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            39 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate(6)/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-12T00:00:00+05:30">12-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Painting Wall Chair &amp; Material labour</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Surya Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            81200 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            40 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Director Bunglow/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-28T00:00:00+05:30">28-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maint. Charges Main gate Guard Room</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ahsan Ilahi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            99170 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            41 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            231/CPPRI/Engg/Maint/BPS/Routine Maint/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-03T00:00:00+05:30">03-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of New Door Curtain Pipe</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Annu Verma </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            41440 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            42 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Director Bunglow/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-09-01T00:00:00+05:30">01-09-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Door Polishing &amp; Repairing Work</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Annu Verma </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            195614 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            43 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            331/ CPPRI/Abhiyantriki/PKG/General/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-25T00:00:00+05:30">25-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maint. Of Building</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            S S Engineering </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            109200 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            44 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/39/Repairing/B. Wall/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-31T00:00:00+05:30">31-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Repairing of Boundry Wall</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            S S Engineering </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            238336 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            45 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/39/Repairing/B. Wall/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-02-08T00:00:00+05:30">08-02-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Whitewahing of Main Boundry Wall</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            S S Engineering </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            248640 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            46 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRi/Lib/AR/2017-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-11T00:00:00+05:30">11-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Printing &amp; Designing charges (Annual Report)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Electric Press </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            269501 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            47 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/62/Guesthouse/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-02-19T00:00:00+05:30">19-02-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Carpet work of G House</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Tapesh Mamgain </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            173633 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            48 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Maint./3/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-02-13T00:00:00+05:30">13-02-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maintenance&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Kishan Singh Negi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            170643 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            49 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/10/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-04-02T00:00:00+05:30">02-04-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Polished of furniture G house</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Kishan Singh Negi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            120832 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            50 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Abhi/PKG/Electrical Equipment/2019-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-11T00:00:00+05:30">11-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Layout Plan for 400 KVA Substation</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Khushi Engineer </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            59000 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            51 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/RSCDCPPAI (Cont. Education) Training Prog/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-05T00:00:00+05:30">05-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Catering arrangement for Trg prog</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Jagdamba Catters </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            140120 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            52 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                        </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-05T00:00:00+05:30">05-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Architech Services</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Disha Associates </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            111536 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            53 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/10/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-04-02T00:00:00+05:30">02-04-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>White washing of Guest house Ist Block</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Kishan Singh Negi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            212660 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            54 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/W.Wash/Admin Block/6/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-11-19T00:00:00+05:30">19-11-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>White washing of Admin Block &amp; Lab</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Surya Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            159693 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            55 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Repair/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-20T00:00:00+05:30">20-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Whitewash of Guest House</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Krishan Singh Negi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            177027 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            56 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/RSCDCPPAI (Conti Edu) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-20T00:00:00+05:30">20-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Catering in Training</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Jagdamba Catters </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            134400 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            57 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Lib/AR/2017-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-20T00:00:00+05:30">20-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Print of Annual Report</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Samaya Sakshaya </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            175087 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            58 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Whitewash/Labs </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-14T00:00:00+05:30">14-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Ewhitewas Paint</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M. K. Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            170240 </td>
                                        <td class="views-field views-field-field-select-type">
                                        </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            59 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/P/M/22/18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-26T00:00:00+05:30">26-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maint. Of Quarter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M. K. Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            38772 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            60 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/60/SPPM/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-21T00:00:00+05:30">21-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maint. Of Lab Equipment</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M. K. Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            71626 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            61 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/2018-19 Renovation of Auditorium </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-10T00:00:00+05:30">10-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Maint. Of Auditorium Curtain &amp; Chair</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M. K. Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            256815 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            62 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Abhi/PKG/Colony Tubewell Room/2018-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-24T00:00:00+05:30">24-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Construction of Pump House</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Quantus Contractor &amp; Suppliers </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            240893 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            63 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pr/18/Misc items/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-19T00:00:00+05:30">19-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Vaccum Cleaner</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Super Traders India </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18117.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            64 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Engg &amp; Maint. New Veh/RSR/02B/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2017-08-22T00:00:00+05:30">22-08-2017</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of New Car</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Maruti Suzuki </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            582958.44 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            65 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/32/IC&amp;Wet/Eqpt/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-03-06T00:00:00+05:30">06-03-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of Automated Sheet Former</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Xell GmbH </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1913368.32 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            66 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/33/IC&amp;wet Lab/EQPT/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-02-28T00:00:00+05:30">28-02-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Suppluy of PFI Mill</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Xell GmbH </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3350409.5 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            67 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/17/IC&amp;PP/EQPT/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-03-06T00:00:00+05:30">06-03-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of Particle Charge Dedctor Analyzer</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            EMTEC Electronics </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1091499.6 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            68 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Engg &amp; Maint. New Veh/RSR/02B/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-01-25T00:00:00+05:30">25-01-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Accessories and Verious Exp. Of New Car</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Atelier Automobiles </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            105571 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            69 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/21/Repairing of Bath room /17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2017-12-14T00:00:00+05:30">14-12-2017</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Repairing of Toilet</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Quantus Contractor &amp; Suppliers </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            230000 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            70 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/P/M/Horti/28 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-19T00:00:00+05:30">19-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Fabrication of Composter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sh. Hari Narayan Industries </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            487200 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            71 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/14/EMD/Equipt/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-28T00:00:00+05:30">28-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Various Equipment</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ecotech Instrument </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            264969 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            72 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/49/Equipt/CR/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-31T00:00:00+05:30">31-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Screen for Depithing Plant</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                        </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            518400.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            73 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/31/EMD/Equpt/16-17 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-02T00:00:00+05:30">02-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pur. Of Coulomeatric Analyzer</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Analytikjena </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1914498.96 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            74 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/3/PCPB/Ind items/17-18 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-06T00:00:00+05:30">06-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Supply of Elec. Weight Balance</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Varun Sales </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            152320 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            75 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Antitermite/12/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-08-27T00:00:00+05:30">27-08-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Anti termite Treatment</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Hi-Tech Pest Control </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            153958 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            76 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            102/CPPRI/Abhi/Boiler/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-07-16T00:00:00+05:30">16-07-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Boiler Testing</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Pressure and Process Bollers Pvt. Ltd. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                        </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            77 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/82/Director Sect/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>fixing of Carpet at Dircetor office</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Tapesh Mamgain </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            217347 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            78 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Whitewash /13/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-15T00:00:00+05:30">15-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Refixing of PVC Tiles</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Annu Verma </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            31360 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            79 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Disp Board/14/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-15T00:00:00+05:30">15-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Glow Singn Board</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ahsan Ali </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            54320 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            80 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Whitewash of Entrance Area/17/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-29T00:00:00+05:30">29-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Building Painting</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Surya Enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            196971 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            81 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/58/PT/Eqpt/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-03-12T00:00:00+05:30">12-03-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Stifness Tester</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Saharanpur Testing Instruments Pvt. Ltd., </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            76700 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            82 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/50/SPPM/Eqpt./19-20/1230 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-11-25T00:00:00+05:30">25-11-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pulp Disintigrator Equipment</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Saharanpur Testing Instruments Pvt. Ltd., </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            76700 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            83 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            102/CPPRI/19-20/Abhi/Boiler/1659 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-03T00:00:00+05:30">03-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Boiler&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s. SD Engineering, Near Pant Vihar Colony, I.T.C. Road, Saharanpur </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            81420 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            84 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            102/CPPRI/19-20/Abhi/Boiler </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-07-20T00:00:00+05:30">20-07-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Boiler&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s. SD Engineering, Near Pant Vihar Colony, I.T.C. Road Saharanpur </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            56640 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            85 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Abhi./PKG/Plant/19-20 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-07-22T00:00:00+05:30">22-07-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>White washing of Boiler house</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M K enterprises </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            228228 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            86 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            102/CPPRI/19-20/Abhi/Boiler </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-07-20T00:00:00+05:30">20-07-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Boiler&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s. SD Engineering, Near Pant Vihar Colony, I.T.C. Road Saharanpur </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            56640 </td>
                                        <td class="views-field views-field-field-select-type">
                                        </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            87 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Pur/60/EMD/Calibration/2019-20/643 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-06-20T00:00:00+05:30">20-06-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Calibration</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s. R-Initiative Enterprises, Distt. Faridabad, Haryana </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            35872 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            88 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate-white wash (D Type)/2020-21 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-07-20T00:00:00+05:30">20-07-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>White washing D Type Quarter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            M/s Tapesh Mamgain </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            115585 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Committee </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            89 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687709591816 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-06T00:00:00+05:30">06-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>GL HEX Nipple 15MM ISI</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Zento Industries, </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1680.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            90 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687722797330 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-04T00:00:00+05:30">04-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 88a Black Original LaserJet Toner CC388AC&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JM Enterprises, Ghaziabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            70200.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            91 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687754866480 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP LaserJet Magenta Print Cartridge 304A CC533AC&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Tritech Enterprises, Allahabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            15092.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            92 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687753674412 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP LaserJet Yellow Print Cartridge 304A CC532AC&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JM Enterprises, Ghaziabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            15092.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            93 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687778189877 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP LaserJet Cyan Print Cartridge 304A CC531AC&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sun Corporation, Kanpur Nagar, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            15092.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            94 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687720050221 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 304A Black Original LaserJet Toner Cartridge CC530AC&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Unique Media Services, Gautam Buddha Nagar, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            15312.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            95 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687730818662 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Monarque –A4, 75 GSM, 500 Sheets, White, 1 Ream</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Muskan Enterprises, Ahmedabad, Gujrat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            40600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            96 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/Estate/Ren Lab/7/18-19 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-06-03T00:00:00+05:30">03-06-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>MAINTENANCE WORK IN PAPER TESTING LABORATORY</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Tapesh Mamgain </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            543562 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            97 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            CPPRI/EMD/Development of App. 2019-20/720 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-06-17T00:00:00+05:30">17-06-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Design &amp; Development Mobil Application</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Netprophets Cyberworks Pvt Ltd. (NIC empaneled Vendor) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            892080 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            98 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                        </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-04-13T00:00:00+05:30">13-04-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Design &amp; Development Autmation software</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Netprophets Cyberworks Pvt Ltd. (NIC empaneled Vendor) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2149370 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Tender </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            99 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687782325488 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-19T00:00:00+05:30">19-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>CISCO Spark Room Kit Plus</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Mudra Electronics Limited, New Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1017500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            100 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687794848047 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-18T00:00:00+05:30">18-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Kisankraft KK-P768</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Om Hardware and Electricals, Jaipur, Rajasthan </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            12100.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            101 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687710140823 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-18T00:00:00+05:30">18-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Hedge Trimmer Cutter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ashirwad Sadar Bazar, Lucknow, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            28947.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            102 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687730445002 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-18T00:00:00+05:30">18-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Honda Rotary Lawn Mower</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Lakshmi Sales Corporation, Pathankot, Punjab </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            48500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            103 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687757875934 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-18T00:00:00+05:30">18-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Honda U2ST Metal &amp; HDPE Multicolor Brush Cutter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            SRS Sales Organization, Bikaner, Rajasthan </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            34400.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            104 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687776029277 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Executive Table</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Design Furniture, Ahmedabad, Gujrat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            36000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            105 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687759280878 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-03-18T00:00:00+05:30">18-03-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Chainsaw Cutter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            A A Enterprises, Sultanpur Road, Lucknow, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18697.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            106 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687757699335 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-24T00:00:00+05:30">24-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>AmarJyoti</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            12 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Jai Ambe Steel Industries, Chandigarh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            45300.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            107 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687749258896 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-21T00:00:00+05:30">21-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>LG 49L V340 Full HD TV</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            R P Enterprises Dehradun, Uttarakhand </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            97500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            108 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687773324892 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-20T00:00:00+05:30">20-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>LLOYD 1.5 Ton/4500 kCal/hr High wall Split AC 5 Star</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Manish Trader, Bhilai, Chhatisgarh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            37798.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            109 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687719930878 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-21T00:00:00+05:30">21-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Amaron Quanta 12V26Ah Lead Acid Battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            16 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Power Technology Support and Service Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            32768.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            110 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687717240994 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-14T00:00:00+05:30">14-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>EPSON DS 1630</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            AlpicInfotech, Agra, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18849.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            111 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687716338349 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-21T00:00:00+05:30">21-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Radwag Analytical Balance</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Magnus Enterprises, Shahdara, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            77900.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            112 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687734595500 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-05-03T00:00:00+05:30">03-05-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>65 Ah Battery Amron</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Centuary Automobiles, Kashmere gate, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6900.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            113 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC- 511687746835557 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-20T00:00:00+05:30">20-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Keptron Online UPS 1 kVA 120 MTS Backup</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            05 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Keptron Electronics Proprietorship, Patparganj village, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            164050.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            114 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687755691550 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-12T00:00:00+05:30">12-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP Cartridge CE278AC</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ROMA Enterprises, Mumbai, Maharashtra </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            34210.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            115 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687785320188 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-18T00:00:00+05:30">18-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 88A Black Original Laserjet Toner Cartridge CC388AC</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            HEEMO (India), Meerut, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            35730.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            116 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687769459132 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-18T00:00:00+05:30">18-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 78A Black Original Laserjet Toner Cartridge CE278AC</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Vision Infotech, Gomti Nagar, Lucknow </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            46450.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            117 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687749312174 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2021-01-01T00:00:00+05:30">01-01-2021</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>VM V 608 BBB6</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            V. M. Enterprises, Mumbai, Maharashtra </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            48600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            118 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687770697796 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-02-11T00:00:00+05:30">11-02-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Syska Best Quality LED Glass Tubelight – 20 W</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            1000 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Syska LED Lights private Limited, Pune, Maharashta </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            177000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            119 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733068957 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-05T00:00:00+05:30">05-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Plastic Moulded Pallets</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            05 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Bhupinder Trading Compony, SCO 169, Chandigarh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18450.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            120 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687785469364 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-23T00:00:00+05:30">23-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Data Traveler USB3 16GB Pendrive</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Hasmukh Jain &amp; Co., Mumbai, Maharashtra </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            22900.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            121 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687797712142 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-02T00:00:00+05:30">02-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP Laser jet Pro M203dn</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ECHT Tech Consultancy Services Private Limited, Ghaziabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            57525.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            122 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687725674342 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-02T00:00:00+05:30">02-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 600 G4 MT i5 Win 10P 413 V203P</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            11 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ECHT Tech Consultancy Services Private Limited, Ghaziabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            634150.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            123 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687729130281 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-10T00:00:00+05:30">10-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>A4 Printing Paper</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 Paper Ream </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JK Enterprises, Gautam Buddha Nagar, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            44200.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            124 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687757555112 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-01-01T00:00:00+05:30">01-01-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Visible Spectrophotometer Microprocessor based</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Labtronics, Panchkula, Haryana </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            45134.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            125 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC- 511687707319751 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-28T00:00:00+05:30">28-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Double beam UV VIS Spectrophotometer</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ZYTECH Instruments, Allahabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            258065.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            126 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687754929211 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-27T00:00:00+05:30">27-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>308 Litre Frost Free Refrigerator</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Desire Business Enterprises, Ghaziabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            41000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            127 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687789310416 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-27T00:00:00+05:30">27-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Battery 12V 42 Ah with buy back</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Gayatree Enterprises, Dehradun, U.K. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            14880.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            128 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733633559 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-27T00:00:00+05:30">27-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Battery 12V 72 Ah</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Poddar&amp; Sons, Siliguri, West Bengal </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            19400.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            129 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687715602347 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-21T00:00:00+05:30">21-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Domestic Water Heater – Geyser 25 Liters</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            09 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Saahas Industries, Greater Noida, Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            38880.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            130 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687785796894 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-17T00:00:00+05:30">17-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Excide 12V 7 Ah UPS Battery with buy back</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            29 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Alsun Systems, Nehru place, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            16210.71 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            131 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687795398091 (Base Office) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-12-10T00:00:00+05:30">10-12-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>V Guard Water Gyser</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            N Micro One East Delhi, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            14700.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            132 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687783879881 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-11-28T00:00:00+05:30">28-11-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 240 G6 2RC06PA# ACJ with 3 Year Warranty</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            System Electrical and Motor Rewinding Works, Ratlam, M.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            215600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            133 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687788584255 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-11-05T00:00:00+05:30">05-11-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Godrej 300 L ANS9</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ECHT Tech Consultancy Services Private Limited, Rohini, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            63800.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            134 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687744157049 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-11-01T00:00:00+05:30">01-11-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>ltxlpearmoured 50 sqmm x 3.5 aluminium conductor</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 meter </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shankar Enterprises Allahabad, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            44800.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            135 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687711006923 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-10-26T00:00:00+05:30">26-10-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP Laser jet pro M202DW</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            05 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ECHT Tech Consultancy Services Pvt Ltd. Rohini, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            84250.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            136 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687766530110 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-10-15T00:00:00+05:30">15-10-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>JK Copier paper</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 Paper Ream </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            VHTRVA Gautam Buddha Nagar, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            32000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            137 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687751536287 (Base Office) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-09-26T00:00:00+05:30">26-09-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Exide 150 Ah Battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Gaurav Enterprises, Burdwan, W.B. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            33000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            138 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687773481823 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-29T00:00:00+05:30">29-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>AZ-01</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Methodex Systems Pvt Ltd., Meerut, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            29736.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            139 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687724418946 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-29T00:00:00+05:30">29-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>TDShodex Legend - 11</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Methodex Systems Pvt Ltd., Meerut, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            9085.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            140 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687759132935 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-29T00:00:00+05:30">29-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Shogun-VI</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Methodex Systems Pvt Ltd., Meerut, U.P. </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            38196.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            141 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687715315307 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-23T00:00:00+05:30">23-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP Scanjet Pro 2500 F1 Flatbed scanner – NP23</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Fast Track Infotech Services, Ahmedabad, Gujrat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            60000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            142 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687796658880 (Base Office) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-08-09T00:00:00+05:30">09-08-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Brace XJ</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Creative Creation, Amritsar, Punjab </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            32880.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            143 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687791554540 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-26T00:00:00+05:30">26-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 348 G4 i5-7200U 8GB 1000 GB DVD 14.0 Inch Win 10 Pro 3yrs</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Call Me Services, Sambalpur, Odhisa </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            208484.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            144 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687725280297 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-19T00:00:00+05:30">19-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Exide 12V 7 Ah Powersafe battery with buy back</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            24 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JDM Technologies Pvt. Ltd., Meerut </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            26573.52 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            145 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687730999340 (Base Office) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-16T00:00:00+05:30">16-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Stablizer 4 kVA Vguard</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Manmeet Enterprises, New Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            12474.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            146 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687734401979 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-09T00:00:00+05:30">09-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Wipro Garnet LED Glass Tube Lights 20W</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            400 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Abundance Associates, North West Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            86000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            147 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687797458605 (Base Office) </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-07-06T00:00:00+05:30">06-07-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Air Conditioner Voltas</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            A. S. Global Solutions East Delhi, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            148000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            148 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687722028739 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-05-24T00:00:00+05:30">24-05-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>380 mm metal body exhaust fan</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            DevnamPiyadassiBrixwell Pvt. Ltd., Begusarai, Bihar </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            14760.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            149 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687779860078 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-05-24T00:00:00+05:30">24-05-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Vaccum Cleaner</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Super Traders India, North Delhi, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18117.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            150 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687749989289 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Pallav Magnesium Sulphate (Epsom salt) Packing size 1 kg.</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Purvi Enterprises, Ahmedabad, Gutarat-380 0022 </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            740.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            151 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687760300565 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Reagle Electronic Weighing Scale brand with load capacity of 120 gm.</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Jaincom, Moradabad- Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            115000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            152 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687792356675 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Century Lavender Toilet Paper Rolls 15 (generally Conforming to IS
                                                14661:Latest to the extent applicable,10</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Systematic SRS Research Services Pvt. Ltd., South Delhi- Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            10396.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            153 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687780303817 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Dabur New HDPE Can 5000 ml. Liquid Hand wash</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Paya Stationery and Prints- Mumbai </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2287.60 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            154 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687791744111 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Stainless steel Index Card Files</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Rahul Office Solution, Mumbai </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            7684.50 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            155 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733334955 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <ul>
                                                <li>Camel Type B 200 Grams Paper Adhesives/Liquid Gum,&nbsp;</li>
                                                <li>Unbranded Stapler Pin 20,</li>
                                                <li>Permanent Marker Pen with Clip</li>
                                            </ul>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            • 30 • 100 • 60 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Samir Book Stall, Bhavnagar- Gujarat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1620.00 1000.00 810.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            156 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687748110341 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <ul>
                                                <li>Bittoo&nbsp; 300 Pages,</li>
                                                <li>Register 388 Pages,&nbsp;&nbsp;</li>
                                                <li>Plain Ruled Register -100 Pages</li>
                                            </ul>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50, 30, 50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            N.S. Enterprises, Meerut – (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6250, 5940, 3500 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            157 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687780427526 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded 120 GSM Non- conforming to IS mm Envelopes</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            10 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Modern Stationery Mart, Meerut –(U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3100.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            158 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687735363691 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-28T00:00:00+05:30">28-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Attendance Register (ATC)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            N.S. Enterprises, Meerut – (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3100.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            159 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687737524749 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-21T00:00:00+05:30">21-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>BILT COPY POWER</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            500 Paper Ream </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Lalshah Ventures Pvt. Ltd. Ahmedabad - Gujarat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            94000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            160 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687726539452 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-14T00:00:00+05:30">14-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>N and M E2 Class Calibration Weights or Weights Sets</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Gera Ventures , Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            24999.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            161 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687736363708 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-13T00:00:00+05:30">13-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cona 2.5A and 6A, 5 Pin Socket as per IS:1293/2005 with latest amendments
                                            </p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            300 Meter </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            OrienIfotel India, Indore – (M.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            8397.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            162 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687739739545 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-13T00:00:00+05:30">13-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cona ISI Market, 6A, 1Way Piano type Switch to IS:3854/1997 with latest
                                                amendments</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            500 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            R.K. Enterprises, Kanpur Nagar – Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            8100.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            163 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687732701301 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-13T00:00:00+05:30">13-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cona 6A and 16A, 6Pin Socket as per IS:1293/2005 with latest amendments
                                            </p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            ShriBankeBihari Enterprises, Sahibabad- (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            12400.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            164 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687756269205 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-13T00:00:00+05:30">13-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cona ISI Market, 16A, 1Way Piono type Switch to IS:2845/1997 with latest
                                                amendments</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            200 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            OrienIfotel India, Indore – (M.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            14000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            165 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            02 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Hp Intel I5 15.6 Inch Laptop (Windows 10 Professional)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sun Micro System &amp; Solution Gwalior- (M.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            106998.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            166 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687709410020 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>DS-772NI-K4/4TB (HIKVISION 32CH KSeries NVR Including 4TB HDD)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            44519.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            167 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733180485 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HIKVISION 4MP Bullet Camera</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            24 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            492456.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            168 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687751741430 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Toshiba 6144 GB SSD Hard disk drive</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            37999.98 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            169 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687712978710 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Secureye S-SMSF-FE 10/100 Media Convertor</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            16 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            24800.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            170 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687740564173 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Ewit 6U Rack Enclosures Networking/Server Rack</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            17999.92 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            171 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687747539980 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Zoom X Cat-6 STP for CCTV</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            610 Meter </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            610 Meter </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            172 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687711835638 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Simplex Pigtails for&nbsp; Fiber Cable Connection length 3 m
                                            </p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            16 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            4479.84 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            173 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687717928318 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Simplex Fiber Optic Patch Cord SC-SC</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            16 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3983.84 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            174 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687743903559 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Assorted PTZ camera installation and Commissioning Charges</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            24 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            24960.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            175 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687715431755 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Quantam 6 Core Single Mode Fibre Optic Cable for CCTV</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            2,000 Meter </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun- (U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            35900.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            176 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687703219756 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Netgear Wan PoE Ethernet Lan Port Router</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            05 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sky World Security Solution, Saharanpur-(U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            24995.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            177 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687787712109 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded PVC Non braided Flexible Electric Calbe</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            1,500 Meter </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Sky World Security Solution, Saharanpur-(U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            23970.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            178 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687744777315 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Insulated Electrical Conduit Pipe 3 Meter</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises Dehradun-(U.K.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            7500.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            179 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687729373722 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Exide Technologies 12.0 Volt Lead Acid Battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            08 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shweta Enterprises, Allahabad – (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6719.84 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            180 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687797090449 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Exide Technologies 12.0 Volt Lead Acid Battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            12 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shweta Enterprises, Allahabad – Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            10079.76 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            181 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687739099267 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-09T00:00:00+05:30">09-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Absolute Alcohol</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            `20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            LABOAIDS, Meerut – Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            4379.80 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            182 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687794431646 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-10-05T00:00:00+05:30">05-10-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>RASAYAN Borosilicate Glass Size 150 mm</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            24 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Holy Scientific, Ahmedabad – Gujrat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            5520.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            183 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687713748017 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-30T00:00:00+05:30">30-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 88A Black Original Laser Jet Toner Cartridge Class OEM</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            25 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ayushi Enterprises, Ghaziabad- Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            89950.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            184 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687739908794 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-30T00:00:00+05:30">30-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>JK BRAND 90 GSM Notesheet (Azurelaid)</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Modern Stationery Mart, Meerut – Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            4900.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            185 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687713748109 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-25T00:00:00+05:30">25-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>HP 78A Black Original Laser Jet Toner Cartridge Class OEM</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            25 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JMD Infotech Pvt. Ltd., New Delhi- South Delhi, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            114075.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            186 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687784893477 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cello Tape 1 inch 50 Meter (Tape Length) Transparent Tape</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Moon Enterprises, Tower Lower Parel (W), Mumbai </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1501.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            187 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687790650020 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Plastic Tape Dispenser, 100 mm</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ziyan Enterprises, East Delhi- Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6360.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            188 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687760704901 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cello Fine Grip Blue</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            3D Enterprises, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            189 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687732826534 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Cello Water based Ballpoint Pen Refills</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Reguerdon INC, Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            400.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            190 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687797005080 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Arhant Register No.6</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            30 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Modern Stationery Mart, Meerut, (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2280.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            191 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687711536182 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Kangaro Stapler with C1113N100 Stapler</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JSM HR Services Private Limited, Firozabad-(U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3840.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            192 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687734887833 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Add gel pen blue</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            50 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Twinkle Creation, Ludhiana –Punjab </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2205.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            193 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687791189991 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Fevicol Glue Stick 15 gram</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Premchand and Son’s Sagar (M.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            3600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            194 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687751670886 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-16T00:00:00+05:30">16-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Add gel refill gel ink gell pen Refills.</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            AR Trading Company, Ghaziabad, (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1980.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            195 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687739062433 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-10T00:00:00+05:30">10-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Hikvision 3MP Bullet Camera</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            12 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Karan Enterprises, Dehradun </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            227988.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            196 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687722446806 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-08T00:00:00+05:30">08-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>EnvirotechRespirable Dust PM 2.5 Sampler</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Enviro Tech Instruments Pvt. Ltd., Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            128000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            197 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687785289209 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-08T00:00:00+05:30">08-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Unbranded Parafilm 1 Role</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            04 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Peari International, Bareilly, (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            6640.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            198 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687702404794 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-08T00:00:00+05:30">08-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Silver Nitrate 25 gm</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Himalaya Scientific House, Chandigarh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            5000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            199 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687741599847 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-08T00:00:00+05:30">08-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Potassium 1(kg)&nbsp; Permanganate</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JK Enterprises, East- Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            2448.99 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            200 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687710784913 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-08T00:00:00+05:30">08-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>FINAR Potassium&nbsp; Dichromate 0.5 kilogram&nbsp;</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            JK Enterprises, East- Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            799.99 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            201 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687730224911 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Fisher Scientific Liquid Acetone 2.5 Ltr.</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            RC Enterprises, Meerut – Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            1350.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            202 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687785562371 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Petri Plates Or Dishes</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            1000 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Biochrom International, East Delhi -Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            10000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            203 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687727901463 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>MB LAB Virgin Polypropylene Snap Cap Centriguge Tubes</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            5000 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Shiva Electricals and Automation, Ghaziabad, Uttar Pradesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            5000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            204 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687731500873 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Royal Surgical Protective hood cap Single use</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            100 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Vijay Kumar Kanpur Nagar- Uttar Pradhesh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            300.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            205 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687790781341 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>EXIDE Buy Back 12 Volt Battefies 150 Ah battery</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            02 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Anshu Gupta, Shastri Nagar – Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            20998.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            206 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687711668188 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-07T00:00:00+05:30">07-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Binocular Microscope PZB 22</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Krishna Enterprises, Gautam Buddha Nagar (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            12998.50 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            207 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687761649379 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-03T00:00:00+05:30">03-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Beetel M 59 black caller id with speaker phone</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            20 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Agrawal Telecom- Indore </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18800.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            208 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687706892148 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-09-03T00:00:00+05:30">03-09-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Samsung GB/GB Inch Smart Phone</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Zaco Computers Pvt. Ltd. Mumbai </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            23285.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            209 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687726165462 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-08-11T00:00:00+05:30">11-08-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Karel Digital Card for Pabx System</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Intellicon Pvt. Ltd. Gujarat </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            29723.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            210 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687749312174 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-05T00:00:00+05:30">05-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>VM V 608 BBB6</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            03 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            V. M. Enterprises, Mumbai, Maharashtra </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            48600.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            211 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687733068957 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2019-04-05T00:00:00+05:30">05-04-2019</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Plastic Moulded Pallets</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            05 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Bhupinder Trading Compony, SCO 169, Chandigarh </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            18450.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            212 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                        </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-06-02T00:00:00+05:30">02-06-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Rajender Iron Store </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            80761 </td>
                                        <td class="views-field views-field-field-select-type">
                                        </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            213 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                        </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-06-02T00:00:00+05:30">02-06-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                        </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Bharat Iron Store </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            37482 </td>
                                        <td class="views-field views-field-field-select-type">
                                        </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            214 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687794234008 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-07-30T00:00:00+05:30">30-07-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>WD 2 TB 7200 rpm Hard</p>
                                            <p>Disk</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            01 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Vitrag Industries, Mumbai </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            5328.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            215 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687753133749 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2020-06-19T00:00:00+05:30">19-06-2020</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Century A4/75/85/88</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            300 Paper Ream </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Aradhya Enterprises, Jhansi, (U.P.) </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            52797.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            216 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687732731749 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-05-16T00:00:00+05:30">16-05-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Street Lights</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            75 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Ashis Energy Innovation Pvt. Ltd., Delhi </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            171000.00 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="views-field views-field-counter">
                                            217 </td>
                                        <td class="views-field views-field-field-order-contract-no-">
                                            GEMC-511687700359320 </td>
                                        <td class="views-field views-field-field--date">
                                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime"
                                                content="2018-02-05T00:00:00+05:30">05-02-2018</span>
                                        </td>
                                        <td class="views-field views-field-body">
                                            <p>Syska Best quality LED</p>
                                            <p>bulb – 9W</p>
                                        </td>
                                        <td class="views-field views-field-field-quality-supplied">
                                            164 </td>
                                        <td class="views-field views-field-field-name-of-supplier-party-">
                                            Syska LED Lights Pvt. Ltd., Pune, Maharashtra </td>
                                        <td class="views-field views-field-field-amount-rs-">
                                            9510.36 </td>
                                        <td class="views-field views-field-field-select-type">
                                            Gem </td>
                                        <td class="views-field views-field-field-related-document">
                                        </td>
                                    </tr>
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