<!doctype html>
<html lang="ar">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- preloads -->
        <link rel="preload" href="/web/assets/fonts/kahhal-ar-medium.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/web/assets/fonts/kahhal-ar-medium.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/web/assets/fonts/kahhal-ar-bold.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/web/assets/fonts/kahhal-ar-bold.woff2" as="font" type="font/woff2" crossorigin>
        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/web/assets/images/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/web/assets/images/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/web/assets/images/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/web/assets/images/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/web/assets/images/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/web/assets/images/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/web/assets/images/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/web/assets/images/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/web/assets/images/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/web/assets/images/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/web/assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/web/assets/images/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/web/assets/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="/web/assets/images/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/web/assets/images/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- css -->
        <link rel="stylesheet" href="/web/assets/css/main.min.css" crossorigin="anonymous">
        <!-- title and seo -->
        <title>{{ settings()->get('common.title') }}</title>

        <meta name="description" content="site description">
        <meta name="keywords" content="site keywords">
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


    <!-- offers end -->
    <div class="offers-end text-center">
        <h2 class="h6 color" id="counterEnd">باقي على إنتهاء العروض</h2>
        <div class="counters d-flex justify-content-center" id="counters">
            <!-- counter -->
            <div class="counter">
                <div class="counter__number" id="jsSeconds"></div>
                <div class="counter__title">ثانية</div>
            </div>
            <!-- // counter -->
            <!-- counter -->
            <div class="counter">
                <div class="counter__number" id="jsMinutes"></div>
                <div class="counter__title">دقيقة</div>
            </div>
            <!-- // counter -->
            <!-- counter -->
            <div class="counter">
                <div class="counter__number" id="jsHours"></div>
                <div class="counter__title">ساعة</div>
            </div>
            <!-- // counter -->
            <!-- counter -->
            <div class="counter">
                <div class="counter__number" id="jsDays"></div>
                <div class="counter__title">يوم</div>
            </div>
            <!-- // counter -->
        </div>
    </div>
    <script>
        // date
        var countDownDate = new Date("2021/10/10 23:59:59").getTime();

        // update count every 1 second
        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // ouput
            document.getElementById("jsDays").innerHTML = days;
            document.getElementById("jsHours").innerHTML = hours;
            document.getElementById("jsMinutes").innerHTML = minutes;
            document.getElementById("jsSeconds").innerHTML = seconds;

            // when counter over
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("counters").className = "d-none";
                document.getElementById("counterEnd").innerHTML = "نأسف ، لقد تم إنتهاء العروض";
            }
        }, 1000);
    </script>
    <!-- // offers end -->

    <!-- header -->
    <header class="header" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <picture>
                        <source srcset="/web/assets/images/logo.svg" type="image/webp"><img src="/web/assets/images/logo.svg" draggable="false"
                                                                                       alt="مجمع الكحال الطبي" class="header__logo">
                    </picture>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="#book" class="btn btn-primary">إحجز الآن</a>
                </div>
            </div>
        </div>
    </header>


    <!-- hero -->
    <div class="hero">
        <!-- hero sldier -->
        <div class="hero__slider" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-container heroSlider">
                <div class="swiper-wrapper">
                    <!-- hero slide -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="hero__content">
                                <!-- text -->
                                <div class="hero__text">
                                    <span class="color overline" data-aos="fade-up" data-aos-delay="200">
                                        إحجز الآن لسلامة عينيك
                                    </span>
                                    <h1 data-aos="fade-up" data-aos-delay="400">
                                        أفضل أطباء المملكة في
                                        طب وجراحة العيون
                                    </h1>
                                </div>
                                <!-- // text -->
                                <!-- action -->
                                <div class="hero__actions" data-aos="fade-up" data-aos-delay="600">
                                    <a href="#offers" class="btn btn-white">تصفح العروض المتاحة</a>
                                    <a href="#book" class="btn btn-primary">إحجز الآن</a>
                                </div>
                                <!-- // action -->
                                <!-- branches -->
                                <div class="hero__branches">
                                    <a href="#" class="hero__branch" data-aos="fade-down" data-aos-delay="800">
                                        <div class="hero__branch-icon">
                                            <svg class="icon">
                                                <use href="web/assets/images/icons/icons.svg#location"></use>
                                            </svg>
                                        </div>
                                        <div class="hero__branch-text">
                                            <span>فرع الدمام</span>
                                            أبو هريرة، الحمراء، الدمام
                                        </div>
                                    </a>
                                    <a href="#" class="hero__branch" data-aos="fade-down" data-aos-delay="800">
                                        <div class="hero__branch-icon">
                                            <svg class="icon">
                                                <use href="web/assets/images/icons/icons.svg#location"></use>
                                            </svg>
                                        </div>
                                        <div class="hero__branch-text">
                                            <span>فرع الإحساء</span>
                                            محاسن، المبرز، الإحساء
                                        </div>
                                    </a>
                                </div>
                                <!-- // branches -->
                            </div>
                            <!-- image -->
                            <div class="hero__image">
                                <picture>
                                    <source srcset="web/assets/images/hero.webp" type="image/webp"><img src="web/assets/images/hero.jpg" draggable="false"
                                                                                                    alt="hero">
                                </picture>
                            </div>
                            <!-- // image -->
                        </div>
                    </div>
                    <!-- // hero slide -->
                    <!-- hero slide -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="hero__content">
                                <!-- text -->
                                <div class="hero__text">
                                    <span class="color overline" data-aos="fade-up" data-aos-delay="200">
                                        نتشرف بالحصول علی
                                    </span>
                                    <h1 data-aos="fade-up" data-aos-delay="400">
                                        شهادة JCI
                                        في الجودة وسلامة المرضی
                                    </h1>
                                </div>
                                <!-- // text -->
                                <!-- action -->
                                <div class="hero__actions" data-aos="fade-up" data-aos-delay="600">
                                    <a href="#offers" class="btn btn-white">تصفح العروض المتاحة</a>
                                    <a href="#book" class="btn btn-primary">إحجز الآن</a>
                                </div>
                                <!-- // action -->
                                <!-- branches -->
                                <div class="hero__branches">
                                    <a href="#" class="hero__branch" data-aos="fade-down" data-aos-delay="800">
                                        <div class="hero__branch-icon">
                                            <svg class="icon">
                                                <use href="web/assets/images/icons/icons.svg#location"></use>
                                            </svg>
                                        </div>
                                        <div class="hero__branch-text">
                                            <span>فرع الدمام</span>
                                            أبو هريرة، الحمراء، الدمام
                                        </div>
                                    </a>
                                    <a href="#" class="hero__branch" data-aos="fade-down" data-aos-delay="800">
                                        <div class="hero__branch-icon">
                                            <svg class="icon">
                                                <use href="web/assets/images/icons/icons.svg#location"></use>
                                            </svg>
                                        </div>
                                        <div class="hero__branch-text">
                                            <span>فرع الإحساء</span>
                                            محاسن، المبرز، الإحساء
                                        </div>
                                    </a>
                                </div>
                                <!-- // branches -->
                            </div>
                            <!-- image -->
                            <div class="hero__image">
                                <picture>
                                    <source srcset="web/assets/images/jci.webp" type="image/webp"><img src="web/assets/images/jci.jpg" draggable="false"
                                                                                                   alt="hero">
                                </picture>
                            </div>
                            <!-- // image -->
                        </div>
                    </div>
                    <!-- // hero slide -->
                </div>
            </div>
        </div>
        <!-- // hero slider -->
        <!-- controls -->
        <div class="swiper-button-next hero-next"></div>
        <div class="swiper-button-prev hero-prev"></div>
        <!-- // controls -->
    </div>
    <!-- // hero -->



    <!-- partners -->
    <div class="partners">
        <div class="container">
            <div class="partners__container">
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-01.webp" type="image/webp"><img src="web/assets/images/partners/partner-01.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-02.webp" type="image/webp"><img src="web/assets/images/partners/partner-02.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-03.webp" type="image/webp"><img src="web/assets/images/partners/partner-03.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-04.webp" type="image/webp"><img src="web/assets/images/partners/partner-04.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-05.webp" type="image/webp"><img src="web/assets/images/partners/partner-05.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-06.webp" type="image/webp"><img src="web/assets/images/partners/partner-06.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
            </div>
        </div>
    </div>
    <!-- // partners -->

    <!-- offers -->
    <div class="offers d-pad" id="offers">
        <div class="container">
            <!-- title -->
            <div class="title text-center">
                <h2 data-aos="fade-down">
                    <span class="color">عروض الكحال </span>المتاحة
                </h2>
            </div>
            <!-- // title -->
            <!-- offers -->
            <div class="offers__slider" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-container offersSlider">
                    <div class="swiper-wrapper">
                        <!-- offer -->
                        <div class="swiper-slide">
                            <div class="offer">
                                <!-- info -->
                                <div class="offer__info text-center">
                                    <span class="overline">
                                        تخلص من نظارتك
                                    </span>
                                    <h3>
                                        بخصم 2000 ريال علي الليزر السطحي
                                    </h3>
                                    <div class="offer__price">
                                        <span class="h1 d-block">2000-</span>
                                        ريال سعودي
                                    </div>
                                    <a href="#book" class="btn btn-primary">
                                        إحجز الآن
                                    </a>
                                    <!-- number -->
                                    <div class="offer__number">
                                        عرض 3 من 1
                                    </div>
                                    <!-- // number -->
                                </div>
                                <!-- // info -->
                                <!-- image -->
                                <div class="offer__image">
                                    <picture>
                                        <source srcset="/web/assets/images/offers/offer-02.webp" type="image/webp"><img
                                                src="/web/assets/images/offers/offer-02.jpg" loading="lazy" draggable="false" alt="offer name">
                                    </picture>
                                </div>
                                <!-- // image -->
                            </div>
                        </div>
                        <!-- // offer -->
                        <!-- offer -->
                        <div class="swiper-slide">
                            <div class="offer">
                                <!-- info -->
                                <div class="offer__info text-center">
                                    <span class="overline">
                                        صحح بصرك لمرة واحدة في العمر
                                    </span>
                                    <h3>
                                        عرض الفيمتوليزك
                                    </h3>
                                    <div class="offer__price">
                                        <span class="h1 d-block">5999</span>
                                        ريال سعودي
                                    </div>
                                    <a href="#book" class="btn btn-primary">
                                        إحجز الآن
                                    </a>
                                    <!-- number -->
                                    <div class="offer__number">
                                        عرض 3 من 2
                                    </div>
                                    <!-- // number -->
                                </div>
                                <!-- // info -->
                                <!-- image -->
                                <div class="offer__image">
                                    <picture>
                                        <source srcset="/web/assets/images/offers/offer-01.webp" type="image/webp"><img
                                                src="/web/assets/images/offers/offer-01.jpg" loading="lazy" draggable="false" alt="offer name">
                                    </picture>
                                </div>
                                <!-- // image -->
                            </div>
                        </div>
                        <!-- // offer -->
                    </div>
                    <!-- controls -->
                    <div class="swiper-button-next offers-next"></div>
                    <div class="swiper-button-prev offers-prev"></div>
                    <!-- // controls -->
                </div>
            </div>
            <!-- // offers -->
        </div>
    </div>
    <!-- // offers -->

    <!-- services -->
    <div class="services d-pad-b">
        <div class="container">
            <!-- title -->
            <div class="title text-center">
                <h2 data-aos="fade-down">
                    <span class="color">خدماتنا </span>لأمان عينيك
                </h2>
                <p class="category" data-aos="fade-up" data-aos-delay="200">
                    {{ settings()->get('services.description') }}
                </p>
            </div>
            <!-- // title -->
            <!-- services -->
            <div class="services__container">
                <!-- services slider -->
                <div class="services__slider" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-container servicesSlider">
                        <div class="swiper-wrapper">
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/01.webp" type="image/webp"><img src="web/assets/images/services/01.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات الليزك وتصحيح الابصار
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/02.webp" type="image/webp"><img src="web/assets/images/services/02.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات ازالة المياه البيضاء بتقنية الفاكو
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/03.webp" type="image/webp"><img src="web/assets/images/services/03.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات السائل الزجاجي وانفصال الشبكية لمرضي السكر
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/04.webp" type="image/webp"><img src="web/assets/images/services/04.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            علاج اعتلال الشبكية السكرى والناتج عن مضاعفات مرض السكر
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/05.webp" type="image/webp"><img src="web/assets/images/services/05.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات المياه الزرقاء وعلاج ارتفاع ضغط العين
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/06.webp" type="image/webp"><img src="web/assets/images/services/06.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات مرض حول العين عند الاطفال والكبار
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/07.webp" type="image/webp"><img src="web/assets/images/services/07.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات انسداد المجرى الدمعى وجفاف العين لدى الكبار
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/08.webp" type="image/webp"><img src="web/assets/images/services/08.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عملية زراعة العدسات لعلاج قصر او طول النظر
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                            <!-- service -->
                            <div class="swiper-slide">
                                <div class="service">
                                    <div class="service__image" data-aos="zoom-in">
                                        <picture>
                                            <source srcset="web/assets/images/services/09.webp" type="image/webp"><img src="web/assets/images/services/09.jpg"
                                                                                                                   draggable="false" loading="lazy" alt="service name">
                                        </picture>
                                    </div>
                                    <div class="service__text" data-aos="zoom-in">
                                        <h3 class="h5">
                                            عمليات تجميل الجفون
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- // service -->
                        </div>
                    </div>
                </div>
            </div>            <!-- // services -->
        </div>
    </div>
    <!-- // services -->


    <!-- products -->
    <div class="products d-pad-b">
        <div class="container">
            <!-- title -->
            <div class="title text-center">
                <h2 data-aos="fade-down">
                    <span class="color">نخبة من </span>الاستشاريين وأساتذة الجامعة
                </h2>
            </div>
            <!-- // title -->
            <!-- products -->
            <div class="products__slider">
                <div class="swiper-container productsSlider">
                    <div class="swiper-wrapper">

                          @foreach($products as $product)
                              <!-- product -->
                                  <div class="swiper-slide">
                                      <div class="product text-center">
                                          <!-- image -->
                                          <div class="product__image">
                                              <picture>
                                                  <source srcset="{{ $product->image }}" type="image/webp"><img src="{{ $product->image }}"
                                                                                                                        draggable="false" loading="lazy" alt="{{ $product->name }}">
                                              </picture>
                                          </div>
                                          <!-- // image -->
                                          <!-- info -->
                                          <div class="product__info">
                                              <h3 class="h5 product__name" data-aos="fade-down">
                                                  {{ $product->name }}  </h3>
                                              <span class="color product__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        {{ $product->branch }}
                                    </span>
                                              <p class="product__spec" data-aos="fade-up" data-aos-delay="400">
                                                  {{ $product->description }}                                              </p>
                                          </div>
                                          <!-- // info -->
                                          <!-- book -->
                                          <div class="product__book" data-aos="zoom-in" data-aos-delay="600">
                                              <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                          </div>
                                          <!-- // book -->
                                      </div>
                                  </div>
                                  <!-- // product -->
                        @endforeach
                    </div>
                    <!-- controls -->
                    <div class="swiper-button-next products-next"></div>
                    <div class="swiper-button-prev products-prev"></div>
                    <!-- // controls -->
                </div>
                <div class="swiper-scrollbar products-scrollbar"></div>

            </div>
            <!-- // products -->
        </div>
    </div>
    <!-- // products -->

    <!-- testimonials -->
    <div class="testimonials d-pad-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="title">
                        <h2 data-aos="fade-down">
                            <span class="color">آراء</span> عملاؤنا
                        </h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="swiper-container testimonialsSlider" data-aos="zoom-in" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimonials__slide text-center">
                                    <p class="category">
                                        تم عمل عملية و تكللت بالنجاح علی يد الدكتور عادل الرشود وهو من أمهر الأطباء في سحب الموية البيضاء ورزع
                                        عدسة
                                        ثلاثية ،،
                                        عناية خاصة من استقبال المريض حتی خروجه نتمنی لهم دوام التوفيق من أدارة وأطباء وفنيين وممرضين.
                                    </p>
                                    <picture>
                                        <source srcset="/web/assets/images/avatar.webp" type="image/webp"><img class="testimonials__avatar"
                                                                                                          src="/web/assets/images/avatar.jpg" draggable="false" alt="avatar">
                                    </picture>
                                    <h3 class="testimonials__sayer h6">
                                        عبدالله الغامدي
                                    </h3>
                                    <picture>
                                        <source srcset="/web/assets/images/stars.svg" type="image/webp"><img src="/web/assets/images/stars.svg"
                                                                                                        draggable="false" alt="5 stars">
                                    </picture>
                                </div>
                            </div>
                            <!-- // slide -->
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimonials__slide text-center">
                                    <p class="category">
                                        أشهر مركز طبي متخصص في طب العيون وله خدمات طبية عديدة ، عنده طاقم وفريق طبي متميز في جميع التخصصات ، راجعت
                                        في
                                        قسم العيون وكذلك الجيوب الأنفية ، وكانوا جدا متميزين وناصحين لي ، والخدمة والاستقبال جدا متميز ، وفقهم
                                        الله
                                        لكل الخير ، وارجو لهم مزيد من التقدم
                                    </p>
                                    <picture>
                                        <source srcset="/web/assets/images/avatar.webp" type="image/webp"><img class="testimonials__avatar"
                                                                                                          src="/web/assets/images/avatar.jpg" draggable="false" alt="avatar">
                                    </picture>
                                    <h3 class="testimonials__sayer h6">
                                        عبد الرحمن حلان
                                    </h3>
                                    <picture>
                                        <source srcset="/web/assets/images/stars.svg" type="image/webp"><img src="/web/assets/images/stars.svg"
                                                                                                        draggable="false" alt="5 stars">
                                    </picture>
                                </div>
                            </div>
                            <!-- // slide -->
                        </div>
                        <!-- controls -->
                        <div class="swiper-button-next testimonials-next"></div>
                        <div class="swiper-button-prev testimonials-prev"></div>
                        <!-- // controls -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- testimonials -->


    <!-- book -->
    <div class="book d-pad-b" id="book">
        <div class="container">
            <div class="book__container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- form -->
                        <div class="book__form">
                            <h2 class="title color" data-aos="fade-down">
                                إحجز الآن
                            </h2>
                            <!-- zoho -->
                            <div id='crmWebToEntityForm' class='zcwf_lblTopBottom crmWebToEntityForm'>
                                <form action='https://crm.zoho.com/crm/WebToCategoryForm' name=WebToCategories4751497000005958001 method='POST'
                                      onSubmit='javascript:document.charset="UTF-8"; return checkMandatory4751497000005958001()' accept-charset='UTF-8'>
                                    <input type='text' style='display:none;' name='xnQsjsdp'
                                           value='c720c5569cda887877359d372931a38fb36ebee579e51daa2f0dfadb3d5d4062'>
                                    <input type='hidden' name='zc_gad' id='zc_gad' value=''>
                                    <input type='text' style='display:none;' name='xmIwtLD'
                                           value='2942070acf7db5bf78c8810eb6e4f06a2f7ae032b2e9797b3ead7990d9fb84a2'>
                                    <input type='text' style='display:none;' name='actionType' value='TGVhZHM='>
                                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;alkahhal.com.sa&#x2f;'>
                                    <!-- Do not remove this code. -->
                                    <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'>
                                    <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'>
                                    <!-- Do not remove this code. -->
                                    <div class='zcwf_title d-none'>August Camp</div>
                                    <div class='zcwf_row' data-aos="fade-up">
                                        <div class='zcwf_col_lab'>
                                            <label for='Last_Name'>الإسم بالكامل <span style='color:red;'>*</span></label>
                                        </div>
                                        <div class='zcwf_col_fld'>
                                            <input type='text' class="form-control" id='Last_Name' name='Last Name' maxlength='80'
                                                   placeholder="الإسم بالكامل">
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row' data-aos="fade-up">
                                        <div class='zcwf_col_lab'>
                                            <label for='Mobile'>رقم الجوال <span style='color:red;'>*</span></label>
                                        </div>
                                        <div class='zcwf_col_fld'>
                                            <input type='text' class="form-control" id='Mobile' name='Mobile' maxlength='30' placeholder="رقم الجوال" onchange="return validatePhone();">
                                            <label  id='phone_validation_message' style="display: none"> يرجى إدخال رقم هاتف صحيح </label>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row' data-aos="fade-up">
                                        <div class='zcwf_col_lab'><label for='LEADCF1'>&#x627;&#x644;&#x641;&#x631;&#x639;</label></div>
                                        <div class='zcwf_col_fld'>
                                            <select class='zcwf_col_fld_slt custom-select' id='LEADCF1' name='LEADCF1'>
                                                <option value='-None-'>-إختر الفرع-</option>
                                                <option value='Dammam'>فرع الدمام</option>
                                                <option value='Ehsaa'>فرع الإحساء</option>
                                            </select>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row' data-aos="fade-up">
                                        <div class='zcwf_col_lab'></div>
                                        <div class='zcwf_col_fld'>
                                            <input type='submit' id='formsubmit' class='formsubmit zcwf_button btn btn-primary' value='إحجز الآن'>
                                        </div>
                                    </div>
                                    <script>
                                        function checkMandatory4751497000005958001() {
                                            var form = $('#crmWebToEntityForm');
                                            $('#LastName').val($('#LEADCF2').val());
                                            $.ajax({
                                            type: "POST",
                                                url: route('api.categories.store'),
                                                data: {
                                                    "_token": "{{ csrf_token() }}",
                                                    "name": $('#Last_Name').val(),
                                                    "phone": $('#Mobile').val(),
                                                    "branch": $('#LEADCF1').find(":selected").val(),
                                                },
                                                success: function (data) {
                                                    $('#form-container').html($('#thankyou').html());
                                                    gtag('event', 'conversion', {
                                                        'send_to': 'AW-604548133/9wkmCPj2suoBEKXYoqAC'
                                                    });

                                                    snaptr('track','PURCHASE');


                                                    twq('track','Purchase', {
                                                        //required parameters
                                                        'value': '4599',
                                                        'currency': 'SAR',
                                                        'num_items': '1',
                                                        'transaction_id' : '1'
                                                    });
                                                    snaptr('track', ' Book Now', {
                                                        'currency': 'SAR', 'price': 333.33,
                                                        'item_ids': ['097man', '16span']
                                                    });
                                                    fbq('track', 'Categories', {currency: "SAR", value: 30.00});

                                                    function gtag_report_conversion(url) {
                                                        var callback = function () {
                                                            if (typeof(url) != 'undefined') {
                                                                window.location = url;
                                                            }
                                                        };
                                                        gtag('event', 'conversion', {
                                                            'send_to': 'AW-604548133/9wkmCPj2suoBEKXYoqAC',
                                                            'value': 7.0,
                                                            'currency': 'SAR',
                                                            'event_callback': callback
                                                        });
                                                        return false;
                                                    }
                                                },
                                                error: function (data) {
                                                    $('#form-container').html($('#thankyou').html());
                                                },
                                            });

                                            var mndFileds = new Array('Last Name', 'Mobile');
                                            var fldLangVal = new Array('\u0627\u0644\u0623\u0633\u0645', '\u0631\u0642\u0645\x20\u0627\u0644\u062C\u0648\u0627\u0644');
                                            for (i = 0; i < mndFileds.length; i++) {
                                                var fieldObj = document.forms['WebToCategories4751497000005958001'][mndFileds[i]];
                                                if (fieldObj) {
                                                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                                        if (fieldObj.type == 'file') {
                                                            alert('Please select a file to upload.');
                                                            fieldObj.focus();
                                                            return false;
                                                        }
                                                        alert(fldLangVal[i] + ' لا يمكن أن يترك فارغاً.');
                                                        fieldObj.focus();
                                                        return false;
                                                    } else if (fieldObj.nodeName == 'SELECT') {
                                                        if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                                            alert(fldLangVal[i] + ' من فضلك إختر الفرع');
                                                            fieldObj.focus();
                                                            return false;
                                                        }
                                                    } else if (fieldObj.type == 'checkbox') {
                                                        if (fieldObj.checked == false) {
                                                            alert('Please accept  ' + fldLangVal[i]);
                                                            fieldObj.focus();
                                                            return false;
                                                        }
                                                    }
                                                    try {
                                                        if (fieldObj.name == 'Last Name') {
                                                            name = fieldObj.value;
                                                        }
                                                    } catch (e) { }
                                                }
                                            }

                                            trackVisitor();
                                            document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
                                        }

                                        function tooltipShow4751497000005958001(el) {
                                            var tooltip = el.nextElementSibling;
                                            var tooltipDisplay = tooltip.style.display;
                                            if (tooltipDisplay == 'none') {
                                                var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                                                for (i = 0; i < allTooltip.length; i++) {
                                                    allTooltip[i].style.display = 'none';
                                                }
                                                tooltip.style.display = 'block';
                                            } else {
                                                tooltip.style.display = 'none';
                                            }
                                        }
                                    </script>
                                    <script type='text/javascript' id='VisitorTracking'>
                                        var $zoho = $zoho || {};
                                        $zoho.salesiq = $zoho.salesiq || {
                                                widgetcode: '93a57e7c7c3e4572e13c4bab81a6848fa85f004af8f57c30e2a2441301928b3f',
                                                values: {},
                                                ready: function () { }
                                            };
                                        var d = document;
                                        s = d.createElement('script');
                                        s.type = 'text/javascript';
                                        s.id = 'zsiqscript';
                                        s.defer = true;
                                        s.src = 'https://salesiq.zoho.com/widget';
                                        t = d.getElementsByTagName('script')[0];
                                        t.parentNode.insertBefore(s, t);

                                        function trackVisitor() {
                                            try {
                                                if ($zoho) {
                                                    var LDTuvidObj = document.forms['WebToCategories4751497000005958001']['LDTuvid'];
                                                    if (LDTuvidObj) {
                                                        LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();
                                                    }
                                                    var firstnameObj = document.forms['WebToCategories4751497000005958001']['First Name'];
                                                    if (firstnameObj) {
                                                        name = firstnameObj.value + ' ' + name;
                                                    }
                                                    $zoho.salesiq.visitor.name(name);
                                                    var emailObj = document.forms['WebToCategories4751497000005958001']['Email'];
                                                    if (emailObj) {
                                                        email = emailObj.value;
                                                        $zoho.salesiq.visitor.email(email);
                                                    }
                                                }
                                            } catch (e) { }
                                        }
                                    </script>
                                    <!-- Do not remove this --- Analytics Tracking code starts -->
                                    <script id='wf_anal'
                                            src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=2942070acf7db5bf78c8810eb6e4f06a2f7ae032b2e9797b3ead7990d9fb84a2gidc720c5569cda887877359d372931a38fb36ebee579e51daa2f0dfadb3d5d4062gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'></script>
                                    <!-- Do not remove this --- Analytics Tracking code ends. -->
                                </form>
                            </div>
                            <!-- // zoho -->
                        </div>
                        <!-- // form -->
                    </div>
                    <div class="col-lg-7">
                        <!-- image -->
                        <div class="book__image" data-aos="zoom-in">
                            <picture>
                                <source srcset="{{ settings()->get('form.image') }}" type="image/webp"><img src="{{ settings()->get('form.image') }}" draggable="false"
                                                                                                loading="lazy" alt="الكحال">
                            </picture>
                        </div>
                        <!-- // image -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // book -->

    <!-- partners -->
    <div class="partners">
        <div class="container">
            <div class="partners__container">
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-01.webp" type="image/webp"><img src="web/assets/images/partners/partner-01.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-02.webp" type="image/webp"><img src="web/assets/images/partners/partner-02.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-03.webp" type="image/webp"><img src="web/assets/images/partners/partner-03.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-04.webp" type="image/webp"><img src="web/assets/images/partners/partner-04.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-05.webp" type="image/webp"><img src="web/assets/images/partners/partner-05.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-06.webp" type="image/webp"><img src="web/assets/images/partners/partner-06.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
            </div>
        </div>
    </div>
    <!-- // partners -->


    <!-- footer -->
    <footer class="footer d-pad text-center">
        <div class="container">
            <small data-aos="fade-down">جميع الحقوق محفوظة لـ الكحّال - 2021</small>
            <a href="http://jumppeak.net" target="_blank" rel="noreferrer" class="d-inline-block" data-aos="fade-up">
                <picture>
                    <source srcset="/web/assets/images/jp.svg" type="image/webp"><img src="/web/assets/images/jp.svg" alt="Nasty Vape Store" draggable="false"
                                                                                 loading="lazy">
                </picture>
            </a>
        </div>
    </footer>
    <!-- // footer -->

        <!-- JS -->
        <script src="/web/assets/js/main.min.js"></script>

        @routes

        {!! settings()->get('pages.body.scripts') !!}

        <script type="text/javascript">

            function validatePhone() {
                phone = $("#Mobile").val();
                var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);
                if (regex.test(phone)) {
                    $("#phone_validation_message").css('display', 'none');
                    document.getElementById("formsubmit").disabled = false;
                } else {
                    $("#phone_validation_message").css('display', 'block');
                    document.getElementById("formsubmit").disabled = true;
                }
            }

        </script>
    </body>

</html>
