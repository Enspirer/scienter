@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('About Us'))

@push('after-styles')
<link href="{{ url('css/about.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">
    <section class="full-height-section about-full-height-area">
        <div class="row">
            <div class="col-md-6 col-xs-12 main-text-box">
                <h1 class="main-title TT-Light">Our Story</h1>
                <p class="TT-Light line-height-30 main-p">Since it’s inception in 1995, SCIENTER TECHNOLOGIES has provided Sri
                    Lankan and global industries with a multitude of comprehensive inte - grated software solutions.
                    Renowned for its ‘cutting edge’ in increasing efficiency, profitability and its modernity keeping in
                    line with continuous innovation witnessed and experienced technologically over the years, the
                    company has become the solutions prefered provider for many corporate entities.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <img class="half-img about-main-img" src="{{ url('img/frontend/about/man.png') }}" alt="man">
            </div>
        </div>
        <a href="#excellence" class="scroll-down">
            <div class="mouse">
                <span></span>
            </div>
            <div class="arrow">
                <span></span>
            </div>
        </a>
    </section>

    <section id="excellence" class="full-height-section excellence">
        <div class="excellence-inner-wrapper">
            <div class="col-md-6 excellence-right">
                <h3 class="TT-Light small-heading">Passion for</h3>
                <h2 class="TT-Light" style="font-size: 3rem;">Excellence</h2>
                <p class="TT-Light line-height-30">Our team comprises some of the most sought after and recognized
                    individuals in their chosen field of expertise who are passionate and committed to provide our clients
                    with cutting edge solutions. We are passionate about serving, and providing you with the best in what we
                    possess, leaving no stone unturned to carve out exactly what you require from us. We take pride in
                    ourselves in having been able to transcend the barrier of being a service provider, rather we are
                    trained to think in terms of ‘solutions’ and providing solutions to suit your business needs is our
                    passion. Our commitment to excellence is unparalleled, and our passion to perform is driven by our
                    desire to give out the best of what we possess.</p>
                
            </div>
        </div>
        <a href="#vision-mission" class="scroll-down-sub-btn" address="true"></a>
       
    </section>

    <section id="vision-mission" class="full-height-section about-full-height-area">
        <div class="row vision-mission-area">

            <div class="col-md-6 col-xs-12">
                <div class="about-half-box about-left-half-box">
                    <span class="box-top-logo">
                        <svg id="mission" xmlns="http://www.w3.org/2000/svg" width="117.16" height="118.07"
                            viewBox="0 0 117.16 118.07">
                            <path id="Path_3265" data-name="Path 3265"
                                d="M147.813,128.61a1.283,1.283,0,0,0-.24,1.782,44.194,44.194,0,1,1-12.919-11.437,1.268,1.268,0,1,0,1.283-2.187,46.805,46.805,0,1,0,13.653,12.086A1.273,1.273,0,0,0,147.813,128.61Z"
                                transform="translate(-65.527 -85.923)" fill="#f1663c" />
                            <path id="Path_3266" data-name="Path 3266"
                                d="M141.713,149.689a1.273,1.273,0,0,0-.7-1.652,29.029,29.029,0,1,0,15.435,14.477,1.269,1.269,0,0,0-2.291,1.093,26.447,26.447,0,1,1-14.088-13.219,1.268,1.268,0,0,0,1.647-.7Z"
                                transform="translate(-83.394 -103.742)" fill="#f1663c" />
                            <path id="Path_3267" data-name="Path 3267"
                                d="M146.865,181.806a1.268,1.268,0,1,0,0-2.536,12.42,12.42,0,1,0,12.415,12.417,1.268,1.268,0,1,0-2.536,0,9.879,9.879,0,1,1-9.879-9.879Z"
                                transform="translate(-100.038 -120.424)" fill="#f1663c" />
                            <path id="Path_3268" data-name="Path 3268"
                                d="M208.662,61.39,188.739,81.318l2.885,14.387L190.431,96.9,155.9,131.448a1.268,1.268,0,1,0,1.792,1.792l34.55-34.55,1.193-1.193,14.387,2.885,19.923-19.928L211.867,77.27Zm-1.538,5.147,2.286,11.4L193.8,93.549l-2.286-11.387Zm-.14,31.1-11.4-2.286L211.2,79.736l11.4,2.286Z"
                                transform="translate(-110.582 -61.39)" fill="#f1663c" />
                        </svg>

                    </span>
                    <div class="vision-text-wrapper">
                        <h2 class="TT-Light">Our Vision</h2>
                        <p class="grey-text TT-Light">To lead the industry as the preferred Information Technology
                            partner.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <div class="about-half-box about-right-half-box">
                    <span class="box-top-logo">
                        <svg id="Vission" xmlns="http://www.w3.org/2000/svg" width="142.336" height="71.009"
                            viewBox="0 0 142.336 71.009">
                            <path id="Path_3262" data-name="Path 3262"
                                d="M118.19,124.94c-38.454,0-70.039,34.25-70.352,34.6l-.838.9.82.907c.313.344,31.91,34.6,70.352,34.6s70.033-34.256,70.345-34.6l.82-.907-.82-.9C188.223,159.19,156.645,124.94,118.19,124.94Zm0,68.318c-33.787,0-62.255-27.442-67.5-32.817,5.249-5.375,33.731-32.817,67.5-32.817s62.249,27.442,67.5,32.817C180.439,165.816,151.964,193.258,118.19,193.258Z"
                                transform="translate(-47 -124.94)" fill="#f1663c" />
                            <path id="Path_3263" data-name="Path 3263"
                                d="M144.946,139.4A26.46,26.46,0,1,0,171.4,165.856,26.461,26.461,0,0,0,144.946,139.4Zm0,50.223a23.776,23.776,0,1,1,23.776-23.776,23.776,23.776,0,0,1-23.776,23.776Z"
                                transform="translate(-73.756 -130.353)" fill="#f1663c" />
                            <path id="Path_3264" data-name="Path 3264"
                                d="M153.709,162.81a11.813,11.813,0,1,0,11.807,11.809,11.813,11.813,0,0,0-11.807-11.809Zm0,20.929a9.122,9.122,0,1,1,9.122-9.122,9.122,9.122,0,0,1-9.122,9.122Z"
                                transform="translate(-82.519 -139.115)" fill="#f1663c" />
                        </svg>

                    </span>
                    <div class="vision-text-wrapper">
                        <h2 class="TT-Light">Our Mission</h2>
                        <p class="grey-text TT-Light">We empower organizations not just technology solutions. We Value
                            our
                            team not just provide employment. We build relationships not just customer portfolio</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#milestone" class="scroll-down-sub-btn milestone-btn" address="true"></a>
    </section>


    <!-- milestone desktop -->
    <section id="milestone" class="milestones about-full-height-area hidden-xs">
        <h1 class="sub-center-heading TT-Light">Milestones</h1>
        <div class="milestone-main-wrapper">
            <div class="yr-row top-row">
                <div class="top-symbol-wrapper">
                    <!-- <i class="fas fa-circle milestone-circle" aria-hidden="true"></i> -->
                    <div class="circle-wrapper">
                        <div class="circle"></div>
                    </div>
                    <div class="vertical-line-wrapper">
                        <span class="vertical-line"></span>
                        <span class="vertical-line-animated"></span>
                    </div>

                </div>
                1995
            </div>
            <div id="milestone-one" class="milestone-row">
                <div class="milestone-left-wrapper">
                    <div class="milestone-text-wrapper-left txt-one">
                        <h5 class="TT-Regular about-blue-font">Dummy Text Here</h5>
                        <h3 class="TT-Regular about-blue-font">Dummy Title Here</h3>
                        <p class="TT-Light">Our team comprises some of the most sought after and recognized individuals
                            in their chosen field of expertise who are passionate and committed to provide our </p>
                    </div>
                </div>
                <div class="milestone-line-wrapper">
                    <div class="milestone-line"></div>
                    <div id="about-line-one" class="milestone-line-animated one"></div>


                </div>
                <div class="milestone-right-wrapper img-one">
                    <div class="image">
                        <img class="milestone-img" src="{{ url('img/frontend/about/milestone-one.png') }}" data-scroll-zoom
                            alt="milestone-one">
                    </div>
                </div>
            </div>
            <div class="yr-row yr-two">1995</div>
            <div id="milestone-two" class="milestone-row">
                <div class="milestone-left-wrapper img-two"> 
                    <div class="image">
                        <img class="milestone-img" src="{{ url('img/frontend/about/milestone-two.png') }}" data-scroll-zoom
                        alt="milestone-two">
                    </div>
                </div>
                <div class="milestone-line-wrapper">
                    <div class="milestone-line"></div>
                    <div id="about-line-two" class="milestone-line-animated two"></div>
                </div>
                <div class="milestone-right-wrapper">
                    <div class="milestone-text-wrapper-right txt-two">
                        <h5 class="TT-Regular about-blue-font">Dummy Text Here</h5>
                        <h3 class="TT-Regular about-blue-font">Dummy Title Here</h3>
                        <p class="TT-Light">Our team comprises some of the most sought after and recognized individuals
                            in their chosen field of expertise who are passionate and committed to provide our </p>
                    </div>
                </div>
            </div>
            <div class="yr-row yr-three">1995</div>
            <div class="last-milestone-wrapper">
                <div id="milestone-three" class="milestone-row">
                    <div class="milestone-left-wrapper">
                        <div class="milestone-text-wrapper-left txt-three">
                            <h5 class="TT-Regular about-blue-font">Dummy Text Here</h5>
                            <h3 class="TT-Regular about-blue-font">Dummy Title Here</h3>
                            <p class="TT-Light">Our team comprises some of the most sought after and recognized
                                individuals in their chosen field of expertise who are passionate and committed to
                                provide our </p>
                        </div>
                    </div>
                    <div class="milestone-line-wrapper">
                        <div class="milestone-line"></div>
                        <div id="about-line-three" class="milestone-line-animated three"></div>

                    </div>


                    <div class="milestone-right-wrapper img-three">
                        <div class="image">
                            <img class="milestone-img" src="{{ url('img/frontend/about/milestone-three.png') }}" data-scroll-zoom
                            alt="milestone-one">
                        </div>
                    </div>
                </div>


            </div>
            <div class="grey-circle-wrapper">
                <div class="grey-circle"></div>
                <div class="yr-row end-row">2021</div>
            </div>

        </div>
    </section>

    <!-- milestone mobile -->
    <section id="milestone-mobile" class="milestones about-full-height-area visible-xs">
        <h1 class="sub-center-heading TT-Light">Milestones</h1>
        <div class="milestone-mobile-main-wrapper">
           <div class="milestone-img-mobile-wrapper">
                <img id="mobile-miles-img" class="milestone-img-mobile" src="{{ url('img/frontend/about/milestone-one.png') }}" data-scroll-zoom
                                alt="milestone-one">
           </div>
           <div class="milestone-yr-indicator">
               <p id="mobile-milestone-year">1995</p>
           </div>
           <div class="milestone-point-bar">
           <div class="point-line-mobile"></div>
               <div class="point-inner-wrapper">
                    <span id="pointOne" onclick="mobileMilestoneOne()" class="milestone-point active-point-mobile"></span>
               </div>
               <div class="point-inner-wrapper">
                    <span id="pointTwo" onclick="mobileMilestoneTwo()" class="milestone-point"></span>
               </div>
               <div class="point-inner-wrapper">
                    <span id="pointThree" onclick="mobileMilestoneThree()" class="milestone-point"></span>
               </div>
                
           </div>
           <div class="milestone-txt-mobile-wrapper">
                <h5 id="mobileMilestoneSubTitle" class="TT-Regular about-blue-font">Dummy Subtitle One Here</h5>
                <h3 id="mobileMilestoneTitle" class="TT-Regular about-blue-font">Dummy Title One Here</h3>
                <p id="mobileMilestoneTxt" class="TT-Light">(dummy txt one) Our team comprises some of the most sought after and recognized individuals
                            in their chosen field of expertise who are passionate and committed to provide our </p>
           </div>

        </div>
    </section>
</div>

<!-- mobile milestone script -->
<script>

    milestoneImg = document.getElementById("mobile-miles-img");
    milestoneTitle = document.getElementById("mobileMilestoneTitle");
    milestoneSubTitle = document.getElementById("mobileMilestoneSubTitle");
    milestoneTxt = document.getElementById("mobileMilestoneTxt");
    milestoneyr = document.getElementById("mobile-milestone-year");


    //milestone points 
    milestonepointOne = document.getElementById("pointOne");
    milestonepointTwo = document.getElementById("pointTwo");
    milestonepointThree = document.getElementById("pointThree");

    function mobileMilestoneOne() {
        milestoneImg.src = "{{ url('img/frontend/about/milestone-one.png') }}";
        milestoneTitle.innerHTML = "Dummy Title One Here";
        milestoneSubTitle.innerHTML = "Dummy Subtitle One Here";
        milestoneTxt.innerHTML = "(dummy txt one)Our team comprises some of the most sought after and recognized individuals in their chosen field of expertise who are passionate and committed to provide our ";
        milestoneyr.innerHTML = "1995";

        //point active style
        milestonepointOne.classList.add("active-point-mobile");
        milestonepointTwo.classList.remove("active-point-mobile");
        milestonepointThree.classList.remove("active-point-mobile");
    }

    function mobileMilestoneTwo() {
        milestoneImg.src = "{{ url('img/frontend/about/milestone-two.png') }}";
        milestoneTitle.innerHTML = "Dummy Title Two Here";
        milestoneSubTitle.innerHTML = "Dummy Subtitle Two Here";
        milestoneTxt.innerHTML = "(dummy txt two)Our team comprises some of the most sought after and recognized individuals in their chosen field of expertise who are passionate and committed to provide our ";
        milestoneyr.innerHTML = "2000";
        //point active style
       //point active style
        milestonepointOne.classList.remove("active-point-mobile");
        milestonepointTwo.classList.add("active-point-mobile");
        milestonepointThree.classList.remove("active-point-mobile");
    }

    function mobileMilestoneThree() {
        milestoneImg.src = "{{ url('img/frontend/about/milestone-three.png') }}";
        milestoneTitle.innerHTML = "Dummy Title Three Here";
        milestoneSubTitle.innerHTML = "Dummy Subtitle Three Here";
        milestoneTxt.innerHTML = "(dummy txt three)Our team comprises some of the most sought after and recognized individuals in their chosen field of expertise who are passionate and committed to provide our ";
        milestoneyr.innerHTML = "2021";

        //point active style
        milestonepointOne.classList.remove("active-point-mobile");
        milestonepointTwo.classList.remove("active-point-mobile");
        milestonepointThree.classList.add("active-point-mobile");
    }
    

</script>

@endsection



@push('after-scripts')



<!-- text amd image zoom animation -->
<script type="text/javascript">
    //main text
    gsap.to("h1.main-title.TT-Light", {
			scrollTrigger:{
				trigger: "a.scroll-down", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})
   
        gsap.to(".main-p", {
			scrollTrigger:{
				trigger: "a.scroll-down", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -150
		})

        //excellence
        gsap.to(".excellence-right", {
			scrollTrigger:{
				trigger: "a.scroll-down-sub-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -200
		})

           //vision mission
           gsap.to(".vision-text-wrapper", {
			scrollTrigger:{
				trigger: ".milestone-btn", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})

         //about animation area
         gsap.to(".milestone-text-wrapper-left.txt-one", {
			scrollTrigger:{
				trigger: ".yr-two", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})

        gsap.to(".milestone-right-wrapper.img-one", {
			scrollTrigger:{
				trigger: ".yr-two", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})



        gsap.to(".milestone-left-wrapper.img-two", {
			scrollTrigger:{
				trigger: ".yr-three", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})

        gsap.to(".milestone-text-wrapper-right.txt-two", {
			scrollTrigger:{
				trigger: ".yr-three", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})


        gsap.to(".milestone-text-wrapper-left.txt-three", {
			scrollTrigger:{
				trigger: ".end-row", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})

        gsap.to(".milestone-right-wrapper.img-three", {
			scrollTrigger:{
				trigger: ".end-row", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -60
		})

        gsap.to(".about-main-img", {
			scrollTrigger:{
				trigger: "a.scroll-down", 
				start: "top bottom", 
				end: "bottom top", 
				scrub: 1
			},
			y: -100
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

<!-- timeline script -->
<script>
$("#milestone-one").mouseover(function() {
    $(".milestone-line-animated.one").addClass("firstanimation");
})

// $("#milestone-two").mouseover(function() {
//     $(".milestone-line-animated.two").addClass("firstanimation");
// })

// $(".last-milestone-wrapper").mouseover(function() {
//     $(".milestone-line-animated.three").addClass("firstanimation");
// })


//catch animaton

const firstLine = document.getElementById("about-line-one");
const secondLine = document.getElementById("about-line-two");
const thirdLine = document.getElementById("about-line-three");

firstLine.addEventListener("animationend", () => {
    $(".milestone-line-animated.two").addClass("firstanimation");
})

secondLine.addEventListener("animationend", () => {
   $(".milestone-line-animated.three").addClass("firstanimation");
})



// $(".last-milestone-wrapper").mouseout(function() {
//     $(".milestone-line-animated.three").addClass("secondanimation");
// })



// var lastScrollTop = 0;
//     $(".milestone-three").scroll(function(event){
//     var st = $(this).scrollTop();
//     if (st > lastScrollTop){

//     } else {
//         $(".milestone-line-animated.three").removeClass("firstanimation");
//     }
//     lastScrollTop = st + 600;

//     console.log(lastScrollTop);


// });
</script>

@endpush