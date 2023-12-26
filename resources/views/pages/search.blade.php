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
    <div id="flexSlider" class="flexslider "
        style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
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

<section class="sidebar-main-nav ptb-30">
    <div class="container common-container">
        <form name="searchForm" action="{{url('/search')}}" method="get" class="row info1 mb-20">
            <input type="search" name="search_key" id="search_key" class="col-md-4" required=""
                placeholder="Search here...">
            <div class="col-md-2">
                <button class="more gallery-more-btn" type="submit">Search</button>
            </div>
        </form>
        <div class="col-md-12 p-0 mb-20">
            <p class="text-primary" tabindex="0">Search Result </p>
        </div>

        <div class="col-md-12 p-0 mb-20">
            <p>Search Result here </p>
        </div>

    </div>

</section>

@endsection