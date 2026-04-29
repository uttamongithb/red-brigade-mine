@include('includes.header')
<!-- Breadcumb area end  -->
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Our Work</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Our Work</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="margin:40px"> <span>&nbsp;</span></section>
<section class="about_us_area  ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 remove-col-padding" style="padding:0px">
                <div class="ourwork-image"></div>
            </div>
            <div class="col-lg-6 remove-col-padding">
                <div class="about-area-right">
                    <span class="title" style="font-size:32px;">WE ARE REDBRIGADE LUCKNOW</span>
                    <h3 class="subtitle" >Fight against Sexual -Violence - Trained 1,57,000 Women with NISHATRA (Self-Defense).</h3>
                    <!-- <p >It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                    layout. The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to
                    using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web.</p> -->
                    
                    <ul class="about-list " style="font-size:14px;">
                            <li><i class="fas fa-check"></i>  Raising powerful voice against Sexual-Violence- Performed over 700 Nukkad-Naatak (Street Play)
and 225 Seminars. To create an engaging platform involving several institutions and organizations.</li>
                            <li><i class="fas fa-check"></i> To Create Women Leadership.
</li>
                            <li><i class="fas fa-check"></i> Survivor Support- Rehabilitated more than 200 Sexual Violence Survivors including 5 Rape Victims</li> 
                            <li><i class="fas fa-check"></i>To bring to the fore the power of women in shaping the history – National Women’s Day and bring
to the public domain the role of women in the national freedom struggle of India.</li>
                            <li><i class="fas fa-check"></i>Economic self-sufficiency of Women – Skill development of more than 300 women</li>
                       <li><i class="fas fa-check"></i>Research – Conducted different programmes for the honour and safety of women.</li>
                       <li><i class="fas fa-check"></i>Intervention in COVID-19 crisis: Distributed Ration Kit & daily use items to about 20000 people. </li>
                        <li><i class="fas fa-check"></i>Educational Support to poor Girls: We have been mobilizing people to extend financial support for education of poor girls. </li>
                        </ul>
                    <div class="btn-wrapper">
                        <a href="#bottom-p" class="boxed-btn">Learn More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<div class=" about_us_area2 pt-5 pb-5">
    <div class="container">
        <div class="row">
             
            <div class="col-lg-12">
                <div class="about-box" id="bottom-p">
                 
                     
                    <p class="about-text" style="text-align:justify;">   <span class="text-success">Journey : </span>The initiative of voice against sexual violence was started by
Usha Vishwakarma, along with a group of 15 young women and girls. Most of them
including Usha Vishwakarma are sexual violence survivors from lower strata of socioeconomic structure; based out of Madiyaon in Lucknow, they formed a group named
Red Brigade Lucknow in 2011 to fight and raise the voice against sexual violence.</p>

               <p class="about-text" style="text-align:justify;">   <span class="text-success">NISHASTRA - Fight Against Sexual Violence : </span>The  “NISHASTRA”( New Instrument against
Sexual Harassment and Stand Against Rape Aggression) is a blend of learning’s of
various techniques, incidences, situations & real experiences shared by sexual violence
survivors of our group and self-defense techniques of many countries which specifically
fits for self-defense against sexual violence, till date we have trained <b> over 1,50,000
girls/women with NISHASTRA, </b>56,000 out of this was done under the CAVACH Mission
of Uttar Pradesh Government and the rest across 7 States and almost 50 prestigious
organizations to name a few like Many</p>
                    
                        
                    <div class="btn-wrapper">
                        <a href="<?php  echo action('MainController@ourworkpdf')?>" class="boxed-btn">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- blog page content area start -->
<!--<div class="blog-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-conent-inner"> 
                    <div class="row">
						<?php if(!empty($allblog)) { foreach($allblog as $allb) { ?>
			                <div class="col-lg-6 col-md-6">
                                <div class="single-blog-style-one">
                                    <div class="img-box">
                                        <img src="<?php echo URL::asset('uploads/blog/'.$allb->image);?>" alt="Awesome Image" />
                                    </div> 
                                    <div class="text-box">
                                        <a href="<?php  echo action('MainController@singleblog',$allb->slug); ?>">
                                            <h3><?php echo ucfirst($allb->name); ?></h3>
                                        </a>
                                            <p><?php echo strip_tags(substr($allb->description,0,150)); ?></p>
                                    </div> 

                                </div>
                        </div>			
						
						<?php } } ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->
<!-- blog page content area end -->

@include('includes.footer')