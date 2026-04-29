@include('includes.sunshine-header')

<section>
	<div class="col-md-12 servce-img">
		
			<h1 class="text">Our Service</h1>
		
	</div>
</section>
<section class="container-fluid defaultpad">
        <div class="row">
              <div class="col-md-12 mt-5 mb-5">
                      <h1 class="text-danger what"> Our Service </h1>    
              </div>
        </div>
</section>


<section class="container-fluid">
        <div class="container">
            <div class="row">
			<?php if(!empty($allservice)) { foreach($allservice as $allser) { ?>
				<div class="col-md-3 main4">
						<div class="col-md-12 abc  combo-max">
                           				 <div class=" border-img" >
						  <a href="<?php echo action('MainController@singleservice',$allser->slug)?>"> <img src="<?php echo URL::asset('uploads/service/'.$allser->image)?>" alt="" class="img-fluid blog-img  "></a>
						</div>
						<a href="<?php echo action('MainController@singleservice',$allser->slug)?>"> <h6 class="about-text text-warning "><?php echo ucfirst($allser->name) ?></h6>
							</a>
					<?php echo substr($allser->description,0,100)?>

						</div> 		
                </div> 		
			<?php } } ?>
 

            </div>
        </div>
</section>


@include('includes.sunshine-footer')
