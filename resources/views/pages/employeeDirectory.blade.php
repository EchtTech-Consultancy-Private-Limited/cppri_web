@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        Employee Directory
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content">
                <ul>
                    <li><a href="home.html">Home </a></li>
                    <li><a href="javascript:void();">Employee Directory</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container common-container">

        @if (isset($sortedDesignationData) && count($sortedDesignationData) > 0)
            @foreach ($sortedDesignationData as $item)
                @if ($item['designation']->name_en == 'Director')
                    <div class="row">
                        <div class="col-md-12 display-content">
                            <div class="employee-directry-type employee-dir-page">
                                <div data-aos-mirror="true" data-aos="fade-right" class="title-before"></div>
                                <h3>
                                    <h2>{{ $item['designation']->name_en }}</h2>
                                </h3>
                                <div data-aos-mirror="true" data-aos="fade-left" class="title-after"></div>
                            </div>
                        </div>
                        @if (isset($item['data']) && count($item['data']) > 0)
                            @foreach ($item['data'] as $profile)
                                <div class="direct-centre emp-card-det">
                                    <div class="card-emp-dir">
                                        <div class="emp-crd-dir">
                                        </div>
                                        <div class="emp-crddir-inf">
                                            <div class="img-circle-prof">
                                                <img @if ($profile->public_url != '') src="{{ asset('resources/uploads/empDirectory/' . $profile->public_url) }}"
                                     @else
                                     src="{{ asset('assets-cppri/images/profile--.jpg') }}" @endif
                                                    alt=""
                                                    tittle= "{{ $profile->fname_en ?? '' }} {{ $profile->mname_en ?? '' }} {{ $profile->lname_en ?? '' }}">
                                            </div>
                                            <h3><i class="fa fa-user"></i>{{ $profile->fname_en ?? '' }}
                                                {{ $profile->mname_en ?? '' }} {{ $profile->lname_en ?? '' }}</h3>
                                            <h5>({{ $item['designation']->name_en }})</h5>
                                            <p><strong><i class="fa fa-phone"></i> :</strong> {{ $profile->mobile ?? '' }}
                                            </p>
                                            <p><strong>{{ $profile->extention_number ?? '' }}<strong></p>


                                            <?php
                                            $email_address = $profile->email;
                                            $str = $email_address;
                                            $var = str_replace('@', '[at]', $str);
                                            $email = str_replace('.', '[dot]', $var);
                                            ?>

                                            <p><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> :</strong>
                                                {{ $email }}</p>
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
                                <div data-aos-mirror="true" data-aos="fade-right" class="title-before"> </div>
                                <h2>{{ $item['designation']->name_en }}</h2>
                                <div data-aos-mirror="true" data-aos="fade-left" class="title-after"> </div>                   
                            </div>
                        </div>
                        @if (isset($item['data']) && count($item['data']) > 0)
                            @foreach ($item['data'] as $profile)
                                <div class="col-md-3 emp-card-det">
                                    <div class="card-emp-dir">
                                        <div class="emp-crd-dir">
                                        </div>
                                        <div class="emp-crddir-inf">
                                            <div class="img-circle-prof">
                                                <img @if ($profile->public_url != '') src="{{ asset('resources/uploads/empDirectory/' . $profile->public_url) }}"
                                            @else
                                              src="{{ asset('assets-cppri/images/profile--.jpg') }}" @endif
                                                    alt=""
                                                    tittle= "{{ $profile->fname_en ?? '' }} {{ $profile->mname_en ?? '' }} {{ $profile->lname_en ?? '' }}">
                                            </div>
                                            <h3><i class="fa fa-user"></i> {{ $profile->fname_en ?? '' }}
                                                {{ $profile->mname_en ?? '' }} {{ $profile->lname_en ?? '' }}</h3>
                                            <h5>({{ $item['designation']->name_en }})</h5>
                                            <p><strong><i class="fa fa-phone"></i> :</strong> {{ $profile->mobile ?? '' }}
                                            </p>
                                            <p><strong> {{ $profile->extention_number ?? '' }}</strong></p>

                                            <?php
                                            $email_address = $profile->email;
                                            $str = $email_address;
                                            $var = str_replace('@', '[at]', $str);
                                            $email = str_replace('.', '[dot]', $var);
                                            ?>

                                            <p class="email-text-styl"><i class="fa fa-envelope-o"
                                                    aria-hidden="true"></i>{{ $email }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endif
            @endforeach
        @endif


        
        @if(isset($content))

        <h1>  {{ $content  ??"" }}</h1>
       @endif


    </div>
@endsection
