@include('includes.header');
<div class="container-fluid">
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12"> 
				 				<div class="col-md-12" style="padding:0px;">
				 <?php 	$allcity=array(); if(!empty($allnews)) {  $allcity = DB::table('city')->where('state',$allnews[0]->locations)->get();
				 if(!empty($allcity)) {
					 foreach($allcity as  $allc) { ?>
						 
						 	<a style="float:left;font-size: 18px;margin:0px 3px 0px 0px;margin-right: 0px;padding: 5px;background: #800000;color: #fff;margin-right: 3px;" href="<?php echo action([\App\Http\Controllers\MainController::class, 'citynews'],$allc->slug)?>"><h4><?php echo ucfirst($allc->name);?></h4></a>
						 
				 <?php	 }  } }
				 ?>
				 </div>
					<div class="col-md-8 col-sm-8 col-xs-12  news-slid-front">
						<div class="col-md-12 col-ms-12 col-xs-12 news-state">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 listing paddingZ">
									<ul class="news-locator">
										<li><a href="https://www.aapninews.com/">Home</a>&nbsp; &nbsp;
										<?php if($getcatname!=""){ ?>
											<i class="fa fa-angle-double-right"></i>
										<?php } ?>
										</li>
										<?php if($getcatname!=""){ ?>
												<li><a href="<?php echo action([\App\Http\Controllers\MainController::class, 'listingnews'],$getcatslug)?>"><?php echo $getcatname;?></a>&nbsp; &nbsp;
												<?php if($getsubcatname!=""){ ?>
													<i class="fa fa-angle-double-right"></i>
												<?php } ?>
												</li>
										<?php } ?>
										<?php if($getsubcatname!=""){ ?>
										<li><a href="<?php echo action([\App\Http\Controllers\MainController::class, 'listinglocation'],$getsubcatslug)?>"><?php echo $getsubcatname;?></a>&nbsp; &nbsp;
										</li>
										<?php } ?>
										<?php if($cityname!=""){ ?>
										<i class="fa fa-angle-double-right"></i>
										<li><a href="<?php echo action([\App\Http\Controllers\MainController::class, 'citynews'],$cityslug)?>"><?php echo $cityname;?></a>&nbsp; &nbsp;
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>		
					
						<div class="col-md-12 col-sm-12 col-xs-12 brkNwsDiv paddingZ">
							<div class="col-xs-12" style="padding:10px 0px 5px">
								<img class="img-responsive" src="https://www.aapninews.com/images/ad2.jpg">
							</div>
							<?php
								if(!empty($allnews)){
									foreach($allnews as $news){ 
							?>
							<div class="col-md-6 col-sm-6 col-xs-12 brkingSmDiv brkBorder">
								<a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singlenews'],$news->slug)?>"><h4><?php echo $news->title;?></h4></a>
								<div class="col-md-4 col-sm-4 col-xs-12 paddingZ">
									<img class="img-responsive" src="<?php echo URL::asset('uploads/news/'.$news->featuredimage)?>" style="height:100px;">
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 brkTxtPad">
									<div class="goodhabitstext">
										<p><?php echo strip_tags($news->description)?></p>
									</div>
									<p><span><?php echo date('d M, Y',strtotime($news->created_at));?> </span></p>
									<a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singlenews'],$news->slug)?>" class="viewMore">आगे पढ़ऐ &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<?php } ?>
							<?php } else{
								?>
								<div class="col-md-12 col-sm-12 col-xs-12 brkingSmDiv brkBorder">
									<p class="text-center"> No News Available </p>
								</div>
								<?php
							}?>
						</div>
						
					</div> 
					<div class="col-md-3 col-sm-4 col-xs-12 rightSideBar">
						<?php echo Htmlhelpers::sidebar();?>
					</div> 
				</div>
			</div>
		</div>
@include('includes.footer');