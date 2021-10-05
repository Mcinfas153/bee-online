<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="crm, bee, beeonline, beeinc" />
    <meta name="description" content="HTML5 Template" />
    <meta name="Ihlas" content="beeonline.xyz" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>"Bee Inc." is the world’s #1 customer relationship management (CRM) platform. We help your marketing, sales, commerce, service and IT teams work as one from anywhere — so you can keep your customers happy everywhere.</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <!--== themify -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('assets/css/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{ asset('assets/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme-color/theme-color-5.css') }}" rel="stylesheet" type="text/css" />

    <!-- inject css end -->
    @livewireStyles
</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <div class="loader-text">Loading</div>
                <div class="loader-dots"> <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!-- preloader end -->


        <!--header start-->

        <livewire:header />

        <livewire:hidden-nav />

        <!--header end-->

        {{ $slot }}

        <!--footer start-->

        <livewire:footer />

        <!--footer end-->


    </div>

    <!-- page wrapper end -->


    <!--back-to-top start-->

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-upload"></i></a></div>

    <!--back-to-top end-->


    <!-- inject js start -->

    <!--== theme -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <!--== magnific-popup -->
    <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!--== owl-carousel -->
    <script src="{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>

    <!--== counter -->
    <script src="{{ asset('assets/js/counter/counter.js') }}"></script>

    <!--== countdown -->
    <script src="{{ asset('assets/js/countdown/jquery.countdown.min.js') }}"></script>

    <!--== isotope -->
    <script src="{{ asset('assets/js/isotope/isotope.pkgd.min.js') }}"></script>

    <!--== mouse-parallax -->
    <script src="{{ asset('assets/js/mouse-parallax/tweenmax.min.js') }}"></script>
    <script src="{{ asset('assets/js/mouse-parallax/jquery-parallax.js') }}"></script>

    <!--== wow -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--== theme-script -->
    <script src="{{ asset('assets/js/theme-script.js') }}"></script>

    <!-- inject js end -->
    @livewireScripts
</body>

</html>