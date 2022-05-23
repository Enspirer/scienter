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
            <h2 class="TT-Light subtitle">Our Clients</h2>
            <div class="line-area">
                <span class="line-wrapper"><i class="fas fa-circle"></i><span class="topic-line"></span></span>
            </div>
        </div>




        <!-- client categories -->
        <div class="clients-wrapper">
            <ul class="nav nav-tabs clients-navtab col-md-3" id="myTab" role="tablist">
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link active client-cat-btn" id="all-tab" data-bs-toggle="tab"
                        data-bs-target="#all" type="button" role="tab" aria-controls="all"
                        aria-selected="true">All</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="hotel-tab" data-bs-toggle="tab" data-bs-target="#hotel"
                        type="button" role="tab" aria-controls="hotel" aria-selected="false">Hotels</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="restaurants-tab" data-bs-toggle="tab"
                        data-bs-target="#restaurants" type="button" role="tab" aria-controls="restaurants"
                        aria-selected="false">Restaurants &amp; Clubs</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="finance-tab" data-bs-toggle="tab"
                        data-bs-target="#finance" type="button" role="tab" aria-controls="finance"
                        aria-selected="false">Finance &amp; Leasing</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="projects-tab" data-bs-toggle="tab"
                        data-bs-target="#projects" type="button" role="tab" aria-controls="projects"
                        aria-selected="false">International Projects</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="organization-tab" data-bs-toggle="tab"
                        data-bs-target="#organization" type="button" role="tab" aria-controls="organization"
                        aria-selected="false">Large to medium scale Organization</button>
                </li>
            </ul>
            <div class="tab-content mobile-tab-height" id="myTabContent client-tab-content col-md-9">
                <!-- all  -->
                <div class="tab-pane fade show active client-tab-pane" id="all" role="tabpanel"
                    aria-labelledby="all-tab">
                    <!-- Hotels -->
                    
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Aditya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Aliya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Anantaya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Avani-B.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Bansei.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Barberyn.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Bopath.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Calamansi.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Casamara.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CeylonCityHotel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CHCLakehouse.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Citrus.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CitrusWaskaduwa.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/clubpalmbay.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CocoBay.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/COLOMBOCITYHOTEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CONCORD.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CoralSands.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/DICKWELLA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Dolphin.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/FortPrinter.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/FullMoon.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GLENDOVER.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GlenFall.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GoldenStar.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Goldisands.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GRANDHOTEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GrandKandy.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GRANDUDAWALAWE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GreenGrass.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GreenHills.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HARIDRARESORT.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HIBISCUS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HotelJ.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HOTELJANAKI.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/induruwa.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Andews.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Beach.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Blue.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/JJafna.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Lagoon.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-LightHouse.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Joes.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Sea.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Kaduru.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KandianReach.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KandyanArt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Kithala.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KOGGALA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Lagoon.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/lakeshore.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/LONGBEACH.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/LSR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/MaaluMaalu.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/madu.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Manium.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/MR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/NorthGate.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/PALMGARDEN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Pandanus.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/PARADISEBEACH.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Pledge3.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Qantara.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/QUEENS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/RajarataHotel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/RAMBODA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/royalpark.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Safari.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SAPPHIRE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SERENGARDEN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SERINGRAND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Sigiriya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Sigiriya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SIGIRIYAVILLAGE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SOROWWA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Steuart.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SuduAraliya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Surf.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SwissResidence.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TempleTree.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheBlueWater.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheHeritage.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheLake.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/THEPLAMS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Thilanka-D.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Thilanka-K.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/VilUyana.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/weligama.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Windsor.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Yala.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>

                    <!-- Restaurants -->
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/80.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/AuraCafe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Baghdad.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BK.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/brc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Cafe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chariot.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chinees.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/CHNFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chopsticks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/colomboswmingclub.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/CR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/delifrance.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/FINGARA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/FloorByO.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/GALLERYCAFE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/HILLCLUB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/HOTELSUISSE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KingFisher.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Kingsbury.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/LaviniaBreeze.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/loards.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Nakwon Supermarkt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Pizzahut.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/PRIMA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/RCGC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/RnR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Russos.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Shami.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/shaze.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/ShorebyO.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Sonata.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/SRILANKAN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/SteamBoat.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/TapHouse.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/TGIF.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/uk.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/VictoriaGolfClub.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/WATERSEDGE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/white.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>

                    <!-- Finance -->
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/AsianFinance.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Bimputh.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/CHILAW.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/clc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/DDFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/entrust.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/George.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Grameen.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/INDRA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Laugfs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/LB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/MULTI.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/NationLanka.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/SLSB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/tks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/VALLIBEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>

                    <!-- Projects -->
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Chopsticks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Desert Cubs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/lakeshore.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Nakwon Supermarkt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/royalpark.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Russos.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Shami.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>

                    <!-- Organization -->
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Access.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/apl.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/bernard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Bodyline.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/CeylonTea.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/court.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Desert Cubs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/EPIC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/GMCL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Hemas.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/ITN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/IWS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/KPMG.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/LESC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/LTL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/luxe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/NIE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/nuwan.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/ORIFLAM.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/OXCLY.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/PaddyMarketingBoard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/PWC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/RAFFLES.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/RAMADHA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SLTDA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Sparklit.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SPELLBOUND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SPICEISLAND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/STC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/sumathi.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/trico.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/trytel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/tvDerana.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/unitedFoodServices.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/unitedMoters.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/vasantham.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/vc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/venora.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/VISITLANKA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>


                </div>
                <!-- Hotel -->
                <div class="tab-pane fade client-tab-pane" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Aditya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Aliya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Anantaya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Avani-B.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Bansei.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Barberyn.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Bopath.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Calamansi.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Casamara.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CeylonCityHotel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CHCLakehouse.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Citrus.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CitrusWaskaduwa.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/clubpalmbay.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CocoBay.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/COLOMBOCITYHOTEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CONCORD.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/CoralSands.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/DICKWELLA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Dolphin.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/FortPrinter.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/FullMoon.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GLENDOVER.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GlenFall.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GoldenStar.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Goldisands.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GRANDHOTEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GrandKandy.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GRANDUDAWALAWE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GreenGrass.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/GreenHills.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HARIDRARESORT.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HIBISCUS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HotelJ.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/HOTELJANAKI.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/induruwa.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Andews.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Beach.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Blue.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/JJafna.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Lagoon.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-LightHouse.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Joes.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/J-Sea.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Kaduru.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KandianReach.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KandyanArt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Kithala.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/KOGGALA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Lagoon.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/lakeshore.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/LONGBEACH.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/LSR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/MaaluMaalu.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/madu.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Manium.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/MR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/NorthGate.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/PALMGARDEN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Pandanus.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/PARADISEBEACH.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Pledge3.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Qantara.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/QUEENS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/RajarataHotel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/RAMBODA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/royalpark.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Safari.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SAPPHIRE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SERENGARDEN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SERINGRAND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Sigiriya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Sigiriya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SIGIRIYAVILLAGE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SOROWWA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Steuart.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SuduAraliya.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Surf.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/SwissResidence.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TempleTree.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheBlueWater.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheHeritage.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/TheLake.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/THEPLAMS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Thilanka-D.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Thilanka-K.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/VilUyana.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/weligama.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Windsor.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/hotels/Yala.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Restaurants -->
                <div class="tab-pane fade client-tab-pane" id="restaurants" role="tabpanel"
                    aria-labelledby="restaurants-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/80.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/AuraCafe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Baghdad.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BK.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/BR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/brc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Cafe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chariot.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chinees.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/CHNFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Chopsticks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/colomboswmingclub.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/CR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/delifrance.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/FINGARA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/FloorByO.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/GALLERYCAFE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/HILLCLUB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/HOTELSUISSE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/KingFisher.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Kingsbury.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/LaviniaBreeze.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/loards.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Nakwon Supermarkt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Pizzahut.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/PRIMA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/RCGC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/RnR.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Russos.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Shami.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/shaze.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/ShorebyO.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/Sonata.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/SRILANKAN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/SteamBoat.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/TapHouse.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/TGIF.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/uk.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/VictoriaGolfClub.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/WATERSEDGE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/restaurants/white.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Finance -->
                <div class="tab-pane fade client-tab-pane" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Arpico.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/AsianFinance.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Bimputh.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/capital.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/CHILAW.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/clc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/DDFC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/entrust.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/George.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Grameen.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/INDRA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/Laugfs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/LB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/MULTI.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/NationLanka.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/richard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/SLSB.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/tks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/finance/VALLIBEL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Projects -->
                <div class="tab-pane fade client-tab-pane" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Chopsticks.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Desert Cubs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/lakeshore.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Nakwon Supermarkt.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/royalpark.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Russos.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/projects/Shami.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                </div>
                <!-- Organization -->
                <div class="tab-pane fade client-tab-pane" id="organization" role="tabpanel" aria-labelledby="organization-tab">
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Access.png') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/apl.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/bernard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Bodyline.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/CeylonTea.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/court.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Desert Cubs.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/EPIC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/GMCL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Hemas.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/ITN.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/IWS.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/KPMG.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/LESC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/LTL.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/luxe.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/NIE.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/nuwan.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/ORIFLAM.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/OXCLY.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/PaddyMarketingBoard.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/PWC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/RAFFLES.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/RAMADHA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SLTDA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/Sparklit.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SPELLBOUND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/SPICEISLAND.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/STC.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/sumathi.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/trico.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/trytel.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/tvDerana.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/unitedFoodServices.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/unitedMoters.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/vasantham.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/vc.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/venora.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                    <div class="client-logo-box">
                        <div class="client-logo-inner-box"><img
                                src="{{ url('img/frontend/clients/organizations/VISITLANKA.jpg') }}" alt=""
                                class="client-logo-img"></div>
                    </div>
                </div>
            </div>

        </div>




    </div>


<div class="clients-trigger"></div>
</section>

</div>

@endsection
<!-- end of about us page -->


@push('after-scripts')
<!-- timeline script -->
<script>
        gsap.to(".client-topic-wrapper", {
			scrollTrigger:{
				trigger: ".clients-trigger", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -100
		})
</script>

@endpush