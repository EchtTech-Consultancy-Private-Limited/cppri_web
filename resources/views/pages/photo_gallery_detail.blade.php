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
                                    <div class="heading-title">
                                        <h2 class="title event-heading-color">Photo Gallery Images</h2>
                                    </div>

                                    <div class="rs-blog main-home">
                                        <div class="container1 row">
                                            <div class="col-md-6">

                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>

                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                            </div>
                                            <div class="col-md-6 col-box-g">
                                              <div class="row">
                                              <div class="col-4">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%" onclick="currentSlide(1)" alt="">
                                                </div>
                                                <div class="col-4">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909946.jpeg"
                                                        style="width:100%" onclick="currentSlide(2)" alt="">
                                                </div>
                                                <div class="col-4">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909915.jpeg"
                                                        style="width:100%" onclick="currentSlide(3)" alt="">
                                                </div>
                                              </div>
                                               
                                            </div>

                                        </div>
                                    </div>

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