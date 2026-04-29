@include('includes.header')
<!-- Breadcumb area end  -->
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Blog Details</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog page content area start -->
<section class="blog-details-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="blog-details-content"><!-- blog details content  -->
                        <div class="thumb">
                          <a href="<?php echo URL::asset('uploads/blog/'.$thisblog->image);?>" target="_blank"><img src="<?php echo URL::asset('uploads/blog/'.$thisblog->image);?>" alt="blog detials image"  style="width:100%;height:350px"></a>
                        </div>
                        <a href="<?php echo URL::asset('uploads/blog/'.$thisblog->image);?>" target="_blank"> <h4 class="title"><?php echo ucfirst($thisblog->name); ?></h4></a>
                        <ul class="post-meta">
                            <li><i class="fas fa-clock"></i> <?php echo ucfirst($thisblog->date); ?></li>
                            <!-- <li><a href="#"><i class="fas fa-tags"></i> Painting</a></li>
                            <li><i class="fas fa-comments"></i> 22 Comments</li> -->
                        </ul>
                        <div class="entry-content">
					        <p><?php echo strip_tags($thisblog->description); ?></p>
						</div>

                    </div><!-- //. blog details content -->
            </div>
            </div>
            </div>
	</section>
<!-- blog page content area end -->

@include('includes.footer')