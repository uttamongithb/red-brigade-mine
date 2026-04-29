<!DOCTYPE html>
<html>
<head>
  <title>REDBRIGADE LUCKNOW</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/select2.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/AdminLTE.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/jquery-ui.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/_all-skins.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/admin/jquery.datetimepicker.min.css')?>">
  <link href="<?php echo URL::asset('font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css">
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <a href="<?php echo action('MainController@index')?>" target="_blank" class="logo">
       <span class="logo-mini"><b>R</b>L</span>
      <span class="logo-lg"><b>REDBRIGADE LUCKNOW</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
		<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo action('DashboardController@editprofile')?>"><i class="fa fa-user"></i> Edit Profile</a>
          </li>
		  <li>
            <a href="<?php echo URL('main-admin/logout')?>" data-toggle="control-sidebar"><i class="fa fa-sign-out"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>