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
            <div class="topic-wrapper">
                <h1 class="main-title TT-Light" style="margin-top:30px; margin-bottom:0px;">WHAT WE DO</h1>
                <p class="orange-txt">We pursue Innovative Information Service excellence. Our Skill and our Legacy go hand in hand.</p>
            </div>
        </div>
        <div class="row tab-align-center-row tab-mb-30">
            <div class="col-md-7 col-xs-12 tab-50">
                <div class="image">
                    <img width="100%" src="{{ url('/img/frontend/solution/solution-main.png') }}" alt="man" class="half-img" data-scroll-zoom>
                </div>
                
            </div> 
            <div class="col-md-5 col-xs-12 tab-50 main-text-box solution-one ">
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
                <p class="TT-Regular">We have created and sustained multiple industry-standard data and information infrastructures that facilitate various businesses globally. Masses trust our sustenance and skill in delivering beyond what they aspire.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
        </div>
        <a href="#software-development" class="scroll-down-sub-btn solution-two-btn" address="true"></a>
    </section>

    <section id="software-development" class="full-height-area">
        <div class="row tab-align-center-row tab-mb-30">
            <div class="col-md-5 col-xs-12 tab-50 main-text-box solution-two">
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
               <p class="TT-Regular">We believe that every business is unique & We welcome that. Our custom software development capability is our bragging right. We have the moulded ability to understand your requirement and provide synergetic functions.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
            <div class="col-md-7 col-xs-12 tab-50 mobile-mt-30">
                <div class="image">
                    <img width="100%" src="{{ url('/img/frontend/solution/solution-one.png') }}" alt="man" class="half-img" data-scroll-zoom>
                </div>      
            </div> 
        </div>
        <a href="#web-application" class="scroll-down-sub-btn solution-three-btn" address="true"></a>
    </section>

    <section id="web-application" class="full-height-area ">
        <div class="row tab-align-center-row tab-mb-30">
            <div class="col-md-7 col-xs-12 tab-50">
                <div class="image">
                    <img width="100%" src="{{ url('/img/frontend/solution/solution-two.png') }}" alt="man" class="half-img" data-scroll-zoom>
                </div>
            </div> 
            <div class="col-md-5 col-xs-12 tab-50 main-text-box solution-three">
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
                <p class="TT-Regular">We make Your Ideas Come to Life in Cyberspace. Our skills can challenge your imagination in Function and Design. We give you cutting edge solutions determined solely for efficient and aesthetic improvements of your web application system.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
        </div>
        <a href="#mobie-application" class="scroll-down-sub-btn solution-four-btn" address="true"></a>
    </section>


    <section id="mobie-application" class="full-height-area ">
        <div class="row mobile-column-reverse-row tab-align-center-row tab-mb-30">
        <div class="col-md-5 col-xs-12 tab-50 main-text-box solution-four">
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
                <p class="TT-Regular">We create Mobile Apps. Our team is eager to test its capacity against new ideas that You bring to the table. Our mobile applications are tried and tested across multiple platforms, cultures and geographies. Find Out How We Can Make Your Ideas Fruitful & Functional.</p>
                <button class="btn solutions-btn TT-Regular">Inquire Now</button>
            </div>
            <div class="col-md-7 col-xs-12 tab-50">
                <div class="image">
                    <img width="100%" src="{{ url('/img/frontend/solution/solution-three.png') }}" alt="man" class="half-img" data-scroll-zoom >
                </div>
                
            </div> 
        </div>
        <div class="animate-trigger"></div>
    </section>
</div>
@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- timeline script -->

<script>

     //industry
     gsap.to(".main-text-box.solution-one", {
			scrollTrigger:{
				trigger: "a.scroll-down-sub-btn.solution-two-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})

    //customer
    gsap.to(".main-text-box.solution-two", {
			scrollTrigger:{
				trigger: "a.scroll-down-sub-btn.solution-three-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})


    //web
    gsap.to(".main-text-box.solution-three", {
			scrollTrigger:{
				trigger: "a.scroll-down-sub-btn.solution-four-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})

      //mobile
      gsap.to(".main-text-box.solution-four", {
			scrollTrigger:{
				trigger: ".animate-trigger", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})
    
</script>

<script>
// Higher number = more zoom
let scaleAmount = 0.4;

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