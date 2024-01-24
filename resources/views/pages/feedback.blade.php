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
<div class="container common-container py-5">
    <div class="row p-0">
        <div class="col-lg-1"></div>
        <div class="col-md-12 col-lg-9">

            <div class="cppri-contact-form ">
                <div class="row px-0">
                    <div class="col-md-6 ">
                        <div class="cppri-contact-hero">
                            <img src="{{ asset('assets-cppri/images/cppri_contact_bg.png') }}" alt="feedback">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-block">
                            @if (Session::has('success'))
                            <script>
                            toastr.success('{{ Session::get('
                                success ') }}')
                            </script>
                            @endif

                            @if (Session::has('captchaError'))
                            <script>
                            toastr.error('{{ Session::get('
                                captchaError ') }}')
                            </script>
                            @endif


                          
                            <form action="{{ url('feedback') }}" method="post" id="feedback_form">
                                @csrf
                                <h3>Fill this form to reach us</h3>
                                <div class="info">
                                    <div>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                        <input class="fname preventnumeric" type="text" name="name"   value="{{ old('name') }}" placeholder="Full name" >
                                        
                                    </div>
                                    <div>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <input type="email" name="email" placeholder="Email"  value="{{ old('email') }}" >

                                    </div>

                                    <div>
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <input type="text" id="mobile_no" name="phone" minlength="10" value="{{ old('phone') }}" maxlength="10" placeholder="Phone number" >

                                    </div>

                                </div>
                                <!-- <p>Message</p> -->
                                <div class="info">
                                    <div>
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                        <textarea rows="1" name="message"  placeholder="Message here..." >{{ old('message') }}</textarea>
                                    </div>
                                </div>

<!-- ***************** -->

<!-- ***************** -->
                               
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

    </div>
</div>

{{-- <script>
        function onSubmit(token) {
            document.getElementById("feedback_form").submit();
        }
    </script> --}}
@endsection