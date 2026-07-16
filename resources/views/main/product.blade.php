@include('includes.sunshine-header')

<section>
	<div class="col-md-12 servce-img">
		
			<h1 class="text">Product</h1>
		
	</div>
</section>
<section class="container-fluid">
      <div class="container">
          <div class="row">
            <div class="col-md-12 mt-2 mb-5">
                <h1 class="what-1 mt-5"> <span class="text-danger what">O</span>ur <span class="text-danger what">P</span>roduct </h1>  
            </div>
          </div>
      </div>
</section>
<section class="container-fluid">
        <div class="container">
            <div class="row">

               <?php if(!empty($allproduct)) { foreach($allproduct as $allpro) { ?>
                    <div class="col-md-3 main4">
						<div class="col-md-12 abc  combo-max">
                            <div class=" border-img" >
                                <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleproduct'],$allpro->slug)?>"> <img src="<?php echo URL::asset('uploads/product/'.$allpro->image)?>" alt="" class="img-fluid blog-img"></a>
                            </div>
							<a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleproduct'],$allpro->slug)?>"> <h6 class="about-text text-warning "><?php echo ucfirst($allpro->name) ?></h6></a>
									<?php echo substr($allpro->description,0,100)?>
				        </div>
					</div>
			   <?php }} ?>
                    
			   
			

			</div>
		</div>
</section>
@include('includes.sunshine-footer')