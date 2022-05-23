@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('News'))

@push('after-styles')
<link href="{{ url('css/news.css') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')
<div class="container-fluid">
<section class="full-height-area">
    <div class="row">
        <h1 class="main-title TT-Light" style="margin-top:30px; margin-bottom: 15px;">Top Story</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 tab-12">
            <div class="image">
                <img width="100%" class="half-img" src="{{ url('img/frontend/news/news-img.png') }}" alt="man" data-scroll-zoom>
            </div>         
        </div>
        <div class="col-md-6 col-xs-12 tab-12 main-text-box">
            <h2 class="TT-Bold news-subheading">Scienter - Wisdom Partnership</h2>
            <p class="TT-Regular">Scienter Technologies undertook a long-term partnership with Ethiopian IT expert WISCOM Technology PLC to provide hospitality solutions for Ethiopia. Unlike most countries, Ethiopia has a mandatory requirement by the government for the use of fiscal printers, that directly send all transactions to the Inland Revenue Authority. As a result, Scienter Technologies undertook the integration development and received the certification from the government body; enabling the sale and distribution of the Destinity PMS. Currently a tremendous growth in tourism and development is underway in Ethiopia. Both Scienter Technologies and WISCOM are in a strategically strong position to meet this demand with expectations to be the market leader by 2022 in Ethiopia.</p>
        </div>
    </div>
    <a href="#latest-news" class="scroll-down-sub-btn" address="true"></a>
</section>
<section id="latest-news" class="full-height-area">
    <h2 class="mb-45">Latest News</h2>
    <div class="container">
        <div class="row news-box-row">
            <div class="col-md-4 col-xs-12 tab-12 news-box tab-mb-30">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/wis.png') }}" alt="wiscom logo">
                    <h3 class="news-title">Scienter - Wisdom Partnership</h3>
                    <p>Scienter Technologies undertook a long-term partnership with Ethiopian IT expert WISCOM Technology PLC to provide hospitality solutions for Ethiopia. Unlike most countries, Ethiopia has a mandatory requirement by the government for the use of fiscal printers, that directly send all transactions to the Inland Revenue Authority. As a result, Scienter Technologies undertook the integration development and received the certification from the government body; enabling the sale and distribution of the Destinity PMS. Currently a tremendous growth in tourism and development is underway in Ethiopia. Both Scienter Technologies and WISCOM are in a strategically strong position to meet this demand with expectations to be the market leader by 2022 in Ethiopia.</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 tab-12 news-box tab-mb-30">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/GJC.png') }}" alt="gjc logo">
                    <h3 class="news-title">Gloria Jeen's Coffee</h3>
                    <p>Gloria Jean’s Coffee is a global retail coffee house chain that is owned by Retail Food Group and it operates in 39 countries. In 2020, Scienter Technologies (Pte) Ltd undertook installation, implementation and training of Destinity at the Gloria Jean’s chain at Timor-Leste. Scienter Technologies offers the complete centralized restaurant management solution of Destinity POS that covers both the front-end and back-end operations. This helped the chain reach operational efficiency by streamlining their activities and serve their growing demand with ease</p>
                </div> 
            </div>

            <div class="col-md-4 col-xs-12 tab-12 news-box tab-mb-30">
                <div class="news-inner-box">
                    <img class="news-box-img" src="{{ url('img/frontend/news/Orient.jpg') }}" alt="gjc logo">
                    <h3 class="news-title">Orient Finance PLC</h3>
                    <p>Orient Finance PLC partnered with Scienter for the "eFinancials" software solution which respected and permitted them to uphold the company values of timeliness and total excellence in customer service,  reliability and respect for everyone, ultimate satisfaction to all stakeholders,  sense of integrity, honesty & social responsibility,  transparency in all dealings while providing an infallible service to it's customers</p>
                </div>               
            </div>
        </div>
    </div>
    <div class="news-trigger"></div>
</section>
</div>


@endsection
<!-- end of news page -->


@push('after-scripts')

<script>
     //main text
     gsap.to(".main-text-box", {
			scrollTrigger:{
				trigger: "a.scroll-down-sub-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})

     //news cards
     gsap.to(".news-box", {
			scrollTrigger:{
				trigger: ".news-trigger", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})
</script>


<script>
    // Higher number = more zoom
let scaleAmount = 0.2;

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
    const borderHeight = parseFloat(getComputedStyle(parent).getPropertyValue('border-bottom-width')) + parseFloat(getComputedStyle(element).getPropertyValue('border-top-width'));
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

@endpush