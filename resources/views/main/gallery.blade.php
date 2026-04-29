@include('includes.header')
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Research & Publications</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Research & Publications</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->

<!-- Gallery area start  -->
<section class="gallery-area rp-page" id="gallery-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title rp-section-title">
                    <h2 class="title">Research & Publications Archive</h2>
                    <span class="separator"></span>
                    <p> Red Brigade conducts research programs centering around women safety, honor and their role in the freedom movement of India. Several prestigious institutions across the world have done research and publications on Red Brigade Lucknow</p>

                    <div class="rp-stats" aria-label="Research and publication summary">
                        <div class="rp-stat-card">
                            <span class="rp-stat-value"><?php echo count($allactivity); ?></span>
                            <span class="rp-stat-label">Media Coverage</span>
                        </div>
                        <div class="rp-stat-card">
                            <span class="rp-stat-value"><?php echo count($allcampains); ?></span>
                            <span class="rp-stat-label">Videos</span>
                        </div>
                        <div class="rp-stat-card">
                            <span class="rp-stat-value"><?php echo count($allnews); ?></span>
                            <span class="rp-stat-label">Gallery</span>
                        </div>
                        <div class="rp-stat-card">
                            <span class="rp-stat-value"><?php echo count($report); ?></span>
                            <span class="rp-stat-label">Reports</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="filterizr__elements">
				<?php if(!empty($allgallery)) { foreach($allgallery as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="activity" data-search="media coverage archive image research publication">
                        <div class="inner-box rp-card">
                            <div class="image">
                                <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Media Coverage Image" loading="lazy">
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
				<?php if(!empty($allactivity)) { foreach($allactivity as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="activity" data-search="media coverage image research publication">
                        <div class="inner-box rp-card">
                            <div class="image">
                                <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Media Coverage Image" loading="lazy">
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
    				<?php if(!empty($allcampains)) { foreach($allcampains as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="campains" data-search="video campaign research publication">
                        <div class="inner-box rp-card rp-video-card">
                            <div class="image rp-video-shell">
                               <div><?php echo ucfirst(isset($allg->embed) ? $allg->embed : ''); ?></div>
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
				<?php if(!empty($allnews)) { foreach($allnews as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="news" data-search="gallery photo research publication">
                        <div class="inner-box rp-card">
                            <div class="image">
                               <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Gallery Image" loading="lazy">
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
		 	<?php if(!empty($report)) { foreach($report as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="donate" data-search="report publication document pdf">
                        <div class="inner-box rp-card">
                            <div class="image">
                                <?php $reportImage = isset($allg->pdfimage) && !empty($allg->pdfimage) ? $allg->pdfimage : '404.png'; ?>
                                <img src="<?php echo URL::asset('uploads/gallery/'.$reportImage);?>" alt="Report Thumbnail" loading="lazy">
                            </div>
                        </div>
                    </div>			
				<?php } } ?>  
            </div>
            </div>
    </div>
</section>
<!-- Gallery area end -->

<style>
.rp-page {
    --rp-bg: #f5f7f1;
    --rp-surface: #ffffff;
    --rp-text: #182032;
    --rp-muted: #5c6577;
    --rp-primary: #b40f1d;
    --rp-accent: #ff8a00;
    --rp-outline: #dbe0d4;
    background: radial-gradient(circle at 10% 10%, #eef5df 0%, var(--rp-bg) 40%, #f9fbf6 100%);
}

.rp-page .container {
    width: 86vw;
    max-width: 86vw;
}

.rp-page .rp-section-title {
    margin-bottom: 28px;
}

.rp-page .rp-section-title .title {
    color: var(--rp-text);
    font-weight: 800;
}

.rp-page .rp-section-title p {
    color: var(--rp-muted);
    font-size: 16px;
    line-height: 1.75;
}

.rp-page .rp-stats {
    margin-top: 22px;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
}

.rp-page .rp-stat-card {
    background: var(--rp-surface);
    border: 1px solid var(--rp-outline);
    border-radius: 14px;
    padding: 14px 16px;
    text-align: left;
    box-shadow: 0 8px 26px rgba(20, 24, 18, 0.06);
}

.rp-page .rp-stat-value {
    display: block;
    font-size: 28px;
    font-weight: 800;
    color: var(--rp-primary);
    line-height: 1;
}

.rp-page .rp-stat-label {
    display: block;
    margin-top: 6px;
    font-size: 13px;
    color: var(--rp-muted);
    letter-spacing: 0.25px;
}

.rp-page .filterizr__elements .filtr-item {
    padding-top: 8px;
    padding-bottom: 8px;
    display: flex;
}

.rp-page .rp-card {
    background: var(--rp-surface);
    border: 1px solid #e7edde;
    border-radius: 0;
    overflow: hidden;
    margin-bottom: 22px;
    box-shadow: 0 12px 26px rgba(20, 24, 18, 0.08);
    transition: transform 0.28s ease, box-shadow 0.28s ease;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.rp-page .rp-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 28px rgba(20, 24, 18, 0.12);
}

.rp-page .rp-card .image {
    aspect-ratio: 4 / 3;
    overflow: hidden;
    background: #dde6cd;
    border-radius: 0 !important;
}

.rp-page .rp-card .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 0 !important;
}

.rp-page .rp-video-card .rp-video-shell {
    padding: 0;
    background: #111a2b;
    position: relative;
}

.rp-page .rp-video-card .rp-video-shell > div {
    width: 100%;
    height: 100%;
}

.rp-page .rp-video-card .rp-video-shell iframe,
.rp-page .rp-video-card .rp-video-shell video,
.rp-page .rp-video-card .rp-video-shell embed {
    width: 100% !important;
    height: 100% !important;
    min-height: 0;
    border: 0;
    display: block;
}

@media (max-width: 991px) {
    .rp-page .container {
        width: 90vw;
        max-width: 90vw;
    }

    .rp-page .rp-stats {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 575px) {
    .rp-page {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .rp-page .container {
        width: 94vw;
        max-width: 94vw;
    }

    .rp-page .rp-stats {
        grid-template-columns: 1fr;
        gap: 10px;
    }

}
</style>
    
<!-- partners area start -->
 
<!-- partners area end  -->
<!-- footer area start -->
@include('includes.footer')