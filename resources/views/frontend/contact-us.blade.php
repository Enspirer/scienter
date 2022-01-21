@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Contact Us'))

@push('after-styles')
<link href="{{ url('css/contact-us.css') }}" rel="stylesheet">
<link href="{{ url('scss/contact.scss') }}" rel="stylesheet">
@endpush


<!-- news page content -->
@section('content')

<section class="full-height-area contact-main-section">
    <div class="contact-main-banner-wrapper" style="position:relative;">
        <img id="contact-banner" width="100%" src="{{ url('img/frontend/contact-us/banner-one.png') }}"
            alt="contact banner">
        <div class="contact-banner-text-wrapper hidden-xs">
            <div class="blur"></div>
            <div class="text-area">
                <h3>Contacts</h3>
                <p>Get the support you need to keep our solution running at peak performance.</p>
                <div id="hotline-hide-helper-desktop" class="hotline-hide-helper">
                    <h4>Office Name:</h4>
                    <p id="side-area-contact-office">Cooperate Office</p>
                    <h4 id="addressHideDesktop">Address:</h4>
                    <p id="side-area-contact-address">#302, Galle Road <br /> Colombo 04, Sri Lanka</p>
                    <h4>Phone:</h4>
                    <p id="side-area-contact-phone">T| +94 112 598 555 <br /> F| +94 112 259 911</p>
                    <h4 id="emailHideDesktop">Email</h4>
                    <p id="side-area-contact-email">E| info@scienter.lk</p>
                </div>

                <!--visible only for hotline -->
                <div id="hotline-multiple-number-wrapper">
                    <div class="hotline-number-row">
                        <h4>Hotel Management Applications</h4>
                        <p>T| +94 714 752 752</p>
                    </div>
                    <div class="hotline-number-row">
                        <h4>Restuarant Management Applications</h4>
                        <p>T| +94 714 751 751</p>
                    </div>
                    <div class="hotline-number-row">
                        <h4>Financial Applications</h4>
                        <p>T| +94 112 598 555</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="our-locations-wrapper">
        <div class="contact-left-btn">
            <a href="#" class="contact-area-btns" onclick="contactSlideLeft()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79"
                    height="89" viewBox="0 0 79 89">
                    <defs>
                        <filter id="Polygon_2" x="0" y="0" width="79" height="89" filterUnits="userSpaceOnUse">
                            <feOffset dy="3" input="SourceAlpha" />
                            <feGaussianBlur stdDeviation="3" result="blur" />
                            <feFlood flood-opacity="0.161" />
                            <feComposite operator="in" in2="blur" />
                            <feComposite in="SourceGraphic" />
                        </filter>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Polygon_2)">
                        <path id="Polygon_2-2" data-name="Polygon 2" d="M35.5,0,71,61H0Z"
                            transform="translate(9 77) rotate(-90)" fill="#fff" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="contact-area">
            <span class="location-wrapper">
                <h3 id="contact-location">Sri Lanka</h3>
            </span>
            <p id="contact-office">COOPERATE OFFICE</p>
        </div>
        <div class="contact-right-btn">
            <a href="#" class="contact-area-btns" onclick="contactSlideRight()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79"
                    height="89" viewBox="0 0 79 89">
                    <defs>
                        <filter id="Polygon_1" x="0" y="0" width="79" height="89" filterUnits="userSpaceOnUse">
                            <feOffset dy="3" input="SourceAlpha" />
                            <feGaussianBlur stdDeviation="3" result="blur" />
                            <feFlood flood-opacity="0.161" />
                            <feComposite operator="in" in2="blur" />
                            <feComposite in="SourceGraphic" />
                        </filter>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Polygon_1)">
                        <path id="Polygon_1-2" data-name="Polygon 1" d="M35.5,0,71,61H0Z"
                            transform="translate(70 6) rotate(90)" fill="#fff" />
                    </g>
                </svg>
            </a>
        </div>
    </div>

    


    <div class="contact-mobile-banner-text-wrapper visible-xs">
            <div class="mobile-contact-txt">
                <h3>Contacts</h3>
                <p>Get the support you need to keep our solution running at peak performance.</p>
                <div id="hotline-hide-helper-mobile" class="hotline-hide-helper">
                    <h4>Office Name:</h4>
                    <p id="mobile-contact-office">Cooperate Office</p>
                    <h4 id="addressHideMobile">Address:</h4>
                    <p id="mobile-contact-address">#302, Galle Road <br /> Colombo 04, Sri Lanka</p>
                    <h4>Phone:</h4>
                    <p id="mobile-contact-phone">T| +94 112 598 555 <br /> F| +94 112 259 911</p>
                    <h4 id="emailHideMobile">Email</h4>
                    <p id="mobile-contact-email">E| info@scienter.lk</p>
                </div>
               
                  <!--visible only for hotline -->
                  <div id="hotline-multiple-number-wrapper-mobile">
                    <div class="hotline-number-row">
                        <h4>Hotel Management Applications</h4>
                        <p>T| +94 714 752 752</p>
                    </div>
                    <div class="hotline-number-row">
                        <h4>Restuarant Management Applications</h4>
                        <p>T| +94 714 751 751</p>
                    </div>
                    <div class="hotline-number-row">
                        <h4>Financial Applications</h4>
                        <p>T| +94 112 598 555</p>
                    </div>
                </div>
            </div>

        </div>
    <a href="#get-in-touch" class="scroll-down-sub-btn" address="true"></a>
</section>

<section id="get-in-touch" class="full-height-area">
    <div class="contact-txt">
        <div class="contact-heading-wrapper">
            <h1 style="margin-bottom:0px;">Get In Touch</h1>
            <p class="orange-txt ">We'd Love to Hear from You</p>
        </div>

    </div>

    <form action="" class="contact-form">
        <div class="contact-form-row">
            <div class="input-wrapper">
                <label for="name">Full Name</label>
                <input type="text" name="name">
                <div class="inputline"></div>
            </div>
            <div class="input-wrapper">
                <label for="email">Email Address</label>
                <input type="text" name="email">
                <div class="inputline"></div>
            </div>
        </div>
        <div class="contact-form-row">
            <div class="input-wrapper">
                <label for="subject">Subject</label>
                <input type="text" name="subject">
                <div class="inputline"></div>
            </div>
            <div class="input-wrapper">
                <label for="contact">Contact No</label>
                <input type="text" name="contact">
                <div class="inputline"></div>
            </div>
        </div>
        <div class="contact-form-row">
            <div class="input-wrapper">
                <label for="message">Type your message</label>
                <input type="text" name="message">
                <div class="inputline"></div>
            </div>
        </div>
        <div class="contact-form-last-row">
            <h5>Consent</h5>
            <div class="last-row-content-wrapper">
                <div class="accept-row">
                <input type="checkbox" required>
                <p>Acceptance *<br>
                    I would like to receive information & updates from Trace Solutions in relation to my enquiry. I
                    understand that Trace will never share my information.</p>
                </div>
         
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                <div class="submit-wrapper">
                    <input type="submit" value="Send Message" class="contact-submit">
                </div>
            </div>

        </div>
    </form>



</section>


@endsection
<!-- end of news page -->


@push('after-scripts')
<!-- form inputs script -->
<script>
$('head').append(
    '<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">');

$('input').focus(function(event) {
    $(this).closest('.float-label-field').addClass('float').addClass('focus');
})

$('input').blur(function() {
    $(this).closest('.float-label-field').removeClass('focus');
    if (!$(this).val()) {
        $(this).closest('.float-label-field').removeClass('float');
    }
});
</script>

<!-- timeline script -->
<script>
//banner image holder

var contactImgUrl = "{{ url('/img/frontend/contact-us/') }}";



const contactBanner = [contactImgUrl + "/banner-one.png", contactImgUrl + "/banner-two.png", contactImgUrl +
    "/banner-three.png", contactImgUrl + "/banner-four.png"
];

//banner location holder
const contactLocation = ["Sri Lanka", "Yangon", "Dhaka", "Hotline"];

const contactOffice = ["cooperate office", "regional office", "regional office", "regional office"];

const contactAddress = ["#302, Galle Road, <br> Colombo 04, Sri Lanka", "225/227, 11<sup>th</sup> floor, Olympic <br> Tower, Kyauktada Township,<br> Yangon, Myanmar", "Plot No 1361(4th Floor), <br> Avenue #10, Mirpur DOHS, Dhaka 1216, Bangladesh", " "];

const contactPhone = ["T|+94 112 598 555 <br> F|+94 112 259 911", "T|+95 979 536 1165 <br> T|+95 942 171 9012", "T|+88 017 905 45411", " "];

const contactEmail = ["E|info@scienter.lk", "E|sagarv@scienter.lk", "E| info@scienter.lk", " "];

var i = 0;

function contactSlideRight() {

    if (i < 3) {
        i = i + 1;
    } else {
        i = 0;
    }
 
    

    document.getElementById("contact-banner").src = contactBanner[i];
    document.getElementById("contact-location").innerHTML = contactLocation[i];
    document.getElementById("contact-office").innerHTML = contactOffice[i];


    document.getElementById("side-area-contact-office").innerHTML = contactOffice[i];
    document.getElementById("mobile-contact-office").innerHTML = contactOffice[i];

   


    document.getElementById("side-area-contact-address").innerHTML = contactAddress[i];
    document.getElementById("mobile-contact-address").innerHTML = contactAddress[i];

   

    document.getElementById("side-area-contact-phone").innerHTML = contactPhone[i];
   
    document.getElementById("mobile-contact-phone").innerHTML = contactPhone[i];

    

    document.getElementById("side-area-contact-email").innerHTML = contactEmail[i];
    document.getElementById("mobile-contact-email").innerHTML = contactEmail[i];

    //Address hide when hotline
    if(contactLocation[i] == "Hotline") {
        document.getElementById("addressHideMobile").style.display = "none";
        document.getElementById("addressHideDesktop").style.display = "none";
        document.getElementById("emailHideMobile").style.display = "none";
        document.getElementById("emailHideDesktop").style.display = "none";


        //other details hide
        document.getElementById("hotline-hide-helper-desktop").style.display = "none";
        document.getElementById("hotline-hide-helper-mobile").style.display = "none";

        //hotline multiple number show
        document.getElementById("hotline-multiple-number-wrapper").style.display = "block";
        document.getElementById("hotline-multiple-number-wrapper-mobile").style.display = "block";
       
       
      

    } else {
        document.getElementById("addressHideMobile").style.display = "block";
        document.getElementById("addressHideDesktop").style.display = "block";
        document.getElementById("emailHideMobile").style.display = "block";
        document.getElementById("emailHideDesktop").style.display = "block";

        document.getElementById("hotline-hide-helper-desktop").style.display = "block";
        document.getElementById("hotline-hide-helper-mobile").style.display = "block";

        document.getElementById("hotline-multiple-number-wrapper").style.display = "none";
        document.getElementById("hotline-multiple-number-wrapper-mobile").style.display = "none";
      
        
    }
    
}

function contactSlideLeft() {

    if (i > 0) {
        i = i - 1;
    } else {
        i = 3;
    }

    
 

    document.getElementById("contact-banner").src = contactBanner[i];
    document.getElementById("contact-location").innerHTML = contactLocation[i];
    document.getElementById("contact-office").innerHTML = contactOffice[i];
    document.getElementById("side-area-contact-office").innerHTML = contactOffice[i];
    document.getElementById("mobile-contact-office").innerHTML = contactOffice[i];

    document.getElementById("side-area-contact-address").innerHTML = contactAddress[i];
    document.getElementById("mobile-contact-address").innerHTML = contactAddress[i];

    document.getElementById("side-area-contact-phone").innerHTML = contactPhone[i];
    document.getElementById("mobile-contact-phone").innerHTML = contactPhone[i];

    document.getElementById("side-area-contact-email").innerHTML = contactEmail[i];
    document.getElementById("mobile-contact-email").innerHTML = contactEmail[i];




      //Address hide when hotline
      if(contactLocation[i] == "Hotline") {
        document.getElementById("addressHideMobile").style.display = "none";
        document.getElementById("addressHideDesktop").style.display = "none";
        document.getElementById("emailHideMobile").style.display = "none";
        document.getElementById("emailHideDesktop").style.display = "none";


        //other details hide
        document.getElementById("hotline-hide-helper-desktop").style.display = "none";
        document.getElementById("hotline-hide-helper-mobile").style.display = "none";

        //hotline multiple number show
        document.getElementById("hotline-multiple-number-wrapper").style.display = "block";
        document.getElementById("hotline-multiple-number-wrapper-mobile").style.display = "block";
        

    } else {
        document.getElementById("addressHideMobile").style.display = "block";
        document.getElementById("addressHideDesktop").style.display = "block";
        document.getElementById("emailHideMobile").style.display = "block";
        document.getElementById("emailHideDesktop").style.display = "block";

        document.getElementById("hotline-hide-helper-desktop").style.display = "block";
        document.getElementById("hotline-hide-helper-mobile").style.display = "block";

        document.getElementById("hotline-multiple-number-wrapper").style.display = "none";
        document.getElementById("hotline-multiple-number-wrapper-mobile").style.display = "none";
        
        
    }
}
</script>

@endpush