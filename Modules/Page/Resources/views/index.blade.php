<!doctype html>
<html lang="ar">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/png" href="/web/assets/images/favicons/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/web/assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/web/assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/web/assets/images/favicons/favicon-16x16.png">

        <!-- style -->
        <link rel="stylesheet" href="/web/assets/css/app.css">
        <!-- title -->
        <title>{{ settings()->get('common.title') }}</title>
        <!-- meta -->
        <meta name="description" content="description">
        <meta name="keywords" content="keywords">

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '900734270680681');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=900734270680681&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->



        <!-- Snap Pixel Code -->
        <script type='text/javascript'>
            (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
            {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
                a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
                r.src=n;var u=t.getElementsByTagName(s)[0];
                u.parentNode.insertBefore(r,u);})(window,document,
                'https://sc-static.net/scevent.min.js');

            snaptr('init', '6650f7cb-4eb8-4136-b9e0-d08672e8bf55', {
                'user_email': 'tech@jumppeak.net'
            });

            snaptr('track', 'PAGE_VIEW');

        </script>
        <!-- End Snap Pixel Code -->



        <!-- Global site tag (gtag.js) - Google Ads: 604548133 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-604548133"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-604548133');
        </script>


        <!-- Twitter universal website tag code -->
        <script>
            !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
            },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
                a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
            // Insert Twitter Pixel ID and Standard Event data below
            twq('init','o5joa');
            twq('track','PageView');
        </script>
        <!-- End Twitter universal website tag code -->



    </head>

    <body>

        <!-- wrapper -->
        <div class="wrapper">
            <div class="gradient"></div>


            <!-- header -->
            <header class="main-header">
                <div class="container">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-6">
                            <div class="main-header__logo text-right">
                                <img src="/web/assets/images/logo.svg" draggable="false" alt="الكحال">
                            </div>
                        </div>
                        <!-- // logo -->
                        <!-- button -->
                        <div class="col-6">
                            <div class="main-header__button text-left">
                                <a href="#offers" class="btn btn-dark">أحدث العروض</a>
                            </div>
                        </div>
                        <!-- button -->
                    </div>
                </div>
            </header>
            <!-- // header -->


            <!-- hero -->
            <div class="hero" id="book">
                <div class="container">
                    <div class="row">
                        <!-- photo -->
                        <div class="col-md-12 col-lg-7 col-xl-8" data-aos="fade-left" data-aos-duration="800">
                            <div class="hero__photo d-flex align-items-center">
                                <div class="owl-carousel" id="main-slider">
                                    <!-- photo -->
                                    <div class="hero-photo">
                                        <img src="/web/assets/images/hero-01.jpg" class="img-fluid" alt="الكحال طب العيون">
                                        <span>
                                        فرع الدمام
                                    </span>
                                    </div>
                                    <div class="hero-photo">
                                        <img src="/web/assets/images/hero-02.jpg" class="img-fluid" alt="الكحال طب العيون">
                                        <span>
                                        فرع الإحساء
                                    </span>
                                    </div>
                                    <!-- // photo -->
                                </div>
                            </div>
                        </div>
                        <!-- // photo -->
                        <!-- text -->
                        <div class="col-md-12 col-lg-5 col-xl-4 d-flex align-items-center" >
                            <div class="hero__book" data-aos="fade-right" data-aos-duration="800" id="form-container" >
                                <span class="color">احجز الآن</span>
                                <h1>لسلامة عينيك</h1>
                                <!-- booking form -->
                                <div class="hero__book-form" >
                                    <form method="post" action="{{ route('api.leads.store') }}" name="WebToLeads4751497000000674015" id="form">
                                        @csrf
                                        <input type='text' style='display:none;' name='xnQsjsdp' value='c720c5569cda887877359d372931a38fb36ebee579e51daa2f0dfadb3d5d4062'>
                                        <input type='hidden' name='zc_gad' id='zc_gad' value=''>
                                        <input type='text' style='display:none;' name='xmIwtLD' value='2942070acf7db5bf78c8810eb6e4f06aee879381530aa80d7b8304ab6e23e793'>
                                        <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='>
                                        <input type='text' style='display:none;' name='returnURL' value='https://alkahhal.com.sa/' >
                                        <!-- Do not remove this code. -->
                                        <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'>
                                        <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'>
                                        <input type='text' style='display:none;' id='Lead_Source' name='Lead Source' value="Advertisement">
                                        <input type='text' style='display:none;' id='Email' name='Email' value="user@jumppeak.net">

                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" class="form-control"  required name="LEADCF2" id="Name"
                                                       placeholder="الإسم بالكامل" autocomplete="off">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <input type="tel" class="form-control" required name="Mobile" id="Mobile" placeholder="رقم الجوال"
                                                       autocomplete="off">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="damam" name="LEADCF1" value="Dammam"
                                                           class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="damam">
                                                        فرع الدمام
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="ahsaa" name="LEADCF1" value="Ehsaa"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="ahsaa">
                                                        فرع الإحساء
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <button type="submit" id="formsubmit" class="btn btn-yellow">احجز الآن</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- // booking form -->
                            </div>
                            <!-- // text -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- // hero -->


            <!-- experts text -->
            <div class="experts d-pad text-center">
                <div class="container">
                    <div class="row">
                        <!-- right text -->
                        <div class="col-lg-5">
                            <h2 data-aos="fade-up" data-aos-duration="800">
                                خبراء طب العيون
                                علي مدار <span class="color">35</span> عاماً
                            </h2>
                        </div>
                        <!-- // right text -->
                        <!-- left text -->
                        <div class="col-lg-7">
                            <h4 class="color" data-aos="fade-down" data-aos-duration="800">
                                و نسعى دائماً لنكون اختياركم الآمن والأول لسلامة أعينكم
                            </h4>
                            <img src=" /web/assets/images/underline-big.svg" class="underline-big img-fluid" draggable="false"
                                 alt="line" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                        </div>
                        <!-- // left text -->
                    </div>
                </div>
            </div>
            <!-- // experts text -->

            <!-- offers -->
            <div class="offers d-pad" id="offers">
                <div class="container">
                    <div class="row">
                        <!-- right title -->
                        <div class="col-lg-4">
                            <h2 data-aos="fade-down" data-aos-delay="0" data-aos-duration="800">
                            <span class="color d-block">
                                العروض
                            </span>
                            </h2>
                            <img src="assets/images/underline-small.svg" class="underline-small img-fluid" draggable="false"
                                 alt="line" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                        </div>
                    </div>
                    <!-- // right title -->
                    <div class="row">
                        <!-- offer
                        <div class="col-md-6 col-lg-4">
                            <div class="offer text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                                <div class="offer__photo">
                                    <img src="assets/images/offers/01.jpg" alt="offer">
                                </div>
                                <div class="offer__text">
                                    <h5>
                                        عرض الليزك
                                        <span class="d-block color">
                                            <span class="en">
                                                4599
                                            </span>
                                            <small>ريال</small>
                                        </span>
                                    </h5>
                                    <a href="#book" class="btn btn-yellow">احجز الان</a>
                                </div>
                            </div>
                        </div>
                       // offer -->
                        <!-- offer slider -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-5 d-flex align-items-center">
                                    <div class="offer__text offer__text--slider">
                                        <h3>
                                            عرض الليزك<br>
                                            تخلص من نظارتك
                                            <span class="d-block color">
                                            <span class="en">
                                                4599
                                            </span>
                                            <small>ريال</small>
                                        </span>
                                        </h3>
                                        <a href="#book" class="btn btn-yellow">احجز الان</a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="offers-slider">
                                        <div class="owl-carousel offer-slider">
                                            @foreach( explode(',', settings()->get('offers.images')) as $image )
                                                <div class="offer__photo">
                                                    <img src="{{ $image }}" alt="offer">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- // offer slider -->

                    </div>

                </div>
            </div>
            <!-- // offers -->


            <!-- video -->
            <div class="offers-video d-pad">
                <div class="container">
                    <div class="video" data-aos="fade-up" data-aos-duration="600">
                        <iframe src="{{ settings()->get('common.youtube') }}" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- // video -->


            <!-- services -->
            <div class="services d-pad" id="services">
                <div class="container">
                    <div class="row">
                        <!-- right title -->
                        <div class="col-lg-4">
                            <h2 data-aos="fade-down" data-aos-delay="0" data-aos-duration="800">
                                خدماتنا
                                <span class="color d-block">
                                لأمان عينيك
                            </span>
                            </h2>
                            <img src="/web/assets/images/underline-small.svg" class="underline-small img-fluid" draggable="false"
                                 alt="line" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                            <p class="color">{{ settings()->get('services.description') }}</p>
                        </div>
                        <!-- // right title -->
                        <!-- left services -->
                        <div class="col-lg-8">
                            <div class="services-list">
                                <div class="row">
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/01.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات الليزك وتصحيح الابصار
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="100"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/02.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات ازالة المياه البيضاء بتقنية الفاكو
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="200"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/03.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات السائل الزجاجي وانفصال الشبكية لمرضي السكر
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="300"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/04.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    علاج اعتلال الشبكية السكرى والناتج عن مضاعفات مرض السكر
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="400"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/05.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات المياه الزرقاء وعلاج ارتفاع ضغط العين
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="500"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/06.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات مرض حول العين عند الاطفال والكبار
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="600"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/07.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات انسداد المجرى الدمعى وجفاف العين لدى الكبار
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="700"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/08.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عملية زراعة العدسات لعلاج قصر او طول النظر
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                    <!-- service -->
                                    <div class="col-lg-4">
                                        <div class="service" data-aos="fade-up" data-aos-delay="800"
                                             data-aos-duration="800">
                                            <div class="service__img">
                                                <img src="/web/assets/images/services/09.jpg" alt="service desc"
                                                     draggable="false">
                                            </div>
                                            <div class="service__title">
                                                <h6>
                                                    عمليات تجميل الجفون
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // service -->
                                </div>
                            </div>
                        </div>
                        <!-- // left services -->
                    </div>
                </div>
            </div>
            <!-- // services -->


            <!-- doctors -->
            <div class="doctors d-pad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="doctors__title text-center" data-aos="fade-down" data-aos-delay="200"
                                 data-aos-duration="800">
                                <h2>
                                    {{ settings()->get('doctors.title') }}
                                </h2>
                                <img src="/web/assets/images/underline-big.svg" class="underline-big img-fluid" alt="line"
                                     draggable="false" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="doctors__slider">
                                <div class="owl-carousel" id="doctors-slider">
                                    <!-- doctor -->
                                    @foreach($doctors as $doctor)
                                        <div class="dr">
                                            <div class="dr__photo">
                                                <img src="{{ $doctor->image }}" alt="{{ $doctor->name }}" draggable="false">
                                            </div>
                                            <div class="dr__text text-center">
                                                <h6>{{ $doctor->name }}</h6>
                                                <p>{{ $doctor->description }}</p>
                                                <span class="color d-block">{{ $doctor->branch }}</span>
                                                <a href="#book" class="btn btn-yellow">احجز الان</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // doctors -->


            <!-- testimonials -->
            <div class="testimonials d-pad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="testimonials__title">
                                <h2 data-aos="fade-up" data-aos-duration="800">
                                    آراء عملائنا
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="owl-carousel" id="testimonials-slider">
                                <!-- slide -->
                                <div class="slide">
                                    <img src="/web/assets/images/say-01.png" alt="say 01" class="img-fluid">
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="slide">
                                    <img src="/web/assets/images/say-02.png" alt="say 02" class="img-fluid">
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="slide">
                                    <img src="/web/assets/images/say-03.png" alt="say 03" class="img-fluid">
                                </div>
                                <!-- slide -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonials -->


            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="600">
                            <h2>
                                دائماً بإنتظارك
                            </h2>
                            <div class="locations" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                                <!-- location -->
                                <div class="location d-inline-block">
                                <span class="icon">
                                    <img src="/web/assets/images/location-icon.png" alt="location" draggable="false">
                                </span>
                                    <span class="text color">
                                    {{ settings()->get('address.dammam') }}
                                </span>
                                </div>
                                <!-- // location -->
                                <!-- location -->
                                <div class="location d-inline-block">
                                <span class="icon">
                                    <img src="/web/assets/images/location-icon.png" alt="location" draggable="false">
                                </span>
                                    <span class="text color">
                                    {{ settings()->get('address.ehsaa') }}
                                </span>
                                </div>
                                <!-- // location -->
                            </div>
                            <!-- phone -->
                            <div class="phone text-center d-inline-block" data-aos="fade-up" data-aos-delay="300"
                                 data-aos-duration="600">
                                <a href="tel:{{ settings()->get('common.phone') }}">{{ settings()->get('common.phone') }}</a>
                            </div>
                            <!-- // phone -->
                        </div>
                        <!-- video -->
                        <div class="col-md-6">
                            <div class="video" data-aos="fade-up" data-aos-duration="600">
                                <iframe height="300" src="{{ settings()->get('footer.youtube') }}" allow="accelerometer; autoplay; clipboard-write;
                            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- // video -->
                        <!-- copyrights -->
                        <div class="col-lg-12 text-center">
                            <div class="copyrights">
                                <p>
                                    جميع الحقوق محفوظه الكحال <br>
                                    JUMPPEAK
                                </p>
                            </div>
                        </div>
                        <!-- // copyrights -->
                    </div>
                </div>
            </footer>

            <div class="" style="display: none" id="thankyou">
                <h2 class="color aos-init aos-animate" data-aos="fade-down" data-aos-duration="600">
                    شكرا لك <br>
                    تم إستلام طلبك
                </h2>
                <p class="lead">
                    سيتم التواصل معكم من قبل قسم خدمة العملاء خلال ٢٤
                    ساعة للتأكيد أو إعادة جدولة الموعد حسب المواعيد
                    المتاحة
                </p>
                <img src="/web/assets/images/underline-big.svg" class="underline-big img-fluid aos-init" draggable="false" alt="line" data-aos="fade-up" data-aos-delay="0" data-aos-duration="600">
            </div>
            <!-- // footer -->


        </div>
        <!-- // wrapper end -->
        <!-- JS -->
        <script src="/web/assets/js/app.min.js"></script>

        @routes

        <script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:'93a57e7c7c3e4572e13c4bab81a6848fa85f004af8f57c30e2a2441301928b3f', values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}};var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.com/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads4751497000000674015']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads4751497000000674015']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads4751497000000674015']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
        <script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=2942070acf7db5bf78c8810eb6e4f06aee879381530aa80d7b8304ab6e23e793gidc720c5569cda887877359d372931a38fb36ebee579e51daa2f0dfadb3d5d4062gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'></script>
        <script type="text/javascript">
            var form = $('#form');
            $('#form').submit(function(e) {
                e.preventDefault();
                    $.ajax({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: form.serialize(),
                        success: function (data) {

                            $('#form-container').html($('#thankyou').html());
                            gtag('event', 'conversion', {
                                'send_to': 'AW-604548133/54R_CPDT_PYBEKXYoqAC'
                            });

                            snaptr('track','PURCHASE');


                            twq('track','Purchase', {
                                //required parameters
                                'value': '4599',
                                'currency': 'SAR',
                                'num_items': '1',
                                'transaction_id' : '1'
                            });

                            $.ajax({
                                type: form.attr('method'),
                                url: 'https://crm.zoho.com/crm/WebToLeadForm',
                                data: form.serialize(),
                                success: function (data) {

                                    $('#form-container').html($('#thankyou').html());
                                    gtag('event', 'conversion', {
                                        'send_to': 'AW-604548133/54R_CPDT_PYBEKXYoqAC'
                                    });

                                    snaptr('track','PURCHASE');


                                    twq('track','Purchase', {
                                        //required parameters
                                        'value': '4599',
                                        'currency': 'SAR',
                                        'num_items': '1',
                                        'transaction_id' : '1'
                                    });
                                },

                                error: function (data) {
                                    $('#form-container').html($('#thankyou').html());
                                },
                            });

                        },

                        error: function (data) {
                            $('#form-container').html($('#thankyou').html());
                        },
                    });

            });
        </script>
    </body>

</html>
