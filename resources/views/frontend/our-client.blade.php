@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Our Clients'))

@push('after-styles')
<link href="{{ url('css/ourclient.css') }}" rel="stylesheet">
@endpush

<!-- our client page content -->
@section('content')
<div class="container-fluid">
    
<section id="clients" class="home-other-sections client-section client-page-height">
    <div data-aos="zoom-in" data-aos-duration="1000" class="container client-container">
        <div class="client-topic-wrapper">
            <h2 class="TT-Light">Our Clients</h2>
            <div class="line-area">
                <span class="line-wrapper"><i class="fas fa-circle"></i><span class="topic-line"></span></span>
            </div>
        </div>




        <!-- client categories -->
        <div class="clients-wrapper">
            <ul class="nav nav-tabs clients-navtab col-md-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active client-cat-btn" id="all-tab" data-bs-toggle="tab"
                        data-bs-target="#all" type="button" role="tab" aria-controls="all"
                        aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="hotel-tab" data-bs-toggle="tab" data-bs-target="#hotel"
                        type="button" role="tab" aria-controls="hotel" aria-selected="false">Hotel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="restaurants-tab" data-bs-toggle="tab"
                        data-bs-target="#restaurants" type="button" role="tab" aria-controls="restaurants"
                        aria-selected="false">Restaurants</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="finance-tab" data-bs-toggle="tab"
                        data-bs-target="#finance" type="button" role="tab" aria-controls="finance"
                        aria-selected="false">Finance</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent client-tab-content col-md-9">
                <!-- all  -->
                <div class="tab-pane fade show active client-tab-pane" id="all" role="tabpanel"
                    aria-labelledby="all-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>

                    
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BK.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KFC.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Pizzahut.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>

                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>




                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>


                </div>
                <!-- Hotel -->
                <div class="tab-pane fade client-tab-pane" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Yala.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Casamara.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Beach.png') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Restaurants -->
                <div class="tab-pane fade client-tab-pane" id="restaurants" role="tabpanel"
                    aria-labelledby="restaurants-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BK.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KFC.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Pizzahut.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Finance -->
                <div class="tab-pane fade client-tab-pane" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt="Arpico logo"
                                class="client-logo-img"></div>
                    </div>
                </div>
            </div>

        </div>




    </div>



</section>


</div>

@endsection
<!-- end of about us page -->


@push('after-scripts')
<!-- timeline script -->


@endpush