@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link href="{{ url('css/ourclient.css') }}" rel="stylesheet">
<link href="{{ url('css/homepage.css')}}" rel="stylesheet">
@endpush

@section('content')

<section class="home-main full-height-section">
    <div class="home-main-text">
        <h1 class="main-title TT-Light">Innovation Dominant</h1>
        <p class="TT-ExtraLight">Scienter Believes in Forging Innovative, Intelligent Digital Solutions For All Forms of Industry.</p>
    </div>
    <a href="#destiny-pms" class="scroll-down">
        <div class="mouse">
            <span></span>
        </div>
        <div class="arrow">
            <span></span>
        </div>
    </a>
</section>


<section id="destiny-pms" class="home-other-sections">
    <div class="home-box-pms-img-area">
        <div class="image pms">
            <img width="100%" src="{{ url('img/frontend/homepage/destinity-pms.png') }}" alt="destiny pms"
                data-scroll-zoom>
        </div>
    </div>
    <div class="home-content-box pms">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">For Hotels & Resorts</h2>
            <p>Designed Exclusively For Hotels & Holiday Establishments to Generate Innovative Efficiency.</p>
            <button class="btn home-btn pms-btn">View Project</button>
        </div>

    </div>

    <a href="#destiny-pos" class="scroll-down-sub-btn" address="true"></a>

    <div>


</section>




<!-- <section>
<div class="spacer"></div>
    <script>
        // init controller
        var controller = new ScrollMagic.Controller();
        console.log(controller);
    </script>		

    <div>
        <div id="imgTrigger"></div>
        <img id="animationImg" src="{{url('img/frontend/homepage/homepage-logo.png') }}" alt="" style="width: 350px;">

        <script>
            var scene = new ScrollMagic.Scene({
                triggerElement: "#imgTrigger"
            })
            .setTween("#animationImg", 0.2, {scale:2.5})
            .addIndicators({name: "1 (duration: 0)"})
            .addTo(controller);
            ;

            console.log(scene);
        </script>
    </div>
</section> -->


<section id="destiny-pos" class="home-other-sections right-side-img-section">
    <div class="home-content-box pos left-side-box">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">For Restaurants</h2>
            <p>Manage, Monitor, Control Multiple Restaurants & Dineries Across Various Locations Effectively.</p>
            <button class="btn home-btn pos-btn">View Project</button>
        </div>
    </div>
    <div class="home-box-pos-img-area">
        <div class="image pos">
            <img width="100%" src="{{ url('img/frontend/homepage/destinity-pos.png') }}" alt="destiny pos"
                data-scroll-zoom>
        </div>
    </div>
    <a href="#efinancial" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="efinancial" class="home-other-sections">
    <div class="home-box-efinancial-img-area">
        <div class="image efinance">
            <img width="100%" src="{{ url('img/frontend/homepage/eFinancials.png') }}" alt="efinance" data-scroll-zoom>
        </div>
    </div>
    <div class="home-content-box efinance">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">For Banking & Finance</h2>
            <p>Built to Evolve Commerce, Finance & Banking Industry.</p>
            <button class="btn home-btn efinance-btn">View Project</button>
        </div>
    </div>
    <a href="#membership-club" class="scroll-down-sub-btn" address="true"></a>
</section>


<section id="membership-club" class="home-other-sections right-side-img-section">
    <div class="home-content-box membership left-side-box">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">For Membership Clubs</h2>
            <p>Fully Fledged Member Management System Designed for Any Club or Establishment.</p>
            <button class="btn home-btn membership-btn">View Project</button>
        </div>
    </div>
    <div class="home-box-membership-img-area">
        <div class="image membership">
            <img width="100%" src="{{ url('img/frontend/homepage/destinity-pos.png') }}" alt="destiny pos"
                data-scroll-zoom>
        </div>
    </div>
    <a href="#other-business" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="other-business" class="home-other-sections">
    <div class="home-box-other-business-img-area">
        <div class="image other-business">
            <img width="100%" src="{{ url('img/frontend/homepage/eFinancials.png') }}" alt="other business" data-scroll-zoom>
        </div>
    </div>
    <div class="home-content-box other-business">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">Other Business Solutions</h2>
            <p>Flagship Industry Solutions, Bespoke Software Development, Web App, Mobile App Development & Many More.</p>
            <button class="btn home-btn other-business-btn">View Project</button>
        </div>
    </div>
    <a href="#journey" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="journey" class="journey-area home-other-sections hidden-xs">
    <div class="journey-section-wrapper">
        <div class="row swipperr-row">
            <div class="col-md-6 tourism-left-content">
                <div class="tourism-topic-wrapper">
                    <h2 class="TT-Light subtitle">The Journey of</h2>
                    <div class="line-area">
                        <span class="line-wrapper"><i class="fas fa-circle"></i><span class="grey-line"></span></span>
                    </div>
                    <h2 class="subtitle">Decades</h2>
                </div>
                <!-- Image Main -->
                <img id="journey-img" class="tourism-box-img"
                    src="{{url('img/frontend/homepage/journey-slides/NBQSA.png') }}" alt="tourism logo">


            </div>

            <div class="col-md-6">
                <div class="swipper-wrapper journey-box-wrapper">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- slide one -->
                            <div id="slideOne" class="slideOne swiper-slide">
                                <div class="journey-box" style="position:relative; top:8px;">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">NBQSA</h3>
                                    </div>
                                    <p class="TT-Medium">Awarded the Overall Gold Award for the Best Software Developed
                                        in the country. Also Awarded Gold Award for its hotel management solution under
                                        the Tourism and Hospitality Category.</p>
                                    <h4 class="TT-Light">NBQSA 2009</h4>
                                </div>
                            </div>

                            <!-- slide two -->
                            <div id="slide-two" class="slideTwo swiper-slide">
                                <div class="journey-box">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">APICTA</h3>
                                    </div>
                                    <p class="TT-Medium">Award winner at the Asia Pacific ICT Alliance awards for the
                                        product Destinity under the Tourism and Hospitality Category</p>
                                    <h4 class="TT-Light">APICTA 2009 (Melbourne)</h4>
                                </div>
                            </div>

                            <!-- slide three -->
                            <div id="slide-three" class="slideThree swiper-slide">
                                <div class="journey-box">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">Tourism</h3>
                                    </div>
                                    <p class="TT-Medium">Winners at the 'Enabling Sri Lanka Tourism 2.0 and beyond'-
                                        2013, with awards in the Enhance Revenue and Customer Experience category.</p>
                                    <h4 class="TT-Light">ENABLING SRI LANKA TOURISM 2.0 2013</h4>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <a href="#clients" class="scroll-down-sub-btn" address="true"></a>
</section>


<section id="journey-mobile" class="visible-xs">
    <div class="container">
        <div class="tourism-topic-wrapper mobile-tourism-topic-wrapper">
            <h2 class="TT-Light subtitle">The Journey of</h2>
            <div class="line-area">
                <span class="line-wrapper"><i class="fas fa-circle"></i><span class="grey-line"></span></span>
            </div>
            <h2 class="subtitle">Decades</h2>
        </div>
        <img id="journey-mobile-img" class="tourism-box-img-mobile"
            src="{{url('img/frontend/homepage/journey-slides/NBQSA-mobile.png') }}" alt="tourism logo">

        <!-- mobile journey navigator -->
        <div class="mobile-journey-navigation-wrapper">
            <button class="mobile-journey-nav" onclick="mobileJourneyLeft()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <h2 id="mobile-journey-main-title">NBQSA</h2>
            <button class="mobile-journey-nav" onclick="mobileJourneyRight()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- mobile only slider for journey details -->
        <div class="mobile-journey-txt-wrapper">

            <p id="mobile-journey-txt" class="TT-Medium">Awarded the Overall Gold Award for the Best Software Developed
                in the country. Also Awarded Gold Award for its hotel management solution under
                the Tourism and Hospitality Category.</p>
            <h4 id="mobile-journey-bottom-txt" class="TT-Light">NBQSA 2009</h4>
        </div>
    </div>
</section>






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
                        type="button" role="tab" aria-controls="hotel" aria-selected="false">Hotel</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="restaurants-tab" data-bs-toggle="tab"
                        data-bs-target="#restaurants" type="button" role="tab" aria-controls="restaurants"
                        aria-selected="false">Restaurants</button>
                </li>
                <li class="nav-item client-nav-item" role="presentation">
                    <button class="nav-link client-cat-btn" id="finance-tab" data-bs-toggle="tab"
                        data-bs-target="#finance" type="button" role="tab" aria-controls="finance"
                        aria-selected="false">Finance</button>
                </li>
            </ul>
            <div class="tab-content mobile-tab-height" id="myTabContent client-tab-content col-md-9">
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


<div class="clients-trigger"></div>
<a href="#expertise" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="expertise" class="home-other-sections expertise-section">
    <h2 class="TT-Light subtitle visible-tab">Our Expertise</h2>
    <div class="expertise-line-area visible-tab">
                <span class="line-wrapper"><span class="topic-line tab-topic-line"></span><i class="fas fa-circle"></i></span>
            </div>
    <div class="home-box-expertise-img-area"></div>
    <div data-aos="zoom-in" data-aos-duration="1000" class="expertise-content-box">
        <div class="expertise-topic-wrapper">
            <h2 class="TT-Light subtitle hidden-tab">Our Expertise</h2>
            <div class="expertise-line-area hidden-tab">
                <span class="line-wrapper"><span class="topic-line"></span><i class="fas fa-circle"></i></span>
            </div>
        </div>
        <div class="expertise-box">
            <div class="col-md-4">
                <div class="circle-text-wrapper">
                    <div class="circle_percent green_percent" data-percent="95">
                        <div class="circle_inner ">
                            <div class="round_per green_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Hotel Management <br> Solutions</p>
                </div>

                <div class="circle-text-wrapper">
                    <div class="circle_percent lightorange_percent" data-percent="87">
                        <div class="circle_inner ">
                            <div class="round_per lightorange_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Call Center Solutions</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="circle-text-wrapper">
                    <div class="circle_percent darkorange_percent" data-percent="90">
                        <div class="circle_inner ">
                            <div class="round_per darkorange_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Restaurants Management Solutions</p>
                </div>

                <div class="circle-text-wrapper">
                    <div class="circle_percent purple_percent" data-percent="73">
                        <div class="circle_inner ">
                            <div class="round_per purple_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Program Scheduling <br> Solutions</p>
                </div>


            </div>
            <div class="col-md-4">
                <div class="circle-text-wrapper">
                    <div class="circle_percent lightblue_percent" data-percent="90">
                        <div class="circle_inner ">
                            <div class="round_per lightblue_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Finance Solutions</p>
                </div>

                <div class="circle-text-wrapper">
                    <div class="circle_percent darkblue_percent" data-percent="91">
                        <div class="circle_inner ">
                            <div class="round_per darkblue_per"></div>
                        </div>
                    </div>
                    <p class="TT-Regular">Accounting Solutions</p>
                </div>


            </div>
        </div>
    </div>

    <a href="#social" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="social" class="social">
    <div class="container-fluid social-banner">
        <div class="container social">
            <div class="row news-card-wrapper">
                <div class="col-4 tab-50 news-card">
                    <!-- <a href="https://www.facebook.com/tallentor" style="color:black" target="_blank" id="stack_panel">
                        <div class="card" style="height: 27rem;">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftallentor%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=true&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=false&amp;appId=4531192260303691"
                                width="100%" height="500" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </a> -->
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="UBiuJPPr"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/scienterlk/" data-tabs="timeline" data-width="" data-height="430" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/scienterlk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/scienterlk/">Scienter Technologies PTE</a></blockquote></div>
                </div>



                <div class="col-4 tab-50 news-card">
                    <div class="card position-relative" style="height: 27rem;"><a href="{{url('news')}}"
                            style="color:black">

                            <div class="px-4 py-2"
                                style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <div class="row align-items-center">
                                    <!-- <div class="col-3 text-center">
                                        <img src="https://tallentor.com/theme_light/assets/footer/club.png" alt=""
                                            class="img-fluid">
                                    </div> -->
                                    <div class="col-12 text-center">
                                        <p class="mb-0" style="color: #065A31; font-size: 1.6rem;">Scienter Club</p>
                                    </div>
                                </div>
                            </div>

                            <img src="{{url('img/frontend/about/milestone-one.png')}}" class="card-img-top"
                                alt="..." style="object-fit: cover; height: 13rem;">
                        </a>
                        <div class="card-body"><a href="{{url('news')}}" style="color:black">
                                <p class="card-text mb-1"
                                    style=" overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;  -webkit-box-orient: vertical;">
                                    When you use an application on your mobile phone or smart devices the application
                                    connects to the Internet and sends data to a server. The server then retrieves that
                                    data, interprets it, performs the necessary actions and sends it back to your phone.
                                    The application then interprets that data and presents you with the information you
                                    wanted in a readable way. This is what an API is - all of this happens via API.</p>

                            </a>
                            <div class="text-right mb-1"><a href="{{url('news')}}" style="color:black">
                                </a>
                                <div class="position-absolute read"><a href="{{url('news')}}"
                                        style="color:black">
                                    </a><a href="{{url('news')}}"
                                        style="font-size: 1rem; color: #0033FF;">View More</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-4 tab-50 news-card tab-center-50">
                    <div class="card position-relative" style="height: 27rem;"><a href="{{url('news')}}"
                            style="color:black">
                            <div class="px-4 py-2"
                                style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                <div class="row align-items-center">
                                    <!-- <div class="col-3 text-center">
                                        <img src="https://tallentor.com/theme_light/assets/footer/news.png" alt=""
                                            class="img-fluid">
                                    </div> -->
                                    <div class="col-12 text-center">
                                        <p class="mb-0" style="color: #065A31; font-size: 1.6rem;">Latest at Scienter
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <img src="{{url('img/frontend/about/milestone-two.png')}}" class="card-img-top"
                                alt="..." style="object-fit: cover; height: 13rem;">
                        </a>
                        <div class="card-body"><a href="{{url('news')}}" style="color:black">
                                <p class="card-text mb-1"
                                    style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                    Our team brought years of analytical and development experience together to bring
                                    Tallentor LMS to life.
                                    Expandability and connectivity with third party systems are the key features of our
                                    LMS, and our team is working on further enhancements and will release new versions
                                    latest features.</p>

                            </a>
                            <div class="text-right mb-1"><a href="{{url('news')}}" style="color:black">
                                </a>
                                <div class="position-absolute read"><a href="{{url('news')}}"
                                        style="color:black">
                                    </a><a href="{{url('news')}}"
                                        style="font-size: 1rem; color: #0033FF;">View More</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="col-3">
                <div class="card" style="height: 25rem;">
                    <img src="https://tallentor.com/theme_light/assets/footer/4.png" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                    <div class="card-body">
                        <p class="card-text mb-1">We're giving away 100,000,000 $Shib to 5 random people (20,000,000 each)Money bag RocketFollow Me! Gem stoneRetweet and Like. Open handsComment #SHIBARMY  ⚠followers only giveaway⚠ #BTC  #ETH #Giveaway #ADA</p>
                        
                        <div class="text-right">
                            <a href="#" style="color: #FF0000; font-size: 1.1rem;">News</a>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
        </div>
    </div>
</section>
@endsection


@push('after-scripts')
<!-- journey animation -->
<!-- active slide for display image -->










<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- mobile journey swiper -->


<!-- Initialize Swiper -->

<!-- Journey scroll up catcher -->
<script>
function journeyScroll() {
    alert("You scrolling bro");
}
</script>



<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 3,
    spaceBetween: 1,
    slidesPerGroup: 1,
    centeredSlides: true,
    allowSlidePrev: false,
    loop: true,
    mousewheel: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    autoplay: {
        delay: 2000,
    },
});



var slideNum = 0;


//slide change event catch to make image changer
swiper.on('slideChange', function() {

    slideNum = slideNum + 1;

    console.log(slideNum);


    var journeyImgUrl = "{{ url('img/frontend/homepage/journey-slides') }}";

    //image holder array 
    const journeySlideImg = [journeyImgUrl + "/NBQSA.png", journeyImgUrl +
        "/APICTA-mobile.png", journeyImgUrl +
        "/tourism-mobile.png"
    ];

    //querySelectors
    const oneActive = document.querySelector('.slideOne.swiper-slide.swiper-slide-active');
    const twoActive = document.querySelector('.slideTwo.swiper-slide.swiper-slide-active');
    const threeActive = document.querySelector('.slideThree.swiper-slide.swiper-slide-active');

    $(document).ready(function() {
        if (oneActive) {
            document.getElementById("journey-img").src = journeySlideImg[1];
        } else if (twoActive) {
            document.getElementById("journey-img").src = journeySlideImg[2];
        } else if (threeActive) {
            document.getElementById("journey-img").src = journeySlideImg[0];
        }
    })


});
</script>



<script type="text/javascript">
gsap.to(".home-content-box.pms", {
    scrollTrigger: {
        trigger: "button.btn.home-btn.pms-btn",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -150,
    x: -100
})

gsap.to(".home-content-box.pos", {
    scrollTrigger: {
        trigger: "button.btn.home-btn.pos-btn",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -150,
    x: 100
})

gsap.to(".home-content-box.efinance", {
    scrollTrigger: {
        trigger: "button.btn.home-btn.efinance-btn",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -150,
    x: -100
})

/*image up down animation*/
gsap.to(".home-box-pms-img-area", {
    scrollTrigger: {
        trigger: ".image.pms",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -100,
    x: 100
})

gsap.to(".home-box-pos-img-area", {
    scrollTrigger: {
        trigger: ".image.pos",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -100,
    x: -100
})

gsap.to(".home-box-efinancial-img-area", {
    scrollTrigger: {
        trigger: ".image.efinance",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -100,
    x: 100
})


/*membership*/
gsap.to(".home-content-box.membership", {
    scrollTrigger: {
        trigger: "button.btn.home-btn.membership-btn",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -150,
    x: 100
})
gsap.to(".home-box-membership-img-area", {
    scrollTrigger: {
        trigger: ".image.membership",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -100,
    x: -100
})


/*other products*/
gsap.to(".home-box-other-business-img-area", {
    scrollTrigger: {
        trigger: ".image.other-business",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -100,
    x: 100
})

gsap.to(".home-content-box.other-business", {
    scrollTrigger: {
        trigger: "button.btn.home-btn.other-business-btn",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    y: -150,
    x: -100
})


/*title animation*/
gsap.to(".tourism-topic-wrapper", {
    scrollTrigger: {
        trigger: "img#journey-img",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    x: 100
})

gsap.to(".client-topic-wrapper", {
    scrollTrigger: {
        trigger: ".clients-wrapper",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    x: 100
})

gsap.to(".expertise-topic-wrapper", {
    scrollTrigger: {
        trigger: ".expertise-topic-wrapper",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    },
    x: 100
})
</script>

<!-- mobile journey script -->
<script>
//data arrays
const mobileJoureyImgArray = ["{{url('img/frontend/homepage/journey-slides/NBQSA-mobile.png') }}",
    "{{url('img/frontend/homepage/journey-slides/APICTA-mobile.png') }}",
    "{{url('img/frontend/homepage/journey-slides/tourism-mobile.png') }}"
];

const mobileJourneyMainTitleArray = ["NBQSA", "APICTA", "Tourism"];

const mobileJourneyTxtArray = ["Awarded the Overall Gold Award for the Best Software Developed in the country. Also Awarded Gold Award for its hotel management solution under the Tourism and Hospitality Category.", "Award winner at the Asia Pacific ICT Alliance awards for the product Destinity under the Tourism and Hospitality Category", "Winners at the 'Enabling Sri Lanka Tourism 2.0 and beyond'- 2013, with awards in the Enhance Revenue and Customer Experience category."];

const mobileJourneyBottomTxtArray = ["NBQSA 2009", "APICTA 2009 (Melbourne)", "ENABLING SRI LANKA TOURISM 2.0 2013"];


//get things by id        
mobileJourneyImg = document.getElementById("journey-mobile-img");
mobileJourneyMainTitle = document.getElementById("mobile-journey-main-title");
mobileJourneyTxt = document.getElementById("mobile-journey-txt");
mobileJourneyBottomTxt = document.getElementById("mobile-journey-bottom-txt");


var i = 0;

function mobileJourneyLeft() {

    if (i > 0) {
        i = i - 1;
    } else {
        i = 2;
    }

    mobileJourneyImg.src = mobileJoureyImgArray[i];
    mobileJourneyMainTitle.innerHTML = mobileJourneyMainTitleArray[i];
    mobileJourneyTxt.innerHTML = mobileJourneyTxtArray[i];
    mobileJourneyBottomTxt.innerHTML = mobileJourneyBottomTxtArray[i];
}

function mobileJourneyRight() {
    if (i < 2) {
        i = i + 1;
    } else {
        i = 0;
    }

    mobileJourneyImg.src = mobileJoureyImgArray[i];
    mobileJourneyMainTitle.innerHTML = mobileJourneyMainTitleArray[i];
    mobileJourneyTxt.innerHTML = mobileJourneyTxtArray[i];
    mobileJourneyBottomTxt.innerHTML = mobileJourneyBottomTxtArray[i];
}


</script>



<!-- image zoom in zoom out scroll animation -->
<script>
// Higher number = more zoom
let scaleAmount = 2;

function scrollZoom() {
    const images = document.querySelectorAll("[data-scroll-zoom]");
    let scrollPosY = 0;
    scaleAmount = scaleAmount / 100;

    const observerConfig = {
        rootMargin: "0% 0% 0% 0%",
        threshold: 0
    };

    // Create separate IntersectionObservers and scroll event listeners for each image so that we can individually apply the scale only if the image is visible
    images.forEach(image => {
        let isVisible = false;
        const observer = new IntersectionObserver((elements, self) => {
            elements.forEach(element => {
                isVisible = element.isIntersecting;
            });
        }, observerConfig);

        observer.observe(image);

        // Set initial image scale on page load
        image.style.transform = `scale(${1 + scaleAmount * percentageSeen(image)})`;

        // Only fires if IntersectionObserver is intersecting
        window.addEventListener("scroll", () => {
            if (isVisible) {
                scrollPosY = window.pageYOffset;
                image.style.transform = `scale(${1 +
          scaleAmount * percentageSeen(image)})`;
            }
        });
    });

    // Calculates the "percentage seen" based on when the image first enters the screen until the moment it leaves
    // Here, we get the parent node position/height instead of the image since it's in a container that has a border, but
    // if your container has no extra height, you can simply get the image position/height
    function percentageSeen(element) {
        const parent = element.parentNode;
        const viewportHeight = window.innerHeight;
        const scrollY = window.scrollY;
        const elPosY = parent.getBoundingClientRect().top + scrollY;
        const borderHeight = parseFloat(getComputedStyle(parent).getPropertyValue('border-bottom-width')) + parseFloat(
            getComputedStyle(element).getPropertyValue('border-top-width'));
        const elHeight = parent.offsetHeight + borderHeight;

        if (elPosY > scrollY + viewportHeight) {
            // If we haven't reached the image yet
            return 0;
        } else if (elPosY + elHeight < scrollY) {
            // If we've completely scrolled past the image
            return 100;
        } else {
            // When the image is in the viewport
            const distance = scrollY + viewportHeight - elPosY;
            let percentage = distance / ((viewportHeight + elHeight) / 100);
            percentage = Math.round(percentage);

            return percentage;
        }
    }
}

scrollZoom();
</script>






<!-- expertise circle script -->


<script>
$.fn.isOnScreen = function() {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top ||
        viewport.top > bounds.bottom));
};

$(window).scroll(function() {
    if ($(".expertise-box").isOnScreen()) {
        $(".circle_percent").each(function() {
            var $this = $(this),
                $dataV = $this.data("percent"),
                $dataDeg = $dataV * 3.6,
                $round = $this.find(".round_per");
            $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
            $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
            $this.prop('Counter', 0).animate({
                Counter: $dataV
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $this.find(".percent_text").text(Math.ceil(now) + "%");
                }
            });
            if ($dataV >= 51) {
                $round.css("transform", "rotate(" + 360 + "deg)");
                setTimeout(function() {
                    $this.addClass("percent_more");
                }, 2000);
                setTimeout(function() {
                    $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
                }, 2000);
            }
        });
    }
});
</script>
@endpush