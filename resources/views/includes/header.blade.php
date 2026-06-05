<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Brigade Lucknow</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo URL::asset('favicon.png')?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo URL::asset('favicon.png')?>">
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
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
    /* ============= DEFINITIVE NAVBAR STYLING RESTORATION ============= */
    body {
        font-family: 'Open Sans', sans-serif !important;
        -webkit-font-smoothing: antialiased;
    }
    a { text-decoration: none !important; }

    .navbar-area {
        background-color: #fff !important;
        transition: 0.5s ease-in;
        position: sticky;
        top: 0;
        z-index: 5000;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        padding: 0;
        min-height: 90px;
        display: flex;
        align-items: center;
        width: 100%;
    }

    .navbar-area .nav-container {
        display: flex !important;
        align-items: center;
        width: 100% !important; 
        max-width: none !important; 
        margin: 0 !important;
        padding: 0 40px !important; 
        justify-content: space-between;
        position: relative; 
    }

    /* Zone 1: Logo */
    .navbar-area .navbar-header {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
    }

    .navbar-area .logo-width {
        width: 219px;
        height: auto;
    }

    /* Zone 2: Navigation Links */
    .navbar-area .navbar-collapse-desktop {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        display: flex !important;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    .navbar-area .navbar-nav {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 0;
        padding: 0;
        list-style: none;
        gap: 30px;
        pointer-events: auto;
    }

    .navbar-area .nav-item .nav-link {
        color: #E31E24 !important; /* Items in RED color as requested */
        font-size: 16px !important; /* Increased font size a little */
        font-weight: 700 !important;
        text-transform: capitalize !important;
        transition: 0.3s ease;
        padding: 25px 0;
        white-space: nowrap;
        letter-spacing: 0.2px;
    }

    /* User in which page is that should be black color */
    .navbar-area .nav-item.active .nav-link,
    .navbar-area .nav-item .nav-link:hover {
        color: #000000 !important; 
    }

    /* Zone 3: Donate Button Section */
    .navbar-area .navbar-donate-wrap {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    /* Donate button in RED color & Hover RED */
    .navbar-area .donate-btn {
        display: inline-block;
        text-align: center;
        height: 50px;
        line-height: 50px;
        font-size: 14px;
        border-radius: 30px;
        color: #ffffff !important;
        background-color: #E31E24 !important; /* RED Donate button */
        padding: 0px 30px;
        text-transform: uppercase;
        font-weight: 700;
        width: 160px;
        transition: 0.3s ease;
        box-shadow: 0 10px 20px rgba(227, 30, 36, 0.2);
        border: 2px solid #E31E24;
    }

    .navbar-area .donate-btn:hover {
        color: #ffffff !important;
        background-color: #E31E24 !important; /* Hover remains RED */
        transform: translateY(-1px);
        box-shadow: 0 12px 25px rgba(227, 30, 36, 0.3);
    }

    /* Mobile Toggler */
    .navbar-area .navbar-toggler {
        display: none !important;
        border: 2px solid #E31E24;
        padding: 8px 12px;
        background: #fff;
        border-radius: 8px;
        cursor: pointer;
        outline: none;
    }
    .navbar-area .navbar-toggler i { color: #E31E24; font-size: 20px; }

    /* MOBILE DRAWER - HIDDEN ON BIG SCREENS */
    .rb-mobile-drawer {
        display: none !important;
    }

    /* BREAKPOINT */
    @media (max-width: 1400px) {
        .navbar-area .navbar-collapse-desktop,
        .navbar-area .navbar-donate-wrap.desktop-donate {
            display: none !important; 
        }

        .navbar-area .navbar-toggler {
            display: block !important; 
        }

        .navbar-area .nav-container {
            padding: 0 20px !important;
        }

        .rb-mobile-drawer {
            display: flex !important; 
            position: fixed;
            top: 0;
            right: -340px;
            width: 320px;
            height: 100vh;
            background: #ffffff;
            flex-direction: column;
            z-index: 10000;
            box-shadow: -15px 0 50px rgba(0,0,0,0.15);
            transition: right 0.4s ease;
            overflow-y: auto;
            padding: 0;
        }

        .rb-mobile-drawer.active {
            right: 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
            background: #fafbfc;
            flex-shrink: 0;
        }

        .sidebar-close {
            font-size: 32px;
            color: #E31E24;
            cursor: pointer;
            line-height: 1;
            font-weight: bold;
        }

        .sidebar-nav-list {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 10px 0;
            list-style: none;
            margin: 0;
        }

        .sidebar-nav-link {
            display: block;
            padding: 12px 25px !important;
            font-size: 17px !important;
            font-weight: 700 !important;
            color: #E31E24 !important; /* Sidebar links also RED */
            border-bottom: 1px solid #f9f9f9;
        }

        /* Active sidebar link also BLACK */
        .sidebar-nav-link:hover, .sidebar-nav-item.active .sidebar-nav-link {
            color: #000000 !important;
            background: #fff5f5;
        }

        .sidebar-footer {
            width: 100%;
            padding: 20px 25px 40px;
            margin-top: auto;
            border-top: 1px solid #f0f0f0;
        }

        .sidebar-footer .donate-btn {
            width: 100%;
            margin-left: 0;
            background-color: #E31E24 !important;
            color: #fff !important;
        }
    }

    @media (max-width: 580px) {
        .navbar-area .logo-width { width: 160px; }
        .rb-mobile-drawer { width: 100% !important; }
    }

    /* Overlay */
    .nav-overlay {
        position: fixed;
        inset: 0;
        background: rgba(10, 27, 52, 0.25);
        z-index: 9000;
        display: none;
    }
    .nav-overlay.active { display: block; }
    body.menu-open { overflow: hidden; }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggler = document.querySelector('.navbar-toggler');
        const drawer = document.querySelector('.rb-mobile-drawer');
        const overlay = document.createElement('div');
        overlay.className = 'nav-overlay';
        document.body.appendChild(overlay);

        function toggleMenu() {
            if (!drawer) return;
            drawer.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        }

        if (toggler) {
            toggler.addEventListener('click', (e) => {
                e.preventDefault();
                toggleMenu();
            });
        }

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('sidebar-close') || e.target.classList.contains('nav-overlay')) {
                toggleMenu();
            }
        });

        // Close on resize
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1400 && drawer && drawer.classList.contains('active')) {
                toggleMenu();
            }
        });
    });
    </script>
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

    <!-- ============ NAVIGATION ===== -->
    <nav class="navbar navbar-area">
        <div class="nav-container">
            <!-- Zone 1: Logo -->
            <div class="navbar-header">
                <a href="<?php echo action('MainController@index'); ?>">
                    <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" class="logo-width" width="219" height="auto">
                </a>
            </div>

            <!-- Zone 2: Navigation Links -->
            <div class="navbar-collapse-desktop">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo Request::is('/') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@index'); ?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('about') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@about'); ?>">About Us</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('event') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@event'); ?>">Our Work</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('blog') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('ourteam') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@ourteam'); ?>">Our Team</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('research') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@research'); ?>">Research</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('gallery') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@gallery'); ?>">Gallery</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('ethics') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@ethics'); ?>">Vision & Ethics</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('achievements') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@achievements'); ?>">Achievements</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action('MainController@contact'); ?>">Contact us</a>
                    </li>
                </ul>
            </div>

            <!-- Zone 3: Donate Button -->
            <div class="navbar-donate-wrap desktop-donate">
                <a class="donate-btn" href="<?php echo action('MainController@donate'); ?>">Donate</a>
            </div>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- ============ MOBILE DRAWER ===== -->
    <div class="rb-mobile-drawer">
        <div class="sidebar-header">
            <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" style="width: 130px; height: auto;">
            <div class="sidebar-close">&times;</div>
        </div>
        
        <ul class="sidebar-nav-list">
            <li class="sidebar-nav-item <?php echo Request::is('/') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@index'); ?>">Home</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('about') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@about'); ?>">About Us</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('event') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@event'); ?>">Our Work</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('blog') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@blog'); ?>">Blog</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('ourteam') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@ourteam'); ?>">Our Team</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('research') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@research'); ?>">Research</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('gallery') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@gallery'); ?>">Gallery</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('ethics') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@ethics'); ?>">Vision & Ethics</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('achievements') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@achievements'); ?>">Achievements</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('contact') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action('MainController@contact'); ?>">Contact us</a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <a class="donate-btn" href="<?php echo action('MainController@donate'); ?>">Donate</a>
        </div>
    </div>
</body>
</html>
