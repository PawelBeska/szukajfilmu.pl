<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}} | {{$name}}</title>
    <meta name="generator" content="{{config('app.name')}} | {{$name}}" />
    <meta property="og:title" content="{{config('app.name')}} | {{$name}}" />
    <meta name="author" content="{{config('app.name')}} | {{$name}}" />
    <meta property="og:locale" content="pl_PL" />
    <meta name="description" content="Szukaj video,filmów i seriali online. Codziennie nowe linki z cda,zalukaj, youtube i innych stron. To najlepsza szybka i darmowa wyszukiwarka video." />
    <meta property="og:description" content="Szukaj video,filmów i seriali online. Codziennie nowe linki z cda,zalukaj, youtube i innych stron. To najlepsza szybka i darmowa wyszukiwarka video." />
    <link rel="canonical" href="{{config('app.url')}}" />
    <meta property="og:url" content="{{config('app.name')}} | {{$name}}" />
    <meta property="og:site_name" content="{{config('app.name')}} | {{$name}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="SzukajFilmu.pl">
    <meta name="application-name" content="SzukajFilmu.pl">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137699446-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-137699446-1');
    </script>
    <script type="text/javascript">//<![CDATA[
        (function() {
            var configuration = {
                "token": "c77e2d8f0223b25cd1b70b9c5a73128a",
                "entryScript": {
                    "type": "click",
                    "capping": {
                        "limit": 5,
                        "timeout": 24
                    }
                },
                "exitScript": {
                    "enabled": true
                },
                "popUnder": {
                    "enabled": true
                }
            };
            var script = document.createElement('script');
            script.async = true;
            script.src = '//cdn.shorte.st/link-converter.min.js';
            script.onload = script.onreadystatechange = function () {var rs = this.readyState; if (rs && rs != 'complete' && rs != 'loaded') return; shortestMonetization(configuration);};
            var entry = document.getElementsByTagName('script')[0];
            entry.parentNode.insertBefore(script, entry);
        })();
        //]]></script>
</head>
<body style="margin: 0;">

<iframe style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>
<script>
    $("iframe").attr("src", "{{$url}}");
</script>





</body>
</html>