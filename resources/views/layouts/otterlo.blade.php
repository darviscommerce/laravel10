<!DOCTYPE html><!--  Last Published: Fri Feb 03 2023 13:44:03 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="@yield('wf-page')" data-wf-site="636652b7a0bbe113d990267d">
<head>
    @if (env('APP_ENV') == 'production')
    <meta name="robots" content="index, follow">
@else
    <meta name="robots" content="noindex, nofollow">
@endif
  <meta charset="utf-8">
  <title>@yield('title', __('otterlo.seo_title'))</title>
  <meta content="@yield('description', __('otterlo.seo_description'))" name="description">
  <meta content="@yield('title', __('otterlo.seo_title'))" property="og:title">
  <meta content="@yield('description', __('otterlo.seo_description'))" property="og:description">
  <meta content="/images/otterlo/og-image.jpg" property="og:image">
  <meta content="@yield('title', __('otterlo.seo_title'))" property="twitter:title">
  <meta content="@yield('description', __('otterlo.seo_description'))" property="twitter:description">
  <meta content="/images/otterlo/og-image.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta name="author" content="Darvis | Arvid de Jong | arvid@darvis.nl">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="theme-color" content="#02676b"/>
  <link href="/theme/otterlo/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/theme/otterlo/css/components.css" rel="stylesheet" type="text/css">
  <link href="/theme/otterlo/css/vakantieotterlo.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Great Vibes:400"]
        }
      });
    </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link href="/theme/otterlo/images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="/theme/otterlo/images/webclip.png" rel="apple-touch-icon">
</head>
<body>
    @livewire('otterlo.widgets.otterlo-navigation')
    {{ $slot }}
    @livewire('otterlo.widgets.otterlo-footer')
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=636652b7a0bbe113d990267d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="/theme/otterlo/js/vakantieotterlo.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
