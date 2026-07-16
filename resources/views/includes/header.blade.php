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
    /* ============= PERFECT BRANDED NAVIGATION SYSTEM ============= */
    body {
        font-family: 'Open Sans', sans-serif !important;
        -webkit-font-smoothing: antialiased;
    }
    a { text-decoration: none !important; }

    .navbar-area {
        background-color: #fff !important;
        transition: 0.3s ease;
        position: sticky;
        top: 0;
        z-index: 10000;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        padding: 0;
        min-height: 95px;
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
        padding: 0 5% !important; /* Percentage padding for more flexibility */
        justify-content: space-between;
        position: relative; 
    }

    /* Zone 1: Logo (Left) */
    .navbar-area .navbar-header {
        flex: 0 1 auto; /* Allow logo to shrink slightly if pushed */
        display: flex;
        align-items: center;
        z-index: 10;
        min-width: 150px;
    }

    .navbar-area .logo-width {
        width: clamp(140px, 15vw, 190px);
        height: auto;
    }

    /* Zone 2: Links (Center) */
    .navbar-area .navbar-collapse-desktop {
        flex: 1 1 auto;
        display: flex !important;
        align-items: center;
        justify-content: center;
        margin: 0 15px;
        /* Removed overflow: hidden; because it clips the dropdown menu */
    }

    .navbar-area .navbar-nav {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 0;
        padding: 0;
        list-style: none;
        gap: clamp(8px, 1.2vw, 22px); /* Tightened gaps for better fit */
    }

    .navbar-area .nav-item .nav-link {
        color: #E31E24 !important;
        font-size: clamp(14px, 1vw, 16px) !important; /* Adaptive font size */
        font-weight: 700 !important;
        text-transform: capitalize !important;
        transition: color 0.3s ease;
        padding: 10px 0;
        white-space: nowrap;
        letter-spacing: 0.1px;
    }

    /* Active & Hover: Black */
    .navbar-area .nav-item.active .nav-link,
    .navbar-area .nav-item .nav-link:hover {
        color: #000000 !important; 
    }

    /* Custom Dropdown Styling */
    @media (min-width: 1281px) {
        .navbar-area .rb-custom-menu {
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 5px;
            padding: 10px 0;
            background: #ffffff;
            border-radius: 8px;
            display: none;
            visibility: hidden;
            opacity: 0;
            min-width: 220px;
            z-index: 999999 !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        }
        .navbar-area .rb-custom-menu.rb-show {
            display: block !important;
            visibility: visible !important;
            animation: fadeIn 0.2s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .navbar-area .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: #173455;
            font-weight: 600;
            transition: all 0.2s ease;
            text-decoration: none !important;
        }
        .navbar-area .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #E31E24 !important;
        }
        
        /* Nested Dropdowns Style */
        .navbar-area .dropdown-submenu {
            position: relative;
        }
        .navbar-area .rb-nested-menu.rb-show {
            display: block !important;
            visibility: visible !important;
            opacity: 1;
            transform: translateX(0);
        }
        .navbar-area .rb-nested-menu {
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: -5px;
            padding: 8px 0;
            background: #ffffff;
            border-radius: 8px;
            display: none;
            visibility: hidden;
            opacity: 0;
            min-width: 290px;
            z-index: 1000000 !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
            transition: opacity 0.2s ease, transform 0.2s ease;
            transform: translateX(10px);
        }
        .navbar-area .rb-nested-menu .dropdown-item {
            font-size: 13.5px !important;
            font-weight: 600;
            color: #173455;
            padding: 8px 20px;
            white-space: normal;
            line-height: 1.4;
        }
        .navbar-area .rb-nested-menu .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #E31E24 !important;
            padding-left: 23px;
        }
    }

    /* Mobile Toggler */
    .navbar-area .navbar-toggler {
        display: none !important;
        border: none;
        padding: 10px;
        background: transparent;
        cursor: pointer;
        outline: none;
        margin-left: 15px;
    }
    .navbar-area .navbar-toggler i { color: #E31E24; font-size: 24px; }

    /* MOBILE DRAWER */
    .rb-mobile-drawer {
        display: none;
    }

    /* BREAKPOINT FOR MOBILE SWITCH - Set to 1280px to safely avoid overlaps */
    @media (max-width: 1280px) {
        .navbar-area .navbar-collapse-desktop {
            display: none !important; 
        }

        .navbar-area .navbar-toggler {
            display: block !important; 
        }

        .navbar-area .nav-container {
            padding: 0 20px !important;
            min-height: 80px;
        }

        .navbar-area .logo-width {
            width: 150px;
        }

        .rb-mobile-drawer {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            right: 0;
            width: 320px;
            height: 100vh;
            height: 100dvh;
            background: #ffffff;
            z-index: 100000;
            box-shadow: -5px 0 25px rgba(0,0,0,0.15);
            transition: transform 0.3s ease-in-out;
            transform: translateX(100%);
            overflow-y: auto;
        }

        .rb-mobile-drawer.active {
            transform: translateX(0);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px;
            border-bottom: 2px solid #f5f5f5;
            background: #fafbfc;
            flex-shrink: 0;
        }

        .sidebar-close {
            font-size: 36px;
            color: #E31E24;
            cursor: pointer;
            line-height: 1;
            font-weight: bold;
            padding: 5px;
        }

        .sidebar-nav-list {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 15px 0;
            list-style: none;
            margin: 0;
        }

        .sidebar-nav-link {
            display: block;
            padding: 16px 30px !important; /* Balanced 8px vertical space (approx 16px total between texts) */
            font-size: 18px !important;
            font-weight: 700 !important;
            color: #E31E24 !important; /* Sidebar Links Red */
            border-bottom: 1px solid #f9f9f9;
            transition: all 0.3s ease;
        }

        /* Active Sidebar: Black */
        .sidebar-nav-link:hover, .sidebar-nav-item.active .sidebar-nav-link {
            color: #000000 !important;
            background: #fffafa;
            padding-left: 35px !important;
        }
    }

    @media (max-width: 580px) {
        .navbar-area .logo-width { width: 160px; }
        .rb-mobile-drawer { width: 100% !important; }
    }

    /* Light Overlay */
    .nav-overlay {
        position: fixed;
        inset: 0;
        background: rgba(10, 27, 52, 0.2);
        z-index: 90000;
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
                e.stopPropagation();
                toggleMenu();
            });
        }

        // Close on overlay or X
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('sidebar-close') || e.target.classList.contains('nav-overlay')) {
                toggleMenu();
            }
        });

        // Ensure links are fully functional - NO JS INTERFERENCE
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1400 && drawer && drawer.classList.contains('active')) {
                toggleMenu();
            }
        });

        // Custom Dropdown Click Handler for Desktop
        const dropdownToggle = document.getElementById('rbDropdownToggle');
        const dropdownMenu = document.getElementById('rbDropdownMenu');

        if (dropdownToggle && dropdownMenu) {
            // Function to close all nested submenus
            function closeAllSubmenus() {
                const submenus = dropdownMenu.querySelectorAll('.rb-nested-menu');
                submenus.forEach(menu => {
                    menu.classList.remove('rb-show');
                });
            }

            // Click handler for main Our Work dropdown
            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const isShowing = dropdownMenu.classList.contains('rb-show');
                
                if (isShowing) {
                    dropdownMenu.classList.remove('rb-show');
                    closeAllSubmenus();
                } else {
                    dropdownMenu.classList.add('rb-show');
                }
            });

            // Click handler for nested dropdown submenus (Ongoing Work, Previous Work, Upcoming Work)
            const submenuToggles = dropdownMenu.querySelectorAll('.dropdown-submenu > a');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const currentMenu = this.nextElementSibling;
                    if (!currentMenu) return;
                    
                    const isShowing = currentMenu.classList.contains('rb-show');
                    
                    // Close all other nested submenus at the same level
                    closeAllSubmenus();
                    
                    // Toggle current submenu
                    if (isShowing) {
                        currentMenu.classList.remove('rb-show');
                    } else {
                        currentMenu.classList.add('rb-show');
                    }
                });
            });

            // Close everything when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.remove('rb-show');
                    closeAllSubmenus();
                }
            });
        }
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
                <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'index']); ?>">
                    <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" class="logo-width" width="219" height="auto">
                </a>
            </div>

            <!-- Zone 2: Navigation Links (Center) -->
            <div class="navbar-collapse-desktop">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo Request::is('/') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'index']); ?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('about') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'about']); ?>">About Us</a>
                    </li>
                    <li class="nav-item rb-custom-dropdown <?php echo (Request::is('event') || Request::is('previous-work') || Request::is('upcoming-work') || Request::is('journey-combating-sexual-violence') || Request::is('key-programs') || Request::is('response-to-violence') || Request::is('gender-sensitization-awareness') || Request::is('leadership-community-building') || Request::is('educational-empowerment-support') || Request::is('economic-upliftment') || Request::is('covid-19-crisis-intervention')) ? 'active' : ''; ?>" style="position: relative;">
                        <a class="nav-link" href="#" id="rbDropdownToggle">
                            Our Work <i class="fas fa-chevron-down" style="font-size: 10px; margin-left: 3px;"></i>
                        </a>
                        <div class="rb-custom-menu shadow border-0" id="rbDropdownMenu">
                            <!-- Ongoing Work Dropdown -->
                            <div class="dropdown-submenu">
                                <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="javascript:void(0);" style="font-weight: 600; color: #173455;">
                                    Ongoing Work <i class="fas fa-chevron-right" style="font-size: 9px; margin-left: 5px;"></i>
                                </a>
                                <div class="rb-nested-menu shadow border-0">
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=ongoing">Combating Sexual Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=ongoing">Key Programs</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=ongoing">Response to Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=ongoing">Gender Sensitization & Awareness</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=ongoing">Leadership & Community Building</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=ongoing">Educational Empowerment & Support</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=ongoing">Economic Upliftment</a>
                                </div>
                            </div>
                            <!-- Previous Work Dropdown -->
                            <div class="dropdown-submenu">
                                <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="javascript:void(0);" style="font-weight: 600; color: #173455;">
                                    Previous Work <i class="fas fa-chevron-right" style="font-size: 9px; margin-left: 5px;"></i>
                                </a>
                                <div class="rb-nested-menu shadow border-0">
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=previous">Combating Sexual Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=previous">Key Programs</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=previous">Response to Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=previous">Gender Sensitization & Awareness</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=previous">Leadership & Community Building</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=previous">Educational Empowerment & Support</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=previous">Economic Upliftment</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'covid']); ?>?filter=previous">COVID-19 Crisis Intervention</a>
                                </div>
                            </div>
                            <!-- Upcoming Work Dropdown -->
                            <div class="dropdown-submenu">
                                <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="javascript:void(0);" style="font-weight: 600; color: #173455;">
                                    Upcoming Work <i class="fas fa-chevron-right" style="font-size: 9px; margin-left: 5px;"></i>
                                </a>
                                <div class="rb-nested-menu shadow border-0">
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=upcoming">Combating Sexual Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=upcoming">Key Programs</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=upcoming">Response to Violence</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=upcoming">Gender Sensitization & Awareness</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=upcoming">Leadership & Community Building</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=upcoming">Educational Empowerment & Support</a>
                                    <a class="dropdown-item py-2" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=upcoming">Economic Upliftment</a>
                                </div>
                            </div>
                            <!-- Removed Education and Skills -->
                        </div>
                    </li>
                    <li class="nav-item <?php echo Request::is('blog') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'blog']); ?>">Blog</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('ourteam') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'ourteam']); ?>">Our Team</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('research') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'research']); ?>">Research</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('gallery') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gallery']); ?>">Gallery</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('ethics') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'ethics']); ?>">Vision & Mission</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('achievements') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'achievements']); ?>">Achievements</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('collaborations') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'collaborations']); ?>">Collaborations</a>
                    </li>
                    <li class="nav-item <?php echo Request::is('contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact']); ?>">Contact us</a>
                    </li>
                </ul>
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
            <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade" style="width: 140px; height: auto;">
            <div class="sidebar-close">&times;</div>
        </div>
        
        <ul class="sidebar-nav-list">
            <li class="sidebar-nav-item <?php echo Request::is('/') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'index']); ?>">Home</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('about') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'about']); ?>">About Us</a>
            </li>
            <li class="sidebar-nav-item <?php echo (Request::is('event') || Request::is('previous-work') || Request::is('upcoming-work') || Request::is('journey-combating-sexual-violence') || Request::is('key-programs') || Request::is('response-to-violence') || Request::is('gender-sensitization-awareness') || Request::is('leadership-community-building') || Request::is('educational-empowerment-support') || Request::is('economic-upliftment') || Request::is('covid-19-crisis-intervention')) ? 'active' : ''; ?>">
                <div style="font-size: 18px; font-weight: 700; color: #E31E24; padding: 16px 30px; border-bottom: 1px solid #f9f9f9; display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none';">
                    Our Work <i class="fas fa-chevron-down" style="font-size: 14px;"></i>
                </div>
                <ul style="list-style: none; padding-left: 20px; margin: 0; display: none; background: #fffafa;">
                    <!-- Ongoing Work Accordion -->
                    <li style="border-bottom: 1px solid #f9f9f9;">
                        <div style="font-size: 16px; font-weight: 700; color: #173455; padding: 12px 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none';">
                            Ongoing Work <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                        </div>
                        <ul style="list-style: none; padding-left: 15px; margin: 0; display: none; background: #ffffff;">
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=ongoing">Combating Sexual Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=ongoing">Key Programs</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=ongoing">Response to Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=ongoing">Gender Sensitization & Awareness</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=ongoing">Leadership & Community Building</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=ongoing">Educational Empowerment & Support</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=ongoing">Economic Upliftment</a></li>
                        </ul>
                    </li>
                    <!-- Previous Work Accordion -->
                    <li style="border-bottom: 1px solid #f9f9f9;">
                        <div style="font-size: 16px; font-weight: 700; color: #173455; padding: 12px 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none';">
                            Previous Work <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                        </div>
                        <ul style="list-style: none; padding-left: 15px; margin: 0; display: none; background: #ffffff;">
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=previous">Combating Sexual Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=previous">Key Programs</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=previous">Response to Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=previous">Gender Sensitization & Awareness</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=previous">Leadership & Community Building</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=previous">Educational Empowerment & Support</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=previous">Economic Upliftment</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'covid']); ?>?filter=previous">COVID-19 Crisis Intervention</a></li>
                        </ul>
                    </li>
                    <!-- Upcoming Work Accordion -->
                    <li style="border-bottom: 1px solid #f9f9f9;">
                        <div style="font-size: 16px; font-weight: 700; color: #173455; padding: 12px 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none';">
                            Upcoming Work <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                        </div>
                        <ul style="list-style: none; padding-left: 15px; margin: 0; display: none; background: #ffffff;">
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'journey']); ?>?filter=upcoming">Combating Sexual Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'keyprograms']); ?>?filter=upcoming">Key Programs</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'responseviolence']); ?>?filter=upcoming">Response to Violence</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gendersensitization']); ?>?filter=upcoming">Gender Sensitization & Awareness</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'leadershipcommunity']); ?>?filter=upcoming">Leadership & Community Building</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'educationalsupport']); ?>?filter=upcoming">Educational Empowerment & Support</a></li>
                            <li><a class="sidebar-nav-link" style="padding: 10px 20px !important; font-size: 14px !important; border-bottom: none; font-weight: 600 !important; color: #555 !important;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'economicupliftment']); ?>?filter=upcoming">Economic Upliftment</a></li>
                        </ul>
                    </li>
                    <!-- Removed Education and Skills -->
                </ul>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('blog') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'blog']); ?>">Blog</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('ourteam') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'ourteam']); ?>">Our Team</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('research') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'research']); ?>">Research</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('gallery') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'gallery']); ?>">Gallery</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('ethics') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'ethics']); ?>">Vision & Mission</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('achievements') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'achievements']); ?>">Achievements</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('collaborations') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'collaborations']); ?>">Collaborations</a>
            </li>
            <li class="sidebar-nav-item <?php echo Request::is('contact') ? 'active' : ''; ?>">
                <a class="sidebar-nav-link" href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact']); ?>">Contact us</a>
            </li>
        </ul>

    </div>
</body>
</html>
