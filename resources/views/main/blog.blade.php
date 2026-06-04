@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-work-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-work-page h1, .rb-work-page h2, .rb-work-page h3, .rb-work-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}

/* Consistent Container Width (90%) */
.rb-work-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-work-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-work-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-144.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-work-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-work-hero .container { position: relative; z-index: 2; }
.rb-work-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-work-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
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

/* Mission Section (Cleaned up version of the old about area) */
.rb-mission-overview {
    padding: 100px 0;
    background: #fff;
}
.rb-mission-grid {
    display: flex;
    align-items: center;
    gap: 60px;
}
.rb-mission-media {
    flex: 1;
    position: relative;
    height: 500px;
    background: url('<?php echo URL::asset("uploads/img/about-left-image.jpg"); ?>') no-repeat center center/cover;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.rb-mission-content {
    flex: 1;
}
.rb-mission-content h2 {
    font-size: 42px;
    margin-bottom: 25px;
    line-height: 1.1;
}
.rb-mission-content .lead {
    font-size: 20px;
    color: #1f2f46;
    font-weight: 600;
    margin-bottom: 20px;
}
.rb-checklist {
    list-style: none;
    padding: 0;
    margin: 30px 0;
}
.rb-checklist li {
    margin-bottom: 15px;
    padding-left: 30px;
    position: relative;
    font-size: 16px;
    color: #4a5568;
}
.rb-checklist li i {
    position: absolute;
    left: 0;
    top: 4px;
    color: #e65a32;
}

/* Secondary Content */
.rb-work-details {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-details-card {
    background: #fff;
    padding: 50px;
    border-radius: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.rb-details-card h3 {
    font-size: 32px;
    color: #e65a32;
    margin-bottom: 20px;
}
.rb-details-card p {
    font-size: 18px;
    color: #4a5568;
    margin-bottom: 30px;
}

/* CTA */
.rb-cta {
    padding: 100px 0;
    text-align: center;
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

@media (max-width: 991px) {
    .rb-mission-grid { flex-direction: column; }
    .rb-mission-media { width: 100%; height: 350px; }
}
@media (max-width: 768px) {
    .rb-work-hero h1 { font-size: 42px; }
    .rb-mission-content h2 { font-size: 32px; }
    .rb-details-card { padding: 30px; }
}
</style>

<div class="rb-work-page">
    <!-- Hero Section -->
    <section class="rb-work-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Action & Impact</span>
            <h1>Our Work</h1>
            <p>Advocating for justice, providing rehabilitation, and empowering survivors through sustained action.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="rb-mission-overview">
        <div class="container">
            <div class="rb-mission-grid">
                <div class="rb-mission-media"></div>
                <div class="rb-mission-content">
                    <span class="rb-kicker">Core Strategy</span>
                    <h2>We Are Red Brigade Lucknow</h2>
                    <p class="lead">Fighting against sexual violence and training thousands in self-defense through NISHATRA.</p>
                    
                    <ul class="rb-checklist">
                        <li><i class="fas fa-check-circle"></i> <strong>Raising Voice:</strong> Performed over 700 street plays and 225 seminars to engage institutions.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Leadership:</strong> Creating fearless feminist leadership among survivors.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Survivor Support:</strong> Rehabilitated more than 200 survivors, including 5 rape victims.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Social Change:</strong> Mobilizing National Women’s Day and highlighting women's roles in history.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Empowerment:</strong> Skill development of 300+ women for economic self-sufficiency.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Content -->
    <section class="rb-work-details">
        <div class="container">
            <div class="rb-details-card">
                <h3>Our Journey</h3>
                <p>The initiative was started by Usha Vishwakarma along with a group of 15 young women—most of whom are sexual violence survivors. Based in Madiyaon, Lucknow, they formed Red Brigade in 2011 to reclaim their dignity and safety.</p>

                <h3 style="margin-top: 40px;">NISHASTRA - The Shield of Courage</h3>
                <p>“NISHASTRA” (New Instrument against Sexual Harassment and Stand Against Rape Aggression) is a blend of various self-defense techniques specifically designed for real-world scenarios faced by survivors. To date, we have trained <strong>over 1,50,000 girls and women</strong> across 7 states.</p>

                <div style="margin-top: 40px;">
                    <a href="<?php echo action('MainController@ourworkpdf')?>" class="rb-btn">View Full Report (PDF)</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="rb-cta">
        <div class="container">
            <h2 style="font-size: 42px; margin-bottom: 20px;">Support Our Work</h2>
            <p style="font-size: 18px; color: #4a5568; max-width: 600px; margin: 0 auto 40px;">Every contribution helps us reach more girls and provide better support to survivors. Stand with the Red Brigade today.</p>
            <a href="<?php echo action('MainController@donate'); ?>" class="rb-btn">Donate Now</a>
        </div>
    </section>
</div>

@include('includes.footer')
