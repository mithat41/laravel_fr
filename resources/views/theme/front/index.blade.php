<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('theme/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('theme/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('theme/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('theme/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('theme/css/bootstrap.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('theme/css/home_1.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('theme/css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div id="page">

    @include('theme.front.front_page.header')
    <!-- /header -->

    <main>
    @include('theme.front.front_page.carousel')
        <!--/carousel-->

    @include('theme.front.front_page.banner')
        <!--/banners_grid -->

    @include('theme.front.front_page.top_selling')
        <!-- /container -->

        <div class="featured lazy" data-bg="url(img/featured_home.jpg)">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container margin_60">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <h3>Armor<br>Air Color 720</h3>
                            <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                            <div class="feat_text_block">
                                <div class="price_box">
                                    <span class="new_price">$90.00</span>
                                    <span class="old_price">$170.00</span>
                                </div>
                                <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured -->

    @include('theme.front.front_page.featured')
    <!-- /container -->

    @include('theme.front.front_page.bottom_slider')
    <!-- /bg_gray -->

    @include('theme.front.front_page.latest_new')
<!-- /main -->

    @include('theme.front.front_page.footer')
    <!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('theme/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('theme/js/main.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('theme/js/carousel-home.min.js') }}"></script>

</body>
</html>
