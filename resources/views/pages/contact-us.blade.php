@extends('layout.master')
@section('title')
{{ __('CPPRI') }}
@endsection
@section('content')

<div class="container common-container mb-20">
    <div class="row p-0">
        <!-- <div class="col-md-6 col-lg-6">
           
        </div> -->
        <!-- <div class="col-md-6 col-lg-6">
         <div class="contact-item">
            <div class="contact-icon">
               <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="contact-info">
               <h3>Delhi</h3>
              
                  <ul>
                     <li>A-55, Third Floor, Gujranwala Town,</li>
                     <li>Part-1, Opposite Vinayak Hospital, Delhi -110009, India</li>
                     <li>Nr. Metro Station is "Model Town"</li>
                     <li><strong>Contact No.</strong> 011-49027213, +91-9910909169</li>
                     <li><a href=""> <strong>Email:</strong> cppri@yahoo.com</a></li>
                  </ul>
               
            </div>
         </div>
      </div> -->
        <div class="col-md-6 col-lg-6">

        <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="contact-info">
                    <h3>Saharanpur</h3>

                    <ul>
                        <li>Post Box 174, Paper Mill Road, Himmat Nagar,</li>
                        <li>Saharanpur - 247001, India</li>
                        <li> <strong>Phone:</strong> 0132 - 2714050, 2714059, 2714061, 2714062</li>
                        <li> <strong>Fax:</strong> 0132-2714052</li>
                        <li><a href=""> <strong>Email:</strong> director.cppri@gmail.com</a></li>
                    </ul>

                </div>
            </div>

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
                                <button class="btn btn-primary"><i class="fa fa-refresh"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="more gallery-more-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="cppr-delhi-map mt-20">
                <iframe class="contact-page-map"
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d55319.00582157767!2d77.5276646366165!3d29.93808155109714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x390e955539027377%3A0xb81659c41c66e528!2scppri!3m2!1d29.938011799999998!2d77.5626843!4m0!5e0!3m2!1sen!2sin!4v1522997631006"
                    allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="col-md-12 mb-20 mt-20">

            <div id="datatable">

                <h3 class="master-title mt-20 text-center mb-20">Employee Details</h3>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>                           
                            <th>Telephone(Office)</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets-cppri/images/director.jpg') }}" alt="img"></td>
                            <td>Dr. M K Gupta</td>
                            <td>Director</td>
                            <td>+91-0132-2714050</td>
                            <td>gupta.manoj[at]cppri[dot]res[dot]in</td>
                        </tr>
                      
                    </tbody>
                </table>              

            </div>

        </div>
    </div>
</div>
    @endsection