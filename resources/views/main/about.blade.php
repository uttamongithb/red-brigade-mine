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
    color: #E31E24; 
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
    background: #E31E24;
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
    background: #E31E24;
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
.rb-mission-quote { font-size: 20px; font-style: italic; color: #E31E24; border-left: 4px solid #E31E24; padding-left: 20px; margin: 30px 0; font-family: 'Playfair Display', serif; line-height: 1.6; }
.rb-mission-box { background: #f8fafc; padding: 25px; border-radius: 12px; font-size: 16px; color: #1f2f46; border: 1px solid #e2e8f0; line-height: 1.7; margin-top: 30px; }
.rb-mission-box strong { color: #E31E24; font-size: 18px; display: block; margin-bottom: 8px; font-family: 'Playfair Display', serif; }
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
                    <p class="rb-lead-text">Red Brigade Lucknow is a non-profit organization dedicated to the empowerment of women and girls through self-defense training and awareness programs.</p>
                    <p>Founded by Usha Vishwakarma, we aim to create a society where women can live without fear. Our primary initiative, NISHATRA, has trained over 3,00,000 women in self-defense, giving them the tools and confidence to protect themselves and stand up against sexual violence.</p>
                    <blockquote class="rb-mission-quote">
                        "Empowerment starts with safety and dignity. We believe every woman has the right to live without fear."
                    </blockquote>
                    <p>We combine direct action with community education to dismantle the culture of violence. Through dedicated self-defense training, immersive street plays, and unwavering solidarity, we are actively reclaiming our narrative and creating a safer world for all.</p>
                    <div class="rb-mission-box">
                        <strong>Our Key Areas:</strong>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Self-Defense Training (NISHATRA)</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Survivor Support & Rehabilitation</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Awareness Through Street Plays (Nukkad Natak)</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Women Leadership & Advocacy</li>
                        </ul>
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
                    <span class="rb-kicker">Resilience</span>
                    <h2>A Rebuilt Life: Diya's Story</h2>
                    <p class="rb-lead-text">Rebuilding lives, not merely survived.</p>
                    <p>At 14, Diya survived an attempted rape in Mistripur, Lucknow, where the perpetrator had powerful connections and her complaint was initially refused registration. Red Brigade took up her case, provided shelter, and supported her through the entire legal process — travelling with her from Mistripur to Lucknow for every single court date. The perpetrator was imprisoned. Today, Diya is married and a mother — a life rebuilt, a testament to what collective support can achieve.</p>
                </div>
                <div class="rb-video-thumbnail-container">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-614.jpeg'); ?>" alt="Resilience Story">
                </div>
            </div>
        </div>
    </section>

    <!-- Veerangana Vahini -->
    <section class="rb-mission-section" style="background: #1f2f46; color: #fff; padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="rb-kicker" style="color: #E31E24;">The Next Chapter</span>
                    <h2 style="color: #fff; font-size: 48px; margin-bottom: 30px;">Veerangana Vahini</h2>
                    <p style="color: #cbd5e0; font-size: 18px;">Growing from the roots of Red Brigade, Veerangana Vahini is a new women's mass organisation launched on 13 February 2024 (National Women's Day) in Lucknow. It is a platform for women to organise across caste and religion, building a new cultural identity grounded in collective strength.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h3 style="color: #E31E24; font-size: 32px;">1,000</h3>
                            <p style="color: #fff; font-size: 14px;">Young women (Avg age 22) from 40 UP districts & 7 states at foundation.</p>
                        </div>
                        <div class="col-6">
                            <h3 style="color: #E31E24; font-size: 32px;">Vision</h3>
                            <p style="color: #fff; font-size: 14px;">10,000 active leaders and 10,00,000 members nationally within 5 years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rb-mission-box" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); color: #fff; margin-top: 0;">
                        <strong style="color: #E31E24;">The Road Ahead</strong>
                        <ul style="list-style: none; padding-left: 0; margin-top: 15px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> <strong>Feb 2026:</strong> First major national conference (10,000 girls) in Lucknow.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> <strong>Member-Led:</strong> Funded by members (min. Rs. 10/month general).</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> <strong>Leadership:</strong> Training from village to city for political consciousness.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> <strong>Non-Partisan:</strong> Not a political party, but a unified platform for voices.</li>
                        </ul>
                    </div>
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

    <!-- Key Campaigns -->
    <section class="rb-campaigns-section" style="padding: 100px 0; background: #fff;">
        <div class="container">
            <div class="rb-gallery-header" style="text-align: center; margin-bottom: 60px;">
                <span class="rb-kicker">Our Active Work</span>
                <h2 style="font-size: 46px; color: #1f2f46;">Flagship Campaigns</h2>
            </div>

            <div class="row">
                <!-- 100 Days 100 Schools / Villages -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>100 Days 100 Schools / 100 Days 100 Villages</strong>
                        <p style="margin-top: 15px;">These are intensive outreach campaigns in which the Red Brigade team travels to 100 schools or 100 villages within a 100-day period to deliver NISHASTRA training, awareness sessions, and community dialogues on sexual violence.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Reaching areas with limited institutional support.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Combining self-defense with history of women freedom fighters.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Challenging externally imposed self-doubt.</li>
                        </ul>
                    </div>
                </div>

                <!-- Raat Ka Ujala -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Raat Ka Ujala (Light of the Night)</strong>
                        <p style="margin-top: 15px;">Held annually from 16 to 29 September in memory of Nirbhaya, Raat Ka Ujala is a night-safety activism campaign. Red Brigade takes to the streets at night to reclaim public spaces for women — a powerful symbolic and practical demonstration of the right to move freely.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Night marches with candles and torches.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Street plays (Nukkad Natak) for public awareness.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Involving schools, colleges, and community groups.</li>
                        </ul>
                    </div>
                </div>

                <!-- 18 Days Activism -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>18 Days Activism — National Women's Day</strong>
                        <p style="margin-top: 15px;">Celebrating India's National Women's Day (13 February), Red Brigade organizes 18 continuous days of activism until 2 March (Sarojini Naidu's passing). This campaign revives the historical memory of women's leadership in India.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Annual Scooty Yatra across all blocks of Lucknow.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Padyatras (foot marches) connecting historical sites.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Women's leadership forums and cultural events.</li>
                        </ul>
                    </div>
                </div>

                <!-- Hinsa Mukt Jeevan -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Hinsa Mukt Jeevan (Violence-Free Life) — 12-Day Activism</strong>
                        <p style="margin-top: 15px;">Held annually from 21 September to 2 October, this 12-day campaign focuses on mobilising women and girls to pledge for violence-free living. This intensive period of activism transforms communities through collective action and survivor voices.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Large-scale community rallies and public demonstrations.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Powerfully moving survivor testimonials and stories of resilience.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Intensive workshops on legal rights and protection mechanisms.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Pledging ceremonies in schools and colleges across the state.</li>
                        </ul>
                    </div>
                </div>

                <!-- Fight Against 9 3 6 -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Fight Against 9 3 6</strong>
                        <p style="margin-top: 15px;">A targeted campaign addressing sexual harassment in public spaces. We use creative activism and community reporting to make neighborhoods safer for everyone.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Creative street-level activism and awareness.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Robust community reporting mechanisms for harassment.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Local advocacy for better lighting and safer public design.</li>
                        </ul>
                    </div>
                </div>

                <!-- Balmanch -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Balmanch — Education and Rehabilitation Centre</strong>
                        <p style="margin-top: 15px;">Based in Madiyaon, Lucknow, Balmanch is our community education centre. It serves as a learning space for children from marginalised communities and a rehabilitation centre for survivors.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Learning space for children from marginalized communities.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Empowerment hub: Victims becoming leaders like trainer Annu.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Coordinated by survivors who once studied at the centre.</li>
                        </ul>
                    </div>
                </div>

                <!-- Chikankari Empowerment -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Chikankari Women's Economic Empowerment</strong>
                        <p style="margin-top: 15px;">Working directly with the network of women in Lucknow's unorganised Chikankari sector to provide livelihood skill development and economic empowerment.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Livelihood skill development for marginalised women.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Support in negotiating better wages and understanding rights.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Building long-term financial independence for survivors.</li>
                        </ul>
                    </div>
                </div>

                <!-- Justice Access Support -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Justice Access Support</strong>
                        <p style="margin-top: 15px;">A dedicated team supporting survivors through the entire legal process—from filing an FIR to navigating court proceedings. We ensure no survivor faces the system alone.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> 200+ women supported in registering and prosecuting cases.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Successful convictions secured for survivors of sexual violence.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Comprehensive counselling and legal accompaniment.</li>
                        </ul>
                    </div>
                </div>

                <!-- Women Freedom Fighters Programme -->
                <div class="col-md-6 mb-5">
                    <div class="rb-mission-box" style="height: 100%; margin-top: 0;">
                        <strong>Women Freedom Fighters Research & Awareness</strong>
                        <p style="margin-top: 15px;">We have researched and documented approximately 250 unsung women freedom fighters of India's independence struggle (1857-1947), with a focus on 100 primary warriors.</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 10px;">
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Bringing unsung stories to life as living inspiration for today's girls.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Workshops, conferences, and foot marches celebrating women's history.</li>
                            <li><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 8px;"></i> Transforming self-identity through the power of historical memory.</li>
                        </ul>
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