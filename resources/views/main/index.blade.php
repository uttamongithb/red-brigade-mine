@include('includes.header')
<!-- header area start  -->

<div class="rb-home">

<header class="rb-hero-shell">
    <?php
        $heroSlides = [];

        // If admin has uploaded sliders, use them FIRST
        if (!empty($allslider) && count($allslider) > 0) {
            foreach ($allslider as $alle) {
                $trimmedImage = trim($alle->image);
                if ($trimmedImage === 'prev_work_1783160020_43.jpeg') {
                    continue;
                }
                $heroSlides[] = [
                    'src' => URL::asset('uploads/slider/'.$trimmedImage),
                    'name' => !empty($alle->name) ? $alle->name : 'Stand With Red Brigade Lucknow',
                    'desc' => !empty($alle->description) ? strip_tags($alle->description) : 'Building courage, dignity, and leadership through self-defense, survivor support, and community action.'
                ];
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
                $heroSlides[] = [
                    'src' => URL::asset($heroImage),
                    'name' => 'Stand With Red Brigade Lucknow',
                    'desc' => 'Building courage, dignity, and leadership through self-defense, survivor support, and community action.'
                ];
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

    <!-- Impact Cards as Overlay -->
    <section class="rb-impact-strip">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>3,00,000+</h3>
                        <p>Women Trained in NISHASTRA</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>700+</h3>
                        <p>Street Plays Performed</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>200+</h3>
                        <p>Survivors Rehabilitated</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>20,000+</h3>
                        <p>Lives Impacted Through Balmanch</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>500+</h3>
                        <p>Institutions (Schools + Colleges)</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>500+</h3>
                        <p>Villages Covered</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>20+</h3>
                        <p>States Reached</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rb-impact-card">
                        <h3>2000+</h3>
                        <p>Seminars & Workshops Conducted</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</header>

<!-- Start Vision & Mission Section -->
<style>
    .rb-vision-mission-modern {
        padding: 80px 0 30px;
        position: relative;
        z-index: 5;
    }

    .rb-vm-card {
        background: #ffffff;
        border-radius: var(--rb-radius-lg);
        padding: 50px 45px;
        height: 100%;
        box-shadow: var(--rb-shadow-md);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(14, 32, 56, 0.04);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        z-index: 1;
    }

    .rb-vm-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--rb-shadow-lg);
    }

    .rb-vm-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        z-index: 2;
    }

    .rb-vm-card.mission-card::before {
        background: linear-gradient(90deg, #111827, #374151);
    }

    .rb-vm-card.vision-card::before {
        background: linear-gradient(90deg, var(--rb-brand), var(--rb-brand-dark));
    }

    .rb-vm-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 26px;
    }

    .mission-card .rb-vm-icon {
        color: #111827;
        background: #f3f4f6;
    }

    .vision-card .rb-vm-icon {
        color: var(--rb-brand);
        background: #fff5f5;
    }

    .rb-vm-kicker {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: var(--rb-muted);
        margin-bottom: 10px;
    }

    .rb-vm-title {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
        margin-bottom: 22px;
        color: var(--rb-ink);
        line-height: 1.15;
    }

    .rb-vm-accent {
        font-style: normal;
    }

    .mission-card .rb-vm-accent {
        color: #111827;
    }

    .vision-card .rb-vm-accent {
        color: var(--rb-brand);
    }

    .rb-vm-text {
        font-size: 17px;
        line-height: 1.75;
        color: #4a5568;
        margin: 0;
    }

    @media screen and (max-width: 991px) {
        .rb-vm-card {
            padding: 40px 30px;
        }
        .rb-vm-title {
            font-size: 34px;
        }
        .rb-vm-text {
            font-size: 16px;
        }
    }

    @media screen and (max-width: 767px) {
        .rb-vision-mission-modern {
            padding: 50px 0 10px;
        }
        .rb-vm-card {
            padding: 35px 24px;
            border-radius: 16px !important;
        }
        .rb-vm-title {
            font-size: 30px;
            margin-bottom: 15px;
        }
        .rb-vm-text {
            font-size: 15px;
            line-height: 1.6;
        }

        /* Hero & Impact Mobile Overrides */
        .slider-res {
            object-fit: cover !important;
            object-position: center !important;
            height: 480px !important;
        }

        .rb-home .rb-impact-strip {
            padding: 40px 0;
            background: #111a2b; /* Deep dark blue for premium contrast */
            border-bottom: 4px solid #E31E24;
            margin-top: 0 !important;
        }

        .rb-home .rb-impact-strip .row {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 16px !important;
            padding: 0 10px;
        }

        .rb-home .rb-impact-strip .row > div {
            width: 100% !important;
            max-width: 100% !important;
            padding: 0 !important;
        }

        .rb-home .rb-impact-card {
            border-radius: 16px !important; /* Modern rounded rectangles on mobile */
            width: 100% !important;
            height: 110px !important;
            padding: 15px 10px !important;
            margin: 0 !important;
            box-shadow: 0 6px 15px rgba(0,0,0,0.25) !important;
        }

        .rb-home .rb-impact-card h3 {
            font-size: 24px !important;
            margin-bottom: 4px !important;
        }

        .rb-home .rb-impact-card p {
            font-size: 10px !important;
            letter-spacing: 0.2px !important;
        }
    }
</style>

<section class="rb-vision-mission-modern">
    <div class="container">
        <div class="row">
            <!-- Mission -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="rb-vm-card mission-card">
                    <div class="rb-vm-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2 class="rb-vm-title">The <em class="rb-vm-accent">Mission</em></h2>
                    <p class="rb-vm-text"><strong>A safe society with zero tolerance for sexual violence.</strong><br><br>To empower adolescent girls and women—especially survivors of sexual violence from marginalized communities—through preventive self-defense (NISHASTRA), survivor-led leadership, and access to justice. We are dedicated to dismantling patriarchal mindsets and building a society where women stand strong with an unshakeable sense of dignity.</p>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-lg-6">
                <div class="rb-vm-card vision-card">
                    <div class="rb-vm-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="rb-vm-title">The <em class="rb-vm-accent">Vision</em></h2>
                    <p class="rb-vm-text"><strong>To establish and create a 'FLOW' (Fearless Life of Women)</strong><br><br>The vision of Red Brigade Lucknow is to build a society where women live fearlessly with dignity, equality, justice, and freedom. The organization seeks to create a gender-just and socially harmonious society where women are recognized as leaders in shaping social transformation and nation-building.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Premium Overlapping About Section -->
<style>
    .rb-about-premium {
        padding: 110px 0;
        background-color: #fdfdfd;
        position: relative;
        overflow: hidden;
    }

    .rb-about-container {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .rb-about-img-wrap {
        flex: 0 0 45%;
        max-width: 45%;
        position: relative;
        z-index: 2; /* Increased z-index to stay above the card if they overlap */
    }

    .rb-about-img-wrap img {
        width: 100%;
        height: 580px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .rb-about-badge {
        position: absolute;
        bottom: 40px; /* Moved up to be fully inside the image area */
        left: -30px; /* Moved to the left side to avoid the overlapping card */
        background: linear-gradient(135deg, #ff414d 0%, #E31E24 100%);
        color: #fff;
        padding: 30px 35px;
        border-radius: 12px;
        box-shadow: 0 15px 30px rgba(227, 30, 36, 0.3);
        text-align: center;
        border: 5px solid #fff;
        z-index: 5;
    }

    .rb-about-badge .year {
        display: block;
        font-size: 42px;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 5px;
        font-family: 'Playfair Display', serif;
    }

    .rb-about-badge .text {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .rb-about-content-box {
        flex: 0 0 60%;
        max-width: 60%;
        margin-left: -5%; /* Overlap image */
        background: #fff;
        padding: 65px 70px;
        border-radius: 12px;
        box-shadow: 0 30px 60px rgba(14, 32, 56, 0.08);
        position: relative;
        z-index: 3; /* Ensure content is above image */
        border-left: 6px solid #E31E24;
    }

    .rb-about-kicker {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: #E31E24;
        margin-bottom: 15px;
    }

    .rb-about-heading {
        font-family: 'Playfair Display', serif;
        font-size: 44px;
        line-height: 1.15;
        color: #111827;
        margin-bottom: 25px;
    }

    .rb-about-heading em {
        color: #E31E24;
        font-style: normal;
    }

    .rb-about-desc {
        font-size: 17px;
        line-height: 1.75;
        color: #4b5563;
        margin-bottom: 35px;
    }

    .rb-about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 40px;
        list-style: none;
        padding: 0;
    }

    .rb-about-grid li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 16px;
        color: #1f2937;
        font-weight: 600;
    }

    .rb-about-grid i {
        color: #E31E24; /* Red checkmark */
        font-size: 20px;
    }

    /* Fixed Button Styling */
    .rb-about-content-box .btn-wrapper {
        margin-top: 15px;
    }
    
    .rb-about-discover-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 0 38px;
        height: 58px;
        font-size: 16px;
        border-radius: 999px;
        color: #ffffff !important;
        text-decoration: none !important;
        background: linear-gradient(120deg, #E31E24 0%, #b3141b 100%);
        border: none;
        font-weight: 700;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(227, 30, 36, 0.25);
    }

    .rb-about-discover-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(227, 30, 36, 0.4);
        color: #ffffff !important;
    }

    .rb-about-discover-btn i {
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .rb-about-discover-btn:hover i {
        transform: translateX(4px);
    }

    @media (max-width: 1199px) {
        .rb-about-content-box { padding: 50px; }
        .rb-about-heading { font-size: 38px; }
    }

    @media (max-width: 991px) {
        .rb-about-container { flex-direction: column; }
        .rb-about-img-wrap { flex: 0 0 100%; max-width: 100%; margin-bottom: 40px; }
        .rb-about-badge { left: 20px; bottom: -20px; }
        .rb-about-content-box { 
            flex: 0 0 100%; 
            max-width: 100%; 
            margin-left: 0; 
            margin-top: -60px; 
            padding: 45px 35px; 
        }
    }

    @media (max-width: 767px) {
        .rb-about-premium { padding: 60px 0; }
        .rb-about-img-wrap img { height: 350px; }
        .rb-about-badge { padding: 15px 20px; border-width: 3px; left: 15px; bottom: 15px; } /* Move badge inside image */
        .rb-about-badge .year { font-size: 28px; }
        .rb-about-badge .text { font-size: 11px; }
        .rb-about-grid { grid-template-columns: 1fr; gap: 12px; }
        .rb-about-content-box { 
            margin-top: 30px !important; /* Reset overlap on mobile */
            padding: 35px 24px; 
            border-left: none; 
            border-top: 5px solid #E31E24; 
            box-shadow: 0 15px 35px rgba(14, 32, 56, 0.05);
        }
        .rb-about-heading { font-size: 30px; }
        .rb-about-desc { font-size: 15px; }
    }
</style>

<section class="rb-about-premium">
    <div class="rb-about-container">
        <!-- Image & Badge Column -->
        <div class="rb-about-img-wrap">
            <img src="<?php echo asset('uploads/img/about-left-image.jpg'); ?>" alt="Red Brigade Lucknow Impact">
            <div class="rb-about-badge">
                <span class="year">10+</span>
                <span class="text">Years of<br>Impact</span>
            </div>
        </div>

        <!-- Overlapping Content Card -->
        <div class="rb-about-content-box">
            <span class="rb-about-kicker">Who We Are</span>
            <h2 class="rb-about-heading">We Are <em class="rb-about-accent">Red Brigade Lucknow</em></h2>
            <p class="rb-about-desc">We fight against sexual violence and train women in self-defense through our specialized program, NISHATRA. Our commitment is to empower women and build a society with zero tolerance toward sexual violence.</p>
            
            <ul class="rb-about-grid">
                <li><i class="fas fa-check-circle"></i> Committed to F.L.O.W.</li>
                <li><i class="fas fa-check-circle"></i> Survivor-Led Leadership</li>
                <li><i class="fas fa-check-circle"></i> 700+ Street Plays</li>
                <li><i class="fas fa-check-circle"></i> 200+ Rehabilitated</li>
            </ul>

            <div class="btn-wrapper">
                <a href="<?php echo action('MainController@about')?>" class="rb-about-discover-btn">Discover More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End Premium Overlapping About Section -->

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
                <h2 class="rb-blog-title">Our <em class="rb-blog-title-accent">Works</em></h2>
                <p class="rb-blog-subtitle">Our works are focused on empowerment and amplifying women's voices against sexual violence.</p>
            </div>
            <a href="<?php echo action('MainController@journey')?>" class="rb-blog-view-all">
                Explore All Works
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>        <!-- Ongoing Works Grid -->
        <?php if (!empty($ongoingWorks) && count($ongoingWorks) > 0) { ?>
        <div class="rb-blog-grid">
            <?php foreach ($ongoingWorks as $idx => $item) { ?>
                <a href="<?php echo url('work/'.$item->slug); ?>" class="rb-blog-card-link" style="text-decoration: none; display: block; color: inherit;">
                    <article class="rb-blog-card" style="animation-delay: <?php echo ($idx * 0.08); ?>s;">
                        <div class="rb-blog-card-img">
                            <img src="<?php echo URL::asset('uploads/img/'.$item->image); ?>" alt="<?php echo $item->title; ?>" loading="lazy">
                            <span class="rb-blog-badge">Ongoing</span>
                        </div>
                        <div class="rb-blog-card-body">
                            <h4 class="rb-blog-card-title" style="<?php echo empty($item->tagline) && empty($item->collaboration) ? 'margin-bottom: 0;' : ''; ?>"><?php echo $item->title; ?></h4>
                            <?php if (!empty($item->tagline)) { ?>
                                <p class="rb-blog-card-excerpt" style="color: #E31E24; font-weight: 600; font-style: italic; margin-bottom: 8px;">"<?php echo $item->tagline; ?>"</p>
                            <?php } ?>
                            <?php if (!empty($item->collaboration)) { ?>
                                <div style="display: flex; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 10px; margin-top: 10px;">
                                    <span style="font-size: 11px; font-weight: 700; color: #7f8da3; text-transform: uppercase; letter-spacing: 0.5px; margin-right: 6px;">In Collaboration With:</span>
                                    <strong style="color: #273247; font-size: 13px; font-weight: 700;"><?php echo $item->collaboration; ?></strong>
                                </div>
                            <?php } ?>
                        </div>
                    </article>
                </a>
            <?php } ?>
        </div>
        <?php } ?>

        <!-- Bottom CTA -->
        <div class="rb-blog-bottom-cta">
            <a href="<?php echo action('MainController@journey'); ?>" class="rb-blog-explore-btn">
                <span>Explore All Works</span>
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
            padding: 60px 0 30px;
        }

        .rb-blogs-modern .container {
            width: 90% !important;
            padding-left: 15px;
            padding-right: 15px;
        }

        .rb-blog-header {
            flex-direction: row !important;
            align-items: center !important;
            justify-content: space-between !important;
            margin-bottom: 20px;
        }

        .rb-blog-title {
            font-size: 30px !important;
        }

        .rb-blog-subtitle {
            font-size: 14px !important;
            margin-top: 6px !important;
        }

        .rb-blog-view-all {
            display: none !important;
        }

        /* Swipeable Carousel Grid Layout */
        .rb-blog-grid {
            display: flex !important;
            overflow-x: auto !important;
            scroll-snap-type: x mandatory !important;
            gap: 16px !important;
            padding: 10px 5px 25px !important;
            margin: 0 -20px !important; /* Bleed to screen edge */
            padding-left: 20px !important;
            padding-right: 20px !important;
            scrollbar-width: none !important; /* Firefox */
        }

        .rb-blog-grid::-webkit-scrollbar {
            display: none !important; /* Safari/Chrome */
        }

        .rb-blog-card-link {
            flex: 0 0 80% !important; /* Show 80% of card width for peek effect */
            scroll-snap-align: start !important;
        }

        .rb-blog-card {
            box-shadow: 0 8px 20px rgba(26, 39, 59, 0.08) !important;
        }

        .rb-blog-card-img {
            height: 200px !important; /* Compact image height on mobile */
        }

        .rb-blog-card-title {
            font-size: 17px !important;
            line-height: 1.3 !important;
        }

        .rb-blog-bottom-cta {
            margin-top: 15px !important;
        }
    }
</style>
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
            font-size: 30px;
            margin-bottom: 25px;
        }
        .rb-testimonial-quote-box {
            padding: 40px 24px 30px;
            border-radius: 12px !important;
            box-shadow: 0 15px 35px rgba(22, 35, 56, 0.05);
        }
        .rb-quote-icon {
            left: 20px;
            top: -20px;
            width: 45px;
            height: 45px;
        }
        .rb-testimonial-text {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 24px;
        }
        .rb-testimonial-author {
            flex-direction: row; /* Horizontal author alignment is cleaner */
            text-align: left;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        .rb-testimonial-author-img {
            width: 55px;
            height: 55px;
        }
        .rb-testimonial-author-info h4 {
            font-size: 16px;
        }
        .rb-testimonial-author-info p {
            font-size: 12px;
        }
    }

    /* Minimal Join Us Section */
    .rb-join-minimal {
        padding: 100px 0;
        background: #fff;
        text-align: center;
        border-top: 1px solid #f1f5f9;
    }
    .rb-join-minimal .rb-join-kicker {
        color: #E31E24;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 13px;
        margin-bottom: 15px;
        display: block;
    }
    .rb-join-minimal h2 {
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        color: #1f2f46;
        margin-bottom: 25px;
        font-weight: 700;
    }
    .rb-join-minimal p {
        font-size: 19px;
        color: #64748b;
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }
    .rb-join-minimal .rb-join-btns {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    .rb-join-minimal .rb-btn {
        padding: 15px 40px;
        font-size: 15px;
        font-weight: 700;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .rb-join-minimal .rb-btn.primary {
        background: #E31E24;
        color: #fff;
        border: 2px solid #E31E24;
    }
    .rb-join-minimal .rb-btn.primary:hover {
        background: #1f2f46;
        border-color: #1f2f46;
    }
    .rb-join-minimal .rb-btn.secondary {
        background: transparent;
        color: #1f2f46;
        border: 2px solid #1f2f46;
    }
    .rb-join-minimal .rb-btn.secondary:hover {
        background: #1f2f46;
        color: #fff;
    }

    @media (max-width: 767px) {
        .rb-join-minimal { padding: 70px 0; }
        .rb-join-minimal h2 { font-size: 32px; }
        .rb-join-minimal p { font-size: 17px; }
        .rb-join-minimal .rb-join-btns { flex-direction: column; padding: 0 20px; }
    }
</style>

<section class="rb-testimonial-modern" id="testimonial-section">
    <div class="container">
        <div class="rb-testimonial-wrapper">
            <h2 class="rb-testimonial-heading">Appreciation About Our <em class="rb-testimonial-accent">Work</em></h2>
            
            <div class="rb-testimonial-quote-box">
                <svg class="rb-quote-icon" width="60" height="60" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 21L16.411 14.122C16.634 13.435 16.749 12.721 16.749 11.996V3H23V11.996C23 16.969 19.388 21 14.017 21ZM5.017 21L7.411 14.122C7.634 13.435 7.749 12.721 7.749 11.996V3H14V11.996C14 16.969 10.388 21 5.017 21Z"/></svg>
                <p class="rb-testimonial-text">"Red Brigade Lucknow has been at the forefront of empowering women and building a society with zero tolerance toward sexual violence. Our mission is to create fearless lives for women, and every step we take is a step toward a safer, more equitable world."</p>
                <div class="rb-testimonial-author">
                    <div class="rb-testimonial-author-img">
                        <?php $testimonialImage = 'uploads/testimonial/sunshine-testimonial-176.JPG'; ?>
                        <img src="<?php echo asset($testimonialImage); ?>" alt="Usha Vishwakarma">
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
<section class="rb-join-minimal">
    <div class="container">
        <span class="rb-join-kicker">Take Action</span>
        <h2>Become part of the movement</h2>
        <p>Support our mission to achieve <strong>F.L.O.W. (Fearless Life of Women)</strong>. Every contribution helps us build a world where women live with dignity and courage.</p>
        <div class="rb-join-btns">
            <a href="<?php echo action('MainController@contact')?>" class="rb-btn primary">Join Now</a>
            <a href="<?php echo action('MainController@donate')?>" class="rb-btn secondary">Donate</a>
        </div>
    </div>
</section>

@include('includes.footer')

</div>