<!DOCTYPE html>
<html>
<head>
  <title>REDBRIGADE LUCKNOW</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="icon" type="image/png" href="<?php echo URL::asset('favicon.png')?>">
  <link rel="shortcut icon" type="image/png" href="<?php echo URL::asset('favicon.png')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/AdminLTE.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/_all-skins.min.css')?>">
  <link href="<?php echo URL::asset('font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

  /* Professional Core Reset */
  body {
      font-family: 'Inter', sans-serif !important;
      background-color: #fcfcfd;
      margin: 0;
      padding-top: 50px !important; 
      overflow-x: hidden;
  }

  /* 100vw Navbar (Branding Bar) */
  .main-header {
      position: fixed !important;
      top: 0;
      left: 0;
      width: 100vw !important;
      height: 50px !important;
      background: #ffffff !important;
      border-bottom: 1px solid #eaecf0;
      z-index: 1050;
      display: flex !important;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      box-sizing: border-box;
      box-shadow: 0 1px 2px rgba(16, 24, 40, 0.04);
  }

  .main-header .logo-container {
      display: flex;
      align-items: center;
      text-decoration: none !important;
  }

  .main-header .logo-container img {
      max-height: 32px;
      width: auto;
  }

  /* Profile Section */
  .profile-container {
      position: relative;
      display: flex;
      align-items: center;
  }

  .profile-trigger {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 4px 8px;
      border-radius: 6px;
      transition: background 0.2s;
      cursor: pointer;
      text-decoration: none !important;
  }

  .profile-trigger:hover { background: #f9fafb; }

  .profile-icon-circle {
      width: 32px;
      height: 32px;
      background: #fef2f2;
      color: #E31E24;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      border: 1px solid #fee2e2;
  }

  .profile-name {
      font-weight: 600;
      font-size: 13px;
      color: #101828;
  }

  .profile-dropdown {
      position: absolute;
      top: 45px;
      right: 0;
      width: 200px;
      background: #ffffff;
      border: 1px solid #eaecf0;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(16, 24, 40, 0.08);
      padding: 4px;
      display: none;
      z-index: 1100;
  }

  .profile-container:hover .profile-dropdown { display: block; }

  .dropdown-link {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 12px;
      color: #344054;
      font-size: 13px;
      font-weight: 500;
      text-decoration: none !important;
      border-radius: 4px;
  }

  .dropdown-link:hover { background: #f9fafb; color: #E31E24; }

  /* Compact Sidebar Below Navbar */
  .main-sidebar {
      position: fixed !important;
      top: 50px !important;
      left: 0;
      width: 230px !important;
      height: calc(100vh - 50px) !important;
      background: #ffffff !important;
      border-right: 1px solid #eaecf0;
      z-index: 1000;
      padding-top: 0 !important;
      transition: width 0.3s ease;
  }

  .sidebar-collapse .main-sidebar { width: 60px !important; }

  /* Unified Header Row (Sidebar + Content Alignment) */
  .sidebar-header-row {
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      border-bottom: 1px solid #eaecf0;
      background: #ffffff;
  }

  .sidebar-header-label {
      font-size: 11px;
      font-weight: 700;
      color: #667085;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      white-space: nowrap;
  }

  .sidebar-toggle-btn {
      width: 28px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #667085;
      cursor: pointer;
      border-radius: 4px;
      transition: 0.2s;
  }

  .sidebar-toggle-btn:hover { color: #E31E24; background: #f9fafb; }

  .sidebar-collapse .sidebar-header-label { display: none; }
  .sidebar-collapse .sidebar-header-row { justify-content: center; }

  /* Navigation Items */
  .sidebar-menu {
      padding: 10px !important;
      list-style: none;
      margin: 0;
  }

  .sidebar-menu li a {
      display: flex;
      align-items: center;
      padding: 10px 12px;
      color: #475467;
      font-weight: 500;
      font-size: 14px;
      border-radius: 6px;
      text-decoration: none !important;
      transition: 0.2s;
  }

  .sidebar-menu li a i {
      width: 28px;
      text-align: center;
      font-size: 16px;
      margin-right: 8px;
  }

  .sidebar-menu li:hover > a, .sidebar-menu li.active > a {
      background: #fef2f2 !important;
      color: #E31E24 !important;
  }

  .sidebar-collapse .sidebar-menu li a span { display: none; }

  /* Page Content Menubar (Synced with Sidebar Header Row) */
  .content-header {
      height: 50px !important;
      background: #ffffff !important;
      display: flex !important;
      align-items: center !important;
      padding: 0 24px !important;
      border-bottom: 1px solid #eaecf0 !important;
      margin-bottom: 24px !important;
      box-sizing: border-box;
  }

  .content-header h1 {
      margin: 0 !important;
      font-size: 18px !important;
      font-weight: 700 !important;
      color: #101828 !important;
  }

  .content-header .breadcrumb {
      display: none !important; /* Keep it clear per request */
  }

  /* Main Content Area */
  .content-wrapper {
      margin-left: 230px !important;
      margin-top: 0 !important;
      padding: 0 !important; 
      transition: margin-left 0.3s ease;
      background-color: #fcfcfd !important;
      min-height: calc(100vh - 50px) !important;
  }

  .sidebar-collapse .content-wrapper { margin-left: 60px !important; }

  /* Final Clutter Removal */
  .main-header .navbar, .main-header .logo { display: none !important; }
  .sidebar-menu .header { display: none !important; } /* Replaced by sidebar-header-row */
  
  </style>
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <a href="<?php echo action('MainController@index')?>" target="_blank" class="logo-container">
        <img src="<?php echo URL::asset('uploads/img/logo.png'); ?>" alt="Red Brigade Lucknow">
    </a>

    <div class="profile-container">
        <div class="profile-trigger">
            <div class="profile-icon-circle">
                <i class="fa fa-user"></i>
            </div>
            <span class="profile-name hidden-xs"><?php echo Auth::user()->name; ?></span>
            <i class="fa fa-chevron-down" style="font-size: 10px; color: #98a2b3;"></i>
        </div>
        <div class="profile-dropdown">
            <div style="padding: 8px 12px; border-bottom: 1px solid #f2f4f7; margin-bottom: 4px;">
                <div style="font-weight: 700; font-size: 13px; color: #101828;"><?php echo Auth::user()->name; ?></div>
                <div style="font-size: 11px; color: #667085;">Administrator</div>
            </div>
            <a href="<?php echo action('DashboardController@editprofile')?>" class="dropdown-link">
                <i class="fa fa-edit"></i> Edit Profile
            </a>
            <a href="<?php echo URL('main-admin/logout')?>" class="dropdown-link">
                <i class="fa fa-sign-out"></i> Logout
            </a>
        </div>
    </div>
</header>
