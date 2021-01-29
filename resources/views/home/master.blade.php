<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="msvalidate.01" content="80E2DBC872D617BB53ECECA86D1A6320" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.full_name')}}</title>
    <meta name="generator" content="{{config('app.full_name')}}" />
    <meta property="og:title" content="{{config('app.full_name')}}" />
    <meta name="author" content="{{config('app.full_name')}}" />
    <meta property="og:locale" content="pl_PL" />
    <meta name="description" content="Szukaj video,filmów i seriali online. Codziennie nowe linki z cda,zalukaj, youtube i innych stron. To najlepsza szybka i darmowa wyszukiwarka video." />
    <meta property="og:description" content="Szukaj video,filmów i seriali online. Codziennie nowe linki z cda,zalukaj, youtube i innych stron. To najlepsza szybka i darmowa wyszukiwarka video." />
    <link rel="canonical" href="{{config('app.url')}}" />
    <meta property="og:url" content="{{config('app.url')}}" />
    <meta property="og:site_name" content="{{config('app.full_name')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="SzukajFilmu.pl">
    <meta name="application-name" content="SzukajFilmu.pl">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/main.css')}}">
    <script src="{{URL::asset('assets/home/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137699446-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-137699446-1');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typeit/dist/typeit.min.js" ></script>
   <!-- <script async src="https://www.google.com/recaptcha/api.js?render=6LeVM5wUAAAAAEUIx4bFTUqLV3rJ9sjvZMBrXInP"></script>-->

</head>
<body>
@yield('header')
@yield('body')
@yield('footer')
<script>$("a").each(function (){if(this.href==window.location.href){             $(this).parent().addClass("uk-active")         }}     );</script>
</body>

</html>
