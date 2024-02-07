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

                            <div class="row mt-2">
                                <h3 class="dir-dsk-title mt-3">

                                    @if (Session::get('Lang') == 'hi')
                                    {{ __('messages.photo_gallery') }}
                                    @else
                                    {{ __('messages.photo_gallery') }}
                                    @endif

                                </h3>
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <a href="https://dev.nrcp.staggings.in/photo-gallery-images/e75fa2df-e58e-478a-8a7f-c2f6f958fd48"
                                            title="World Rabies States" tabindex="0">
                                            <div class="image-part">
                                                <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607909984.jpeg"
                                                    alt="">
                                            </div>
                                            <div class="blog-content b-t">
                                                <h3 class="title" tabindex="0">

                                                    World Rabies States
                                                </h3>
                                                <!-- <div class="desc">
                                             
                                            </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <a href="https://dev.nrcp.staggings.in/photo-gallery-images/e75fa2df-e58e-478a-8a7f-c2f6f958fd48"
                                            title="World Rabies States" tabindex="0">
                                            <div class="image-part">
                                            <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607828662.jpg" alt="">
                                            </div>
                                            <div class="blog-content b-t">
                                                <h3 class="title" tabindex="0">

                                                    World Rabies States
                                                </h3>
                                                <!-- <div class="desc">
                                             
                                            </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <a href="https://dev.nrcp.staggings.in/photo-gallery-images/e75fa2df-e58e-478a-8a7f-c2f6f958fd48"
                                            title="World Rabies States" tabindex="0">
                                            <div class="image-part">
                                            <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607828662.jpg" alt="">
                                            </div>
                                            <div class="blog-content b-t">
                                                <h3 class="title" tabindex="0">

                                                    World Rabies States
                                                </h3>
                                                <!-- <div class="desc">
                                             
                                            </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <a href="https://dev.nrcp.staggings.in/photo-gallery-images/e75fa2df-e58e-478a-8a7f-c2f6f958fd48"
                                            title="World Rabies States" tabindex="0">
                                            <div class="image-part">
                                            <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607828662.jpg" alt="">
                                            </div>
                                            <div class="blog-content b-t">
                                                <h3 class="title" tabindex="0">

                                                    World Rabies States
                                                </h3>
                                                <!-- <div class="desc">
                                             
                                            </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <a href="https://dev.nrcp.staggings.in/photo-gallery-images/e75fa2df-e58e-478a-8a7f-c2f6f958fd48"
                                            title="World Rabies States" tabindex="0">
                                            <div class="image-part">
                                            <img src="https://dev.nrcp.staggings.in/resources/uploads/GalleryManagement/170607828662.jpg" alt="">
                                            </div>
                                            <div class="blog-content b-t">
                                                <h3 class="title" tabindex="0">

                                                    World Rabies States
                                                </h3>
                                                <!-- <div class="desc">
                                             
                                            </div> -->
                                            </div>
                                        </a>
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