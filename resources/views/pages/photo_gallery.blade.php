@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>

@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.photo_gallery') }}
                        @else
                            {{ __('messages.photo_gallery') }}
                        @endif
                    </h2>
                </div>
            </div>
        </div>
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

                    <li><a href="javascript:void();">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.photo_gallery') }}
                            @else
                                {{ __('messages.photo_gallery') }}
                            @endif
                        </a>
                    </li>
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
                            <div class=" common-container four_content mb-5">
                                <h3 class="dir-dsk-title mt-3">

                                    @if (Session::get('Lang') == 'hi')
                                        {{ __('messages.photo_gallery') }}
                                    @else
                                        {{ __('messages.photo_gallery') }}
                                    @endif

                                </h3>

                                @if (isset($tree) && count($tree) > 0)
                                    <div class="row p-0  mt-4    photo-gallery">
                                        @foreach ($tree as $k => $trees)
                                            <div class="col-md-3">
                                                <div class="cardholder">
                                                    <div class="card">
                                                        <a href="#gallery_{{ $k }}" class="btn-gallery">
                                                            @if (isset($trees->children) && $trees->children[0]->public_url != '')
                                                                <img
                                                                    src="{{ asset('resources/uploads/GalleryManagement/' . $trees->children[0]->public_url) }}" />
                                                            @endif
                                                            <p class="desc">
                                                                @if (Session::get('Lang') == 'hi')
                                                                    {{ $trees->title_name_hi ?? '' }}
                                                                @else
                                                                    {{ $trees->title_name_en ?? '' }}
                                                                @endif
                                                            </p>
                                                        </a>

                                                        @empty($trees->children)
                                                            {{-- Handle the case when $trees->children is empty --}}
                                                        @else
                                                            <div id="gallery_{{ $k }}" class="hidden">
                                                                @foreach ($trees->children as $child)
                                                                    <a
                                                                        href="{{ asset('resources/uploads/GalleryManagement/' . $child->public_url) }}"></a>
                                                                @endforeach
                                                            </div>
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No images found in the gallery.</p>

                                    </div>
                                @endif

                            </div>
                        </section>

                    </section>
                </div>
            </div>
        </section>

    </div>


@endsection
