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
                            {{ __('messages.Feedback') }}
                        @else
                            {{ __('messages.Feedback') }}
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
                    <li><a href="home.html">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a></li>
                    <li><a href="javascript:void();">

                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Feedback') }}
                            @else
                                {{ __('messages.Feedback') }}
                            @endif

                        </a></li>

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
                      

                        <form id="feedback_form">
                            @csrf
                            <h3>Fill This Form To Reach Us</h3>
                            <div class="info">
                                <input class="fname preventnumeric" type="text" name="name"   value="{{ old('name') }}" placeholder="Full name" >


                                <input type="email" name="email" placeholder="Email"  value="{{ old('email') }}" >

                             
                                <input type="text" id="mobile_no" name="phone" minlength="10" value="{{ old('phone') }}" maxlength="10" placeholder="Phone number" >

                            </div>
                           
                            <div class="info">
                                <textarea rows="3" name="message"  placeholder="Message here..." >{{ old('message') }}</textarea>
                            </div>


                            <div class="form-group mt-4 mb-4">
                                <div class="captcha-box d-flex align-item-center">
                                    <label for="captcha" class="security-code">Security Code : <?php echo $CustomCaptch['expression']; ?> </label>
                                    <span class="equalto pe-2">=</span>
                                    <input id="SecurityCode" type="text" class="form-control SecurityCode w-auto"
                                        placeholder="Enter Security Code" name="SecurityCode" required>
                                </div>
                            </div>
                            <div class="mt-4 mb-4">
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button class="g-recaptcha btn btn-primary" id="feedback_button" type="submit">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

   
@endsection
