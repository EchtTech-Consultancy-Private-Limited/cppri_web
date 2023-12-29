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
                @if ($item['department']->name_en == 'Director')
                    <div class="row">
                        <div class="col-md-12 display-content">
                            <div class="employee-directry-type employee-dir-page">
                                <div data-aos-mirror="true" data-aos="fade-right" class="title-before"></div>
                                <h3>

                                    @if (Session::get('Lang') == 'hi')
                                        <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                    @else
                                        <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                    @endif


                                </h3>
                                <div data-aos-mirror="true" data-aos="fade-left" class="title-after"></div>
                            </div>
                        </div>
                        @if (isset($item['data']) && count($item['data']) > 0)
                            @foreach ($item['data'] as $profile)
                                <div class="direct-centre emp-card-det">
                                    <div class="card-emp-dir">

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
                                            <h5>({{ $profile->desi_name_en ?? '' }})</h5>

                                            @if ($profile->landline_number != '' && $profile->landline_number != null)
                                                <p><strong><i class="fa fa-phone"></i> :</strong>
                                                    {{ $profile->landline_number ?? '' }} </p>
                                            @else
                                                <p><strong><i class="fa fa-phone"></i> :</strong> {{ $profile->mobile }}
                                                </p>
                                            @endif

                                            <p><strong>{{ $profile->extention_number ?? '' }}<strong></p>


                                            <?php
                                            $email_address = $profile->email;
                                            $str = $email_address;
                                            $var = str_replace('@', '[at]', $str);
                                            $email = str_replace('.', '[dot]', $var);
                                            ?>

                                            <p><strong><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> :</strong>
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
                                <div data-aos-mirror="true" data-aos="fade-right" class="title-before"> </div>

                                @if (Session::get('Lang') == 'hi')
                                    <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                @else
                                    <h2>{{ $item['department']->name_en ?? '' }}</h2>
                                @endif

                                <div data-aos-mirror="true" data-aos="fade-left" class="title-after"> </div>
                            </div>
                        </div>
                        @if (isset($item['data']) && count($item['data']) > 0)
                            @foreach ($item['data'] as $profile)
                                <div class="col-md-3 emp-card-det">
                                    <div class="card-emp-dir emp-dir-main">

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
                                            <h5>({{ $profile->desi_name_en ?? '' }})</h5>

                                            @if ($profile->landline_number != '' && $profile->landline_number != null)
                                                <p><strong><i class="fa fa-phone"></i> :</strong>
                                                    {{ $profile->landline_number ?? '' }} </p>
                                            @else
                                                <p><strong><i class="fa fa-phone"></i> :</strong> {{ $profile->mobile }}
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
                                                    aria-hidden="true"></i> <span class="w-90">{{ $email }}</span>
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



        @if (isset($content))
            <h1> {{ $content ?? '' }}</h1>
        @endif


    </div>
@endsection
