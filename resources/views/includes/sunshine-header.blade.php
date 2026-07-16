<html>
<head>
<title>SunShine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
	  <link rel="shortcut icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/front/bootstrap.min.css')?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/front/style.css')?>">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet"> 
		<style>
		.social-link{
            float: left;
            padding: 0px 15px;
        }
        .navbar-brand img {
            max-width: 150px;
            height: auto;
        }
        .navi .nav-link {
            color: #E31E24 !important;
            font-weight: 700;
            padding: 10px 15px !important;
        }
        .navi .nav-link:hover {
            color: #000 !important;
        }
        @media (max-width: 991px) {
            .navbar-collapse {
                background: #fff;
                padding: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-radius: 8px;
                margin-top: 15px;
            }
        }
		</style>
</head>
<body>

<section class="container-fluid">
<div class="container padd">
    <nav class="navbar navbar-expand-lg padd">
 
                <a class="navbar-brand" href="<?php echo action([\App\Http\Controllers\MainController::class, 'index'])?>"><img src="<?php echo URL::asset('uploads/img/logo.png')?>" class="img-fluid"></a> 
             
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px solid #E31E24; padding: 8px 12px;">
                        <span class="fas fa-bars" style="color: #E31E24; font-size: 20px;"></span>
                </button>
                        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navi">
				   <li class="nav-item <?php echo Request::is('/') ? 'active' : ''; ?> nav-li"><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'index'])?>" class="nav-link a-top">Home</a></li>
				   <li class="nav-item <?php echo Request::is('about') ? 'active' : ''; ?> nav-li"><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'about'])?>"class="nav-link a-top">About us</a></li>
				   <li class="nav-item <?php echo Request::is('product') ? 'active' : ''; ?> nav-li"><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'product'])?>" class="nav-link a-top">Products</a></li>
				   <li class="nav-item <?php echo Request::is('service') ? 'active' : ''; ?> nav-li"><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'service'])?>" class="nav-link a-top">Service and Support</a></li>
				   <li class="nav-item <?php echo Request::is('contact') ? 'active' : ''; ?> nav-li"><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'contact'])?>"class="nav-link a-top">Contact us</a></li>
                </ul>
                
            </div>
        
    </nav>
</div>
</section>

<!-- Required JS for Bootstrap 4 Navbar -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
