@include('includes.header')
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Event</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Event</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->

<section class="event-area event-bg" id="event">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Upcoming Event</h2>
                    <p>Use off agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten.text of the printing and typesetting industry. </p>
                </div>
            </div>
        </div>
                
        <div class="row">
		<?php if(!empty($allevent)) { foreach($allevent as $alle) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-upcoming-event">
                    <div class="thumb">
                        <img src="<?php echo URL::asset('uploads/news/'.$alle->image);?>" alt="upcoming event">
                    </div>
                    <div class="content">
                        <a href="#"><h4 class="title"><?php echo ucfirst($alle->name); ?></h4></a>
                        <p><?php echo substr($alle->description,0,100); ?></p>
                        <div class="event-details">
                            <h5 class="title">Campain Details</h5>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> <?php echo $alle->date; ?></li>
                                <li><i class="far fa-clock"></i><?php echo $alle->time_interval; ?></li>
                                <li><i class="fas fa-map-marker-alt"></i><?php echo $alle->city; ?></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //. single upcoming event -->
            </div>
			<?php }} ?>

        </div>
    </div>
</section>
<!--//========Upcoming Events end=========//  -->

<!-- popular campain area start -->
<section class="popular-campain-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Popular Campain</h2>
                    <p>Use off agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten.text of the printing and typesetting industry. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular-campain-carousel" id="popular-campain-carousel">
                    <!--Start campains box-->
                    <div class="campains-box">
                        <div class="campains-media">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo URL::asset('uploads/img/campains/01.jpg');?>" alt="image">
                                </a>
                            </div>
                            <span class="p-box green"><i class="fas fa-map-marker-alt"></i>Alwar City Rajasthan InIndia</span>
                        </div>
                        <div class="campains-content">
                            <ul class="post-meta">
                                <li> <a href="#"><i class="fas fa-calendar-alt"></i>20 March 2018</a> </li>
                                <li> <a href="#"><i class="far fa-clock"></i>15 PM - 17 PM</a> </li>
                            </ul>
                            <a href="#"> <h4 class="title">Fight for human rights togather</h4></a>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration.</p>
                        </div>
                    </div>
                    <!--End campains-->
                    <!--Start campains box-->
                    <div class="campains-box">
                        <div class="campains-media">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo URL::asset('uploads/img/campains/02.jpg');?>" alt="image">
                                </a>
                            </div>
                            <span class="p-box red"><i class="fas fa-map-marker-alt"></i>Alwar City Rajasthan InIndia</span>
                        </div>
                        <div class="campains-content">
                            <ul class="post-meta">
                                <li> <a href="#"><i class="fas fa-calendar-alt"></i>20 March 2018</a> </li>
                                <li> <a href="#"><i class="far fa-clock"></i>15 PM - 17 PM</a> </li>
                            </ul>
                            <a href="#"> <h4 class="title">Almost do am or limits hearts</h4></a>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration.</p>
                        </div>
                    </div>
                    <!--End campains-->
                    <!--Start campains box-->
                    <div class="campains-box">
                        <div class="campains-media">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo URL::asset('uploads/img/campains/03.jpg');?>" alt="image">
                                </a>
                            </div>
                            <span class="p-box orange"><i class="fas fa-map-marker-alt"></i>Alwar City Rajasthan InIndia</span>
                        </div>
                        <div class="campains-content">
                            <ul class="post-meta">
                                <li> <a href="#"><i class="fas fa-calendar-alt"></i>20 March 2018</a> </li>
                                <li> <a href="#"><i class="far fa-clock"></i>15 PM - 17 PM</a> </li>
                            </ul>
                            <a href="#"> <h4 class="title">Resolve parties but why she shewing</h4></a>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration.</p>
                        </div>
                    </div>
                    <!--End campains-->
                    <!--Start campains box-->
                    <div class="campains-box">
                        <div class="campains-media">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo URL::asset('uploads/img/campains/04.jpg');?>" alt="image">
                                </a>
                            </div>
                            <span class="p-box green"><i class="fas fa-map-marker-alt"></i>Alwar City Rajasthan InIndia</span>
                        </div>
                        <div class="campains-content">
                            <ul class="post-meta">
                                <li> <a href="#"><i class="fas fa-calendar-alt"></i>20 March 2018</a> </li>
                                <li> <a href="#"><i class="far fa-clock"></i>15 PM - 17 PM</a> </li>
                            </ul>
                            <a href="#"> <h4 class="title">She sang know now how nay cold real case</h4></a>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration.</p>
                        </div>
                    </div>
                    <!--End campains-->
                    <!--Start campains box-->
                    <div class="campains-box">
                        <div class="campains-media">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo URL::asset('uploads/img/campains/05.jpg');?>" alt="image">
                                </a>
                            </div>
                            <span class="p-box red"><i class="fas fa-map-marker-alt"></i>Alwar City Rajasthan InIndia</span>
                        </div>
                        <div class="campains-content">
                            <ul class="post-meta">
                                <li> <a href="#"><i class="fas fa-calendar-alt"></i>20 March 2018</a> </li>
                                <li> <a href="#"><i class="far fa-clock"></i>15 PM - 17 PM</a> </li>
                            </ul>
                            <a href="#"> <h4 class="title">Assure polite his really and others figure</h4></a>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration.</p>
                        </div>
                    </div>
                    <!--End campains-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular campain area end -->

<!-- partners area start -->
 
<!-- partners area end  -->
<!-- footer area start -->
@include('includes.footer')