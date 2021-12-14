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
            <h1 class="main-heading TT-Light">What we Do</h1>
            <p class="orange-txt">This is where tomorrow's solutions for businesses are being created.</p>
        </div>
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <img src="{{ url('/img/frontend/solution/solution-main.png') }}" alt="man" class="half-img">
            </div> 
            <div class="col-md-5 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6 class="TT-Light">Industry Tailored</h6>
                    <div class="solution-line-area">
                        <span class="line-wrapper">
                            <i class="fas fa-circle"></i>
                            <span class="solution-topic-line"></span>
                        </span>
                    </div>
                    <h2 class="TT-Light">Solutions</h2>
                </div>           
                <p class="TT-Regular">We start with a get-things-done attitude. We employ modern software delivery methods such as lean requirements, rapid prototyping and Dual-track Scrum to meet deadlines others would call impossible. We know you needed this tomorrow, so we got it done yesterday.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
        </div>
    </section>

    <section class="full-height-area ">
        <div class="row">
        <div class="col-md-5 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6 class="TT-Light">Customer Software</h6>
                    <div class="solution-line-area">
                        <span class="line-wrapper">
                            <i class="fas fa-circle"></i>
                            <span class="solution-topic-line"></span>
                        </span>
                    </div>
                    <h2 class="TT-Light">Development</h2>
                </div>           
               <p class="TT-Regular">Whether you have an idea for a custom software solution for your company, or you are engaged in software product development, Scienter is ready to provide full-cycle software development services at each stage of your project.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
            <div class="col-md-7 col-xs-12">
                <img src="{{ url('/img/frontend/solution/solution-one.png') }}" alt="man" class="half-img">
            </div> 
        </div>
    </section>

    <section class="full-height-area ">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <img src="{{ url('/img/frontend/solution/solution-two.png') }}" alt="man" class="half-img">
            </div> 
            <div class="col-md-5 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6 class="TT-Light">Web Application</h6>
                    <div class="solution-line-area">
                        <span class="line-wrapper">
                            <i class="fas fa-circle"></i>
                            <span class="solution-topic-line"></span>
                        </span>
                    </div>
                    <h2 class="TT-Light">Development</h2>
                </div>           
                <p class="TT-Regular">Scienter web app developers will morph your great ideas into workable web solutions. With top-talent web application development skills on board, our company will craft compelling web apps and jump-start your business.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
        </div>
    </section>


    <section class="full-height-area ">
        <div class="row">
        <div class="col-md-5 col-xs-12 main-text-box">
                <div class="solutions-topic-wrapper">
                    <h6 class="TT-Light">Mobile Application</h6>
                    <div class="solution-line-area">
                        <span class="line-wrapper">
                            <i class="fas fa-circle"></i>
                            <span class="solution-topic-line"></span>
                        </span>
                    </div>
                    <h2 class="TT-Light">Development</h2>
                </div>           
                <p class="TT-Regular">If you are in search of a mobile app development supplier, Scienter is your perfect match! Our app development company is a savvy Android developer that will help you get on the mobile bandwagon.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
            <div class="col-md-7 col-xs-12">
                <img src="{{ url('/img/frontend/solution/solution-three.png') }}" alt="man" class="half-img">
            </div> 
        </div>
    </section>
</div>




@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->


@endpush