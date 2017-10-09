<!--
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/08/2017
 * Time: 17:04
 */
-->


<!DOCTYPE html>

<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <!-- Metas
    ================================================== -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, target-densitydpi=device-dpi"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Page Title
    ================================================== -->
    <title>BTP SERVICES :: Emergence en  construction</title>

    <!-- Favicon
    ======================<link rel="shortcut icon" href=""/>============================ -->

    <link rel="shortcut icon" href="images/favicon.ico" >
    <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >

    <!-- Google fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css' />

    <!-- bootstrap v3.0.2
    ================================================== -->

    {!!Html::style('css/bootstrap.css')!!}

    <!--font-awesome
    ================================================== -->
    <link rel="stylesheet" href="">
{!!Html::style('')!!}
{!!Html::style('font-awesome-4.7.0/css/font-awesome.min.css')!!}


    <!-- CSS Custom
    ================================================== -->



    <link rel="stylesheet" type="text/css" href="css/style.css" />
    {!!Html::style('')!!}
    <link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
    {!!Html::style('')!!}
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    {!!Html::style('')!!}
    <link rel="stylesheet" type="text/css" id="color" href="css/colors/color4.css">
    {!!Html::style('')!!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    {!!Html::script('')!!}
    <script src="js/respond.min.js"></script>
    {!!Html::script('')!!}
    <![endif]-->
</head>

<body data-twttr-rendered="true" data-spy="scroll" data-target="#my-nav">
<!-- preloder -->
<div id="preloader">
    <div id="status">&nbsp;</div><!-- /status -->
</div>
<!-- Navigation Bar -->
<div class="navbar navbar-fixed-top">
    <div class="container">
        <!-- mobile menu -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}"><img class="logo" src="images/logo-btp_project_011.png" alt=""></a>
        </div>
        <!-- desktop menu -->
        <nav id="my-nav" class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#header">Accueil</a></li>
                <li class=""><a href="#about">A Propos</a></li>
                <li class=""><a href="#team">Equipes</a></li>
                <li class=""><a href="#services">Services</a></li>
                <li class=""><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- End of Navigation Bar -->

<!-- Banner section-->

<!-- indegrer banner.blade-->
<!-- End of Banner -->
 @yield('banner')

<!-- About Section -->
<!----
-------about section integrate
---------->
@yield('about')
<!-- End of About Section -->

<!-- Team Section -->
<!----
----integrate team.blade section
------->
@yield('team')
<!-- End Team Section -->

<!-- Services Section -->
<!----
-----Integrate services
-----
--->
<!-- End of Services Section -->
@yield('services')
<!-- Portfolio Section -->
<!--
integrate portfolio and work
--->
<!-- End Portfolio Section -->

<!-- Testimonials Section -->
<!--
 Integrate recommendatioon secion
-->
<!-- End of Testimonials Section -->

<!-- Contact Section -->
<!---contact indegrating--->
@yield('contact')
<!-- End of Contact Section -->

<!-- Footer -->
<!---
-----footer---->
@yield('footer')
<!-- End of Footer -->

<!-- Scroll top -->
<div class="scrolltotop">
    <i class="fa fa-chevron-up"></i>
</div>
<!-- End scroll top -->

<!-- Style witcher -->
<!---
petite windows options et plus
Options
-->
<!-- end Style switcher -->

<!-- Bootstrap core JavaScript, plugin and custom scripts
================================================== -->
{!!Html::script('js/jquery-1.10.2.min.js')!!}

{!!Html::script('js/bootstrap.js')!!}
{!!Html::script('js/modernizr.js')!!}

{!!Html::script('js/jquery.funnyText.js')!!}

{!!Html::script('js/masonry.js')!!}

{!!Html::script('js/jquery.easypiechart.min.js')!!}

{!!Html::script('js/jquery.appear.js')!!}

{!!Html::script('js/jquery.cslider.js')!!}

{!!Html::script('js/jquery.mixitup.min.js')!!}

{!!Html::script('js/classie.js')!!}

{!!Html::script('js/imagesloaded.js')!!}

{!!Html::script('js/jquery.parallax-1.1.3.js')!!}

{!!Html::script('js/parallaxInit.js')!!}

{!!Html::script('js/jquery.flexisel.js')!!}

{!!Html::script('js/jquery.mousewheel.js')!!}

{!!Html::script('js/perfect-scrollbar.js')!!}

{!!Html::script('js/carousel-slider.js')!!}

{!!Html::script('js/jquery.magnific-popup.min.js')!!}

{!!Html::script('js/jquery.flexslider-min.js')!!}

{!!Html::script('js/jquery.easing.1.3.js')!!}

{!!Html::script('js/tweetable.jquery.js')!!}

{!!Html::script('js/jquery.timeago.js')!!}

{!!Html::script('js/jquery.placeholder.js')!!}

{!!Html::script('js/scripts.js')!!}

{!!Html::script('js/switcher.js')!!}

{!!Html::script('')!!}
<script>
    jQuery(document).ready(function() {
        // Pie Charts
        'use strict';
        var pieChartClass = 'pieChart',
            pieChartLoadedClass = 'pie-chart-loaded';
        function initPieCharts() {
            var chart = $('.' + pieChartClass);
            chart.each(function() {
                $(this).appear(function() {
                    var $this = $(this),
                        chartBarColor = ($this.data('bar-color')) ? $this.data('bar-color') : "#F4A622",
                        chartBarWidth = ($this.data('bar-width')) ? ($this.data('bar-width')) : 150
                    if( !$this.hasClass(pieChartLoadedClass) ) {
                        $this.easyPieChart({
                            animate: 2000,
                            size: chartBarWidth,
                            lineWidth: 6,
                            scaleColor: false,
                            trackColor: "#eeeeee",
                            barColor: chartBarColor,
                        }).addClass(pieChartLoadedClass);
                    }
                });
            });
        }
        initPieCharts();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        $('.funny-text').funnyText({
            speed: 700,
            activeColor: '#F4A622',
            color: '#fff',
            fontSize: '1em',
            borderColor: 'none'
        });

    });
</script>

</body>
</html>