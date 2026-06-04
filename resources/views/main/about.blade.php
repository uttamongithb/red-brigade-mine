@include('includes.header')

<style>
/* Reset & Base */
.rb-about-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
}
.rb-about-page h1, .rb-about-page h2, .rb-about-page h3, .rb-about-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}
.rb-about-page img { max-width: 100%; height: auto; display: block; }

/* Match Homepage Container Width */
.rb-about-page .container {
    width: 90%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}
@media (max-width: 767px) {
    .rb-about-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Hero Section */
.rb-about-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-892.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-about-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-about-hero .container { position: relative; z-index: 2; }
.rb-about-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-about-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

/* Image + Text Block (Mission) */
.rb-mission-section {
    padding: 100px 0;
    background: #fff;
}
.rb-mission-grid {
    display: flex;
    align-items: flex-start;
    gap: 60px;
}
.rb-mission-images {
    flex: 1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.rb-mission-images img {
    border-radius: 12px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.rb-mission-images .img-tall {
    grid-row: span 2;
}
.rb-mission-text {
    flex: 1;
}
.rb-kicker { 
    color: #e65a32; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}
.rb-mission-text h2 {
    font-size: 48px;
    margin-bottom: 30px;
    line-height: 1.1;
}
.rb-mission-text p {
    font-size: 18px;
    color: #4a5568;
    margin-bottom: 20px;
}

/* Video Section (Modernized & Clean) */
.rb-video-section {
    padding: 100px 0;
    background: #fff;
}
.rb-video-wrapper {
    background: #f8fafc;
    border-radius: 20px;
    padding: 60px;
    display: flex;
    align-items: flex-start;
    gap: 60px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
}
.rb-video-text {
    flex: 1;
}
.rb-video-text h2 {
    font-size: 42px;
    color: #1f2f46;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}
.rb-video-text p {
    font-size: 18px;
    color: #4a5568;
    margin-bottom: 0;
    line-height: 1.6;
}
.rb-video-thumbnail-container {
    flex: 1;
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    aspect-ratio: 16/9;
}
.rb-video-thumbnail-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}
.rb-video-thumbnail-container:hover img {
    transform: scale(1.05);
}
.rb-video-thumbnail-container::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(31, 47, 70, 0.2);
    transition: background 0.3s ease;
}
.rb-video-thumbnail-container:hover::after {
    background: rgba(31, 47, 70, 0.3);
}
.rb-video-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: #e65a32;
    color: #fff;
    border-radius: 50%;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 0 12px rgba(230, 90, 50, 0.3);
    transition: transform 0.3s, background 0.3s, box-shadow 0.3s;
    text-decoration: none;
    z-index: 2;
}
.rb-video-btn:hover {
    transform: translate(-50%, -50%) scale(1.1);
    background: #1f2f46;
    color: #fff;
    box-shadow: 0 0 0 12px rgba(31, 47, 70, 0.3);
}

/* Gallery / Approach */
.rb-gallery-section {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-gallery-header {
    text-align: center;
    margin-bottom: 60px;
}
.rb-gallery-header h2 {
    font-size: 46px;
    color: #1f2f46;
}
.rb-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.rb-gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/5;
}
.rb-gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 30px;
    color: #fff;
}
.rb-gallery-item:hover img {
    transform: scale(1.05);
}
.rb-gallery-overlay h4 {
    color: #fff;
    font-size: 24px;
    margin-bottom: 10px;
}
.rb-gallery-overlay p {
    font-size: 15px;
    color: rgba(255,255,255,0.8);
    margin: 0;
}

/* Join Section */
.rb-join-section {
    padding: 100px 0;
    text-align: center;
    background: #fff;
}
.rb-join-section h2 {
    font-size: 42px;
    margin-bottom: 20px;
}
.rb-join-section p {
    font-size: 18px;
    color: #4a5568;
    max-width: 600px;
    margin: 0 auto 40px;
}
.rb-btn {
    display: inline-block;
    padding: 15px 35px;
    background: #e65a32;
    color: #fff;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: 0.3s;
}
.rb-btn:hover {
    background: #1f2f46;
    color: #fff;
}

@media (max-width: 991px) {
    .rb-mission-grid { flex-direction: column; }
    .rb-gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .rb-about-hero { padding: 150px 0 100px; }
    .rb-video-wrapper { flex-direction: column; padding: 40px; text-align: center; }
    .rb-video-thumbnail-container { width: 100%; }
}
@media (max-width: 767px) {
    .rb-gallery-grid { grid-template-columns: 1fr; }
    .rb-about-hero h1 { font-size: 42px; }
    .rb-mission-text h2 { font-size: 36px; }
    .rb-mission-images { grid-template-columns: 1fr; }
    .rb-mission-images .img-tall { grid-row: auto; }
    .rb-video-wrapper { padding: 30px 20px; }
}
.rb-lead-text { font-size: 22px; font-family: 'Playfair Display', serif; color: #1f2f46; margin-bottom: 20px; line-height: 1.4; }
.rb-mission-quote { font-size: 20px; font-style: italic; color: #e65a32; border-left: 4px solid #e65a32; padding-left: 20px; margin: 30px 0; font-family: 'Playfair Display', serif; line-height: 1.6; }
.rb-mission-box { background: #f8fafc; padding: 25px; border-radius: 12px; font-size: 16px; color: #1f2f46; border: 1px solid #e2e8f0; line-height: 1.7; margin-top: 30px; }
.rb-mission-box strong { color: #e65a32; font-size: 18px; display: block; margin-bottom: 8px; font-family: 'Playfair Display', serif; }
</style>

<div class="rb-about-page">
    <!-- Hero Section -->
    <section class="rb-about-hero">
        <div class="container">
            <h1>Our Story</h1>
            <p>Empowering women, fighting sexual violence, and building a fearless society.</p>
        </div>
    </section>

    <!-- Mission & Origins -->
    <section class="rb-mission-section">
        <div class="container">
            <div class="rb-mission-grid">
                <div class="rb-mission-images">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-437.png');?>" alt="Red Brigade Action" class="img-tall">
                    <img src="<?php echo URL::asset('uploads/img/about-left-image.jpg');?>" alt="Red Brigade Founder">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-201.png');?>" alt="Red Brigade Team">
                </div>
                <div class="rb-mission-text">
                    <span class="rb-kicker">Who We Are</span>
                    <h2>The Courage to Fight Back</h2>
                    <p class="rb-lead-text">In 2011, Usha Vishwakarma, along with a group of 15 girls—most of whom were survivors of sexual assault—made a collective decision: they would no longer live in fear.</p>
                    <p>Perturbed by her own harrowing experiences and recognizing the vulnerability of young women in her community, Usha realized that while education is a fundamental right, it simply wasn't enough. Women needed the tangible power to physically and mentally defend themselves against violence.</p>
                    <blockquote class="rb-mission-quote">
                        "We refused to be defined by what happened to us. We chose to reclaim our streets, our bodies, and our right to live fearlessly."
                    </blockquote>
                    <p>Driven by this profound realization, she formed <strong>Red Brigade Lucknow</strong>. What started in a small room with a few determined individuals has now evolved into a massive grassroots movement. Today, our reach spans hundreds of villages and cities across India, actively transforming the narrative from victimhood to proactive empowerment.</p>
                    <div class="rb-mission-box">
                        <strong>Our Mission:</strong> To continuously empower women and girls through rigorous self-defense education (Nishatra), comprehensive survivor rehabilitation, and relentless community mobilization, ultimately forging a society where every woman lives with complete dignity, respect, and safety.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Break -->
    <section class="rb-video-section">
        <div class="container">
            <div class="rb-video-wrapper">
                <div class="rb-video-text">
                    <span class="rb-kicker">Discover</span>
                    <h2>Watch Our Journey</h2>
                    <p class="rb-lead-text">Witness the profound transformation from fear to unshakeable courage.</p>
                    <p>See the impact of our work firsthand through the powerful stories of the women who courageously fight back against sexual violence. Our journey is paved with the resilience of survivors who have stepped out of the shadows to become formidable leaders in their own communities.</p>
                    <p style="margin-top: 15px;">Through dedicated self-defense training, immersive street plays, and unwavering solidarity, we are actively reclaiming our narrative. Hit play to experience the raw energy, the determination, and the unapologetic strength of the Red Brigade movement in action.</p>
                </div>
                <div class="rb-video-thumbnail-container">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-694.png'); ?>" alt="Watch Video">
                    <a href="https://www.youtube.com/watch?v=CzMLuLwuZ00" target="_blank" class="rb-video-btn video mfp-iframe">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Visual Approach (Gallery) -->
    <section class="rb-gallery-section">
        <div class="container">
            <div class="rb-gallery-header">
                <span class="rb-kicker">Our Impact</span>
                <h2>A Multi-Dimensional Strategy</h2>
            </div>
            <div class="rb-gallery-grid">
                <div class="rb-gallery-item">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-133.png');?>" alt="Self Defense">
                    <div class="rb-gallery-overlay">
                        <h4>Self-Defense</h4>
                        <p>Empowering women with critical, real-world self-defense skills (Nishatra).</p>
                    </div>
                </div>
                <div class="rb-gallery-item">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-144.png');?>" alt="Feminist Leadership">
                    <div class="rb-gallery-overlay">
                        <h4>Leadership</h4>
                        <p>Creating the next generation of fearless feminist leadership.</p>
                    </div>
                </div>
                <div class="rb-gallery-item">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-151.png');?>" alt="Activism">
                    <div class="rb-gallery-overlay">
                        <h4>Activism</h4>
                        <p>Building widespread social movements to dismantle discrimination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="rb-join-section">
        <div class="container">
            <h2>Ready to Join the Movement?</h2>
            <p>You can be an active part of this movement to achieve F.L.O.W. (Fearless Life of Women). Stand with us to make a profound difference today.</p>
            <a href="<?php echo action('MainController@contact'); ?>" class="rb-btn">Get Involved</a>
        </div>
    </section>
</div>

@include('includes.footer')