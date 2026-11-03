<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Page-specific SEO --}}
    @yield('SEO')


    <!-- НЕПРОМЕНЕН TAG – ОСТАВЕНО ТОЧНО КАКТО ИСКАШ -->
    <meta property="og:image" content="https://yulianmollov.bg//assets/images/favicon.png" />
    <!-- / -->

    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">


    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/careox-icons/style.css?v=<?php echo time(); ?>" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/careox.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/css/custom.css?v=<?php echo time(); ?>" />

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




</head>

<body>

    <div class="page-wrapper">

        {{-- Header --}}
        @include('main_pages_files.inc.header')

        {{-- Page Content --}}
        {{ $slot }}

        {{-- Footer --}}
        @include('main_pages_files.inc.footer')

    </div>


    {{-- ========================================
         JAVASCRIPT DEPENDENCIES
    ======================================== --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js?v=<?php echo time(); ?>"></script>

    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.js?v=<?php echo time(); ?>"></script>
    {{-- <script src="/assets/vendors/wnumb/wNumb.min.js"></script> --}}
    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/wow/wow.js?v=<?php echo time(); ?>"></script>
    <script src="/assets/vendors/imagesloaded/imagesloaded.min.js?v=<?php echo time(); ?>"></script>

    <script src="/assets/js/careox.js?v=<?php echo time(); ?>"></script>
    <script src="/javascript/ajax/contact-form.js?v=<?php echo time(); ?>"></script>
    <script src="/javascript/ajax/newsletter.js?v=<?php echo time(); ?>"></script>

</body>

</html>
