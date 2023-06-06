<!DOCTYPE html><!--  Last Published: Tue May 30 2023 17:25:36 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="@yield('data-wf-page', '63490731a37b6a780741ac61')" data-wf-site="63490731a37b6a55ee41ac5e"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @if (env('APP_ENV') == 'production')
        <meta name="robots" content="index, follow">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-P11Z609REF"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-P11Z609REF');
        </script>
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif
    <meta charset="utf-8">
    <title>@yield('title', __('ccs.seo_title'))</title>
    <meta content="@yield('seo_description', __('ccs.seo_description'))" name="description">
    <meta content="@yield('title', __('ccs.seo_title'))" property="og:title">
    <meta content="@yield('seo_description', __('ccs.seo_description'))" property="og:description">
    <meta content="/theme/ccs/images/ccs/og-image.jpg" property="og:image">
    <meta content="@yield('title', __('ccs.seo_title'))" property="twitter:title">
    <meta content="@yield('seo_description', __('ccs.seo_description'))" property="twitter:description">
    <meta content="/theme/ccs/images/ccs/og-image.jpg" property="twitter:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta property="og:type" content="website">
    <meta name="author" content="Darvis | Arvid de Jong | arvid@darvis.nl">
    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="/manifest/manifest.webmanifest" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="/theme/ccs/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/theme/ccs/css/components.css" rel="stylesheet" type="text/css">
    <link href="/theme/ccs/css/compricoatingservice.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Titillium Web:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900",
                    "Inter:100,200,300,regular,500,600,700,800,900"
                ]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="/theme/ccs/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/theme/ccs/images/webclip.png" rel="apple-touch-icon">
    <meta name="google" content="notranslate"><!--  Slick Slider CSS  -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <style>
        /*Slick Slider Customizations*/
        .slick-list {
            display: flex;
            overflow: visible;
            width: 100%;
        }

        .slick-track {
            display: flex;
        }
    </style>
    @livewireStyles
    {{-- <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="73793b19-3799-4b27-b87d-9e354ad77b25"
        data-blockingmode="auto" type="text/javascript"></script> --}}
</head>

<body>
    {{-- <script id="CookieDeclaration" src="https://consent.cookiebot.com/73793b19-3799-4b27-b87d-9e354ad77b25/cd.js"
        type="text/javascript" async></script> --}}
    @livewire('ccs.widgets.ccs-navigation')
    {{ $slot }}
    @livewire('ccs.widgets.ccs-footer')
    @livewireScripts
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63490731a37b6a55ee41ac5e"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="/theme/ccs/js/compricoatingservice.js" type="text/javascript"></script>
    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing:
                antialiased;
            -o-font-smoothing: antialiased;
        }
    </style>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <style>
        ::-moz-selection {
            /* Firefox */
            color: #1b1b1b;
            background: #ffe400;
        }

        ::selection {
            color: #1b1b1b;
            background: #ffe400;
        }
    </style><!--  Slick Slider JS  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--  Card Slider Config  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.card-slider').slick({
                arrows: false,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 8000,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
    <!--  Card Slider Custom Nav  -->
    <script>
        $('.slide-right').click(function() {
            $('.card-slider').slick('slickNext');
        });
        $('.slide-left').click(function() {
            $('.card-slider').slick('slickPrev');
        });
    </script>

</body>

</html>
