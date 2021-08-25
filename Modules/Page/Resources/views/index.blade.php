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
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero__content">
                        <!-- text -->
                        <div class="hero__text">
                            <span class="color overline" data-aos="fade-up" data-aos-delay="200">
                                إحجز الآن لسلامة عينيك
                            </span>
                            <h1 data-aos="fade-up" data-aos-delay="400">
                                أطباء ذوي كفاءة عالية في
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
                                        <use href="/web/assets/images/icons/icons.svg#location"></use>
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
                                        <use href="/web/assets/images/icons/icons.svg#location"></use>
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
                </div>
                <!-- image -->
                <div class="hero__image">
                    <picture>
                        <source srcset="assets/images/hero.webp" type="image/webp"><img src="assets/images/hero.jpg" draggable="false" alt="hero">
                    </picture>
                    <!-- contact -->
                    <div class="overlay__contact">
                        <!-- phone -->
                        <a class="overlay__contact-info" href="tel:920022066" data-aos="fade-down" data-aos-delay="800">
                            <div class="overlay__contact-icon">
                                <svg class="icon">
                                    <use href="/web/assets/images/icons/icons.svg#phone"></use>
                                </svg>
                            </div>
                            <div class="overlay__contact-text">
                                الرقم الموحد
                                <span>920022066</span>
                            </div>
                        </a>
                        <!-- // phone -->
                        <!-- whatsapp -->
                        <a class="overlay__contact-info" href="tel:920022066" data-aos="fade-down" data-aos-delay="800">
                            <div class="overlay__contact-icon">
                                <svg class="icon">
                                    <use href="/web/assets/images/icons/icons.svg#whatsapp"></use>
                                </svg>
                            </div>
                            <div class="overlay__contact-text">
                                راسلنا من خلال
                                <span>WhatsApp</span>
                            </div>
                        </a>
                        <!-- // whatsapp -->
                    </div>
                    <!-- // contact -->
                </div>
                <!-- // image -->
            </div>
        </div>
    </div>
    <!-- // hero -->


    <!-- partners -->
    <div class="partners">
        <div class="container">
            <div class="partners__container">
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-01.webp" type="image/webp"><img src="assets/images/partners/partner-01.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-02.webp" type="image/webp"><img src="assets/images/partners/partner-02.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-03.webp" type="image/webp"><img src="assets/images/partners/partner-03.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-04.webp" type="image/webp"><img src="assets/images/partners/partner-04.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-05.webp" type="image/webp"><img src="assets/images/partners/partner-05.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-06.webp" type="image/webp"><img src="assets/images/partners/partner-06.png"
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
                                        رؤيتك أوضح مع
                                    </span>
                                    <h3>
                                        عملية إزالة المياة البيضاء بتقنية الفاكو
                                    </h3>
                                    <div class="offer__price">
                                        <span class="h1 d-block">4000</span>
                                        ريال سعودي
                                    </div>
                                    <a href="#book" class="btn btn-primary">
                                        إحجز الآن
                                    </a>
                                    <!-- number -->
                                    <div class="offer__number">
                                        عرض 1 من 3
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
                        <!-- offer -->
                        <div class="swiper-slide">
                            <div class="offer">
                                <!-- info -->
                                <div class="offer__info text-center">
                                    <span class="overline">
                                        رؤيتك أوضح مع
                                    </span>
                                    <h3>
                                        عملية تصحيح النظر بالليزك
                                    </h3>
                                    <div class="offer__price">
                                        <span class="h1 d-block">10000</span>
                                        ريال سعودي
                                    </div>
                                    <a href="#book" class="btn btn-primary">
                                        إحجز الآن
                                    </a>
                                    <!-- number -->
                                    <div class="offer__number">
                                        عرض 2 من 3
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
                                        رؤيتك أوضح مع
                                    </span>
                                    <h3>
                                        علاج جفاف العين لتجنب مضاعفاته
                                    </h3>
                                    <div class="offer__price">
                                        <span class="h1 d-block">5000</span>
                                        ريال سعودي
                                    </div>
                                    <a href="#book" class="btn btn-primary">
                                        إحجز الآن
                                    </a>
                                    <!-- number -->
                                    <div class="offer__number">
                                        عرض 3 من 3
                                    </div>
                                    <!-- // number -->
                                </div>
                                <!-- // info -->
                                <!-- image -->
                                <div class="offer__image">
                                    <picture>
                                        <source srcset="/web/assets/images/offers/offer-03.webp" type="image/webp"><img
                                                src="/web/assets/images/offers/offer-03.jpg" loading="lazy" draggable="false" alt="offer name">
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
                <p class="lead" data-aos="fade-up" data-aos-delay="200">
                    نحن نقدم لكم خدمات عالية الجودة في تخصص العيون بأفضل وأحدث الأجهزة المتطورة لأن هي الحفاظ على أعينكم دوماً
                </p>
            </div>
            <!-- // title -->
            <!-- services -->
            <div class="services__container">
                <div class="row">
                    <!-- service -->
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/01.webp" type="image/webp"><img src="assets/images/services/01.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/02.webp" type="image/webp"><img src="assets/images/services/02.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="assets/images/services/03.webp" type="image/webp"><img src="assets/images/services/03.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/04.webp" type="image/webp"><img src="assets/images/services/04.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/05.webp" type="image/webp"><img src="assets/images/services/05.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/06.webp" type="image/webp"><img src="assets/images/services/06.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/07.webp" type="image/webp"><img src="assets/images/services/07.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/08.webp" type="image/webp"><img src="assets/images/services/08.jpg"
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
                    <div class="col-md-6 col-xl-4">
                        <div class="service">
                            <div class="service__image" data-aos="zoom-in">
                                <picture>
                                    <source srcset="/web/assets/images/services/09.webp" type="image/webp"><img src="assets/images/services/09.jpg"
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
            <!-- // services -->
        </div>
    </div>
    <!-- // services -->


    <!-- doctors -->
    <div class="doctors d-pad-b">
        <div class="container">
            <!-- title -->
            <div class="title text-center">
                <h2 data-aos="fade-down">
                    <span class="color">نخبة من </span>الاستشاريين وأساتذة الجامعة
                </h2>
            </div>
            <!-- // title -->
            <!-- doctors -->
            <div class="doctors__slider">
                <div class="swiper-container doctorsSlider">
                    <div class="swiper-wrapper">
                        <!-- doctor -->
                        <div class="swiper-slide">
                            <div class="doctor text-center">
                                <!-- image -->
                                <div class="doctor__image">
                                    <picture>
                                        <source srcset="assets/images/doctors/01.webp" type="image/webp"><img src="assets/images/doctors/01.jpg"
                                                                                                              draggable="false" loading="lazy" alt="name">
                                    </picture>
                                </div>
                                <!-- // image -->
                                <!-- info -->
                                <div class="doctor__info">
                                    <h3 class="h5 doctor__name" data-aos="fade-down">
                                        أ.د. عبد العزيز القرين
                                    </h3>
                                    <span class="color doctor__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        فرع الدمام
                                    </span>
                                    <p class="doctor__spec" data-aos="fade-up" data-aos-delay="400">
                                        استشاري الباطنية وأمراض الكبد والجهاز الهضمي والمناظير.
                                        أكثر من 30 عاماً من الخبرة.
                                    </p>
                                </div>
                                <!-- // info -->
                                <!-- book -->
                                <div class="doctor__book" data-aos="zoom-in" data-aos-delay="600">
                                    <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                </div>
                                <!-- // book -->
                            </div>
                        </div>
                        <!-- // doctor -->
                        <!-- doctor -->
                        <div class="swiper-slide">
                            <div class="doctor text-center">
                                <!-- image -->
                                <div class="doctor__image">
                                    <picture>
                                        <source srcset="assets/images/doctors/01.webp" type="image/webp"><img src="assets/images/doctors/01.jpg"
                                                                                                              draggable="false" loading="lazy" alt="name">
                                    </picture>
                                </div>
                                <!-- // image -->
                                <!-- info -->
                                <div class="doctor__info">
                                    <h3 class="h5 doctor__name" data-aos="fade-down">
                                        أ.د. عبد العزيز القرين
                                    </h3>
                                    <span class="color doctor__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        فرع الدمام
                                    </span>
                                    <p class="doctor__spec" data-aos="fade-up" data-aos-delay="400">
                                        استشاري الباطنية وأمراض الكبد والجهاز الهضمي والمناظير.
                                        أكثر من 30 عاماً من الخبرة.
                                    </p>
                                </div>
                                <!-- // info -->
                                <!-- book -->
                                <div class="doctor__book" data-aos="zoom-in" data-aos-delay="600">
                                    <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                </div>
                                <!-- // book -->
                            </div>
                        </div>
                        <!-- // doctor -->
                        <!-- doctor -->
                        <div class="swiper-slide">
                            <div class="doctor text-center">
                                <!-- image -->
                                <div class="doctor__image">
                                    <picture>
                                        <source srcset="assets/images/doctors/02.webp" type="image/webp"><img src="assets/images/doctors/02.jpg"
                                                                                                              draggable="false" loading="lazy" alt="name">
                                    </picture>
                                </div>
                                <!-- // image -->
                                <!-- info -->
                                <div class="doctor__info">
                                    <h3 class="h5 doctor__name" data-aos="fade-down">
                                        د. عبدالعزيز الرشود
                                    </h3>
                                    <span class="color doctor__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        فرع الدمام
                                    </span>
                                    <p class="doctor__spec" data-aos="fade-up" data-aos-delay="400">
                                        استشاري الشبكية والسائل الزجاجي والماء الأبيض ، خبرة أكثر من 15 عام.
                                    </p>
                                </div>
                                <!-- // info -->
                                <!-- book -->
                                <div class="doctor__book" data-aos="zoom-in" data-aos-delay="600">
                                    <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                </div>
                                <!-- // book -->
                            </div>
                        </div>
                        <!-- // doctor -->
                        <!-- doctor -->
                        <div class="swiper-slide">
                            <div class="doctor text-center">
                                <!-- image -->
                                <div class="doctor__image">
                                    <picture>
                                        <source srcset="assets/images/doctors/03.webp" type="image/webp"><img src="assets/images/doctors/03.jpg"
                                                                                                              draggable="false" loading="lazy" alt="name">
                                    </picture>
                                </div>
                                <!-- // image -->
                                <!-- info -->
                                <div class="doctor__info">
                                    <h3 class="h5 doctor__name" data-aos="fade-down">
                                        د. محمد ضياء الدين
                                    </h3>
                                    <span class="color doctor__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        فرع الدمام
                                    </span>
                                    <p class="doctor__spec" data-aos="fade-up" data-aos-delay="400">
                                        اخصائي طب وجراحة العيون ، خبرة أكثر من 27 عام
                                    </p>
                                </div>
                                <!-- // info -->
                                <!-- book -->
                                <div class="doctor__book" data-aos="zoom-in" data-aos-delay="600">
                                    <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                </div>
                                <!-- // book -->
                            </div>
                        </div>
                        <!-- // doctor -->
                        <!-- doctor -->
                        <div class="swiper-slide">
                            <div class="doctor text-center">
                                <!-- image -->
                                <div class="doctor__image">
                                    <picture>
                                        <source srcset="assets/images/doctors/04.webp" type="image/webp"><img src="assets/images/doctors/04.jpg"
                                                                                                              draggable="false" loading="lazy" alt="name">
                                    </picture>
                                </div>
                                <!-- // image -->
                                <!-- info -->
                                <div class="doctor__info">
                                    <h3 class="h5 doctor__name" data-aos="fade-down">
                                        د. وقار مصطفى القريشي
                                    </h3>
                                    <span class="color doctor__branch d-block" data-aos="fade-up" data-aos-delay="200">
                                        فرع الدمام
                                    </span>
                                    <p class="doctor__spec" data-aos="fade-up" data-aos-delay="400">
                                        اخصائي طب وجراحة العيون، خبرة أكثر من 16 عام
                                    </p>
                                </div>
                                <!-- // info -->
                                <!-- book -->
                                <div class="doctor__book" data-aos="zoom-in" data-aos-delay="600">
                                    <a href="#book" class="btn btn-secondary">إحجز الآن</a>
                                </div>
                                <!-- // book -->
                            </div>
                        </div>
                        <!-- // doctor -->
                    </div>
                    <!-- controls -->
                    <div class="swiper-button-next doctors-next"></div>
                    <div class="swiper-button-prev doctors-prev"></div>
                    <!-- // controls -->
                </div>
                <div class="swiper-scrollbar doctors-scrollbar"></div>

            </div>
            <!-- // doctors -->
        </div>
    </div>
    <!-- // doctors -->


    <!-- jci -->
    <div class="jci d-pad-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- image -->
                    <div class="jci__image" data-aos="zoom-in">
                        <picture>
                            <source srcset="assets/images/jci.webp" type="image/webp"><img src="assets/images/jci.jpg" draggable="false"
                                                                                           loading="lazy" alt="jci">
                        </picture>
                    </div>
                    <!-- // image -->
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="jci__text">
                        <span class="overline" data-aos="fade-down">
                            نتشرف بالحصول علی
                        </span>
                        <h2 class="title" data-aos="fade-down" data-aos-delay="200">
                            شهادة JCI <br>
                            في الجودة وسلامة المرضی
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="600">
                            تم بحمد الله حصول مجمع الكحال الطبي علی شهادة JCIA “المعيار الدولي للتميز” من قِبَل اللجنة المشتركة الدولية -الرائد
                            العالمي في الرعاية الصحية. حيث استطاع تحقيق ما يزيد عن 350 معيار من المعايير الدولية المطلوبة، ونعدكم بالتطوّر المستمر.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // jci -->



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
                                    <p class="lead">
                                        تم عمل عملية و تكللت بالنجاح علی يد الدكتور عادل الرشود وهو من أمهر الأطباء في سحب الموية البيضاء ورزع
                                        عدسة
                                        ثلاثية ،،
                                        عناية خاصة من استقبال المريض حتی خروجه نتمنی لهم دوام التوفيق من أدارة وأطباء وفنيين وممرضين.
                                    </p>
                                    <picture>
                                        <source srcset="assets/images/avatar.webp" type="image/webp"><img class="testimonials__avatar"
                                                                                                          src="assets/images/avatar.jpg" draggable="false" alt="avatar">
                                    </picture>
                                    <h3 class="testimonials__sayer h6">
                                        عبدالله الغامدي
                                    </h3>
                                    <picture>
                                        <source srcset="assets/images/stars.svg" type="image/webp"><img src="assets/images/stars.svg"
                                                                                                        draggable="false" alt="5 stars">
                                    </picture>
                                </div>
                            </div>
                            <!-- // slide -->
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimonials__slide text-center">
                                    <p class="lead">
                                        أشهر مركز طبي متخصص في طب العيون وله خدمات طبية عديدة ، عنده طاقم وفريق طبي متميز في جميع التخصصات ، راجعت
                                        في
                                        قسم العيون وكذلك الجيوب الأنفية ، وكانوا جدا متميزين وناصحين لي ، والخدمة والاستقبال جدا متميز ، وفقهم
                                        الله
                                        لكل الخير ، وارجو لهم مزيد من التقدم
                                    </p>
                                    <picture>
                                        <source srcset="assets/images/avatar.webp" type="image/webp"><img class="testimonials__avatar"
                                                                                                          src="assets/images/avatar.jpg" draggable="false" alt="avatar">
                                    </picture>
                                    <h3 class="testimonials__sayer h6">
                                        عبد الرحمن حلان
                                    </h3>
                                    <picture>
                                        <source srcset="assets/images/stars.svg" type="image/webp"><img src="assets/images/stars.svg"
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
                                <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4751497000005958001 method='POST'
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
                                            <input type='text' class="form-control" id='Mobile' name='Mobile' maxlength='30' placeholder="رقم الجوال">
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
                                            var mndFileds = new Array('Last Name', 'Mobile');
                                            var fldLangVal = new Array('\u0627\u0644\u0623\u0633\u0645', '\u0631\u0642\u0645\x20\u0627\u0644\u062C\u0648\u0627\u0644');
                                            for (i = 0; i < mndFileds.length; i++) {
                                                var fieldObj = document.forms['WebToLeads4751497000005958001'][mndFileds[i]];
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
                                                    var LDTuvidObj = document.forms['WebToLeads4751497000005958001']['LDTuvid'];
                                                    if (LDTuvidObj) {
                                                        LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();
                                                    }
                                                    var firstnameObj = document.forms['WebToLeads4751497000005958001']['First Name'];
                                                    if (firstnameObj) {
                                                        name = firstnameObj.value + ' ' + name;
                                                    }
                                                    $zoho.salesiq.visitor.name(name);
                                                    var emailObj = document.forms['WebToLeads4751497000005958001']['Email'];
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
                                <source srcset="assets/images/main.webp" type="image/webp"><img src="assets/images/main.jpg" draggable="false"
                                                                                                loading="lazy" alt="الكحال">
                            </picture>
                            <!-- contact -->
                            <div class="overlay__contact">
                                <!-- phone -->
                                <a class="overlay__contact-info" href="tel:920022066">
                                    <div class="overlay__contact-icon">
                                        <svg class="icon">
                                            <use href="assets/images/icons/icons.svg#phone"></use>
                                        </svg>
                                    </div>
                                    <div class="overlay__contact-text">
                                        الرقم الموحد
                                        <span>920022066</span>
                                    </div>
                                </a>
                                <!-- // phone -->
                                <!-- whatsapp -->
                                <a class="overlay__contact-info" href="tel:920022066">
                                    <div class="overlay__contact-icon">
                                        <svg class="icon">
                                            <use href="assets/images/icons/icons.svg#whatsapp"></use>
                                        </svg>
                                    </div>
                                    <div class="overlay__contact-text">
                                        راسلنا من خلال
                                        <span>WhatsApp</span>
                                    </div>
                                </a>
                                <!-- // whatsapp -->
                            </div>
                            <!-- // contact -->
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
                        <source srcset="/web/assets/images/partners/partner-01.webp" type="image/webp"><img src="assets/images/partners/partner-01.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-02.webp" type="image/webp"><img src="assets/images/partners/partner-02.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-03.webp" type="image/webp"><img src="assets/images/partners/partner-03.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-04.webp" type="image/webp"><img src="assets/images/partners/partner-04.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-05.webp" type="image/webp"><img src="assets/images/partners/partner-05.png"
                                                                                                       draggable="false" alt="partner name">
                    </picture>
                </div>
                <!-- // partner -->
                <!-- partner -->
                <div class="partner" data-aos="fade-up">
                    <picture>
                        <source srcset="/web/assets/images/partners/partner-06.webp" type="image/webp"><img src="assets/images/partners/partner-06.png"
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
                    <source srcset="/web/assets/images/jp.svg" type="image/webp"><img src="/web/assets/images/jp.svg" alt="Jumppeak" draggable="false"
                                                                                 loading="lazy">
                </picture>
            </a>
        </div>
    </footer>
    <!-- // footer -->

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
                                    <form method="post" action="https://crm.zoho.com/crm/WebToLeadForm" name="WebToLeads4751497000000674015" id="form">
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
                                        <input type='text' style='display:none;' id='LastName' name='Last Name' value="">

                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" class="form-control"  required name="LEADCF2" id="LEADCF2"
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
                                        <script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:'93a57e7c7c3e4572e13c4bab81a6848fa85f004af8f57c30e2a2441301928b3f', values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}};var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.com/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads4751497000000674015']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads4751497000000674015']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads4751497000000674015']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
                                        <script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=2942070acf7db5bf78c8810eb6e4f06aee879381530aa80d7b8304ab6e23e793gidc720c5569cda887877359d372931a38fb36ebee579e51daa2f0dfadb3d5d4062gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'></script>

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
            @if(settings()->get('offers.images'))
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
                                            تصحيح النظر<br>
                                                بالليزيك
                                            <span class="d-block color">
                                            <span class="en">
                                                4999
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
            @endif


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
        <script src="/web/assets/js/main.min.js"></script>

        @routes

        <script type="text/javascript">

            var form = $('#form');
            $('#form').submit(function(e) {
                    $('#LastName').val($('#LEADCF2').val());
                    $.ajax({
                        type: form.attr('method'),
                        url: route('api.leads.store'),
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

            });
        </script>
    </body>

</html>
