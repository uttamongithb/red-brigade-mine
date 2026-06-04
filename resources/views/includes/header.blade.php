<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Brigade Lucknow</title>
    <!-- favicon -->
    <link rel="icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
    <link rel="shortcut icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/bootstrap.min.css')?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/animate.css')?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/owl.carousel.min.css')?>">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/magnific-popup.css')?>">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/style.css')?>">
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/style2.css')?>">
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/bootstrap.min.css')?>">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo URL::asset('css/front/responsive.css')?>">
    <style>
        .rb-home .rb-hero-panel {
            margin-left: -10px !important;
        }

        @media screen and (max-width: 1199px) {
            .rb-home .rb-hero-panel {
                margin-left: 0 !important;
            }
        }

        @media screen and (max-width: 767px) {
            .rb-home .rb-hero-panel {
                margin-left: 0 !important;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var heroPanel = document.querySelector('.rb-home .rb-hero-panel');
            if (!heroPanel) {
                return;
            }

            if (window.innerWidth > 1199) {
                heroPanel.style.marginLeft = '-10px';
            }
        });
    </script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
    body{
       font-family: 'Inter', sans-serif !important;
         }
         a{
            text-decoration: none !important; 
        }
        
        /* ============= PROFESSIONAL NAVBAR LAYOUT ============= */
        
        /* Navbar Area - Full Width Container */
        .navbar-area {
            display: flex !important;
            width: 100%;
            padding: 0;
            margin: 0;
        }
        
        /* Navbar Container - Three Zone Layout */
        .navbar-area .nav-container {
            display: grid !important;
            grid-template-columns: auto minmax(0, 1fr) auto;
            align-items: center;
            width: 100% !important;
            padding: 15px 20px !important;
            margin: 0 !important;
            column-gap: 30px;
            flex: 0 0 100%;
        }

        /* Zone 1: Logo Section - LEFT - Fixed Width */
        .navbar-area .navbar-header {
            grid-column: 1;
            justify-self: start;
            margin: 0 !important;
            padding: 0 !important;
        }

        .navbar-area .navbar-brand.logo {
            margin: 0 !important;
            padding: 0 !important;
            display: inline-block;
        }

        /* Toggle Button */
        .navbar-area .navbar-toggler {
            display: none;
            margin-left: auto;
            margin-right: 0;
        }

        /* Zone 2: Navigation Menu - CENTER - Flex Grow */
        .navbar-area .navbar-collapse {
            grid-column: 2;
            display: flex !important;
            align-items: center;
            justify-content: center;
            min-width: 0;
            padding: 0 !important;
            border: none !important;
            width: 100%;
            overflow: visible;
        }

        .navbar-area .navbar-center-wrap {
            width: 100%;
            min-width: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .navbar-area .navbar-collapse .navbar-nav {
            display: flex !important;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            flex-wrap: nowrap;
            gap: 15px;
            margin: 0;
            padding: 0;
            width: 100%;
            min-width: 0;
            overflow: visible;
        }

        /* Individual Navigation Items */
        .navbar-area .navbar-collapse .navbar-nav .nav-item {
            margin: 0 !important;
            padding: 0 !important;
            flex: 0 0 auto;
            white-space: nowrap;
            list-style: none;
        }

        .navbar-area .navbar-collapse .navbar-nav .nav-item.active > .nav-link {
            color: #e74c3c;
        }

        .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
            font-size: 16px !important;
            font-weight: 500 !important;
            padding: 0 !important;
            margin: 0 !important;
            color: #282828;
            letter-spacing: 0.2px;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link:hover {
            color: #e74c3c;
        }

        /* Zone 3: Donate Button - RIGHT - Fixed at End */
        .navbar-area .navbar-collapse .navbar-nav .donate-nav-item {
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding: 0 !important;
            gap: 0;
            flex: 0 0 auto;
            white-space: nowrap;
            list-style: none;
        }

        .navbar-area .navbar-donate-wrap {
            grid-column: 3;
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            margin-left: 30px;
            justify-self: end;
        }

        .navbar-area .navbar-collapse .navbar-nav .donate-nav-item .donate-btn {
            margin-top: 0 !important;
            margin: 0 !important;
            white-space: nowrap;
        }

        @media (min-width: 1367px) and (max-width: 1599px) {
            .navbar-area .navbar-collapse .navbar-nav {
                gap: 10px;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
                font-size: 14px !important;
            }

            .navbar-area .navbar-donate-wrap {
                margin-left: 18px;
            }
        }

        @media (max-width: 1366px) {
            .navbar-area .nav-container {
                display: flex !important;
                flex-wrap: wrap;
                align-items: center;
                padding: 12px 16px !important;
                column-gap: 0;
                position: relative;
                z-index: 30;
            }

            .navbar-area .navbar-header {
                grid-column: auto;
                flex: 0 0 auto;
            }

            .navbar-area .navbar-toggler {
                display: block;
                margin-left: auto;
            }

            .navbar-area .navbar-collapse {
                grid-column: auto;
                order: 3;
                width: 100% !important;
                flex-basis: 100%;
                margin-top: 10px;
                padding: 14px 16px 16px !important;
                border: none !important;
                clear: both;
                background: #ffffff;
                border-top: 1px solid #e7edf5 !important;
                border-radius: 0 0 18px 18px;
                box-shadow: 0 18px 36px rgba(15, 39, 69, 0.12);
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 25;
            }

            .navbar-area .navbar-collapse.collapse {
                display: none !important;
            }

            .navbar-area .navbar-collapse.collapse.in {
                display: block !important;
            }

            .navbar-area .navbar-collapse.collapsing {
                display: block !important;
                height: auto;
                overflow: hidden;
            }

            .navbar-area .navbar-collapse.in,
            .navbar-area .navbar-collapse.show {
                display: block !important;
            }

            .navbar-area .navbar-collapse:not(.in):not(.show) {
                display: none !important;
            }

            .navbar-area .navbar-center-wrap {
                display: block;
                width: 100%;
                overflow: visible;
            }

            .navbar-area .navbar-collapse .navbar-nav,
            .navbar-area .navbar-collapse .navbar-donate-wrap {
                max-width: 540px;
                margin-left: auto;
                margin-right: auto;
            }

            .navbar-area .navbar-collapse .navbar-nav {
                display: block !important;
                width: 100%;
                padding: 0 !important;
                margin: 0;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item {
                display: block;
                margin: 0 0 10px 0 !important;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
                display: block;
                padding: 10px 0 !important;
                font-size: 15px !important;
            }

            .navbar-area .navbar-donate-wrap {
                display: block;
                margin: 12px 0 0 0;
                justify-self: auto;
            }

            .navbar-area .navbar-donate-wrap .donate-btn {
                display: inline-block;
            }
        }

        @media (max-width: 991px) {
            .navbar-area {
                padding: 10px 0;
            }

            .navbar-area .nav-container {
                padding: 10px 14px !important;
            }

            .navbar-area .navbar-toggler {
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                width: 44px;
                height: 40px;
                padding: 0;
                border-radius: 8px;
                border: 1px solid rgba(40, 40, 40, 0.12);
                background: #ffffff;
                box-shadow: 0 6px 16px rgba(15, 39, 69, 0.08);
            }

            .navbar-area .navbar-toggler-icon {
                width: 1.2em;
                height: 1.2em;
            }

            .navbar-area .navbar-collapse {
                position: absolute;
                top: calc(100% + 8px);
                left: 12px;
                right: 12px;
                width: auto !important;
                margin-top: 0;
                padding: 16px !important;
                border-radius: 16px;
                box-shadow: 0 20px 40px rgba(15, 39, 69, 0.16);
                z-index: 99;
            }

            .navbar-area .navbar-center-wrap {
                width: 100%;
            }

            .navbar-area .navbar-collapse .navbar-nav {
                max-width: none;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item {
                margin: 0 !important;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
                padding: 12px 0 !important;
                font-size: 15px !important;
                border-bottom: 1px solid #edf1f7;
                width: 100%;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item:last-child .nav-link {
                border-bottom: 0;
            }

            .navbar-area .navbar-donate-wrap {
                display: block;
                margin: 16px 0 0 0;
                width: 100%;
            }

            .navbar-area .navbar-donate-wrap .donate-btn {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 575px) {
            .navbar-area .nav-container {
                padding: 8px 12px !important;
            }

            .navbar-area .navbar-brand.logo img,
            .navbar-area .logo-width {
                max-width: 150px;
                height: auto;
            }

            .navbar-area .navbar-collapse {
                left: 10px;
                right: 10px;
                padding: 14px !important;
            }

            .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
                font-size: 14px !important;
                padding: 10px 0 !important;
            }

            .navbar-area .navbar-donate-wrap .donate-btn {
                padding: 10px 14px;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WVQ5M6KB1N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WVQ5M6KB1N');
</script>
</head>

<body>

    <!-- ============Start Navigation ===== -->
    <nav class="navbar navbar-area navbar-expand-lg navbar-light">
        <div class="container-fluid nav-container" style="padding:0px;">
        <div class="navbar-header">
            <a class="navbar-brand logo" href="<?php  echo action('MainController@index')?>" >
                <img src="<?php echo URL::asset('uploads/img/logo.png')?>" alt="logo image" class="logo-width" >
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-center-wrap">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo Request::is('/') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php  echo action('MainController@index')?>">Home <span class="sr-only">(current)</span></a>
                </li> 
                                <li class="nav-item <?php echo Request::is('about') ? 'active' : '' ?>">
                                        <a class="nav-link" href="<?php  echo action('MainController@about')?>">About Us</a>
                                </li>
                                <li class="nav-item <?php echo Request::is('ourteam') ? 'active' : '' ?>">
                                        <a class="nav-link" href="<?php  echo action('MainController@ourteam')?>">Our Team</a>
                                </li>
                                <li class="nav-item <?php echo Request::is('blog') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php  echo action('MainController@blog')?>">Our Work</a>
                </li>
                 <li class="nav-item <?php echo Request::is('achievements') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php  echo action('MainController@achievements')?>">Achievements</a>
                </li> 
                <li class="nav-item <?php echo Request::is('gallery') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php  echo action('MainController@gallery')?>">Research & Publications </a>
                </li>
                
               <li class="nav-item <?php echo Request::is('contact') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php  echo action('MainController@contact')?>">Contact us</a>
                </li>
            </ul>
            </div>
            <div class="navbar-donate-wrap">
                <a class="donate-btn" href="<?php  echo action('MainController@donate')?>">Donate</a>
            </div>
        </div>
        </div>
    </nav> 
