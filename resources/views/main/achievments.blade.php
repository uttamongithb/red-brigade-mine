@include('includes.header')
        <!-- ============End Navigation ===== -->
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Achievments</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Achievments</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->

<!-- Start About us 2 area  -->
<div class="about_us_area2  pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image2">
                    <img src="<?php echo URL::asset('uploads/img/about-left-image.jpg');?>" alt="about left image">
                    <div class="hover">
                        <a href="https://www.youtube.com/watch?v=CzMLuLwuZ00" target="_blank" class="video-play-btn video mfp-iframe">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-box pt-5">
                    <h3 class="title">Recognitions and Awards:</h3>
                    <p class="" style="font-size: 16px !important;">Red Brigade Lucknow’s initiatives have been noticed by more than fifty countries; they
have filmed the documentaries, along with the massive coverage in print media.</p>
                    <p class="about-text">Usha Vishwakarma the Founder & Chief Managing Trustee of Red Brigade Lucknow is awarded and recognised with the following: </p>  
                        <ul class="about-list"> 
                            <li><i class="fas fa-angle-double-right"></i>Forbes India Magazine Self-made Women 2020 India’s Top 20 Women Achievers. </li>
                            <li><i class="fas fa-angle-double-right"></i>Rani Laxmi Bai award (by Govt. of Uttar Pradesh).</li> 
                            <li><i class="fas fa-angle-double-right"></i>The title “100 Women Achievers of India” (by Honourable President of India) and
many more prestigious awards.</li>  
                        </ul>
                        <p>RBL has been invited as special guests on popular TV programs like Stree Shakti
(Doordarshan) ,Kaun Banega Crorepati (Sony) , No More Kamzor (Star Plus), Savdhan
India (Life OK), Live Zindagi (Network 18) and many more.</p>
                   <!-- <div class="btn-wrapper">
                        <a href="#" class="boxed-btn">More About Us</a>
                    </div> -->
                </div>
            </div>
        </div>
        
    </div>
</div> 
<!-- End About Us area  -->

<!-- Start About us area  -->
  
 
<!-- partners area end  -->
<!-- footer area start -->
@include('includes.footer')