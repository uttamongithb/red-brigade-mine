@include('includes.header')

<style>
/* Reset & Base - Consistent with About Page */
.rb-achievements-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-achievements-page h1, .rb-achievements-page h2, .rb-achievements-page h3, .rb-achievements-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}
.rb-achievements-page img { max-width: 100%; height: auto; display: block; }

/* Match Homepage/About Container Width */
.rb-achievements-page .container {
    width: 90%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}
@media (max-width: 767px) {
    .rb-achievements-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Hero Section */
.rb-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-272.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-hero .container { position: relative; z-index: 2; }
.rb-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

/* Kicker Style */
.rb-kicker { 
    color: #e65a32; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Featured Achievement Section */
.rb-featured-award {
    padding: 100px 0;
    background: #fff;
}
.rb-award-grid {
    display: flex;
    align-items: center;
    gap: 60px;
}
.rb-award-image {
    flex: 1;
    position: relative;
}
.rb-award-image img {
    border-radius: 12px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}
.rb-award-text {
    flex: 1;
}
.rb-award-text h2 {
    font-size: 42px;
    margin-bottom: 25px;
    line-height: 1.2;
}
.rb-award-text p {
    font-size: 18px;
    margin-bottom: 20px;
    color: #4a5568;
}

/* Awards Cards Grid */
.rb-awards-grid-section {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-section-header {
    text-align: center;
    margin-bottom: 60px;
}
.rb-section-header h2 {
    font-size: 46px;
    color: #1f2f46;
}
.rb-cards-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.rb-award-card {
    background: #fff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-bottom: 4px solid transparent;
    display: flex;
    flex-direction: column;
}
.rb-award-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-bottom-color: #e65a32;
}
.rb-award-icon {
    font-size: 40px;
    color: #e65a32;
    margin-bottom: 20px;
}
.rb-award-card h4 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #1f2f46;
}
.rb-award-card p {
    font-size: 16px;
    color: #5e6a7f;
    margin-bottom: 0;
}

/* International Impact Section */
.rb-intl-section {
    padding: 100px 0;
    background: #fff;
}
.rb-intl-wrapper {
    display: flex;
    align-items: center;
    gap: 60px;
    background: #1f2f46;
    border-radius: 24px;
    padding: 60px;
    color: #fff;
}
.rb-intl-text {
    flex: 1;
}
.rb-intl-text h2 {
    color: #fff;
    font-size: 42px;
    margin-bottom: 20px;
}
.rb-intl-text p {
    color: #cbd5e0;
    font-size: 18px;
}
.rb-intl-stats {
    flex: 1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}
.rb-stat-box {
    text-align: center;
    padding: 30px;
    background: rgba(255,255,255,0.05);
    border-radius: 16px;
}
.rb-stat-number {
    display: block;
    font-size: 48px;
    font-weight: 700;
    color: #ff8a00;
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}
.rb-stat-label {
    font-size: 16px;
    color: #e2e8f0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Media Presence */
.rb-media-section {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-media-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
}
.rb-media-item {
    display: flex;
    align-items: center;
    gap: 20px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}
.rb-media-logo {
    width: 60px;
    height: 60px;
    background: #f1f5f9;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #e65a32;
    font-size: 24px;
    flex-shrink: 0;
}
.rb-media-info h5 {
    margin: 0 0 5px;
    font-size: 18px;
    color: #1f2f46;
}
.rb-media-info p {
    margin: 0;
    font-size: 14px;
    color: #64748b;
}

/* CTA Section */
.rb-cta {
    padding: 100px 0;
    text-align: center;
    background: #fff;
}
.rb-cta h2 {
    font-size: 42px;
    margin-bottom: 20px;
}
.rb-cta p {
    font-size: 18px;
    color: #4a5568;
    max-width: 600px;
    margin: 0 auto 40px;
}
.rb-btn {
    display: inline-block;
    padding: 16px 40px;
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

/* Responsive */
@media (max-width: 1024px) {
    .rb-intl-wrapper { flex-direction: column; padding: 40px; text-align: center; }
    .rb-award-grid { flex-direction: column; text-align: center; }
    .rb-cards-container { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-hero h1 { font-size: 42px; }
    .rb-hero p { font-size: 18px; }
    .rb-cards-container { grid-template-columns: 1fr; }
    .rb-media-grid { grid-template-columns: 1fr; }
    .rb-intl-stats { grid-template-columns: 1fr; }
}
</style>

<div class="rb-achievements-page">
    <!-- Hero Section -->
    <section class="rb-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Honoring Our Journey</span>
            <h1>Our Achievements</h1>
            <p>Recognizing over a decade of relentless fight for women's dignity, safety, and empowerment.</p>
        </div>
    </section>

    <!-- Featured Award: Forbes -->
    <section class="rb-featured-award">
        <div class="container">
            <div class="rb-award-grid">
                <div class="rb-award-image">
                    <img src="<?php echo URL::asset('uploads/img/about-left-image.jpg');?>" alt="Usha Vishwakarma - Forbes India">
                </div>
                <div class="rb-award-text">
                    <span class="rb-kicker">Global Recognition</span>
                    <h2>Forbes India Self-Made Women 2020</h2>
                    <p>Usha Vishwakarma, the Founder and Chief Managing Trustee of Red Brigade Lucknow, was recognized by Forbes India Magazine as one of India’s Top 20 Women Achievers in 2020.</p>
                    <p>This prestigious inclusion honors her extraordinary journey from a survivor to a master trainer and leader, inspiring millions across the globe to stand up against sexual violence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Grid -->
    <section class="rb-awards-grid-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">National Honors</span>
                <h2>Prestigous Awards</h2>
            </div>
            <div class="rb-cards-container">
                <!-- Award 1 -->
                <div class="rb-award-card">
                    <div class="rb-award-icon"><i class="fas fa-medal"></i></div>
                    <h4>Rani Laxmi Bai Award</h4>
                    <p>Conferred by the Government of Uttar Pradesh for outstanding contribution to women's empowerment and bravery.</p>
                </div>
                <!-- Award 2 -->
                <div class="rb-award-card">
                    <div class="rb-award-icon"><i class="fas fa-award"></i></div>
                    <h4>100 Women Achievers</h4>
                    <p>Recognized as one of the "100 Women Achievers of India" by the Honourable President of India at Rashtrapati Bhavan.</p>
                </div>
                <!-- Award 3 -->
                <div class="rb-award-card">
                    <div class="rb-award-icon"><i class="fas fa-trophy"></i></div>
                    <h4>State Bravery Award</h4>
                    <p>Recognized multiple times for courageous interventions and pioneering self-defense training (Nishatra) for survivors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- International Impact -->
    <section class="rb-intl-section">
        <div class="container">
            <div class="rb-intl-wrapper">
                <div class="rb-intl-text">
                    <span class="rb-kicker" style="color: #ff8a00;">Global Presence</span>
                    <h2>International Impact</h2>
                    <p>Red Brigade Lucknow’s grassroots initiatives have resonated far beyond India, capturing the attention of activists, researchers, and media in more than fifty countries.</p>
                    <p>Our work has been the subject of numerous international documentaries and academic studies, highlighting the power of the "Red Brigade" model in transforming survivor lives.</p>
                </div>
                <div class="rb-intl-stats">
                    <div class="rb-stat-box">
                        <span class="rb-stat-number">50+</span>
                        <span class="rb-stat-label">Countries reached</span>
                    </div>
                    <div class="rb-stat-box">
                        <span class="rb-stat-number">12+</span>
                        <span class="rb-stat-label">Global Documentaries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Presence -->
    <section class="rb-media-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">Media & TV</span>
                <h2>As Seen On</h2>
            </div>
            <div class="rb-media-grid">
                <div class="rb-media-item">
                    <div class="rb-media-logo"><i class="fas fa-tv"></i></div>
                    <div class="rb-media-info">
                        <h5>Kaun Banega Crorepati</h5>
                        <p>Featured as a special guest on Sony TV's legendary show with Amitabh Bachchan.</p>
                    </div>
                </div>
                <div class="rb-media-item">
                    <div class="rb-media-logo"><i class="fas fa-video"></i></div>
                    <div class="rb-media-info">
                        <h5>Stree Shakti</h5>
                        <p>Indepth feature on Doordarshan highlighting the mission of Red Brigade.</p>
                    </div>
                </div>
                <div class="rb-media-item">
                    <div class="rb-media-logo"><i class="fas fa-broadcast-tower"></i></div>
                    <div class="rb-media-info">
                        <h5>No More Kamzor</h5>
                        <p>Empowerment special on Star Plus showcasing our self-defense techniques.</p>
                    </div>
                </div>
                <div class="rb-media-item">
                    <div class="rb-media-logo"><i class="fas fa-film"></i></div>
                    <div class="rb-media-info">
                        <h5>Savdhan India</h5>
                        <p>Recognized on Life OK for our proactive stance against crime and violence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="rb-cta">
        <div class="container">
            <h2>Stand With Us</h2>
            <p>Every achievement is a testament to the support of people like you. Join our movement and help us achieve a Fearless Life Of Women (F.L.O.W.).</p>
            <a href="<?php echo action('MainController@contact'); ?>" class="rb-btn">Join the Movement</a>
        </div>
    </section>
</div>

@include('includes.footer')
