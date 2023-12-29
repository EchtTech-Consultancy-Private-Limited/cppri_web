@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')
<section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider "  style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        Feedback
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
                    <li><a href="javascript:void();">Feedback</a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="wrapper" id="skipCont"></div>
   <div class="container common-container mb-20">
     <div class="row p-0">      
     <div class="col-lg-2"></div>
      <div class="col-md-12 col-lg-8">
         <div class="cppri-contact-form">
            <div class="main-block">
               <form action="#" method="get">
                  <h3>Fill This Form To Reach Us</h3>
                  <div class="info">
                     <input class="fname" type="text" name="name" placeholder="Full name">
                     <input type="text" name="name" placeholder="Email">
                     <input type="text" name="name" placeholder="Phone number">
                  </div>
                  <!-- <p>Message</p> -->
                  <div class="info">
                     <textarea rows="3" placeholder="Message here..."></textarea>
                  </div>
                  <div class="captcha-box row p-0">
                     <div class="info col-md-6">
                        <input class="captcha-input" type="text" name="name" placeholder="Enter Captcha">
                     </div>
                     <div class="captcha-image col-md-6">
                     <img src="{{ asset('assets-cppri/images/captcha-handler.jpg') }}" alt="captcha image">
                        <button class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="more gallery-more-btn" type="submit">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
     </div>
   </div>

@endsection