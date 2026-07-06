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

/* Skills Section */
.rb-skills-section {
    padding: 100px 0;
    background: #fff;
}
.rb-skills-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}
.rb-skill-card {
    background: #f8fafc;
    padding: 40px 30px;
    border-radius: 16px;
    text-align: center;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.rb-skill-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    border-color: #E31E24;
}
.rb-skill-icon {
    width: 70px;
    height: 70px;
    background: #fff;
    color: #E31E24;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin: 0 auto 25px;
    box-shadow: 0 10px 20px rgba(227, 30, 36, 0.1);
}
.rb-skill-card h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #1f2f46;
}
.rb-skill-card p {
    font-size: 16px;
    color: #4a5568;
    margin: 0;
}

@media (max-width: 991px) {
    .rb-mission-grid { flex-direction: column; }
    .rb-gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .rb-about-hero { padding: 150px 0 100px; }
    .rb-video-wrapper { flex-direction: column; padding: 40px; text-align: center; }
    .rb-video-thumbnail-container { width: 100%; }
}

/* Impact Section - Ethical Commitments Style */
.rb-impact-section {
    padding: 100px 0;
    background: #1f2f46;
    color: #fff;
    margin-bottom: 80px;
}
.rb-impact-section h2 {
    color: #fff;
    font-size: 42px;
    margin-bottom: 20px;
    text-align: center;
}
.rb-impact-section .rb-lead {
    color: #cbd5e0;
    text-align: center;
    font-size: 20px;
    margin-bottom: 60px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}
.rb-impact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}
.rb-impact-card h4 {
    color: #E31E24;
    font-size: 18px;
    margin-bottom: 12px;
    display: flex;
    align-items: flex-start;
}
.rb-impact-card h4 i {
    margin-right: 10px;
    margin-top: 4px;
    font-size: 16px;
}
.rb-impact-card p {
    color: #cbd5e0;
    font-size: 15px;
    line-height: 1.6;
}
@media (max-width: 1199px) {
    .rb-impact-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
    .rb-impact-grid { grid-template-columns: 1fr; }
    .rb-impact-section h2 { font-size: 32px; }
}
</style>

<div class="rb-about-page">
    <!-- Hero Section -->
    <section class="rb-about-hero">
        <div class="container">
            <h1>ABOUT US</h1>
            <p>WE ARE RED BRIGADE LUCKNOW</p>
        </div>
    </section>

    <!-- Mission & Origins -->
    <section class="rb-mission-section">
        <div class="container">
            <div class="rb-mission-grid">
                <div class="rb-mission-images">
                    <img src="<?php echo URL::asset('uploads/slider/prev_work_1783160021_55.jpeg');?>" alt="Red Brigade Action" class="img-tall">
                    <img src="<?php echo URL::asset('uploads/img/about-left-image.jpg');?>" alt="Red Brigade Founder">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-201.png');?>" alt="Red Brigade Team">
                </div>
                <div class="rb-mission-text">
                    <h2>The Courage to Fight Back</h2>
                    <p class="rb-lead-text">Red Brigade Lucknow is a non-profit organization dedicated to the empowerment of women and girls through self-defense training and awareness programs.</p>
                    <p>Founded by Usha Vishwakarma, we aim to create a society where women can live without fear. Our primary initiative, NISHATRA, has trained over 3,00,000 women in self-defense, giving them the tools and confidence to protect themselves and stand up against sexual violence.</p>
                    <blockquote class="rb-mission-quote">
                        "Empowerment starts with safety and dignity. We believe every woman has the right to live without fear."
                    </blockquote>
                    <p>We combine direct action with community education to dismantle the culture of violence. Through dedicated self-defense training, immersive street plays, and unwavering solidarity, we are actively reclaiming our narrative and creating a safer world for all.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact & Story Section -->
    <section class="rb-impact-section">
        <div class="container">
            <h2>WE ARE RED BRIGADE LUCKNOW</h2>
            <p class="rb-lead">A Survivor-Led Movement Building a Fearless Life of Women (FLOW)</p>
            
            <div class="rb-impact-grid">
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Founded by Survivors</h4>
                    <p>Founded in 2011 by Usha Vishwakarma and 15 adolescent girls, Red Brigade Lucknow has grown into a nationally recognized survivor-led movement working towards a society with Zero Tolerance towards Sexual Violence.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Leadership Transformation</h4>
                    <p>Transforming Victims into Survivors, Survivors into Leaders, and Leaders into Agents of Social Change through self-defense, self-image building, justice, education, leadership, and economic empowerment.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> NISHASTRA Impact</h4>
                    <p>Trained more than 3,00,000 women and girls through NISHASTRA (New Instrument against Sexual Harassment and Stand Against Rape Aggression), a survivor-informed self-defense model developed from real-life experiences of women.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Grassroots Reach</h4>
                    <p>Built a grassroots movement spanning 20+ States, 500+ Villages, and 500+ Educational Institutions including schools and colleges, empowering women and girls through collective action and leadership.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Powerful Network</h4>
                    <p>Developed a strong network of trainers, volunteers, survivors, educators, social activists, legal professionals, and community leaders working together to create safer communities for women.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Comprehensive Support</h4>
                    <p>Supported and rehabilitated more than 200 survivors of sexual violence, domestic abuse, harassment, and gender-based violence through counseling, legal aid, rehabilitation, education support, and access to justice.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Creative Awareness</h4>
                    <p>Raised a powerful collective voice against sexual violence through more than 700 Street Plays (Nukkad Natak), awareness campaigns, public mobilizations, community dialogues, and advocacy initiatives.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Education & Sensitization</h4>
                    <p>Conducted more than 2,000 seminars, workshops, self-defense training sessions, gender sensitization programs, and leadership development initiatives across educational institutions and communities.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Community Outreach</h4>
                    <p>Impacted more than 20,000 lives through Bal Manch and community-based educational initiatives, supporting children and young women from marginalized communities.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Sustained Action</h4>
                    <p>Promoted educational empowerment, women’s leadership, and community participation through programs such as 100 Days–100 Schools, 100 Days–100 Villages, Mission Shakti, Sashakt Kishori, Hinsa Mukt Jeevan, Veerangana Vahini, and National Women’s Day campaigns.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> National Women's Day</h4>
                    <p>Revived National Women’s Day as a people’s movement and promoted awareness about India’s women freedom fighters, women warriors, and contemporary women leaders to strengthen self-image and leadership among young women.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Economic Self-Reliance</h4>
                    <p>Advanced economic self-reliance through skill development, entrepreneurship support, vocational training, and livelihood initiatives, enabling women to achieve financial independence and dignity.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> Humanitarian Support</h4>
                    <p>Extended humanitarian support during times of crisis through relief distribution, community outreach, nutrition support, and assistance to vulnerable families.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> National Recognition</h4>
                    <p>Recognized nationally and internationally for its pioneering work in women’s empowerment, survivor leadership, self-defense innovation, and grassroots social transformation.</p>
                </div>
                <div class="rb-impact-card">
                    <h4><i class="fas fa-check"></i> The Vision of FLOW</h4>
                    <p>Creating a Fearless Life of Women (FLOW) through Courage, Leadership, Equality, Justice, Dignity, and Collective Action.</p>
                </div>
            </div>
        </div>
    </section>


</div>

@include('includes.footer')