<div class="sidenav">
    <div class="side-top">
        <div class="side-title-wrapper">
            <span class="segoe-ui-bold">

                <!-- Side Menu Page Name  -->
                @if (\Request::is('/'))
                    Home
                @elseif(\Request::is('about'))
                    About
                @elseif(\Request::is('services'))
                    Services
                @elseif(\Request::is('our-solutions'))
                    Our Solutions
                @elseif(\Request::is('our-clients'))
                    Our Clients
                @elseif(\Request::is('news'))
                    News
                @elseif(\Request::is('contact-us'))
                    Contact Us
                @elseif(\Request::is('login'))
                    Login Page
                @else
                    Page Not Found    
                @endif
                

            </span>
        </div>
    </div>
    <!-- <div class="side-middle">
        <span class="side-middle-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="59"
                viewBox="0 0 48 59">
                <g id="Group_48" data-name="Group 48" transform="translate(-57 -511)">
                    <line id="Line_2" data-name="Line 2" x2="29" transform="translate(63 530.5)" fill="none"
                        stroke="#fff" stroke-width="2" />
                    <line id="Line_3" data-name="Line 3" x2="42" transform="translate(63 540.5)" fill="none"
                        stroke="#fff" stroke-width="2" />
                    <line id="Line_4" data-name="Line 4" x2="29" transform="translate(63 551.5)" fill="none"
                        stroke="#fff" stroke-width="2" />
                    <text id="_01" data-name="01" transform="translate(57 524)" fill="#fff" font-size="12"
                        font-family="SegoeUI, Segoe UI">
                        <tspan x="0" y="0">01</tspan>
                    </text>
                    <text id="_05" data-name="05" transform="translate(57 567)" fill="#fff" font-size="12"
                        font-family="SegoeUI, Segoe UI">
                        <tspan x="0" y="0">05</tspan>
                    </text>
                </g>
            </svg>
        </span>
    </div> -->
    <div class="side-bottom">
        <ul class="siderbar-list">

                <a href="{{ route('frontend.index') }}#destiny-pms">
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.486" height="21.174" viewBox="0 0 15.486 21.174">
                                    <path id="Path_1" data-name="Path 1"
                                        d="M20.82,3.594H9.782a.808.808,0,0,0-.808.823V13.1l-2.8,3.093v4.151a.814.814,0,0,0,.808.829h7.188V16.626a.257.257,0,0,1,.24-.267h1.775a.254.254,0,0,1,.239.267v4.548h4.393a.843.843,0,0,0,.843-.829V4.417A.837.837,0,0,0,20.82,3.594Zm-7.6,14.959a.251.251,0,0,1-.251.251H11.174a.251.251,0,0,1-.251-.251V16.762a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.248a.251.251,0,0,1-.251.251H11.174a.251.251,0,0,1-.251-.251V13.513a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.287a.251.251,0,0,1-.251.251H11.174a.251.251,0,0,1-.251-.251V10.228a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.249a.251.251,0,0,1-.251.251H11.174a.251.251,0,0,1-.251-.251V6.979a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm3.248,6.535a.251.251,0,0,1-.251.251H14.422a.251.251,0,0,1-.251-.251V13.514a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.287a.251.251,0,0,1-.251.251H14.422a.251.251,0,0,1-.251-.251V10.228a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.249a.251.251,0,0,1-.251.251H14.422a.251.251,0,0,1-.251-.251V6.979a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm3.249,9.784a.251.251,0,0,1-.251.251H17.671a.251.251,0,0,1-.251-.251V16.762a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.248a.251.251,0,0,1-.251.251H17.671a.251.251,0,0,1-.251-.251V13.513a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.287a.251.251,0,0,1-.251.251H17.671a.251.251,0,0,1-.251-.251V10.228a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251Zm0-3.249a.251.251,0,0,1-.251.251H17.671a.251.251,0,0,1-.251-.251V6.979a.251.251,0,0,1,.251-.251h1.791a.251.251,0,0,1,.251.251ZM11.534,2.544l.65.467a.188.188,0,0,0,.288-.211l-.251-.76a.188.188,0,0,1,.067-.21l.645-.474a.188.188,0,0,0-.112-.339l-.8,0A.188.188,0,0,1,11.84.89L11.59.129a.188.188,0,0,0-.358,0l-.243.762a.187.187,0,0,1-.178.131l-.8,0A.188.188,0,0,0,9.9,1.37l.65.467a.188.188,0,0,1,.07.21l-.243.762a.188.188,0,0,0,.291.209l.645-.473A.187.187,0,0,1,11.534,2.544Zm3.944,0,.65.467a.188.188,0,0,0,.288-.211l-.251-.76a.188.188,0,0,1,.067-.21l.645-.474a.188.188,0,0,0-.112-.339l-.8,0a.188.188,0,0,1-.18-.129L15.533.13a.188.188,0,0,0-.358,0l-.242.761a.188.188,0,0,1-.179.131l-.8,0a.188.188,0,0,0-.109.341l.65.467a.187.187,0,0,1,.069.21l-.243.762a.188.188,0,0,0,.291.209l.644-.473A.189.189,0,0,1,15.479,2.544Zm3.871,0,.65.467a.188.188,0,0,0,.288-.211l-.252-.76a.188.188,0,0,1,.067-.21l.645-.474a.188.188,0,0,0-.112-.339l-.8,0a.189.189,0,0,1-.18-.129L19.4.13a.189.189,0,0,0-.359,0L18.8.895a.187.187,0,0,1-.178.131l-.8,0a.188.188,0,0,0-.109.341l.65.467a.187.187,0,0,1,.07.21l-.243.762a.188.188,0,0,0,.29.209l.645-.473A.189.189,0,0,1,19.35,2.544Z"
                                        transform="translate(-6.175)" fill="#fff" />
                                </svg>
                            </span>
                        </li>
                    </a>
            



            <a href="{{ route('frontend.index') }}#destiny-pos">
                <li>
                    <span>
                        <svg id="covered-food-tray-on-a-hand-of-hotel-room-service-svgrepo-com"
                            xmlns="http://www.w3.org/2000/svg" width="21.604" height="19.41" viewBox="0 0 21.604 19.41">
                            <g id="Group_47" data-name="Group 47" transform="translate(0 0)">
                                <path id="Path_2253" data-name="Path 2253"
                                    d="M107.527,29.31c.014-.231.028-.462.059-.7a13.79,13.79,0,0,1,.3-1.652c.075-.27.156-.537.241-.8.109-.254.215-.508.321-.755a6.482,6.482,0,0,1,.83-1.311l.226-.286c.084-.084.169-.166.25-.248a6.275,6.275,0,0,1,.492-.447,6.527,6.527,0,0,1,.952-.643,5.558,5.558,0,0,1,.781-.39c.45-.181.7-.272.7-.272s-.218.173-.6.453a8.366,8.366,0,0,0-.653.538,9.886,9.886,0,0,0-.771.753c-.139.139-.247.313-.379.474q-.1.123-.2.248c-.055.092-.111.185-.169.28a7.879,7.879,0,0,0-.62,1.225q-.118.34-.239.689c-.055.242-.117.486-.184.729a13.178,13.178,0,0,0-.242,1.534c-.03.19-.044.382-.062.575,4.167,0,7.392,0,11.905,0,.015-.2.024-.4.024-.6a7.305,7.305,0,0,0-6.334-7.346,1.18,1.18,0,1,0-1.609,0,7.3,7.3,0,0,0-6.333,7.346c0,.2.007.4.022.6Z"
                                    transform="translate(-100.196 -19.328)" fill="#fff" />
                                <rect id="Rectangle_6" data-name="Rectangle 6" width="16.875" height="1.489"
                                    transform="translate(4.728 10.422)" fill="#fff" />
                                <path id="Path_2254" data-name="Path 2254"
                                    d="M70.832,239.121c-.858.417-3.848,1.5-3.848,1.5l-3.535-.221s2.022-.562,2.806-.738a.536.536,0,0,0,.01-1.061c-.434,0-4.217.156-4.217.156l-2.512.9.665,4.208s.517-.885,1.033-.885,5,.119,5.612,0a44.455,44.455,0,0,0,4.764-2.955C72.051,239.73,71.693,238.7,70.832,239.121Z"
                                    transform="translate(-56.156 -226.154)" fill="#fff" />
                                <path id="Path_2255" data-name="Path 2255" d="M0,256.821v5.455l3.849-.721-.963-5.242Z"
                                    transform="translate(0 -242.865)" fill="#fff" />
                            </g>
                        </svg>
                    </span>
                </li>
            </a>
            <!-- efinance -->
            <a href="{{ route('frontend.index') }}#efinancial">
                <li>
                    <span>
                        <svg id="line-chart-662" xmlns="http://www.w3.org/2000/svg" width="29.014" height="20.076"
                            viewBox="0 0 29.014 20.076">
                            <g id="Group_46" data-name="Group 46" transform="translate(0 0)">
                                <ellipse id="Ellipse_71" data-name="Ellipse 71" cx="1.406" cy="1.406" rx="1.406"
                                    ry="1.406" transform="translate(0.458 16.808)" fill="#fff" />
                                <ellipse id="Ellipse_72" data-name="Ellipse 72" cx="1.406" cy="1.406" rx="1.406"
                                    ry="1.406" transform="translate(13.775 12.936)" fill="#fff" />
                                <ellipse id="Ellipse_73" data-name="Ellipse 73" cx="1.406" cy="1.406" rx="1.406"
                                    ry="1.406" transform="translate(8.533 8.159)" fill="#fff" />
                                <path id="Path_2245" data-name="Path 2245"
                                    d="M31.708,130.318,26.327,136c-.03.313.113.55.613.578l5.381-5.68A.59.59,0,0,0,31.708,130.318Z"
                                    transform="translate(-23.293 -119.626)" fill="#fff" />
                                <path id="Path_2246" data-name="Path 2246"
                                    d="M99.978,131.721l-2.23-2.131c-.38,0-.558.227-.58.61l2.252,2.153C99.891,132.345,100.066,132.119,99.978,131.721Z"
                                    transform="translate(-85.984 -118.982)" fill="#fff" />
                                <path id="Path_2247" data-name="Path 2247"
                                    d="M2,177.973a1.156,1.156,0,1,1-1.156,1.156A1.157,1.157,0,0,1,2,177.973m0-.842a2,2,0,1,0,2,2,2,2,0,0,0-2-2Z"
                                    transform="translate(0 -161.051)" fill="#fff" />
                                <path id="Path_2248" data-name="Path 2248"
                                    d="M72.071,104.007a1.156,1.156,0,1,1-1.156,1.156,1.157,1.157,0,0,1,1.156-1.156m0-.842a2,2,0,1,0,2,2,2,2,0,0,0-2-2Z"
                                    transform="translate(-62.008 -95.598)" fill="#fff" />
                                <path id="Path_2249" data-name="Path 2249"
                                    d="M116.528,145.531a1.156,1.156,0,1,1-1.156,1.156,1.157,1.157,0,0,1,1.156-1.156m0-.842a2,2,0,1,0,2,2,2,2,0,0,0-2-2Z"
                                    transform="translate(-101.348 -132.343)" fill="#fff" />
                                <path id="Path_2250" data-name="Path 2250"
                                    d="M219.357,38.269a1.156,1.156,0,1,1-1.156,1.156,1.157,1.157,0,0,1,1.156-1.156m0-.842a2,2,0,1,0,2,2,2,2,0,0,0-2-2Z"
                                    transform="translate(-192.34 -37.427)" fill="#fff" />
                                <path id="Path_2251" data-name="Path 2251"
                                    d="M150.323,62.848a.59.59,0,0,0-.613-.578l-5.381,5.68h0l-4.035,4.259c-.03.313.113.55.613.578l5.381-5.68h0Z"
                                    transform="translate(-124.143 -59.411)" fill="#fff" />
                                <ellipse id="Ellipse_74" data-name="Ellipse 74" cx="1.406" cy="1.406" rx="1.406"
                                    ry="1.406" transform="translate(25.61 0.592)" fill="#fff" />
                            </g>
                        </svg>
                    </span>
                </li>
            </a>
            <!-- <li>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.173" height="21.726" viewBox="0 0 19.173 21.726">
                        <g id="ic-media-note" transform="translate(1.5 1.517)">
                            <ellipse id="Ellipse_75" data-name="Ellipse 75" cx="2.695" cy="2.696" rx="2.695" ry="2.696" transform="translate(0 13.318)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <ellipse id="Ellipse_76" data-name="Ellipse 76" cx="2.695" cy="2.696" rx="2.695" ry="2.696" transform="translate(10.782 10.622)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <path id="Path_2256" data-name="Path 2256" d="M10,21.072V10.451a.283.283,0,0,1,.148-.243L20.391,5.087a.27.27,0,0,1,.391.243V18.376" transform="translate(-4.609 -5.059)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" fill-rule="evenodd"/>
                        </g>
                    </svg>
                </span>
            </li> -->
        </ul>
    </div>
</div>