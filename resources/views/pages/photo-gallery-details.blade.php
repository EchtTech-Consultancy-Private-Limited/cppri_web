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
                                    <div class="rs-blog main-home col-md-12">
                                        <div class="container1 row">
                                            <div class="col-md-6">
                                                <div class="mySlides" style="display: block;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909946.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909915.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909998.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909979.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909949.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909976.jpg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909959.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909948.jpeg"
                                                        style="width:100%">
                                                </div>
                                                <div class="mySlides" style="display: none;">
                                                    <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909980.jpeg"
                                                        style="width:100%">
                                                </div>
                                               
                                                <a class="prev" onclick="plusSlides(-1)" tabindex="0">❮</a>
                                                <a class="next" onclick="plusSlides(1)" tabindex="0">❯</a>
                                            </div>
                                            <div class="col-md-6 col-box-g">
                                               <div class="row">
                                               <div class="col-4">
                                                    <img class="demo cursor active"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                        style="width:100%" onclick="currentSlide(1)" alt="">
                                                </div>
                                                <div class="col-4 px-1 pb-2">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909946.jpeg"
                                                        style="width:100%" onclick="currentSlide(2)" alt="">
                                                </div>
                                                <div class="col-4 px-1 pb-2">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909915.jpeg"
                                                        style="width:100%" onclick="currentSlide(3)" alt="">
                                                </div>
                                                <div class="col-4 px-1 pb-2">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909998.jpeg"
                                                        style="width:100%" onclick="currentSlide(4)" alt="">
                                                </div>
                                                <div class="col-4 px-1 pb-2">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909979.jpeg"
                                                        style="width:100%" onclick="currentSlide(5)" alt="">
                                                </div>
                                                <div class="col-4 px-1 pb-2">
                                                    <img class="demo cursor"
                                                        src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909949.jpeg"
                                                        style="width:100%" onclick="currentSlide(6)" alt="">
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