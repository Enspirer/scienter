@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link href="{{ url('css/ourclient.css') }}" rel="stylesheet">
<link href="{{ url('css/homepage.css')}}" rel="stylesheet">
<script src="{{ url('js/scrollmagic/highlight.pack.js')}}"></script>
<script src="{{ url('js/scrollmagic/modernizr.custom.min.js')}}"></script>
<script src="{{ url('js/scrollmagic/examples.js')}}"></script>

<script src="{{ url('js/scrollmagic/gsap.min.js')}}"></script>
<script src="{{ url('js/scrollmagic/ScrollMagic.js')}}"></script>
<script src="{{ url('js/scrollmagic/animation.gsap.js')}}"></script>
<script src="{{ url('js/scrollmagic/debug.addIndicators.js')}}"></script>

@endpush

@section('content')

<section class="home-main full-height-section">
    <div class="home-main-text">
        <h1 class="TT-Light">Specialty</h1>
        <p class="TT-ExtraLight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the
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


<section id="home-second" class="home-other-sections">
    <div class="home-box-pms-img-area"></div>
    <div class="home-content-box">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">Destinity PMS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.</p>
            <button class="btn home-btn">View Project</button>
        </div>

    </div>
    <a href="#pos" class="scroll-down-sub-btn" address="true"></a>

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


<section id="pos" class="home-other-sections right-side-img-section">
    <div class="home-content-box left-side-box">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">Destinity POS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.</p>
            <button class="btn home-btn">View Project</button>
        </div>
    </div>
    <div id="animate1" class="home-box-pos-img-area"></div>
    <a href="#eFinancial" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="eFinancial" class="home-other-sections">
    <div class="home-box-efinancial-img-area"></div>
    <div class="home-content-box">
        <div class="home-content-text-wrapper">
            <h2 class="TT-Light">eFinancials</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.</p>
            <button class="btn home-btn">View Project</button>
        </div>
    </div>
    <a href="#journey" class="scroll-down-sub-btn" address="true"></a>
</section>

<!-- <section id="journey" class="home-tourism-section">
    <div data-aos="zoom-in" data-aos-duration="1000" class="container">
        <div class="row">
            <div class="col-md-6 tourism-left-content">
                <div class="tourism-topic-wrapper">
                    <h2 class="TT-Light">The Journey of</h2>
                    <div class="line-area">
                        <span class="line-wrapper"><i class="fas fa-circle"></i><span class="grey-line"></span></span>
                    </div>
                    <h2>Decades</h2>
                </div>

                <img class="tourism-box-img" src="{{url('img/frontend/homepage/homepage-logo.png') }}"
                    alt="tourism logo">


            </div>
            <div class="col-md-6">
                <div class="home-bottom-side-wrapper">
                    <!-- <div class="dotted-line-wrapper">
                        
                    </div> -->
<!-- <div class="journey-box-wrapper">
                        <div class="journey-box">
                            <div class="topic-and-point-wrapper">
                                <span class="topic-point">
                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                </span>
                                <h3 class="TT-Light">Overall Gold Award</h3>
                            </div>
                            <p class="TT-Medium">The Best Software Developed in the country and Best hotel management
                                solution </p>
                            <h4 class="TT-Light">NBQSA 2009</h4>
                        </div>
                        <div class="journey-box">
                            <div class="topic-and-point-wrapper">
                                <span class="topic-point active">
                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                </span>
                                <h3 class="TT-Light journey-active">Enabling Sri Lanka Tourism 2.0 and beyond'-2013
                                    Winners</h3>
                            </div>

                            <p class="TT-Medium">with awards in the Enhance Revenue and Customer Experience category.
                            </p>
                            <h4 class="TT-Light">2013</h4>
                        </div>
                        <div class="journey-box">
                            <div class="topic-and-point-wrapper">
                                <span class="topic-point">
                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                </span>
                                <h3 class="TT-Light">Asia Pacific ICT Alliance Awards</h3>
                            </div>

                            <p class="TT-Medium">for the product Destinity under the Tourism and Hospitality Category
                            </p>
                            <h4 class="TT-Light">2013</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#clients" class="scroll-down-sub-btn" address="true"></a>
</section> -->


<section id="journey" class="journey-area home-other-sections">
    <div class="journey-section-wrapper">
        <div class="row swipperr-row">
            <div class="col-md-6 tourism-left-content">
                <div class="tourism-topic-wrapper">
                    <h2 class="TT-Light">The Journey of</h2>
                    <div class="line-area">
                        <span class="line-wrapper"><i class="fas fa-circle"></i><span class="grey-line"></span></span>
                    </div>
                    <h2>Decades</h2>
                </div>




                <img id="journey-img" class="tourism-box-img"
                    src="{{url('img/frontend/homepage/journey-slides/image-one.png') }}" alt="tourism logo">

                <!-- Swiper -->




            </div>
            <div class="col-md-6">
                <div class="swipper-wrapper journey-box-wrapper">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- slide one -->
                            <div id="slideOne" class="slideOne swiper-slide">
                                <div class="journey-box">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">Slide One</h3>
                                    </div>
                                    <p class="TT-Medium">The Best Software Developed in the country and Best hotel
                                        management
                                        solution </p>
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
                                        <h3 class="TT-Light">Slide 2</h3>
                                    </div>
                                    <p class="TT-Medium">The Best Software Developed in the country and Best hotel
                                        management
                                        solution </p>
                                    <h4 class="TT-Light">NBQSA 2009</h4>
                                </div>
                            </div>

                            <!-- slide three -->
                            <div id="slide-three" class="slideThree swiper-slide">
                                <div class="journey-box">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">Slide Three</h3>
                                    </div>
                                    <p class="TT-Medium">The Best Software Developed in the country and Best hotel
                                        management
                                        solution </p>
                                    <h4 class="TT-Light">NBQSA 2009</h4>
                                </div>
                            </div>

                            <!-- slide two -->
                            <div id="slide-four" class="slideFour swiper-slide">
                                <div class="journey-box">
                                    <div class="topic-and-point-wrapper">
                                        <span class="topic-point">
                                            <i class="fas fa-circle" aria-hidden="true"></i>
                                        </span>
                                        <h3 class="TT-Light">Slide Four</h3>
                                    </div>
                                    <p class="TT-Medium">The Best Software Developed in the country and Best hotel
                                        management
                                        solution </p>
                                    <h4 class="TT-Light">NBQSA 2009</h4>
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



<section id="clients" class="home-other-sections client-section">
    <div data-aos="zoom-in" data-aos-duration="1000" class="container">
        <div class="client-topic-wrapper">
            <h2 class="TT-Light">Our Clients</h2>
            <div class="line-area">
                <span class="line-wrapper"><i class="fas fa-circle"></i><span class="topic-line"></span></span>
            </div>
        </div>


        <div class="client-list">
            <div class="filter-area">
                <ul class="filter-list">
                    <li><b>All</b></li>
                    <li>Hotel</li>
                    <li>Restaurants & Clubs</li>
                    <li>Finance & Leasing</li>
                </ul>
            </div>
            <div class="client-logo-area">
                <!-- <div class="client-logo-row"> -->

                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/KFC.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>


                <!-- </div> -->

                <!-- <div class="client-logo-row"> -->
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <!-- </div> -->

                <!-- <div class="client-logo-row"> -->
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <!-- </div> -->

                <!-- <div class="client-logo-row"> -->
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/J-Beach.png')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <div class="client-logo-box">
                    <div class="client-logo-inner-box">
                        <img class="client-logo-img" src="{{ url('img/frontend/homepage/logos/Anantaya.jpg')}}"
                            alt="Anantaya logo">
                    </div>
                </div>
                <!-- </div> -->

            </div>
        </div>
    </div>



    <a href="#expertise" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="expertise" class="home-other-sections expertise-section">
    <div class="home-box-expertise-img-area"></div>
    <div data-aos="zoom-in" data-aos-duration="1000" class="expertise-content-box">
        <div class="expertise-topic-wrapper">
            <h2 class="TT-Light">Our Expertise</h2>
            <div class="expertise-line-area">
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
                    <p class="TT-Regular">Hotel Management Solutions</p>
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
                    <p class="TT-Regular">Program Scheduling Solutions</p>
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
</section>

<div class="expertise-container">

</div>

@endsection


@push('after-scripts')
<!-- journey animation -->
<!-- active slide for display image -->










<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->



<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 3,
    spaceBetween: 1,
    centeredSlides: true,
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



//slide change event catch to make image changer
swiper.on('slideChange', function() {

    //image holder array 
    const journeySlideImg = ["http://127.0.0.1:8000/img/frontend/homepage/journey-slides/image-one.png",
        "http://127.0.0.1:8000/img/frontend/homepage/journey-slides/image-two.png",
        "http://127.0.0.1:8000/img/frontend/homepage/journey-slides/image-three.png",
        "http://127.0.0.1:8000/img/frontend/homepage/journey-slides/image-four.png"
    ];

    //querySelectors
    const oneActive = document.querySelector('.slideOne.swiper-slide.swiper-slide-active');
    const twoActive = document.querySelector('.slideTwo.swiper-slide.swiper-slide-active');
    const threeActive = document.querySelector('.slideThree.swiper-slide.swiper-slide-active');
    const fourActive = document.querySelector('.slideFour.swiper-slide.swiper-slide-active');

    if (oneActive) {
        document.getElementById("journey-img").src = journeySlideImg[1];
    } else if (twoActive) {
        document.getElementById("journey-img").src = journeySlideImg[2];
    } else if (threeActive) {
        document.getElementById("journey-img").src = journeySlideImg[3];
    } else if (fourActive) {
        document.getElementById("journey-img").src = journeySlideImg[0];
    }


});
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