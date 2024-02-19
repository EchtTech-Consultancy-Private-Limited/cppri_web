<meta charset="utf-8">
<title>
    @section('title')
        {{ config('app.name') }}
    @show
</title>
<!-- Custom styles for this template -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="referrer" content="origin">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('assets-cms/favicon.ico') }}"/>
<link rel="apple-touch-icon" href="{{ asset('assets-cppri/images/flag.jpg') }}">
<link href="{{ asset('assets-cppri/css/base.css') }}" rel="stylesheet">
<link href="{{ asset('assets-cppri/css/base-responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets-cppri/css/grid.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/font.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/flexslider.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/megamenu.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/magnific-popup.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/print.css') }}" rel="stylesheet">
<link href="{{ asset('assets-cppri/css/empcarddirectory.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('assets-cppri/css/dropdownaccordiancss.css') }}" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ asset('assets-cppri/css/datatablemin.css') }}">
<link rel="stylesheet" href="{{ asset('assets-cppri/css/datatablebuttonmin.css') }}">
<!-- Theme styles for this template -->
<link href="{{ asset('assets-cppri/theme/css/ma5gallery.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets-cppri/theme/css/print.css') }}" rel="stylesheet" type="text/css" media="print">
<link href="{{ asset('assets-cppri/css/modules.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets-cppri/css/bootstrap.min.css') }}">
<link href="{{ asset('assets-cppri/css/animate.min.css') }}" rel="stylesheet">

<link href="{{ url('assets-cppri/css/megamenu.css') }} " rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/theme/css/site.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/theme/css/site-responsive.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('assets-cppri/css/marquee-horizantal.css') }}" rel="stylesheet">
<link href="{{ asset('assets-cppri/css/owl.carousel.css') }}" rel="stylesheet">
<!-- Include jQuery -->
<script src="{{ asset('assets-cppri/js/jquery-3.6.0.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets-cppri/css/toastr.min.css') }}">
<script src="{{ asset('assets-cppri/js/toastr.min.js')}}"></script>
<script src="{{ asset('assets-cppri/js/jquery.marquee.js')}}"></script>
<!-- <script src="{{ asset('assets-cppri/js/jquery.marquee.min.js')}}"></script> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SJ6KQSQQCM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SJ6KQSQQCM');
</script> 
<script>var baseUrl1 = {!! json_encode(url('/')) !!}</script>