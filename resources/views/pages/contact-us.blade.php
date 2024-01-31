@extends('layout.master')
@section('title')
{{ __('CPPRI |' . ' ' . $title) }}
@endsection
@section('content')
<div class="container common-container mb-20">
    <div class="row p-0">
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
                        <li> <strong>Email:</strong> director[dot]cppri[at]gmail[dot]com</li>
                    </ul>

                </div>
            </div>

            <div class="cppri-contact-form">
                <div class="main-block">


                    <form id="contact_form">
                        @csrf
                        <h3>Fill This Form To Reach Us</h3>
                        <div class="info">
                            <div>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input class="fname preventnumeric" type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Full name">
                            </div>

                            <div>

                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            </div>

                            <div>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <input type="text" id="mobile_no" name="phone" placeholder="Phone number"
                                    value="{{ old('phone') }}" minlength="10" maxlength="10">
                            </div>



                        </div>
                        <!-- <p>Message</p> -->
                        <div class="info">
                            <div>
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <textarea rows="1" name="message"
                                    placeholder="Message here...">{{ old('message') }}</textarea>
                            </div>

                        </div>

                        <div class="form-group mt-4 mb-4">
                            <div class="captcha-box d-flex align-item-center">
                                <label for="captcha" class="security-code">Security Code :
                                    <?php echo $CustomCaptch['expression']; ?> </label>
                                <span class="equalto">=</span>
                                <input id="SecurityCode" type="text" class="form-control SecurityCode"
                                    placeholder="Enter Security Code" name="SecurityCode" required>
                            </div>
                        </div>
                        <div class="text-center">

                            <button class="g-recaptcha btn btn-primary" type="button" id="submitForm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="cppr-delhi-map mt-20">
                <iframe class="contact-page-map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13829.761151495672!2d77.5626843!3d29.9380118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e955539027377%3A0xb81659c41c66e528!2sCentral%20Pulp%20%26%20Paper%20Research%20Institute!5e0!3m2!1sen!2sin!4v1704890243916!5m2!1sen!2sin"
                    allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="col-md-12 mb-4 mt-3 scroller-tbl">

            <div id="datatable">

                <h3 class="dir-dsk-title master-title mt-20 text-center mb-3">
                    @if (Session::get('Lang') == 'hi')
                    {{ __('messages.Employee_Details') }}
                    @else
                    {{ __('messages.Employee_Details') }}
                    @endif



                </h3>
                <table id="example" class="display w-100">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Telephone(Office)</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                            @if (isset($employee) && count($employee) > 0)
                            @php $count = 1; @endphp
                                @foreach ($employee as $k => $employeesData)
                                @foreach ($employeesData['data'] as $key => $employees)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="text-center"><img
                                                @if ($employees->public_url != '') src="{{ asset('resources/uploads/empDirectory/' . $employees->public_url) }}"
                                                     @else src="{{ asset('assets-cppri/images/profile--.jpg') }}" @endif
                                                title="{{ $employees->fname_en ?? '' }} {{ $employees->mname_en ?? '' }} {{ $employees->lname_en ?? '' }}">
                                        </td>

                            @if (Session::get('Lang') == 'hi')
                            <td>{{ $employees->fname_hi ?? '' }} {{ $employees->mname_hi ?? '' }}
                                {{ $employees->lname_hi ?? '' }}</td>
                            @else
                            <td>{{ $employees->fname_en ?? '' }} {{ $employees->mname_en ?? '' }}
                                {{ $employees->lname_en ?? '' }}</td>
                            @endif

                            @if (Session::get('Lang') == 'hi')
                            <td>{{ $employees->desi_name_hi ?? '' }}</td>
                            @else
                            <td>{{ $employees->desi_name_en ?? '' }}</td>
                            @endif


                            @if ($employees->landline_number != '' && $employees->landline_number != null)
                            <td> {{ $employees->landline_number ?? '' }} </td>
                            @else
                            <td> {{ $employees->mobile }} </td>
                            @endif



                            {{-- <td>{{ $employees->landline_number ?? '' }}</td> --}}

                            <?php
                                        $email_address = $employees->email;
                                        $str = $email_address;
                                        $var = str_replace('@', '[at]', $str);
                                        $email = str_replace('.', '[dot]', $var);
                                        ?>

                            <td>{{ $email ?? '' }}</td>

                                    </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection

