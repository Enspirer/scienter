@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Our Clients'))

@push('after-styles')
<link href="{{ url('css/ourclient.css') }}" rel="stylesheet">
@endpush

<!-- our client page content -->
@section('content')
<div class="container-fluid">
    
<section id="clients" class="home-other-sections client-section">
    <div class="client-topic-wrapper">
        <h2>Our Clients</h2>
    </div>


    <div class="client-list">
        <div class="filter-area">
            <ul class="filter-list">
                <li>All</li>
                <li>Hotel</li>
                <li>Restaurants & Clubs</li>
                <li>Finance & Leasing</li>
            </ul>
        </div>
        <div class="client-logo-area">
            <div class="client-logo-row">
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>            
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/KFC.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
            </div>

            <div class="client-logo-row">
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
            </div>

            <div class="client-logo-row">
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}" alt="Anantaya logo">
                    </div>  
                </div>
            </div>

        </div>
    </div>
    <a href="#expertise" class="scroll-down-sub-btn" address="true"></a>
</section>
</div>

@endsection
<!-- end of about us page -->


@push('after-scripts')
<!-- timeline script -->


@endpush