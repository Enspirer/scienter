@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Portfolio'))

@push('after-styles')
<link href="{{ url('css/portfolio.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')
<div class="container-fluid">
<section class="home-main full-height-section">
    <div class="home-main-text">
        <h1 class="TT-Light">Specialty</h1>
        <p class="TT-ExtraLight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard</p>
    </div>
    <a href="#home-second" class="scroll-down">
        <div class="mouse">
            <span></span>
        </div>
        <div class="arrow">
            <span></span>
        </div>
    </a>
</section>
</div>


@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->


@endpush