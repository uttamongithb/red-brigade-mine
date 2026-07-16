<?php
namespace App\Helpers;
Use Config;
Use Redirect;
Use Session;
Use URL;
Use DB;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\RegisteruserController;
use App\Http\Controllers\FeedController;
class Htmlhelpers
{
	public static function sidebar(){
		$findtrafficnews = DB::table('newslist')->where('traffic',1)->orderBy('created_at','DESC')->limit(60)->get();
		$finddesinuska = DB::table('desinuska')->orderBy('created_at','DESC')->limit(6)->get();
	    $findviralnews = DB::table('viralnews')->orderBy('created_at','DESC')->limit(6)->get();
	    $findgoodhabits = DB::table('goodhabits')->orderBy('created_at','DESC')->limit(4)->get();
	    $findhindijokes = DB::table('hindijoke')->orderBy('created_at','DESC')->limit(4)->get();
		$htmlcontent='';
		if(!empty($findtrafficnews)){ 
		$htmlcontent.='<div class="col-md-12 col-sm-12 col-xs-12 paddingZ trending_nowSec">
							<h3 class="trendingflicker"><a href="#" title="Trending Now" target="_blank">Traffic News</a></h3>
							<div id="trending_now" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">';
							   $traffici=0;
								foreach($findtrafficnews as $traffic){ 
								$traffici++;
								$htmlcontent.='<div class="item';
								if($traffici==1){ $htmlcontent.= ' active'; 
								}
								$htmlcontent.='">
										<article class="linkbox ">
											<a href="#">
												<img src="'.URL::asset('uploads/news/'.$traffic->featuredimage).'" alt=" " class="img-responsive" width="560" height="390">
												<div class="overlay">
													<h3 class="">'.$traffic->title.'</h3>
												</div>
											</a>
										</article>
									</div>';
							} 
								$htmlcontent.='</div>

								<a class="left carousel-control" href="#trending_now" data-slide="prev">
									<span class="fa fa-angle-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#trending_now" data-slide="next">
									<span class="fa fa-angle-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>'; 
					
				}	
					$htmlcontent.='<div class="col-md-12 col-sm-12 col-xs-12 paddingZ ">
							<div id="wpzoom-tabber-2" class="widget tabbertabs">
								<div class="tabberlive">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#latest">Good Habits </a></li>
										<li class=""><a data-toggle="tab" href="#popular">Hindi jokes </a></li>
									</ul>
									<div class="tab-content ">
									<div id="latest" class="tab-pane fade in active">';
										if(!empty($findgoodhabits)){ 
										$htmlcontent.='<ul class="tabberliveUl">';
											foreach($findgoodhabits as $goodhabits){ 
										$htmlcontent.='<li>
												<a href="'.action('MainController@singlehabits',$goodhabits->slug).'"><img src="'.URL::asset('uploads/goodhabits/'.$goodhabits->image).'"></a>
												<a href="'.action('MainController@singlehabits',$goodhabits->slug).'">'.$goodhabits->title.'</a>
												<br><small>'.date('M d, Y',strtotime($goodhabits->created_at)).'</small>
												<br>
												<div class="clear"></div>
											</li>';
										} 
										$htmlcontent.='</ul>
										<a href="'. action('MainController@listinghabits').'" class="viewMore">आगे पढ़ऐ &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
										';
										 } 
										$htmlcontent.='<div class="clear"></div>
									</div>
									<div id="popular" class="tab-pane fade">';
									if(!empty($findhindijokes)){ 
										$htmlcontent.='<ul class="tabberliveUl">';
										foreach($findhindijokes as $hindijokes){ 
										$htmlcontent.='<li>
												<a href="'.action('MainController@singlejoke',$hindijokes->slug).'"><img src="'.URL::asset('uploads/hindijoke/'.$hindijokes->image).'"></a>
												<a href="'.action('MainController@singlejoke',$hindijokes->slug).'">'.$hindijokes->title.'</a>
												<br><small>'.date('M d, Y',strtotime($hindijokes->created_at)).'</small>
												<br>
												<div class="clear"></div>
											</li>';
										 }
										$htmlcontent.='</ul>
										<a href="'. action('MainController@listingjokes').'" class="viewMore">आगे पढ़ऐ &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
										';
											 } 
										$htmlcontent.='<div class="clear"></div>
									</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>'; $findviralnewss=array();
						if(!empty($findviralnewss)){ 
						$htmlcontent.='<section class="liveupdate-wrap block">
							<h3>Viral News</h3>
							<marquee direction="up" behaviour="alternate" onmouseout="start()" onmouseover="stop()" scrolldelay="200">
								<div class="clearfix liveupdates ss-container">
									<ul id="marquee-vertical">';
										foreach($findviralnews as $viralnews){ 
										$htmlcontent.='<li>
											<article class="livstory">
												<a href="#" target="_blank">'.$viralnews->title.'</a>
											</article>
										</li> ';
									 } 
									$htmlcontent.='</ul>
								</div>
							</marquee>
						</section>';
						} 
					return $htmlcontent;
	}
}
?>