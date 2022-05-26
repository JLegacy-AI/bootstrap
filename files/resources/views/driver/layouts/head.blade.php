<link rel="shortcut icon" type="image/jpg" href="/favicon.ico"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
<link href="{{ asset('public/assets/fonts/fontawesome/css/css.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}?t=6">
<link rel="stylesheet" href="{{ asset('public/assets/css/driver_style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/dist/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/demo.css') }}">
<style>
    .timer_border {
        word-spacing: 3px;
    }
    @media (max-width: 575.98px) {
            .prix_section .jours svg, .prix_section .jours svg image {
                width: 230px !important;
                margin-left:-6%;
            }
            #e_tag div{
                padding-left: 0 !important;
            }
            #notes svg, #notes svg image{
                width: 250px !important;
            }
            #prices_row .custom-align{
                -ms-flex-pack: center!important;
                justify-content: center!important;
            }
            .custom-d-mob-none{
                display: none !important;
            }
            #reserver_row svg, #reserver_row svg image {
                width: 220px;
            }
            #logos_rows svg text, #logos_rows svg text tspan{
                font-size: 17.667px !important;
            }
            #logos_rows svg image{
                width: 28px !important;
            }
            .pr-sm-0 {
                padding-right: 0 !important;
            }
            .pl-sm-0 {
                padding-left: 0 !important;
            }
            .p-sm-18{
                padding-right: 18px;
            }   
            .pb-xs-0{
                padding-bottom: 0px;
            }
        }
        @media (min-width: 576px) and (max-width: 767.98px) { }
        @media (min-width: 768px) and (max-width: 991.98px) {  }
        @media (min-width: 992px) and (max-width: 1199.98px) { }
        @media (min-width: 1200px) {
            #reserver_row div, #e_tag div {
                text-align: right;
            }
            #prices_row .custom-align{
                -ms-flex-line-pack: start!important;
                align-content: flex-start!important;
            }
            .custom-d-large-none{
                display: none !important;
            }
        }
</style>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?

                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '208737606981978');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=208737606981978&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144568177-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-676853104');
    gtag('config', 'UA-144568177-1');
</script>
