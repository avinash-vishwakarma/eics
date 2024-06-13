<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="EaglesThemes">
            <!-- ======== Page title and Description ============ -->
            <title>EICS Group of Companies &#8211; integrated design and engineering consultancy services</title>

        @if ($page_description)
            {!! $page_description !!}
        @endif

            <!--<< Favcion >>-->
            <link rel="shortcut icon" href="{{ asset("img/favicon/favicon.svg") }}" />

            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("img/favicon/favicon.svg") }}">

            <link rel="apple-touch-icon" sizes="114x114"  href="{{ asset("img/favicon/favicon.svg") }}">

            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("img/favicon/favicon.svg") }}">

            <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("img/favicon/favicon.svg") }}">
            
        
            <!--<< Bootstrap min.css >>-->
            <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
            <!--<< All Min Css >>-->
            <link rel="stylesheet" href="{{ asset("css/all.min.css") }}">
            <!--<< Animate.css >>-->
            <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
            <!--<< Magnific Popup.css >>-->
            <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
            <!--<< MeanMenu.css >>-->
            <link rel="stylesheet" href="{{ asset("css/meanmenu.css") }}">
            <!--<< Swiper Bundle.css >>-->
            <link rel="stylesheet" href="{{ asset("css/swiper-bundle.min.css") }}">
            <!--<< Nice Select.css >>-->
            <link rel="stylesheet" href="{{ asset("css/nice-select.css") }}">
            <!--<< Main.css >>-->
            <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    </head>
    <body>

        <x-preloader/>
        <x-mouse-cursor/>

        {{  $slot }}

        <x-back-to-start/>

        <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

        <!--<< All JS Plugins >>-->
        <script src="{{ asset("js/jquery-3.7.1.min.js") }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset("js/viewport.jquery.js") }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset("js/jquery.nice-select.min.js") }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset("js/jquery.waypoints.js") }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset("js/jquery.counterup.min.js") }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset("js/jquery.meanmenu.min.js") }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset("js/wow.min.js") }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset("js/main.js") }}"></script>

    </body>
</html>