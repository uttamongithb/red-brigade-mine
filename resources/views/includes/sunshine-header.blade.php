<html>
<head>
<title>SunShine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
	  <link rel="shortcut icon" type="image/jpeg" href="<?php echo URL::asset('uploads/img/download.jpg')?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/front/bootstrap.css')?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/front/style.css')?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet"> 
		<style>
		.social-link{
    float: left;
padding: 0px 15px;
}
		</style>
</head>
<body>
	<body>

<section class="container-fluid">
<div class="container padd">
    <nav class="navbar navbar-expand-lg padd">
 
                <a class="navbar-brand" href="#"><img src="<?php echo URL::asset('uploads/img/logo.png')?>" class="img-fluid"></a> 
             
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fas fa-bars"></span>
                      </button>
                        
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto navi">
				   <li class="nav-item active nav-li"><a href="<?php  echo action('MainController@index')?>" class="nav-link a-top">Home</a></li>
				   <li class="nav-item active nav-li"><a href="<?php  echo action('MainController@about')?>"class="nav-link a-top">About us</a></li>
				   <li class="nav-item active nav-li"><a href="<?php  echo action('MainController@product')?>" class="nav-link a-top">Products</a></li>
				   <li class="nav-item active nav-li"><a href="<?php  echo action('MainController@service')?>" class="nav-link a-top">Service and Support</a></li>
				   <li class="nav-item active nav-li"><a href="<?php  echo action('MainController@contact')?>"class="nav-link a-top">Contact us</a></li>
                </ul>
                
            </div>
        
    </nav>
</div>

</section>
