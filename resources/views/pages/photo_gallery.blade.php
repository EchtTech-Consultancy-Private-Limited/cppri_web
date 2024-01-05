@extends('layout.master')
@section('title')

{{ __('CPPRI') }}
@endsection
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>
<link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
    
@section('content')
<section class="wrapper banner-wrapper">
    <div id="flexSlider" class="flexslider "
        style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
        <div class="inner-banner-text">
            <div class="text-banner-content">
                <h2>
                    Photo Gallery
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
                <li><a href="javascript:void();">Photo Gallery</a></li>


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
                            <h3 class="dir-dsk-title mt-3">Photo Gallery </h3>


                            <div class="row p-0  mt-4    photo-gallery">

                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                         <a class="image-popup" href="https://images.unsplash.com/photo-1682685797140-c17807f8f217?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                           <img src="https://images.unsplash.com/photo-1682685797140-c17807f8f217?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                        </a>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider2.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider2.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider3.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider3.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cardholder">
                                        <div class="card">
                                            <a class="image-popup" href="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg"> 
                                            <img src="https://webdevtrick.com/wp-content/uploads/image-slider4.jpg" />
                                            <p class="desc">3D CSS Image Gallery </p>
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