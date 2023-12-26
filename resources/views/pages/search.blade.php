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
            <form name="searchForm" action="{{ url('/search') }}" method="get" class="row info1 mb-20">
                <input type="search" name="search_key" id="search_key"  value="{{ request('search_key') ?? '' }}"class="col-md-4" required
                    placeholder="Search here...">
                <div class="col-md-2">
                    <button class="more gallery-more-btn" type="submit">Search</button>
                </div>
            </form>
            {{-- <div class="col-md-12 p-0 mb-20">
                <p class="text-primary" tabindex="0">Search Result </p>
            </div> --}}




            {{-- @if (!function_exists('highlightSearchQuery'))
                @php
                    function highlightSearchQuery($content, $query)
                    {
                        // Validate inputs
                        $content = is_string($content) ? $content : '';
                        $query = is_string($query) ? $query : '';

                        // HTML encode inputs
                        $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
                        $query = htmlspecialchars($query, ENT_QUOTES, 'UTF-8');

                        // Highlight the search query with a span
                        $highlightedContent = preg_replace('/\b' . preg_quote($query, '/') . '\b/', '<span class="highlighted-query">' . $query . '</span>', $content);

                        // Return the highlighted content if highlighting is applied, otherwise return the original content
                        return $highlightedContent !== $content ? $highlightedContent : $content;
                    }
                @endphp
            @endif

            <style>
                .highlighted-query {
                    background-color: yellow;
                }
            </style>

            <div class="col-md-12 p-0 mb-20">
                @if (empty($dynamicPageContent))
                    <p>No results found.</p>
                @else
                    @foreach ($dynamicPageContent as $content)
                        {!! highlightSearchQuery($content, $keyword) !!}
                    @endforeach
                @endif
            </div> --}}



            @php $c=count($data) @endphp
            <p class="mt-4 mb-3 text-primary">
                @if (count($data) > 0)
                    Search Result
                @else
                @endif
            </p>
            <div class="col-md-12 p-0 mb-20">
                @if (count($data) > 0)
                    @for ($i = 0; $i < $c; $i++)
                        <h5>{!! $data[$i] !!}</h5>
                    @endfor
                @else
                    <h4 style="color:red">No data found ....</h4>
                @endif
            </div>

    </section>
@endsection
