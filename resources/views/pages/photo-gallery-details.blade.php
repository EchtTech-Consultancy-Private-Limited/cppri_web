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
                <section id="fontSize" class="wrapper body-wrapper rs-blog main-home">
                    <section id="paragraph" class="wrapper paragraph-wrapper">
                        <div class=" common-container four_content mb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="heading-title mt-3 pb-1 px-lg-3">
                                            <h2 class="title event-heading-color" tabindex="0">Photo Gallery Images</h2>
                                        </div>
                                    </div>
                                    @if (isset($photogallery) && !empty($photogallery))
                    <div class="rs-blog main-home col-md-12">
                        <div class="container1 row">
                            <div class="col-md-6">
                                @foreach ($photogallery as $datas)
                                    <div class="mySlides">
                                        @if (!blank($datas->public_url))
                                            <img src="{{ asset('resources/uploads/GalleryManagement/' . $datas->public_url) }}"
                                                style="width:100%">
                                        @endif
                                    </div>
                                @endforeach
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>
                            </div>
                            <div class="col-md-6 col-box-g">
                                @foreach ($photogallery as $key => $datas)
                                    <div class="column">
                                        <img class="demo cursor"
                                            @if (!blank($datas->public_url)) src="{{ asset('resources/uploads/GalleryManagement/' . $datas->public_url) }}" @endif
                                            style="width:100%" onclick="currentSlide({{ $key + 1 }})" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                @else
                    {{ abort(404) }}
                @endif

                <div class="col-md-12 mt-3">
                @if (!blank($gallery->title_name_en))
                <h3>{{ $gallery->title_name_en ?? '' }}<h3>
            @endif

                                </div>

                            </div>

                        </div>

            </div>
    </section>

    </section>
</div>
</div>
</section>

</div>


@endsection