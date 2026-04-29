			@include('includes.header')
<!-- header area start  -->

<div class="rb-home">

<header class="rb-hero-shell">
    <?php
        $heroSlides = [];

        // Curated mission-relevant hero images that visually fit the homepage hero dimensions.
        $relevantHeroCandidates = [
            'uploads/slider/sunshine-slider-892.png',
            'uploads/slider/sunshine-slider-437.png',
            'uploads/slider/sunshine-slider-694.png'
        ];

        foreach ($relevantHeroCandidates as $heroImage) {
            if (file_exists(base_path($heroImage))) {
                $heroSlides[] = URL::asset($heroImage);
            }
        }

        if (empty($heroSlides) && !empty($allslider)) {
            foreach ($allslider as $alle) {
                $sliderImage = 'uploads/slider/'.$alle->image;
                $sliderSrc = file_exists(base_path($sliderImage)) ? URL::asset($sliderImage) : '';
                if (!empty($sliderSrc)) {
                    $heroSlides[] = $sliderSrc;
                }
            }
        }

        if (empty($heroSlides)) {
            $heroSlides[] = URL::asset('uploads/img/404.png');
        }
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false" data-wrap="true">
          <ol class="carousel-indicators">
            <?php foreach($heroSlides as $key => $slideSrc) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : ''; ?>"></li>
            <?php } ?>
          </ol>
          
            <div class="carousel-inner">
                <?php foreach($heroSlides as $key => $slideSrc) { ?>
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                         <img class="d-block w-100 slider-res" src="<?php echo $slideSrc;?>" alt="Hero slide <?php echo ($key + 1); ?>">
                    </div>
                <?php } ?>
                   
          </div>
          
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    <div class="rb-hero-overlay">
        <div class="container">
            <div class="rb-hero-panel" style="margin-left:-10px;">
                <span class="rb-hero-kicker">Fearless Life Of Women</span>
                <h1>Stand With Red Brigade Lucknow</h1>
                <p>Building courage, dignity, and leadership through self-defense, survivor support, and community action.</p>
                <div class="rb-hero-actions">
                    <a href="<?php  echo action('MainController@contact')?>" class="boxed-btn donate rb-btn-primary" role="button">Join Now</a>
                    <a href="<?php  echo action('MainController@donate')?>" class="boxed-btn rb-btn-secondary" role="button">Donate</a>
                </div>
            </div>
        </div>
    </div>
    
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var slider = document.getElementById('carouselExampleIndicators');
    if (!slider || typeof window.jQuery === 'undefined') {
        return;
    }

    window.jQuery(slider).carousel({
        interval: 3000,
        pause: false,
        wrap: true
    });
});
</script>
<!-- header area end  -->

<section class="rb-impact-strip">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="rb-impact-card">
                    <h3>3,00,000+</h3>
                    <p>Women trained with self-defense initiatives</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rb-impact-card">
                    <h3>700+</h3>
                    <p>Street plays raising voice against violence</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rb-impact-card">
                    <h3>200+</h3>
                    <p>Survivors supported through rehabilitation</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rb-impact-card">
                    <h3>20,000+</h3>
                    <p>People supported during crisis interventions</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start About us Section  -->

<section class="about_us_section rb-section rb-about">
    <div class="container-fluid">
        <div class="rb-about-card">
        <div class="row rb-about-grid">
            <div class="col-md-6 rb-about-copy">
                <div class="redbrigade-section-heading">
                <h5 class="top-heading heading-bar-bottom">About us</h5>
                <h2 class="main-heading">WE ARE REDBRIGADE LUCKNOW</h2>
                <div class="sub-heading">Fight against sexual violence and train women in self-defense through NISHATRA.</div>
                <div class="desc">
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i> Red Brigade Lucknow is committed to FLOW (Fearless Life Of Women) and to building a society with zero tolerance toward sexual violence.</li>
                        <li><i class="fas fa-check"></i> Creating women leadership through training, confidence building, and sustained public action.</li>
                        <li><i class="fas fa-check"></i> Raising a strong voice against sexual violence through 700+ street plays and 225 seminars across institutions.</li>
                        <li><i class="fas fa-check"></i> Supporting survivors through rehabilitation of more than 200 sexual violence survivors, including rape victims.</li>
                        <li><i class="fas fa-check"></i> Bringing women’s role in India’s freedom struggle into public awareness through National Women’s Day initiatives.</li>
                        <li><i class="fas fa-check"></i> Advancing economic self-sufficiency with skill development programs for 300+ women.</li>
                        <li><i class="fas fa-check"></i> Conducting research-based programs to strengthen women’s honor, dignity, and safety.</li>
                        <li><i class="fas fa-check"></i> Intervening in crisis situations, including COVID-19 relief support for about 20,000 people.</li>
                        <li><i class="fas fa-check"></i> Supporting education for girls by mobilizing financial support from the community.</li>
                        <li><i class="fas fa-check"></i> Working with 300+ schools and colleges around Lucknow and across 200 villages.</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="<?php echo action('MainController@blog')?>" class="boxed-btn">Learn More</a>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-md-6 rb-about-media">
                <div class="about-image"></div>
            </div>

        </div>
        </div>
    </div>
    
</section>

<!-- End About us Section  -->

<!-- Start About us area  -->
<section class="about_us_area " style="margin-top:80px; display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 remove-col-padding" style="padding:0px">
                <div class="about-image"></div>
            </div>
            <div class="col-lg-6 remove-col-padding">
                <div class="about-area-right">
                    <span class="title" style="font-size:32px !important">WE ARE REDBRIGADE LUCKNOW</span>
                    <h5 class="subtitle">Fight against Sexual -Violence - Trained 1,57,000 Women with NISHATRA (Self-Defense).</h5>
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
                        <a href="<?php echo action('MainController@blog')?>" class="boxed-btn">Learn More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Us area  -->









<!-- Activity area start  -->
    
<section class="activity-area rb-section rb-work">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Recent Work</h2>
                    <p> Our events are focused towards the overall empowerment of women and amplifying the
voice against sexual violence. </p>
                </div>
            </div>
        </div>

        <div class="row">
		<?php if(!empty($allevent)) { foreach($allevent as $alle) { ?>
	        <div class="col-lg-4 col-md-6 ">
                <div class="activity-item">
                    <div class="activity-ite-img">
                        <img src="<?php echo asset('uploads/news/'.$alle->image);?>" alt="activity" />
                        <span class="time"><?php echo $alle->date; ?></span>
                    </div>
                    <div class="activity-ite-text">
                        <h6 class="title"><?php echo ucfirst($alle->name); ?></h6>
                        <p><?php echo substr($alle->description,0,100); ?></p>
                        
                        <div class="read-more-sec">
                            <button class="btn btn-read"><a href="https://redbrigade-lucknow.org/about">Read More..</a></button>
                        </div>
                    </div>
                </div>
            </div>	
		<?php }} ?>

        </div>
    </div>
</section>
<!-- Activity  end -->



<!-- Join Us area start  -->
<section class="join-area rb-join-modern">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h6 class="title">You can be part of this movement to achieve F.L.O.W. (Fearless Life of Women)</h6> 
                    <div class="btn-wrapper animated fadeInUp">
                        <a href="<?php  echo action('MainController@contact')?>" class="boxed-btn donate" role="button">Join Now </a>
                        <a href="<?php  echo action('MainController@donate')?>" class="boxed-btn " role="button">Donate </a>
                    </div>
            </div>
        </div>
    </div>
    <!--End Container-->
</section>



<!-- Start Redesigned Blog Section -->
<style>
    .rb-blogs-modern {
        padding: 70px 0 40px;
    }

    .rb-blogs-modern .container {
        width: 90%;
        max-width: none;
        padding-left: 0;
        padding-right: 0;
    }

    .rb-blog-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 24px;
        margin-bottom: 26px;
    }

    .rb-blog-kicker {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .08em;
        color: #2f8f5b;
        margin-bottom: 10px;
    }

    .rb-blog-title {
        margin: 0;
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        line-height: 1.1;
        color: #1f2f46;
    }

    .rb-blog-title-accent {
        color: #e65a32;
        font-style: normal;
    }

    .rb-blog-subtitle {
        margin: 12px 0 0;
        max-width: 760px;
        color: #5e6a7f;
        font-size: 16px;
        line-height: 1.6;
    }

    .rb-blog-view-all {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #1f2f46;
        font-weight: 600;
    }

    .rb-blog-featured-link,
    .rb-blog-card-link {
        color: inherit;
        text-decoration: none;
    }

    .rb-blog-featured {
        position: relative;
        width: 100%;
        margin: 0 auto 30px;
        border-radius: 0;
        overflow: hidden;
        min-height: 430px;
        box-shadow: 0 24px 50px rgba(22, 35, 56, .18);
    }

    .rb-blog-featured-img img {
        width: 100%;
        height: 430px;
        object-fit: cover;
        display: block;
    }

    .rb-blog-featured-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(8, 17, 31, .06) 12%, rgba(8, 17, 31, .84) 88%);
    }

    .rb-blog-featured-content {
        position: absolute;
        left: 32px;
        right: 32px;
        bottom: 26px;
        color: #fff;
        z-index: 2;
    }

    .rb-blog-badge {
        display: inline-block;
        background: rgba(255, 255, 255, .16);
        border: 1px solid rgba(255, 255, 255, .4);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .07em;
        text-transform: uppercase;
        border-radius: 999px;
        padding: 6px 12px;
        margin-bottom: 12px;
    }

    .rb-blog-featured-title {
        margin: 0 0 10px;
        font-family: 'Playfair Display', serif;
        font-size: 46px;
        line-height: 1.08;
        max-width: 760px;
        color: #fff;
    }

    .rb-blog-featured-excerpt {
        margin: 0 0 14px;
        max-width: 760px;
        font-size: 20px;
        line-height: 1.45;
        color: rgba(255, 255, 255, .92);
    }

    .rb-blog-featured-meta,
    .rb-blog-card-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        font-size: 14px;
        font-weight: 600;
    }

    .rb-blog-featured-meta i,
    .rb-blog-card-meta i {
        margin-right: 5px;
    }

    .rb-blog-read-cta,
    .rb-blog-card-read {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #ff855c;
        font-weight: 700;
    }

    .rb-blog-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 12px;
        width: 100%;
        margin: 0 auto;
    }

    .rb-blog-card {
        background: #fff;
        border-radius: 0;
        overflow: hidden;
        box-shadow: 0 12px 28px rgba(26, 39, 59, .12);
        height: 100%;
    }

    .rb-blog-card-img {
        position: relative;
        height: 286px;
        overflow: hidden;
    }

    .rb-blog-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .rb-blog-card-img .rb-blog-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        margin: 0;
        color: #1e2d43;
        background: rgba(246, 249, 255, .86);
        border-color: rgba(30, 45, 67, .1);
    }

    .rb-blog-card-body {
        padding: 14px 14px 16px;
    }

    .rb-blog-card-meta {
        color: #7f8da3;
        font-size: 12px;
        margin-bottom: 6px;
    }

    .rb-blog-card-title {
        margin: 0 0 10px;
        color: #273247;
        font-size: 20px;
        line-height: 1.2;
        font-family: 'Playfair Display', serif;
    }

    .rb-blog-card-excerpt {
        margin: 0 0 10px;
        color: #5f6d82;
        font-size: 13px;
        line-height: 1.5;
    }

    .rb-blog-bottom-cta {
        text-align: center;
        margin-top: 26px;
    }

    .rb-blog-explore-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #1f2f46;
        font-weight: 700;
    }

    @media (max-width: 1199px) {
        .rb-blog-featured,
        .rb-blog-grid {
            width: 100%;
        }

        .rb-blog-featured-title {
            font-size: 38px;
        }

        .rb-blog-featured-excerpt {
            font-size: 18px;
        }

        .rb-blog-card-title {
            font-size: 19px;
        }
    }

    @media (max-width: 991px) {
        .rb-blog-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .rb-blog-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .rb-blog-featured-title {
            font-size: 32px;
        }

        .rb-blog-featured-img img,
        .rb-blog-featured {
            height: 380px;
            min-height: 380px;
        }
    }

    @media (max-width: 767px) {
        .rb-blogs-modern {
            padding-top: 54px;
        }

        .rb-blogs-modern .container {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .rb-blog-featured {
            margin-bottom: 20px;
        }

        .rb-blog-grid {
            gap: 14px;
        }

        .rb-blog-title {
            font-size: 34px;
        }

        .rb-blog-featured-content {
            left: 18px;
            right: 18px;
            bottom: 18px;
        }

        .rb-blog-featured-title {
            font-size: 28px;
        }

        .rb-blog-featured-excerpt {
            font-size: 16px;
        }

        .rb-blog-grid {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .rb-blog-card-title {
            font-size: 21px;
        }
    }
</style>
<?php
// Helper: assign category based on blog title keywords
function getBlogCategory($title) {
    $t = strtolower($title);
    if (strpos($t, 'self-defense') !== false || strpos($t, 'nishatra') !== false) return ['Self-Defense', 'rb-cat-defense'];
    if (strpos($t, 'street play') !== false || strpos($t, 'nukkad') !== false || strpos($t, 'voice') !== false) return ['Activism', 'rb-cat-activism'];
    if (strpos($t, 'skill') !== false || strpos($t, 'economic') !== false) return ['Empowerment', 'rb-cat-empowerment'];
    if (strpos($t, 'covid') !== false || strpos($t, 'relief') !== false || strpos($t, 'crisis') !== false) return ['Relief', 'rb-cat-relief'];
    if (strpos($t, 'education') !== false || strpos($t, 'school') !== false || strpos($t, 'girl') !== false) return ['Education', 'rb-cat-education'];
    if (strpos($t, 'leader') !== false || strpos($t, 'change-maker') !== false) return ['Leadership', 'rb-cat-leadership'];
    return ['Impact', 'rb-cat-impact'];
}
// Helper: estimate reading time
function getReadingTime($text) {
    $words = str_word_count(strip_tags($text));
    $minutes = max(1, ceil($words / 200));
    return $minutes . ' min read';
}
// Split blogs: first = featured, rest = grid
$featured = null;
$secondary = [];
if (!empty($allblog)) {
    $blogArr = is_array($allblog) ? $allblog : $allblog->all();
    $featured = $blogArr[0];
    $secondary = array_slice($blogArr, 1, 6);
}
$fCat = $featured ? getBlogCategory($featured->name) : ['Impact', 'rb-cat-impact'];
?>
<section class="rb-blogs-modern" id="blogs-section">
    <div class="container">
        <!-- Section Header -->
        <div class="rb-blog-header">
            <div class="rb-blog-header-left">
                <span class="rb-blog-kicker">Our Stories</span>
                <h2 class="rb-blog-title">Voices of <em class="rb-blog-title-accent">Change</em></h2>
                <p class="rb-blog-subtitle">Stories of courage, resilience, and empowerment from the ground — straight from the heart of our movement.</p>
            </div>
            <a href="<?php echo action('MainController@blog')?>" class="rb-blog-view-all">
                View All Stories
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>

        <!-- Featured Post -->
        <?php if($featured) { ?>
        <a href="<?php echo action('MainController@singleblog', $featured->slug); ?>" class="rb-blog-featured-link">
            <div class="rb-blog-featured">
                <div class="rb-blog-featured-img">
                    <img src="<?php echo URL::asset('uploads/blog/'.$featured->image);?>" alt="<?php echo $featured->name; ?>">
                </div>
                <div class="rb-blog-featured-overlay"></div>
                <div class="rb-blog-featured-content">
                    <span class="rb-blog-badge"><?php echo $fCat[0]; ?></span>
                    <h3 class="rb-blog-featured-title"><?php echo ucfirst($featured->name); ?></h3>
                    <p class="rb-blog-featured-excerpt"><?php echo strip_tags(substr($featured->description, 0, 200)); ?>...</p>
                    <div class="rb-blog-featured-meta">
                        <span class="rb-blog-meta-date"><i class="fas fa-calendar-alt"></i> <?php echo $featured->date; ?></span>
                        <span class="rb-blog-meta-read"><i class="fas fa-clock"></i> <?php echo getReadingTime($featured->description); ?></span>
                        <span class="rb-blog-read-cta">Read Full Story <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
                    </div>
                </div>
            </div>
        </a>
        <?php } ?>

        <!-- Secondary Posts Grid -->
        <?php if(!empty($secondary)) { ?>
        <div class="rb-blog-grid">
            <?php foreach($secondary as $idx => $post) { 
                $pCat = getBlogCategory($post->name);
            ?>
            <a href="<?php echo action('MainController@singleblog', $post->slug); ?>" class="rb-blog-card-link">
                <article class="rb-blog-card" style="animation-delay: <?php echo ($idx * 0.08); ?>s;">
                    <div class="rb-blog-card-img">
                        <img src="<?php echo URL::asset('uploads/blog/'.$post->image);?>" alt="<?php echo $post->name; ?>" loading="lazy">
                        <span class="rb-blog-badge <?php echo $pCat[1]; ?>"><?php echo $pCat[0]; ?></span>
                    </div>
                    <div class="rb-blog-card-body">
                        <div class="rb-blog-card-meta">
                            <span><i class="fas fa-calendar-alt"></i> <?php echo $post->date; ?></span>
                            <span><i class="fas fa-clock"></i> <?php echo getReadingTime($post->description); ?></span>
                        </div>
                        <h4 class="rb-blog-card-title"><?php echo ucfirst($post->name); ?></h4>
                        <p class="rb-blog-card-excerpt"><?php echo strip_tags(substr($post->description, 0, 120)); ?>...</p>
                        <span class="rb-blog-card-read">Read More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
                    </div>
                </article>
            </a>
            <?php } ?>
        </div>
        <?php } ?>

        <!-- Bottom CTA -->
        <div class="rb-blog-bottom-cta">
            <a href="<?php echo action('MainController@blog')?>" class="rb-blog-explore-btn">
                <span>Explore All Stories</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>
<!-- End Redesigned Blog Section -->






<!-- End Join Us Area -->

<!-- Gallery area start  -->
<section class="gallery-area" id="gallery-area" style="display:none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Research & Publications</h2>
                    <span class="separator"></span>
                    <p>Red Brigade conducts research programs centering around women
safety, honor and their role in the freedom movement of India. Several prestigious institutions across
the world have done research and publications on Red Brigade Lucknow. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="our-gallery-menu clearfix">
                    <ul class="filterizr__controls list-unstyled list-inline filter-tabs">
                        <li class="active filter" data-role="button" data-filter="all"> All</li>
                        <li class="filter" data-role="button" data-filter="activity">Media Coverage</li>
                        <li class="filter" data-role="button" data-filter="campains">Video</li>
                        <li class="filter" data-role="button" data-filter="news">Gallery</li>
                      <!--  <li class="filter" data-role="button" data-filter="donate">Donate</li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="filterizr__elements">
				<?php if(!empty($allgallery)) { foreach($allgallery as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="activity">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo asset('uploads/gallery/'.$allg->image);?>" alt="">
                            </div>
                            <div class="img-overlay">
                                <div class="view-button text-center">
                                    <a href="<?php echo asset('uploads/gallery/'.$allg->image);?>" class="imagepopup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
				<?php if(!empty($allactivity)) { foreach($allactivity as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="activity">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo asset('uploads/gallery/'.$allg->image);?>" alt="">
                            </div>
                            <div class="img-overlay">
                                <div class="view-button text-center">
                                    <a href="<?php echo asset('uploads/gallery/'.$allg->image);?>" class="imagepopup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
    				<?php if(!empty($allcampains)) { foreach($allcampains as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="campains">
                        <div class="inner-box">
                            <div class="image">
                                  <div><?php echo ucfirst(isset($allg->embed) ? $allg->embed : ''); ?></div>
                            </div> 
                        </div>
                    </div>			
				<?php } } ?>
				<?php if(!empty($allnews)) { foreach($allnews as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="news">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo asset('uploads/gallery/'.$allg->image);?>" alt="">
                            </div>
                            <div class="img-overlay">
                                <div class="view-button text-center">
                                    <a href="<?php echo asset('uploads/gallery/'.$allg->image);?>" class="imagepopup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>			
				<?php } } ?>
			<!--	<?php if(!empty($alldonate)) { foreach($alldonate as $allg) { ?>
	               <div class="filtr-item col-md-6 col-lg-4" data-category="donate">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo asset('uploads/gallery/'.$allg->image);?>" alt="">
                            </div>
                            <div class="img-overlay">
                                <div class="view-button text-center">
                                    <a href="<?php echo asset('uploads/gallery/'.$allg->image);?>" class="imagepopup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>			
				<?php } } ?>-->

                </div>
            </div>
    </div>

</section>

<!-- Gallery area end -->
 
 

 
<!-- Testimonial Section start --> 
 
<section class="testimonial-section testimonial-bg rb-section rb-testimonial-modern">
    <div class="container">
        
        <h6>Testimonial</h6>
        <h3>Appreciation About Our Work</h3>
        <div class="single-testi">
            <div class="single-testi-img">
                <?php $testimonialImage = 'uploads/testimonial/sunshine-testimonial-176.JPG'; ?>
                <img src="<?php echo file_exists(base_path($testimonialImage)) ? asset($testimonialImage) : asset('uploads/img/404.png'); ?>" alt="Usha Vishwakarma">
            </div>
            
            <div class="single-testi-title">
                <h4>Usha Vishwakarma</h4>
                <p>Founder, Chief Managing Trustee and Master Trainer of Nishashtra Kala</p>
            </div>
        </div>
    </div>
</section> 
 
 
<!-- Testimonial Section start -->  
 
 
<!-- Testimonial area start -->
<section class="testimonial-area testimonial-bg" style="display:none;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Our Team </h2>
                    <span class="separator"></span>
                   <!-- <p>Use off agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore
                        ten.text of the printing and typesetting industry. </p> -->
                </div>
            </div>
        </div>
       
        <div class="row">
             <div class="testimonial-carousel owl-theme" >
                    	<?php if(!empty($alltestimonial)){ foreach($alltestimonial as $allt) { ?> 
                            <div class="team-box-padding col-lg-12">
                                <div class="team-box col-lg-10 offset-lg-1">
                                    <div class="team-face">
                                    <img src="<?php echo asset('uploads/testimonial/'.$allt->image);?>" alt="">
                                    </div>
                                    <p><?php echo ucfirst($allt->name); ?></p>
                                    <hr>
                                <p><?php echo ucfirst($allt->description); ?> </p>
                                </div>
                        </div>
                	<?php } } ?> 
                	</div>
                </div>
    </div>
</section>
<!-- Testimonial end -->
 

@include('includes.footer')

</div>