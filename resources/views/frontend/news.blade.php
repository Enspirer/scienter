@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('News'))

@push('after-styles')
<link href="{{ url('css/news.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')
<div class="container-fluid">
<section class="full-height-area">
    <div class="row">
        <h1 class="main-heading TT-Light">Top Story</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <img class="half-img" src="{{ url('img/frontend/news/news-img.png') }}" alt="man">
        </div>
        <div class="col-md-6 col-xs-12 main-text-box">
            <h2 class="TT-Bold news-subheading">SCIENTER - WISDOM PARTNERSHIP</h2>
            <p class="TT-Regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="TT-Regular">Scelerisque eleifend donec pretium vulputate sapien. Mattis nunc sed blandit libero volutpat sed cras ornare. Ut placerat orci nulla pellentesque. Mi tempus imperdiet nulla malesuada pellentesque. Enim facilisis gra</p>
        </div>
    </div>
    <a href="#latest-news" class="scroll-down-sub-btn" address="true"></a>
</section>
<section id="latest-news" class="full-height-area">
    <h2 class="mb-45">Latest News</h2>
    <div class="container">
        <div class="row news-box-row">
            <div class="col-md-4 col-xs-12 news-box">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/wis.png') }}" alt="wiscom logo">
                    <h3>SCIENTER - WISCOM PARTNERSHIP</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 news-box">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/GJC.png') }}" alt="gjc logo">
                    <h3>GLORIA JEEN'S COFFEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div> 
            </div>

            <div class="col-md-4 col-xs-12 news-box">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/GJC.png') }}" alt="gjc logo">
                    <h3>GLORIA JEEN'S COFFEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>               
            </div>
        </div>
    </div>

</section>
</div>


@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->


@endpush