@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-event-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-event-page h1, .rb-event-page h2, .rb-event-page h3, .rb-event-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}

/* Consistent Container Width (90%) */
.rb-event-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-event-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-event-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-694.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-event-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-event-hero .container { position: relative; z-index: 2; }
.rb-event-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-event-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Work Listing Section */
.rb-event-section {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-event-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}
.rb-event-card {
    background: #fff;
    border: 1px solid #eef2f6;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.rb-event-card:hover {
    transform: translateY(-8px);
    border-color: #E31E24;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
}
.rb-event-thumb {
    display: block;
    aspect-ratio: 4/3;
    overflow: hidden;
    position: relative;
    background: #111a2b;
}
.rb-event-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.rb-event-card:hover .rb-event-thumb img {
    transform: scale(1.05);
}
.rb-event-content {
    padding: 30px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.rb-event-date {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.rb-event-title {
    font-size: 22px;
    color: #1f2f46;
    margin-bottom: 15px;
    line-height: 1.4;
}
.rb-event-excerpt {
    font-size: 15px;
    color: #4a5568;
    margin-bottom: 25px;
    flex-grow: 1;
}
.rb-read-more {
    font-size: 14px;
    font-weight: 700;
    color: #E31E24;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
}
.rb-read-more:hover {
    color: #1f2f46;
}

@media (max-width: 1100px) {
    .rb-event-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-event-hero h1 { font-size: 42px; }
    .rb-event-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-event-page">
    <!-- Hero Section -->
    <section class="rb-event-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Legacy of Impact</span>
            <h1>Previous Work</h1>
            <p>Explore the history of our workshops, campaigns, and community interventions across India.</p>
        </div>
    </section>

    <!-- Work Listing -->
    <section class="rb-event-section">
        <div class="container">
            <div class="rb-event-grid">
                <?php if(!empty($allevent)) { foreach($allevent as $item) { ?>
                    <article class="rb-event-card">
                        <?php 
                            $imgPath = !empty($item->image) ? 'uploads/news/'.trim($item->image) : 'uploads/img/logo.png';
                            $hasText = !empty(trim($item->name)) || !empty(trim(strip_tags($item->description)));
                        ?>
                        <div class="rb-event-thumb">
                            <img src="<?php echo URL::asset($imgPath);?>" alt="{{ $item->name }}" loading="lazy">
                        </div>
                        <?php if ($hasText) { ?>
                        <div class="rb-event-content">
                            <?php if (!empty($item->date) || !empty($item->created_at)) { ?>
                                <span class="rb-event-date"><?php echo ($item->type == 'blog') ? date('F d, Y', strtotime($item->created_at)) : $item->date; ?></span>
                            <?php } ?>
                            <?php if (!empty(trim($item->name))) { ?>
                                <h3 class="rb-event-title" style="color: #1f2f46; font-weight: 700;"><?php echo ucfirst($item->name); ?></h3>
                            <?php } ?>
                            <?php if (!empty(trim(strip_tags($item->description)))) { ?>
                                <div class="rb-event-excerpt" style="margin-bottom: 0;">
                                    <?php echo substr(strip_tags($item->description), 0, 120); ?>...
                                </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </article>
                <?php }} else { ?>
                    <div style="grid-column: 1/-1; text-align: center; padding: 100px 0;">
                        <i class="fas fa-history" style="font-size: 48px; color: #cbd5e1; margin-bottom: 20px;"></i>
                        <h3 style="color: #64748b;">No previous work found.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="rb-event-section" style="padding-top: 0; background: #fff;">
        <div class="container text-center">
            <div style="background: #1f2f46; padding: 60px; color: #fff; border: 1px solid #eef2f6;">
                <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">Our Ongoing Mission</h2>
                <p style="color: #e2e8f0; font-size: 18px; max-width: 700px; margin: 0 auto 40px;">Every event we've held is a step toward a world free from violence. See how we are continuing this journey.</p>
                <a href="<?php echo action('MainController@about'); ?>" class="rb-btn" style="display: inline-block; padding: 14px 40px; background: #E31E24; color: #fff; font-weight: 700; border-radius: 4px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#fff'; this.style.color='#1f2f46'" onmouseout="this.style.backgroundColor='#E31E24'; this.style.color='#fff'">Learn About Our Story</a>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')
