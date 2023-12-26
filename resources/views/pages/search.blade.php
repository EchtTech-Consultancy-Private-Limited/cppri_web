{{-- <!-- resources/views/search/results.blade.php -->

@if (!function_exists('highlightSearchQuery'))
    @php
        function highlightSearchQuery($content, $query)
        {
            return str_replace($query, '<span style="background-color: yellow;">' . $query . '</span>', $content);
        }
    @endphp
@endif

<h2>Dynamic Page Content Results</h2>
@foreach ($dynamicPageContent as $content)
    <div>
        {!! highlightSearchQuery($content, $keyword) !!}
    </div>
@endforeach --}}




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
                    Search Page
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
                <li><a href="javascript:void();">Search Page</a></li>
                
            </ul>
        </div>
    </div>
</div>
<div class="container common-container">
    <section class="sidebar-main-nav">
        <div class="col-md-12 m-p-0 pl-0">
            <div class="main-content">
                
               <h1>Comming Soon....</h1>
             
            
                
            </div>
        </div>
    </section>
</div>
@endsection
