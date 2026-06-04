@include('includes.header')
<!-- header area start  -->

<div class="rb-home">

<header class="rb-hero-shell">
    <?php
        $heroSlides = [];

        // If admin has uploaded sliders, use them FIRST
        if (!empty($allslider) && count($allslider) > 0) {
            foreach ($allslider as $alle) {
                $sliderImage = 'uploads/slider/'.$alle->image;
                $sliderSrc = file_exists(base_path($sliderImage)) ? URL::asset($sliderImage) : '';
                if (!empty($sliderSrc)) {
                    $heroSlides[] = [
                        'src' => $sliderSrc,
                        'name' => !empty($alle->name) ? $alle->name : 'Stand With Red Brigade Lucknow',
                        'desc' => !empty($alle->description) ? strip_tags($alle->description) : 'Building courage, dignity, and leadership through self-defense, survivor support, and community action.'
                    ];
                }
            }
        }

        // Fallback: If no admin sliders exist, use curated mission-relevant images
        if (empty($heroSlides)) {
            $relevantHeroCandidates = [
                'uploads/slider/Redbrigade-lucknow.jpg',
                'uploads/slider/Redbrigade-lucknow-428.jpeg',
                'uploads/slider/Redbrigade-lucknow-552.jpeg',
                'uploads/slider/Redbrigade-lucknow-614.jpeg'
            ];

            foreach ($relevantHeroCandidates as $heroImage) {
                if (file_exists(base_path($heroImage))) {
                    $heroSlides[] = [
                        'src' => URL::asset($heroImage),
                        'name' => 'Stand With Red Brigade Lucknow',
                        'desc' => 'Building courage, dignity, and leadership through self-defense, survivor support, and community action.'
                    ];
                }
            }
        }

        // Final Fallback: 404 image
        if (empty($heroSlides)) {
            $heroSlides[] = [
                'src' => URL::asset('uploads/img/404.png'),
                'name' => 'Stand With Red Brigade Lucknow',
                'desc' => 'Building courage, dignity, and leadership through self-defense, survivor support, and community action.'
            ];
        }
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false" data-wrap="true">
          <ol class="carousel-indicators">
            <?php foreach($heroSlides as $key => $slide) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : ''; ?>"></li>
            <?php } ?>
          </ol>
          
          <div class="carousel-inner">
                <?php foreach($heroSlides as $key => $slide) { ?>
                    <div class="carousel-item <?php echo $key == 0 ? ' active' : ''; ?>">
                         <img class="d-block w-100 slider-res" src="<?php echo $slide['src'];?>" alt="<?php echo $slide['name']; ?>">
                    </div>
                <?php } ?>
          </div>
          
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="z-index: 10;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="z-index: 10;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

    <!-- Fixed Overlay -->
    <div class="rb-hero-overlay" style="position: absolute; inset: 0; z-index: 5; display: flex; align-items: center; pointer-events: none;">
        <div class="container">
            <div class="rb-hero-panel" style="margin-left:-10px; pointer-events: auto;">
                <span class="rb-hero-kicker">Fearless Life Of Women</span>
                <h1 id="dynamic-slider-title"><?php echo $heroSlides[0]['name']; ?></h1>
                <p id="dynamic-slider-desc"><?php echo $heroSlides[0]['desc']; ?></p>
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

    var slideData = <?php echo json_encode($heroSlides); ?>;
    
    window.jQuery(slider).on('slide.bs.carousel', function (e) {
        var nextIndex = e.to;
        if(slideData[nextIndex]) {
            document.getElementById('dynamic-slider-title').innerText = slideData[nextIndex].name;
            document.getElementById('dynamic-slider-desc').innerText = slideData[nextIndex].desc;
        }
    });

    window.jQuery(slider).carousel({
        interval: 4000,
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
                    </ul>
                    <div class="btn-wrapper">
                        <a href="<?php echo action('MainController@about')?>" class="boxed-btn">Learn More</a>
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

<!-- Flagship Campaigns Summary -->
<section class="rb-campaign-summary" style="padding: 80px 0; background: #f8fafc;">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <span class="rb-blog-kicker">Our Core Initiatives</span>
                <h2 class="rb-blog-title">Flagship <em class="rb-blog-title-accent">Campaigns</em></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-school"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">100 Days 100 Schools</h4>
                    <p style="font-size: 14px;">Intensive outreach delivering training and awareness across 100 locations in 100 days.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-moon"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">Raat Ka Ujala</h4>
                    <p style="font-size: 14px;">Night-safety activism reclaiming public spaces for women through symbolic marches.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-female"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">18 Days Activism</h4>
                    <p style="font-size: 14px;">Celebrating National Women's Day with marathons of leadership and advocacy.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-dove"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">Hinsa Mukt Jeevan</h4>
                    <p style="font-size: 14px;">Focusing on non-violence and dignity during a 12-day intensive community dialogue.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-bullhorn"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">Fight Against 9 3 6</h4>
                    <p style="font-size: 14px;">Creative activism addressing sexual harassment in public spaces through community reporting.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="rb-award-card h-100" style="padding: 30px; text-align: center;">
                    <div class="rb-award-icon" style="font-size: 32px; color: #E31E24;"><i class="fas fa-university"></i></div>
                    <h4 style="font-size: 18px; margin: 15px 0;">Balmanch Centre</h4>
                    <p style="font-size: 14px;">Education and rehabilitation centre where victims transform into fearless leaders.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo action('MainController@about')?>#campaigns" class="rb-blog-view-all">See Full Campaign Details <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Recent Work area start  -->
    
<?php
// Recent Work - reuse blog layout: first event as featured, rest as cards
$featuredEvent = null;
$secondaryEvents = [];
if (!empty($allevent)) {
    $eventsArr = is_array($allevent) ? $allevent : $allevent->all();
    $featuredEvent = $eventsArr[0];
    $secondaryEvents = array_slice($eventsArr, 1, 9);
}
?>
<section class="rb-blogs-modern" id="recent-work-section">
    <div class="container">
        <!-- Section Header -->
        <div class="rb-blog-header">
            <div class="rb-blog-header-left">
                <span class="rb-blog-kicker">Recent Work</span>
                <h2 class="rb-blog-title">Our <em class="rb-blog-title-accent">Events</em></h2>
                <p class="rb-blog-subtitle">Our events are focused on empowerment and amplifying women's voices against sexual violence.</p>
            </div>
            <a href="<?php echo action('MainController@event')?>" class="rb-blog-view-all">
                Explore All Events
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14 Jur"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>

        <!-- Featured Post -->
        <?php if($featuredEvent) { ?>
        <a href="#" class="rb-blog-featured-link">
            <div class="rb-blog-featured">
                <div class="rb-blog-featured-img">
                    <img src="<?php echo asset('uploads/news/'.$featuredEvent->image);?>" alt="<?php echo $featuredEvent->name; ?>">
                </div>
                <div class="rb-blog-featured-overlay"></div>
                <div class="rb-blog-featured-content">
                    <span class="rb-blog-badge">Event</span>
                    <h3 class="rb-blog-featured-title"><?php echo ucfirst($featuredEvent->name); ?></h3>
                    <p class="rb-blog-featured-excerpt"><?php echo strip_tags(substr($featuredEvent->description, 0, 200)); ?>...</p>
                    <div class="rb-blog-featured-meta">
                        <span class="rb-blog-meta-date"><i class="fas fa-calendar-alt"></i> <?php echo $featuredEvent->date; ?></span>
                        <span class="rb-blog-read-cta">Read More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
                    </div>
                </div>
            </div>
        </a>
        <?php } ?>

        <!-- Secondary Posts Grid -->
        <?php if(!empty($secondaryEvents)) { ?>
        <div class="rb-blog-grid">
            <?php foreach($secondaryEvents as $idx => $ev) { ?>
            <a href="#" class="rb-blog-card-link">
                <article class="rb-blog-card" style="animation-delay: <?php echo ($idx * 0.08); ?>s;">
                    <div class="rb-blog-card-img">
                        <img src="<?php echo asset('uploads/news/'.$ev->image);?>" alt="<?php echo $ev->name; ?>" loading="lazy">
                        <span class="rb-blog-badge">Event</span>
                    </div>
                    <div class="rb-blog-card-body">
                        <div class="rb-blog-card-meta">
                            <span><i class="fas fa-calendar-alt"></i> <?php echo $ev->date; ?></span>
                            <?php if(isset($ev->location) && !empty($ev->location)) { ?>
                                <span><i class="fas fa-map-marker-alt"></i> <?php echo $ev->location; ?></span>
                            <?php } ?>
                        </div>
                        <h4 class="rb-blog-card-title"><?php echo ucfirst($ev->name); ?></h4>
                        <p class="rb-blog-card-excerpt"><?php echo strip_tags(substr($ev->description, 0, 120)); ?>...</p>
                        <span class="rb-blog-card-read">Read More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
                    </div>
                </article>
            </a>
            <?php } ?>
        </div>
        <?php } ?>

        <!-- Bottom CTA -->
        <div class="rb-blog-bottom-cta">
            <a href="<?php echo action('MainController@event'); ?>" class="rb-blog-explore-btn">
                <span>Explore All Events</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>
<!-- Activity  end -->


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
        color: #E31E24;
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

    .rb-blog-featured-link,\n    .rb-blog-card-link {
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

    .rb-blog-featured-meta,\n    .rb-blog-card-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        font-size: 14px;
        font-weight: 600;
    }

    .rb-blog-featured-meta i,\n    .rb-blog-card-meta i {
        margin-right: 5px;
    }

    .rb-blog-read-cta,\n    .rb-blog-card-read {
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
        .rb-blog-featured,\n        .rb-blog-grid {
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

        .rb-blog-featured-img img,\n        .rb-blog-featured {
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
if (!function_exists('getBlogCategory')) {
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
}
// Helper: estimate reading time
if (!function_exists('getReadingTime')) {
function getReadingTime($text) {
    $words = str_word_count(strip_tags($text));
    $minutes = max(1, ceil($words / 200));
    return $minutes . ' min read';
}
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


<!-- Start Redesigned Testimonial Section -->
<style>
    .rb-testimonial-modern {
        padding: 80px 0;
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
    }
    
    .rb-testimonial-wrapper {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .rb-testimonial-kicker {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #2f8f5b;
        margin-bottom: 10px;
    }

    .rb-testimonial-heading {
        margin: 0 0 40px;
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        line-height: 1.1;
        color: #1f2f46;
    }

    .rb-testimonial-accent {
        color: #E31E24;
        font-style: normal;
    }

    .rb-testimonial-quote-box {
        background: #fff;
        padding: 45px 50px;
        border-radius: 0;
        box-shadow: 0 24px 50px rgba(22, 35, 56, .08);
        position: relative;
        border-top: 4px solid #E31E24;
    }

    .rb-quote-icon {
        color: rgba(230, 90, 50, 0.15);
        position: absolute;
        top: -20px;
        left: 40px;
        z-index: 0;
    }

    .rb-testimonial-text {
        position: relative;
        z-index: 1;
        font-size: 21px;
        line-height: 1.6;
        color: #4a5568;
        font-style: italic;
        margin-bottom: 30px;
        font-family: Georgia, serif;
    }

    .rb-testimonial-author {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
    }

    .rb-testimonial-author-img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        flex-shrink: 0;
    }

    .rb-testimonial-author-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .rb-testimonial-author-info {
        text-align: left;
    }

    .rb-testimonial-author-info h4 {
        margin: 0 0 4px;
        font-size: 18px;
        font-weight: 700;
        color: #1f2f46;
    }

    .rb-testimonial-author-info p {
        margin: 0;
        font-size: 14px;
        color: #718096;
        line-height: 1.4;
    }

    @media (max-width: 767px) {
        .rb-testimonial-modern {
            padding: 60px 0;
        }
        .rb-testimonial-heading {
            font-size: 34px;
            margin-bottom: 30px;
        }
        .rb-testimonial-quote-box {
            padding: 35px 20px;
        }
        .rb-quote-icon {
            left: 20px;
            top: -15px;
            width: 40px;
            height: 40px;
        }
        .rb-testimonial-text {
            font-size: 18px;
        }
        .rb-testimonial-author {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }
        .rb-testimonial-author-info {
            text-align: center;
        }
    }
</style>

<section class="rb-testimonial-modern" id="testimonial-section">
    <div class="container">
        <div class="rb-testimonial-wrapper">
            <span class="rb-testimonial-kicker">Testimonial</span>
            <h2 class="rb-testimonial-heading">Appreciation About Our <em class="rb-testimonial-accent">Work</em></h2>
            
            <div class="rb-testimonial-quote-box">
                <svg class="rb-quote-icon" width="60" height="60" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 21L16.411 14.122C16.634 13.435 16.749 12.721 16.749 11.996V3H23V11.996C23 16.969 19.388 21 14.017 21ZM5.017 21L7.411 14.122C7.634 13.435 7.749 12.721 7.749 11.996V3H14V11.996C14 16.969 10.388 21 5.017 21Z"/></svg>
                <p class="rb-testimonial-text">"Red Brigade Lucknow has been at the forefront of empowering women and building a society with zero tolerance toward sexual violence. Our mission is to create fearless lives for women, and every step we take is a step toward a safer, more equitable world."</p>
                <div class="rb-testimonial-author">
                    <div class="rb-testimonial-author-img">
                        <?php $testimonialImage = 'uploads/testimonial/sunshine-testimonial-176.JPG'; ?>
                        <img src="<?php echo file_exists(base_path($testimonialImage)) ? asset($testimonialImage) : asset('uploads/img/404.png'); ?>" alt="Usha Vishwakarma">
                    </div>
                    <div class="rb-testimonial-author-info">
                        <h4>Usha Vishwakarma</h4>
                        <p>Founder, Chief Managing Trustee and Master Trainer of Nishashtra Kala</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Redesigned Testimonial Section -->

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

@include('includes.footer')

</div>