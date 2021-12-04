@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Solutions'))

@push('after-styles')
<link href="{{ url('css/solutions.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')
<div class="container-fluid">
    <section class="full-height-area ">
        <div class="row">
            <h1 class="main-heading">What we Do</h1>
            <p>This is where tomorrow's solutions for businesses are being created.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <img src="{{ url('/img/frontend/contact-us/contact-us-bg-one.png') }}" alt="man" class="half-img">
            </div> 
            <div class="col-md-6 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6>Our Expertise</h6>
                    <div class="expertise-line-area">
                        <span class="line-wrapper"><span class="topic-line"></span><i class="fas fa-circle"></i></span>
                    </div>
                    <h2>Solutions</h2>
                </div>           
                <p class="TT-Regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="TT-Regular">Scelerisque eleifend donec pretium vulputate sapien. Mattis nunc sed blandit libero volutpat sed cras ornare. Ut placerat orci nulla pellentesque. Mi tempus imperdiet nulla malesuada pellentesque. Enim facilisis gra</p>
                <button class="btn solutions-btn">Inquire Now</button>
            </div>
        </div>
    </section>

    <section class="full-height-area ">
        <div class="row">
        <div class="col-md-6 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6>Customer Software</h6>
                    <div class="expertise-line-area">
                        <span class="line-wrapper"><span class="topic-line"></span><i class="fas fa-circle"></i></span>
                    </div>
                    <h2>Development</h2>
                </div>           
                <p class="TT-Regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="TT-Regular">Scelerisque eleifend donec pretium vulputate sapien. Mattis nunc sed blandit libero volutpat sed cras ornare. Ut placerat orci nulla pellentesque. Mi tempus imperdiet nulla malesuada pellentesque. Enim facilisis gra</p>
                <button class="btn solutions-btn">Inquire Now</button>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="{{ url('/img/frontend/contact-us/contact-us-bg-one.png') }}" alt="man" class="half-img">
            </div> 
        </div>
    </section>

    <section class="full-height-area ">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <img src="{{ url('/img/frontend/contact-us/contact-us-bg-one.png') }}" alt="man" class="half-img">
            </div> 
            <div class="col-md-6 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6>Web Application</h6>
                    <div class="expertise-line-area">
                        <span class="line-wrapper"><span class="topic-line"></span><i class="fas fa-circle"></i></span>
                    </div>
                    <h2>Development</h2>
                </div>           
                <p class="TT-Regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="TT-Regular">Scelerisque eleifend donec pretium vulputate sapien. Mattis nunc sed blandit libero volutpat sed cras ornare. Ut placerat orci nulla pellentesque. Mi tempus imperdiet nulla malesuada pellentesque. Enim facilisis gra</p>
                <button class="btn solutions-btn">Inquire Now</button>
            </div>
        </div>
    </section>


    <section class="full-height-area ">
        <div class="row">
        <div class="col-md-6 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6>Mobile Application</h6>
                    <div class="expertise-line-area">
                        <span class="line-wrapper"><span class="topic-line"></span><i class="fas fa-circle"></i></span>
                    </div>
                    <h2>Development</h2>
                </div>           
                <p class="TT-Regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="TT-Regular">Scelerisque eleifend donec pretium vulputate sapien. Mattis nunc sed blandit libero volutpat sed cras ornare. Ut placerat orci nulla pellentesque. Mi tempus imperdiet nulla malesuada pellentesque. Enim facilisis gra</p>
                <button class="btn solutions-btn">Inquire Now</button>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="{{ url('/img/frontend/contact-us/contact-us-bg-one.png') }}" alt="man" class="half-img">
            </div> 
        </div>
    </section>
</div>




@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->


@endpush