@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Portfolio'))

@push('after-styles')
<link href="{{ url('css/portfolio.css') }}" rel="stylesheet">
<link href="{{ url('css/ourclient.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')
<!--   -->
<div id="particles-js" class="container-fluid portfolio-full">
        <!-- <section class="portfolio-main">
            <div class="row">
                <div class="col-md-6 portfolio-main-left-content">
                    <h1 class="portfolio-main-heading ">Portfolio</h1>
                    <div class="portfolio-main-txt-wrapper">
                        <div class="portfolio-main-txt-inner-wrapper">
                            <p class="orange-txt cap-txt">We start a get-things-done attitude</p>
                            <h2 class="TT-Regular">Hotel <br/ >Management</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
            <a href="#home-second" class="scroll-down portfolio-scroll"><div class="mouse"><span></span></div> <div class="arrow"><span></span></div></a>
    </section> -->

    <section class="portfolio-main">
    <!-- portfolio leftside -->
        <div class="portfolio-leftside-wrapper">
            <h1 class="main-title">Portfolio</h1>
            <div class="portfolio-content-box">
                <div class="portfolio-content-inner-wrapper">
                    <p class="orange-txt" >We Start with a Get-Things-Done Attitude</p>
                    <h2 id="portTitleOne" class="portfolio-sub-title">Destinity Property Management System</h2>
                    <div id="portText" class="text">Destinity is a flagship Creation by Scienter that has culminated various avenues in providing a complete information system. Destinity addresses multiple scopes such as reservations, front office, Revenue Management, Point of Sale, Food Costing, Menu Engineering, Payroll with time & attendance, Banquet Management, Accounting and a fully flexed booking engine. The system incorporates a front desk app, mobile order tracking app, and housekeeping app & includes a channel manager, interfaces of IP TV, Wifi, and Doorlock integration. The Destinity Property Management System is useful for many levels of system users throughout the property. </div>
                    <div class="portfolio-nav-wrapper">
                        <button class="portfolio-btn" onclick="prevSlide()">Previous</button>
                        <button class="portfolio-btn" onclick="nextSlide()">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio rightside -->
        <div class="portfolio-rightside-wrapper">
        <div class="myslider-wrapper">
                    <!-- <div class="next-to-next-wrapper">
                        <button class="far-dot-btn"></button>
                    </div> -->
                    <div class="next-wrapper ">
                        <button id="next" onclick="nextSlide()" class="dot-btn nextbtnin nextbtnoutmove" >
                            <img id="next-img" class="btn-img" src="{{  url('img/frontend/portfolio/2-contact-center.jpg')}}" alt="">
                        </button>
                        <button id="next-ghost" class="next-clone nextbtnThrow"></button>
                    </div>
                    <div class="active-wrapper nextmove prevmove">
                        <div class="circle-image-wrapper">
                            <img id="active-port-img" src="{{  url('img/frontend/portfolio/1-hotel-mgt.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="prev-warapper">
                        <button id="prev" onclick="prevSlide()" class="dot-btn prebtnin prevbtnoutmove" >
                            <img id="prev-img" class="btn-img" src="{{  url('img/frontend/portfolio/16-container-yard-mgt.jpg')}}" alt="">
                        </button>
                        <button id="prev-ghost" class="prev-clone prevbtnThrow"></button>
                    </div>
                    <!-- <div class="prev-to-prev-wrapper">
                        <button class="far-dot-btn"></button>
                    </div> -->
                </div>
            
        </div>
        <h1 class="main-title-mobile-only">Portfolio</h1>
    </section>
</div>


@endsection
<!-- end of news page -->


@push('after-scripts')

<script>
    var imgMainUrl = "{{ url('/img/frontend/portfolio/') }}";
</script>

<script src="{{ url('js/portfolio/portfolio.js') }}"></script>

<!-- particles scripts -->
<script src="{{ url('js/portfolio/particles.js') }}"></script>
<script src="{{ url('js/portfolio/app.js')}}"></script>
<script src="{{ url('js/portfolio/lib/stats.js') }}" ></script>

<!-- <script>
      var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script> -->

@endpush