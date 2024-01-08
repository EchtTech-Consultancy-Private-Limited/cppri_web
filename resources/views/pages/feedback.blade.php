@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
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
                        @if (Session::has('success'))
                            <script>
                                toastr.success('{{ Session::get('success') }}')
                            </script>
                        @endif

                        @if (Session::has('captchaError'))
                            <script>
                                toastr.error('{{ Session::get('captchaError') }}')
                            </script>
                        @endif


                        @if ($errors->any())
                            <script>
                                $(document).ready(function() {
                                    @foreach ($errors->all() as $error)
                                        toastr.error('{{ $error }}');
                                    @endforeach
                                });
                            </script>
                        @endif
                        <form action="{{ url('feedback') }}" method="post" id="feedback_form">
                            @csrf
                            <h3>Fill This Form To Reach Us</h3>
                            <div class="info">
                                <input class="fname preventnumeric" type="text" name="name"  placeholder="Full name" required>

                                @if ($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif

                                <input type="email" name="email" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif

                                <input type="text" id="mobile_no" name="phone" minlength="10" maxlength="10" placeholder="Phone number" required>

                                @if ($errors->has('phone'))
                                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif

                            </div>
                            <!-- <p>Message</p> -->
                            <div class="info">
                                <textarea rows="3" name="message" required placeholder="Message here..."></textarea>
                                @if ($errors->has('message'))
                                    <div class="text-danger">{{ $errors->first('message') }}</div>
                                @endif
                            </div>


                            <div class="form-group mt-4 mb-4">
                                <div class="captcha-box d-flex align-item-center">
                                    <label for="captcha" class="security-code">Security Code : <?php echo $CustomCaptch['expression']; ?> </label>
                                    <span class="equalto">=</span>
                                    <input id="SecurityCode" type="text" class="form-control SecurityCode"
                                        placeholder="Enter Security Code" name="SecurityCode" required>
                                </div>
                            </div>
                            <div class="mt-4 mb-4">
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button class="g-recaptcha btn btn-primary" type="submit">Submit</button>

                            </div>
                        </form>
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
