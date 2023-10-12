<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>{{ settings()->get('common.title') }}</title>
        <link rel="stylesheet" type="text/css" href="/web/styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/web/styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web/fonts/css/fontawesome-all.min.css">
        <link rel="manifest" href="/web/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
        <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
        <link rel="icon" href="/assets/images/logo.png" type="image/x-icon">
    </head>

    <body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

        <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

        <div id="page">



            <div id="footer-bar" class="footer-bar-1">
                <a href="{{ route('web.home.index') }}"><i class="fa fa-home"></i><span>Home</span></a>

                <a href="{{ route('web.cart.index') }}" class="active-nav" ><i class="fa fa-shopping-cart"></i><span>Cart</span></a>
                <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Settings</span></a>
            </div>

            <div class="page-content">

                <div class="content notch-clear">
                    <div class="d-flex pt-2">
                        <div class="align-self-center" style="margin-left: auto">
                            <a href="{{ route('web.home.index') }}"><img src="/assets/images/logo3.png" style="max-height: 50px" alt="Logo"></a>
                        </div>
                        <div class="align-self-center ms-auto">
                            <a href="{{ route('web.cart.index') }}" class="d-block" ><i class="text-black color-black fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                    </div>
                </div>




                <!--<div class="content mt-n1">
                    <div class="search-box bg-theme color-theme rounded-m shadow-l">
                        <i class="fa fa-search"></i>
                        <input type="text" class="border-0" placeholder="Search.. - try Milk " data-search>
                        <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
                    </div>
                    <div class="search-results disabled-search-list mt-3">
                        <div class="card card-style mx-0 px-2 p-0 mb-0">
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all coffee milk fresh dairy taste">
                                <div>
                                    <img src="/web/images/grocery/6s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Local Farm</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Fresh Milk</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per Gallon</span>
                                </div>
                            </a>
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit orange europe">
                                <div>
                                    <img src="/web/images/grocery/7s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">European Import</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Oranges</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$6.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per 12 Pcs</span>
                                </div>
                            </a>
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit peach carolina usa">
                                <div>
                                    <img src="/web/images/grocery/5s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">From Carolina</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Peaches</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$8.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per 6 Pcs</span>
                                </div>
                            </a>
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all fruit tomato legume europe">
                                <div>
                                    <img src="/web/images/grocery/12s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Asian Import</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Tomatos</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per 8 Pcs</span>
                                </div>
                            </a>
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all cucumber pickle legume europe">
                                <div>
                                    <img src="/web/images/grocery/4s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Australian Import</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Cucumber</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$4.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per 12 Pcs</span>
                                </div>
                            </a>
                            <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all salad cabbage legume europe">
                                <div>
                                    <img src="/web/images/grocery/11s.jpg" class="rounded-sm me-3" width="50" alt="img">
                                </div>
                                <div>
                                    <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Local Farm</span>
                                    <strong class="color-theme font-16 d-block mt-n2">Cabbage</strong>
                                </div>
                                <div class="ms-auto text-center align-self-center pe-2">
                                    <h5 class="line-height-xs font-18 pt-3">$1.<sup class="font-14">50</sup></h5>
                                    <span class="font-9 d-block mt-n2">Price per 10 Pcs</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search-no-results disabled mt-4">
                    <div class="card card-style">
                        <div class="content">
                            <h1>No Results</h1>
                            <p>
                                Your search brought up no results. Try using a different keyword. Or try typying all
                                to see all items in the demo. These can be linked to anything you want.
                            </p>
                        </div>
                    </div>
                </div>-->

                @yield('content')







                <div class="footer card card-style">
                    <a href="#" class="footer-title"><span class="color-highlight">{{ settings()->get('common.title') }}</span></a>
                    <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 ps-2 pe-2"></i> by Nasty Team</span><br><br></p>
                    <div class="text-center mb-3">
                        <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-phone"><i class="fa fa-phone"></i></a>
                        <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm me-1 shadow-l bg-red-dark"><i class="fa fa-share-alt"></i></a>
                        <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark-light"><i class="fa fa-angle-up"></i></a>
                    </div>
                    <p class="footer-copyright">Copyright &copy; <span id="copyright-year">{{ date('Y') }}</span>. All Rights Reserved.</p>
                    <p class="footer-links"> <a href="#" class="back-to-top color-highlight"> Back to Top</a></p>
                    <div class="clear"></div>
                </div>

            </div>
            <!-- End of Page Content-->

            <div id="snackbar-1" class="snackbar-toast bg-green-dark color-white" data-bs-delay="1000" data-autohide="true"><i class="fa fa-check-circle me-3"></i>Added Produce to Cart</div>

            <!--Menu Offer-->
            <div id="menu-offer" class="menu menu-box-bottom menu-box-detached"  data-menu-height="360">
                <div class="card card-style mx-0 rounded-0" style="background-image:url(/web/images/grocery/5.jpg)" data-card-height="170">
                    <div class="card-center">
                        <div class="bg-white d-inline-block px-4 py-3 ms-n3 rounded-m">
                            <h1 class="ps-2 color-black font-22 font-800 mb-n1">40% Off for You</h1>
                            <p class="ps-2 color-black font-12 mb-0">Help your Local Businesses</p>
                        </div>
                    </div>
                    <div class="card-overlay bg-black opacity-40 rounded-0"></div>
                </div>
                <div class="content mt-n2">
                    <h1>Here for Small Owners</h1>
                    <p class="mb-3">
                        This offer applies to any product from the fruit category from locals and applies directly in your cart.
                    </p>
                    <a href="#" class="btn btn-m rounded-sm text-uppercase font-700 btn-full bg-highlight">View Categories</a>
                </div>
            </div>

            <!--Menu Product-->


            <!-- Menu Action Sheet Cart-->
            <div id="menu-cart" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title"><h1>Shopping Bag</h1><p class="color-highlight">Your Current Cart Products</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins"></div>

                <div class="content mb-0 ">
                    <div class="d-flex mb-4">
                        <div>
                            <img src="/web/images/grocery/7s.jpg" class="rounded-m shadow-xl" width="100" alt="img">
                        </div>
                        <div class="ms-3 w-100">
                            <h3>Organic Oranges</h3>
                            <p class="mb-3 mt-n1">European Imported</p>
                            <div class="stepper rounded-s scale-switch ms-n1 float-start">
                                <a href="#" class="stepper-sub"><i class="fa fa-minus color-theme opacity-40"></i></a>
                                <input type="number" min="1" max="99" value="3">
                                <a href="#" class="stepper-add"><i class="fa fa-plus color-theme opacity-40"></i></a>
                            </div>
                            <h5 class="float-end pt-1">$12.10</h5>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div>
                            <img src="/web/images/grocery/7s.jpg" class="rounded-m shadow-xl" width="100" alt="img">
                        </div>
                        <div class="ms-3 w-100">
                            <h3>Organic Oranges</h3>
                            <p class="mb-3 mt-n1">European Imported</p>
                            <div class="stepper rounded-s scale-switch ms-n1 float-start">
                                <a href="#" class="stepper-sub"><i class="fa fa-minus color-theme opacity-40"></i></a>
                                <input type="number" min="1" max="99" value="3">
                                <a href="#" class="stepper-add"><i class="fa fa-plus color-theme opacity-40"></i></a>
                            </div>
                            <h5 class="float-end pt-1">$12.10</h5>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div>
                            <img src="/web/images/grocery/5s.jpg" class="rounded-m shadow-xl" width="100" alt="img">
                        </div>
                        <div class="ms-3 w-100">
                            <h3>Ripe Peaches</h3>
                            <p class="mb-3 mt-n1">From Our Local Farms</p>
                            <div class="stepper rounded-s scale-switch ms-n1 float-start">
                                <a href="#" class="stepper-sub"><i class="fa fa-minus color-theme opacity-40"></i></a>
                                <input type="number" min="1" max="99" value="3">
                                <a href="#" class="stepper-add"><i class="fa fa-plus color-theme opacity-40"></i></a>
                            </div>
                            <h5 class="float-end pt-1">$12.10</h5>
                        </div>
                    </div>
                </div>
                <div class="divider divider-margins"></div>
                <div class="content">
                    <div class="row">
                        <div class="col-6"><a href="#" class="btn btn-full btn-m font-800 rounded-sm text-uppercase bg-green-dark">Cart Page</a></div>
                        <div class="col-6"><a href="#" class="btn btn-full btn-m font-800 rounded-sm text-uppercase bg-blue-dark">Checkout</a></div>
                    </div>
                </div>
            </div>


            <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
            <div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title mt-0 pt-0"><h1>Settings</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="list-group list-custom-small">
                        <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                            <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                            <span>Dark Mode</span>
                            <div class="custom-control scale-switch ios-switch">
                                <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode">
                                <label class="custom-control-label" for="switch-dark-mode"></label>
                            </div>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="list-group list-custom-large">
                        <a data-menu="menu-highlights" href="#">
                            <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                            <span>Page Highlight</span>
                            <strong>16 Colors Highlights Included</strong>
                            <span class="badge bg-highlight color-white">HOT</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a data-menu="menu-backgrounds" href="#" class="border-0">
                            <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                            <span>Background Color</span>
                            <strong>10 Page Gradients Included</strong>
                            <span class="badge bg-highlight color-white">NEW</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Menu Settings Highlights-->
            <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title"><h1>Highlights</h1><p class="color-highlight">Any Element can have a Highlight Color</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="highlight-changer">
                        <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span class="color-blue-light">Default</span></a>
                        <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span class="color-red-light">Red</span></a>
                        <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>
                        <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink-dark">Pink</span></a>
                        <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span class="color-magenta-light">Purple</span></a>
                        <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>
                        <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>
                        <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>
                        <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-light"></i><span class="color-green-light">Green</span></a>
                        <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span class="color-green-dark">Grass</span></a>
                        <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-light"></i><span class="color-yellow-light">Sunny</span></a>
                        <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span class="color-yellow-light">Goldish</span></a>
                        <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span class="color-brown-light">Wood</span></a>
                        <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span class="color-dark-light">Night</span></a>
                        <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span class="color-dark-light">Dark</span></a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <!-- Menu Settings Backgrounds-->
            <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title"><h1>Backgrounds</h1><p class="color-highlight">Change Page Color Behind Content Boxes</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins mb-n2"></div>
                <div class="content">
                    <div class="background-changer">
                        <a href="#" data-change-background="default"><i class="bg-theme"></i><span class="color-dark-dark">Default</span></a>
                        <a href="#" data-change-background="plum"><i class="body-plum"></i><span class="color-plum-dark">Plum</span></a>
                        <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span class="color-dark-dark">Magenta</span></a>
                        <a href="#" data-change-background="dark"><i class="body-dark"></i><span class="color-dark-dark">Dark</span></a>
                        <a href="#" data-change-background="violet"><i class="body-violet"></i><span class="color-violet-dark">Violet</span></a>
                        <a href="#" data-change-background="red"><i class="body-red"></i><span class="color-red-dark">Red</span></a>
                        <a href="#" data-change-background="green"><i class="body-green"></i><span class="color-green-dark">Green</span></a>
                        <a href="#" data-change-background="sky"><i class="body-sky"></i><span class="color-sky-dark">Sky</span></a>
                        <a href="#" data-change-background="orange"><i class="body-orange"></i><span class="color-orange-dark">Orange</span></a>
                        <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span class="color-yellow-dark">Yellow</span></a>
                        <div class="clearfix"></div>
                    </div>
                    <a href="#" data-menu="menu-settings" class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Back to Settings</a>
                </div>
            </div>
            <!-- Menu Share -->
            <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
                <div class="menu-title mt-n1"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="content mb-0">
                    <div class="divider mb-0"></div>
                    <div class="list-group list-custom-small list-icon-0">
                        <a href="auto_generated" class="shareToFacebook external-link">
                            <i class="font-18 fab fa-facebook-square color-facebook"></i>
                            <span class="font-13">Facebook</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToTwitter external-link">
                            <i class="font-18 fab fa-twitter-square color-twitter"></i>
                            <span class="font-13">Twitter</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToLinkedIn external-link">
                            <i class="font-18 fab fa-linkedin color-linkedin"></i>
                            <span class="font-13">LinkedIn</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToWhatsApp external-link">
                            <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                            <span class="font-13">WhatsApp</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="auto_generated" class="shareToMail external-link border-0">
                            <i class="font-18 fa fa-envelope-square color-mail"></i>
                            <span class="font-13">Email</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div id="snackbar-cart" class="snackbar-toast bg-green-dark color-white" data-bs-delay="1000" data-autohide="true"><i class="fa fa-check-circle me-3"></i>Added Product to Cart</div>


        <script type="text/javascript" src="/web/scripts/bootstrap.min.js"></script>
        <script  type="text/javascript">  var config = {    phone :" 201274023845",    call :"Message Us",    position :"ww-right",    size : "ww-normal",    text : "",    type: "ww-standard",    brand: "",    subtitle: "",    welcome: ""  };  var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;    var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";    s.onload = function () { tmWidgetInit(config) };    var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);</script>
        <script type="text/javascript" src="/web/scripts/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js" integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('scripts')
    </body>
