@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Contact Us'))

@push('after-styles')
<link href="{{ url('css/contact-us.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')

<section class="full-height-area contact-main-section">
    <div class="contact-main-banner-wrapper">
        <img src="{{ url('img/frontend/contact-us/contact-us-bg-one.png') }}" alt="contact-us">
        <div class="contact-banner-text-wrapper">
            <h3>Contacts</h3>
            <p>Get the support you need to keep our solution running at peak performance.</p>
            <h4>Office Name:</h4>
            <p>Cooperate Office</p>
            <h4>Address:</h4>
            <p>#302, Galle Road <br /> Colombo 04, Sri Lanka</p>
            <h4>Phone:</h4>
            <p>T| +94 112 598 555 <br /> F| +94 112 259 911</p>
            <h4>Email</h4>
            <p>E| info@scienter.lk</p>
        </div>
    </div>
   <div class="our-locations-wrapper">
       <h3>Sri Lanka</h3>
       <p>COOPERATE OFFICE</p>
   </div>
</section>


@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->


@endpush