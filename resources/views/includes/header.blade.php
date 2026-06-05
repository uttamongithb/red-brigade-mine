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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif !important;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    a {
        text-decoration: none !important; 
    }
    
    /* ============= RESTORED ORIGINAL NAVBAR LAYOUT (AS IT WAS) ============= */
    
    /* Navbar Area - Full Width Container */
    .navbar-area {
        display: flex !important;
        width: 100%;
        padding: 0;
        margin: 0;
        background: #fff;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
        z-index: 10000; /* Extremely high to be above overlay */
    }
    
    /* Navbar Container - Three Zone Layout */
    .navbar-area .nav-container {
        display: grid !important;
        grid-template-columns: auto minmax(0, 1fr) auto;
        align-items: center;
        width: 94% !important;
        max-width: 1440px;
        margin: 0 auto !important;
        padding: 0 !important;
        column-gap: 30px;
        flex: 0 0 100%;
    }

    /* Zone 1: Logo Section - LEFT */
    .navbar-area .navbar-header {
        grid-column: 1;
        justify-self: start;
        margin: 0 !important;
        padding: 0 !important;
        display: flex;
        align-items: center;
    }

    .navbar-area .navbar-brand.logo {
        margin: 0 !important;
        padding: 0 !important;
        display: inline-block;
    }
    
    .navbar-area .logo-width {
        width: 219px;
        height: auto;
    }

    /* Zone 2: Navigation Menu - CENTER */
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
        gap: 45px;
        margin: 0;
        padding: 0;
        width: 100%;
        min-width: 0;
        overflow: visible;
        list-style: none;
    }

    /* Individual Navigation Items */
    .navbar-area .navbar-collapse .navbar-nav .nav-item {
        margin: 0 !important;
        padding: 0 !important;
        flex: 0 0 auto;
        white-space: nowrap;
    }

    .navbar-area .navbar-collapse .navbar-nav .nav-item.active > .nav-link {
        color: #1f2f46 !important;
    }

    .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link {
        font-size: 18px !important;
        font-weight: 700 !important;
        padding: 0 !important;
        margin: 0 !important;
        color: #E31E24 !important;
        letter-spacing: 0.2px;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        text-transform: none;
    }

    .navbar-area .navbar-collapse .navbar-nav .nav-item .nav-link:hover {
        color: #1f2f46 !important;
    }

    /* Zone 3: Donate Button - RIGHT */
    .navbar-area .navbar-donate-wrap {
        grid-column: 3;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .navbar-area .navbar-donate-wrap .donate-btn {
        font-size: 16px !important;
        font-weight: 700 !important;
        color: #ffffff !important;
        background-color: #E31E24;
        padding: 0 30px !important;
        height: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(227, 30, 36, 0.2);
        border: 2px solid #E31E24;
        white-space: nowrap;
        text-decoration: none;
        line-height: 1;
    }

    .navbar-area .navbar-donate-wrap .donate-btn:hover {
        background-color: #ffffff;
        color: #E31E24 !important;
        box-shadow: 0 5px 15px rgba(227, 30, 36, 0.1);
    }

    /* Toggle Button */
    .navbar-area .navbar-toggler {
        display: none !important;
        border: none;
        padding: 10px;
        background: #f8f9fb;
        border-radius: 12px;
        cursor: pointer;
    }

    /* RIGHT SIDE MOBILE DRAWER SYSTEM */
    @media (max-width: 1366px) {
        .navbar-area .nav-container {
            display: flex !important;
            justify-content: space-between;
            padding: 12px 16px !important;
        }

        .navbar-area .navbar-toggler {
            display: flex !important;
        }

        /* Fixed Sidebar Position */
        .navbar-area .navbar-collapse {
            position: fixed !important;
            top: 0 !important;
            right: -340px !important;
            width: 330px;
            height: 100vh;
            background: #ffffff !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: stretch !important;
            justify-content: flex-start !important;
            z-index: 11000 !important; /* Above everything */
            box-shadow: -15px 0 50px rgba(0,0,0,0.15) !important;
            transition: right 0.5s cubic-bezier(0.77, 0, 0.175, 1) !important;
            padding: 0 !important;
            overflow-y: auto !important;
            visibility: hidden !important;
        }

        .navbar-area .navbar-collapse.show {
            right: 0 !important;
            visibility: visible !important;
        }

        /* Sidebar Header */
        .sidebar-header {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            padding: 25px !important;
            border-bottom: 2px solid #f0f0f0 !important;
            background: #fafbfc !important;
            flex-shrink: 0 !important;
        }

        .sidebar-close {
            font-size: 32px !important;
            color: #E31E24 !important;
            cursor: pointer !important;
            line-height: 1 !important;
            font-weight: bold !important;
            padding: 8px !important;
        }

        .navbar-area .navbar-center-wrap {
            width: 100% !important;
            padding: 0 !important; 
            display: block !important;
        }

        .navbar-area .navbar-nav {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            gap: 0 !important;
        }

        .navbar-area .navbar-nav .nav-item {
            display: block !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .navbar-area .navbar-nav .nav-item .nav-link {
            display: block !important;
            padding: 20px 25px !important; /* Increased space as requested */
            font-size: 18px !important; 
            font-weight: 700 !important;
            color: #1f2f46 !important;
            border-bottom: 1px solid #f8f9fa !important;
            transition: all 0.3s ease !important;
            margin: 0 !important;
            pointer-events: auto !important;
        }

        .navbar-area .navbar-nav .nav-item.active .nav-link,
        .navbar-area .navbar-nav .nav-item .nav-link:hover {
            background: #fff5f5 !important;
            color: #E31E24 !important;
        }

        /* Sidebar Donate Button */
        .navbar-area .navbar-donate-wrap {
            width: 100% !important;
            padding: 30px 25px 50px !important; /* Increased spacing */
            margin-top: auto !important;
            border-top: 1px solid #f0f0f0 !important;
            display: block !important;
        }

        .navbar-area .navbar-donate-wrap .donate-btn {
            width: 100% !important;
            height: 55px !important;
            font-size: 17px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            pointer-events: auto !important;
        }
    }

    @media (max-width: 580px) {
        .navbar-area .logo-width { width: 160px; }
        .navbar-area .navbar-collapse { width: 100% !important; }
    }

    /* Light Overlay */
    .nav-overlay {
        position: fixed;
        inset: 0;
        background: rgba(10, 27, 52, 0.25); 
        z-index: 9000; /* Below the Navbar and Sidebar */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease;
    }
    .nav-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    body.menu-open { overflow: hidden; }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggler = document.querySelector('.navbar-toggler');
        const menu = document.querySelector('.navbar-collapse');
        const overlay = document.createElement('div');
        overlay.className = 'nav-overlay';
        document.body.appendChild(overlay);

        function toggleMenu() {
            if (!menu) return;
            menu.classList.toggle('show');
            overlay.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        }

        if (toggler) {
            toggler.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu();
            });
        }

        // Handle clicks on overlay or close button
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('sidebar-close') || e.target.classList.contains('nav-overlay')) {
                toggleMenu();
            }
        });

        // Ensure links work correctly
        document.querySelectorAll('.navbar-nav .nav-link, .donate-btn').forEach(link => {
            link.addEventListener('click', function(e) {
                // If menu is open, close it, but allow the link to proceed
                if (menu && menu.classList.contains('show')) {
                    // We let the default action happen naturally
                }
            });
        });

        // Resize protection
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1366 && menu && menu.classList.contains('show')) {
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
    <nav class="navbar navbar-area navbar-expand-lg navbar-light">
        <div class="nav-container">
            <!-- Logo Section -->
            <div class="navbar-header">
                <a class="navbar-brand logo" href="<?php echo action('MainController@index'); ?>">
                    <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" class="logo-width">
                </a>
            </div>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation content -->
            <div class="navbar-collapse" id="navbarSupportedContent">
                <!-- Mobile Header (Logo + Close Button) -->
                <div class="sidebar-header d-lg-none">
                    <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" style="width: 140px; height: auto;">
                    <div class="sidebar-close">&times;</div>
                </div>

                <div class="navbar-center-wrap">
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

                <div class="navbar-donate-wrap">
                    <a class="donate-btn" href="<?php echo action('MainController@donate'); ?>">Donate</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
