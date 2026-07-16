@include('includes.header')

<style>
.rb-research-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-research-page h1, .rb-research-page h2, .rb-research-page h3, .rb-research-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}
.rb-research-page .container {
    width: 90%;
    max-width: none;
}

/* Hero Section */
.rb-research-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-379.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-research-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-research-hero .container { position: relative; z-index: 2; }
.rb-research-hero h1 { font-size: 64px; color: #fff; font-weight: 700; margin-bottom: 20px; }
.rb-research-hero p { font-size: 22px; max-width: 800px; margin: 0 auto; color: #e2e8f0; font-weight: 300; }

.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Intro Section */
.rb-research-intro {
    padding: 100px 0 60px;
    text-align: center;
}
.rb-research-intro h2 { font-size: 42px; margin-bottom: 25px; }
.rb-research-intro p { font-size: 18px; max-width: 900px; margin: 0 auto; color: #64748b; }

/* Horizontal Card Layout */
.rb-publication-section { padding: 60px 0 100px; background: #fff; }
.rb-research-card {
    display: flex;
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    margin-bottom: 50px;
    box-shadow: 0 15px 45px rgba(0,0,0,0.05);
    border: 1px solid #eef2f6;
    transition: transform 0.3s ease;
}
.rb-research-card:hover { transform: translateY(-10px); }
.rb-research-card.reverse { flex-direction: row-reverse; }

.rb-card-visual {
    width: 45%;
    position: relative;
    overflow: hidden;
}
.rb-card-visual img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-research-card:hover .rb-card-visual img { transform: scale(1.05); }

.rb-card-info {
    width: 55%;
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.rb-card-info h3 { font-size: 32px; margin-bottom: 20px; }
.rb-research-tag {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(227, 30, 36, 0.1);
    color: #E31E24;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.rb-research-meta-list {
    list-style: none;
    padding: 0;
    margin: 20px 0 30px;
}
.rb-research-meta-list li {
    margin-bottom: 12px;
    font-size: 15px;
}
.rb-research-meta-list li strong { color: #1f2f46; min-width: 120px; display: inline-block; }

/* Media Section */
.rb-media-section { padding: 100px 0; background: #f8fafc; }
.rb-media-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}
.rb-media-brand-card {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    border: 1px solid #eef2f6;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.rb-media-brand-card:hover { border-color: #E31E24; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
.rb-media-icon {
    width: 70px;
    height: 70px;
    background: #f8fafc;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #E31E24;
    margin-bottom: 20px;
}

/* Researcher Intent */
.rb-intent-section { padding: 100px 0; background: #fff; }
.rb-intent-box {
    background: #1f2f46;
    color: #fff;
    border-radius: 30px;
    padding: 80px;
    display: flex;
    gap: 60px;
    align-items: center;
}
.rb-intent-text { flex: 1; }
.rb-intent-text h2 { color: #fff; font-size: 42px; margin-bottom: 25px; }
.rb-intent-text p { color: #cbd5e0; font-size: 18px; margin-bottom: 30px; }
.rb-intent-list {
    flex: 1;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}
.rb-intent-item {
    background: rgba(255,255,255,0.05);
    padding: 25px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.1);
}
.rb-intent-item i { color: #E31E24; font-size: 20px; margin-bottom: 10px; display: block; }
.rb-intent-item span { font-size: 14px; font-weight: 600; line-height: 1.4; display: block; }

@media (max-width: 1200px) {
    .rb-card-info { padding: 40px; }
    .rb-intent-box { padding: 50px; flex-direction: column; }
}
@media (max-width: 991px) {
    .rb-research-card, .rb-research-card.reverse { flex-direction: column; }
    .rb-card-visual, .rb-card-info { width: 100%; }
    .rb-card-visual { height: 350px; }
    .rb-media-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-research-hero h1 { font-size: 42px; }
    .rb-media-grid { grid-template-columns: 1fr; }
    .rb-intent-list { grid-template-columns: 1fr; }
}
</style>

<div class="rb-research-page">
    <!-- Hero Section -->
    <section class="rb-research-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Evidence & Knowledge</span>
            <h1>Research & Publications</h1>
            <p>A site of knowledge production attracting global academic attention through our survivor-led impact model.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="rb-research-intro">
        <div class="container">
            <span class="rb-kicker">Knowledge Production</span>
            <h2>Grounding Activism in Research</h2>
            <p>Red Brigade Lucknow is not only a grassroots organisation — it is a site of knowledge production. Our model, NISHASTRA technique, and survivor-leadership approach have attracted serious academic attention from India and across the world.</p>
        </div>
    </section>

    <!-- Main Publications -->
    <section class="rb-publication-section">
        <div class="container">
            
            <!-- Azim Premji Card -->
            <div class="rb-research-card">
                <div class="rb-card-visual">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-133.png'); ?>" alt="Azim Premji University Study">
                </div>
                <div class="rb-card-info">
                    <span class="rb-research-tag">Academic Study</span>
                    <h3>Self Defense and Sexual Violence Prevention</h3>
                    <p>This landmark research provides the first empirical validation of what Red Brigade has demonstrated for over a decade: that prevention through training meaningfully reduces violence.</p>
                    <ul class="rb-research-meta-list">
                        <li><strong>Institution</strong> <span>Azim Premji University, India</span></li>
                        <li><strong>Key Finding</strong> <span>Lower rates of sexual violence in areas where NISHASTRA is prevalent.</span></li>
                        <li><strong>Significance</strong> <span>Primary evidence used for national self-defense policy advocacy.</span></li>
                    </ul>
                    <div class="rb-btn-wrap">
                        <a href="<?php echo URL::asset('azm.pdf'); ?>" target="_blank" class="rb-btn" style="font-size: 14px; padding: 12px 30px;">Read Full Report</a>
                    </div>
                </div>
            </div>

            <!-- Women in Red Card -->
            <div class="rb-research-card reverse">
                <div class="rb-card-visual">
                    <img src="<?php echo URL::asset('uploads/img/women_in_red.jpeg'); ?>" alt="Women in Red Book">
                </div>
                <div class="rb-card-info">
                    <span class="rb-research-tag">Published Book</span>
                    <h3>'Women in Red' — The Journey</h3>
                    <p>A deep narrative and visual documentation of Red Brigade's evolution, members, and the profound impact of our survivor-led movement.</p>
                    <ul class="rb-research-meta-list">
                        <li><strong>Author</strong> <span>Eva J.</span></li>
                        <li><strong>Publisher</strong> <span>Blurb</span></li>
                        <li><strong>Format</strong> <span>Visual & Narrative Documentation</span></li>
                    </ul>
                    <div class="rb-btn-wrap">
                        <a href="<?php echo URL::asset('uploads/Women_in_Red.pdf'); ?>" target="_blank" class="rb-btn" style="font-size: 14px; padding: 12px 30px;">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- A Celebration of Women Card -->
            <div class="rb-research-card">
                <div class="rb-card-visual">
                    <img src="<?php echo URL::asset('uploads/slider/Redbrigade-lucknow-report-947.jpeg'); ?>" alt="Academic Recognition">
                </div>
                <div class="rb-card-info">
                    <span class="rb-research-tag">International Profile</span>
                    <h3>A Celebration of Women</h3>
                    <p>Recognized on an international platform profiling global women leaders and documenting their contributions to societal change.</p>
                    <ul class="rb-research-meta-list">
                        <li><strong>Profile</strong> <span>Usha Vishwakarma — Woman of Action</span></li>
                        <li><strong>Date</strong> <span>October 2013</span></li>
                        <li><strong>Impact</strong> <span>First international academic/documentary recognition of RBL.</span></li>
                    </ul>
                    <div class="rb-btn-wrap">
                        <a href="https://acelebrationofwomen.org/2013/10/usha-vishwakarma-woman-of-action/" target="_blank" class="rb-btn" style="font-size: 14px; padding: 12px 30px;">Read Profile</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Researcher Intent Section -->
    <section class="rb-intent-section">
        <div class="container">
            <div class="rb-intent-box">
                <div class="rb-intent-text">
                    <span class="rb-kicker" style="color: #ff8a00;">Observation & Study</span>
                    <h2>A Rare Research Site</h2>
                    <p>Red Brigade represents a site where the boundary between 'beneficiary' and 'change agent' is deliberately dissolved. We welcome researchers from social work, gender studies, law, and public health.</p>
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact']); ?>" class="rb-btn">Academic Inquiry</a>
                </div>
                <div class="rb-intent-list">
                    <div class="rb-intent-item">
                        <i class="fas fa-search"></i>
                        <span>Documentation of NISHASTRA training sessions.</span>
                    </div>
                    <div class="rb-intent-item">
                        <i class="fas fa-file-medical"></i>
                        <span>Survivor agency and pathway to empowerment.</span>
                    </div>
                    <div class="rb-intent-item">
                        <i class="fas fa-users-cog"></i>
                        <span>Analysis of survivor-led organisational structures.</span>
                    </div>
                    <div class="rb-intent-item">
                        <i class="fas fa-balance-scale"></i>
                        <span>Theoretical exploration of feminist intersectionality.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Documentation Archive -->
    <section class="rb-media-section">
        <div class="container">
            <div class="text-center">
                <span class="rb-kicker">Public Record</span>
                <h2 style="font-size: 42px;">Media Documentation</h2>
                <p style="font-size: 18px; color: #64748b; margin-top: 15px;">Extensive documentation of our impact in national and international media over the years.</p>
            </div>

            <div class="rb-media-grid">
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-globe"></i></div>
                    <h4>CNN (2013)</h4>
                    <p>'Meet India's Red Brigade: The teens fighting back against rape'</p>
                </div>
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-film"></i></div>
                    <h4>Deutsche Welle (2016)</h4>
                    <p>'India's Red Brigade' — International documentary coverage.</p>
                </div>
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-newspaper"></i></div>
                    <h4>The Hindu (2017)</h4>
                    <p>Detailed coverage of Red Brigade empowering young women.</p>
                </div>
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-microphone"></i></div>
                    <h4>The National News</h4>
                    <p>'Empowering women of India to fight back' — Long-form feature.</p>
                </div>
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-star"></i></div>
                    <h4>The Things (US)</h4>
                    <p>Featured among '15 Awesome Vigilantes That Really Fight Crime'.</p>
                </div>
                <div class="rb-media-brand-card">
                    <div class="rb-media-icon"><i class="fas fa-history"></i></div>
                    <h4>Hindustan Times (2022)</h4>
                    <p>'Women come together to build non-violent economy'.</p>
                </div>
            </div>
        </div>
    </section>

</div>

@include('includes.footer')
