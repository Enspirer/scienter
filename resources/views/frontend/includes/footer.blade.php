<footer>
    <!-- <div class="container-fluid footer-top-logo-area">
        <div class="container">
            <div class="row">
                <a href="{{ route('frontend.index') }}" class="navbar-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="293.671" height="58" viewBox="0 0 293.671 58">
                        <image id="scienter" width="293.671" height="58" opacity="0.9" xlink:href="data:image/png;base64,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"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    -->
        
    <div class="footer-main">
        <div class="container footer-main-container">
            <div class="row footer-mobile-row">
                <div class="col-md-4 tab-20 footer-main-text">
                    <img id="footer-logo" width="75%" src="{{ url('img/frontend/scienter-dark.png') }}" alt="scienter logo">
                </div>
                <div class="col-md-3 tab-30">
                    <h3>Customer Support</h3>
                    <ul class="footer-list">
                        <li><span><i class="fas fa-phone-alt"></i></span>+94 112 598 555</li>
                        <li><span><i class="fas fa-envelope"></i></span>info@scienstr.lk</li>
                        <li class="address-area"><span><i class="fas fa-map-marker-alt"></i></span><span class="contact-text">302, Galle Road, Colombo 04,<br class="hidden-br"> Sri Lanka.</span></li>
                    </ul>
                </div>
                <div class="col-md-2 tab-25">
                    <h3>Site Information</h3>
                    <ul class="footer-list">
                        <li>Privacy</li>
                        <li>Terms of Use</li>
                        <li>Legal Disclouser</li>
                        <li>Copyright</li>
                        <li>Sitemap</li>
                        <li>Cookie Policy</li>
                    </ul>
                </div>
                <div class="col-md-3 tab-25">
                    <ul class="social-list">
                        <div class="social-row">
                            <li><i class="fab fa-facebook-square"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-youtube"></i></li>
                        </div>
                        <div class="social-row">
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin"></i></li>
                            <li><span style="display:block;"></span></li>
                        </div>
                    </ul>
                </div>
            </div>
           
        </div>
          
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <p id="copyright-line">&copy; Scienter Technologies. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>