<section class="container-fluid foot">
    <div class="container">
     <div class="row">
       <div class="col-md-3 mt-4">
         <span class=" what ">About</span></a>
          <p class="text-white mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, fugit non nihil esse aliquam veniam consequuntur quo soluta explicabo quasi, dolorum debitis ea voluptatem dolor tempore sapiente at! Doloribus, laborum.</p>            
       </div>
       <div class="col-md-3 mt-4">
         <h3 class="what mb-4"> &nbsp; &nbsp; &nbsp;Menu</h3>
        
         <ul class=" text-white fooli ">
           <li><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'index'])?>" class="fooli">Home</a></li>
           <li><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'about'])?>"class="fooli">About us</a></li>
           <li><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'product'])?>" class="fooli">Products</a></li>
           <li><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'service'])?>" class="fooli">Service and Support</a></li>
      
           <li><a href="<?php  echo action([\App\Http\Controllers\MainController::class, 'contact'])?>"class="fooli">Contact us</a></li>
         </ul>
       </div>
       <div class="col-md-3 mt-4  fooli">
         <h3 class="what mb-4 text-center">
           Our Contact
         </h3>
		 
		 
   
       <div class="foo1i">
         <address class="foohead">
             
             <ul>
                 <li>
                       <i class="fas fa-map-marker-alt"></i> &nbsp;  Our Office Address:
             xyz office no. 9999
             alwar
                 </li>
                 <li style="line-height: 32px;">
                       <i class="fas fa-mobile-alt"></i> &nbsp; 91+78985235245
                 </li>
				  <li style="line-height: 32px;">
                       <i class="fab fa-whatsapp"></i> &nbsp; 91+78985235245
                 </li>
				  <li style="line-height: 32px;">
                       <i class="far fa-envelope-open"></i> &nbsp; info@sunshine.com
                 </li>
             </ul>
         </address>
         
       </div>
       
       </div>
       <div class="col-md-3 foolink mt-4">
        <h3 class="what text-center">Social link</h3>
       
        <div class="foohead">
          <ul class="top-rightlink padd-icon1">
			<li class="social-link ">  <a class="text1 " href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li class="social-link">  <a class="text1" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="social-link">  <a class="text1" href="#"><i class="fab fa-google-plus-g"></i> </a></li>
			<li class="social-link">  <a class="text1" href="#"><i class="fab fa-dribbble"></i> </a></li>
		</ul>
        </div>
       </div>
    </div>
   </div>
</section>
<section class="container-fluid top-header padd-icon">
	<div class="container">
		<div class="row">
				<div class="col-md-4">
						<a class="text-white">Copyright © 41services 2018. All Rights Reserved </a>
				</div>
				<div class="col-md-4 offset-md-4">
						<a class="text-white">Design & Developed By <img style="width:50px;height:50px;" src="<?php echo URL::asset('uploads/img/diit.png')?>" class="img-fluid"></a>
				</div>
		</div>
	</div>
</section>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo URL::asset('js/front/bootstrap.js')?>"></script>
<script src="<?php echo URL::asset('js/front/jquery.min.js')?>"></script>

<script src="<?php  echo URL::asset('js/front/fontawesome.js')?>"></script>
<script src="<?php echo URL::asset('js/front/popper.min.js')?>"></script>
