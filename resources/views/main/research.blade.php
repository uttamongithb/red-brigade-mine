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

/* Publication Grid Layout */
.rb-pub-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.rb-pub-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    border: 1px solid #eef2f6;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}
.rb-pub-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    border-color: #E31E24;
}
.rb-pub-visual {
    width: 100%;
    height: 220px;
    position: relative;
    overflow: hidden;
}
.rb-pub-visual img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-pub-card:hover .rb-pub-visual img {
    transform: scale(1.05);
}
.rb-pub-info {
    padding: 30px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.rb-pub-info h3 {
    font-size: 20px;
    margin: 15px 0;
    line-height: 1.4;
    color: #1f2f46;
}
.rb-pub-info p {
    font-size: 14px;
    color: #64748b;
    margin-bottom: 20px;
    flex-grow: 1;
}
.rb-pub-tag {
    display: inline-block;
    padding: 5px 12px;
    background: rgba(227, 30, 36, 0.1);
    color: #E31E24;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    align-self: flex-start;
}
.rb-pub-meta {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
    border-top: 1px solid #f1f5f9;
    padding-top: 15px;
}
.rb-pub-meta li {
    font-size: 13px;
    margin-bottom: 8px;
    color: #475569;
}
.rb-pub-meta li strong {
    color: #1f2f46;
    min-width: 80px;
    display: inline-block;
}
.rb-pub-btn-wrap {
    margin-top: auto;
}
.rb-pub-btn-wrap .rb-btn {
    width: 100%;
    text-align: center;
    padding: 10px;
    font-size: 14px;
    display: block;
    box-sizing: border-box;
}

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
    .rb-pub-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-research-hero h1 { font-size: 42px; }
    .rb-media-grid { grid-template-columns: 1fr; }
    .rb-intent-list { grid-template-columns: 1fr; }
    .rb-pub-grid { grid-template-columns: 1fr; }
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

    <!-- Main Research Section -->
    <section class="rb-publication-section" style="padding-bottom: 80px;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px;">
                <span class="rb-kicker">Academic Evaluation</span>
                <h2 style="font-size: 42px; margin-bottom: 15px;">Research</h2>
            </div>
            
            <!-- Azim Premji Card -->
            <div class="rb-research-card">
                <div class="rb-card-visual">
                    <img src="<?php echo URL::asset('uploads/img/shaktipreneur_13.jpeg'); ?>" alt="Azim Premji University Study">
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

        </div>
    </section>

    <!-- Main Publications Section -->
    <section class="rb-publication-section" style="padding-top: 80px; padding-bottom: 120px; background: #f8fafc;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px;">
                <span class="rb-kicker">Global Recognition</span>
                <h2 style="font-size: 42px; margin-bottom: 15px;">Publications & Media</h2>
            </div>

            <div class="rb-pub-grid">
                <!-- Women in Red Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="<?php echo URL::asset('uploads/img/women_in_red.jpeg'); ?>" alt="Women in Red Book">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">Published Book</span>
                        <h3>'Women in Red' — The Journey</h3>
                        <p>A deep narrative and visual documentation of Red Brigade's evolution, members, and the profound impact of our survivor-led movement.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Author</strong> <span>Eva J.</span></li>
                            <li><strong>Publisher</strong> <span>Blurb</span></li>
                            <li><strong>Format</strong> <span>Visual & Narrative</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="<?php echo URL::asset('uploads/Women_in_Red.pdf'); ?>" target="_blank" class="rb-btn">Download PDF</a>
                        </div>
                    </div>
                </div>

                <!-- A Celebration of Women Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="<?php echo URL::asset('uploads/slider/Redbrigade-lucknow-report-947.jpeg'); ?>" alt="Academic Recognition">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">International Profile</span>
                        <h3>A Celebration of Women</h3>
                        <p>Recognized on an international platform profiling global women leaders and documenting their contributions to societal change.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Profile</strong> <span>Usha Vishwakarma</span></li>
                            <li><strong>Date</strong> <span>October 2013</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="https://acelebrationofwomen.org/2013/10/usha-vishwakarma-woman-of-action/" target="_blank" class="rb-btn">Read Profile</a>
                        </div>
                    </div>
                </div>

                <!-- TNIE Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="https://cf-images.assettype.com/TNIE/import/2020/9/27/original/SHE_FIREWALLS.jpg?w=1200&h=675&auto=format%2Ccompress&fit=max&enlarge=true" alt="TNIE News Coverage">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">Media Publication</span>
                        <h3>Led by survivor, 'Red Brigade' empowers women</h3>
                        <p>The Red Brigade now has 100 girls, most of them survivors. It has trained over 1.57 lakh girls in martial arts since 2011.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Publisher</strong> <span>The New Indian Express</span></li>
                            <li><strong>Date</strong> <span>September 2020</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="https://www.newindianexpress.com/good-news/2020/Sep/27/led-by-sexual-assault-survivor-lucknows-red-brigade-empowers-women-through-martial-arts-2202288.html" target="_blank" class="rb-btn">Read Article</a>
                        </div>
                    </div>
                </div>

                <!-- DW Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="https://static.dw.com/image/19100977_604.jpg" alt="DW News Coverage">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">International Media</span>
                        <h3>India’s Red Brigade</h3>
                        <p>Violence against women in India is widespread. But one group of girls has found a way to deal with the culprits. Meet the Red Brigade.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Publisher</strong> <span>Deutsche Welle (DW)</span></li>
                            <li><strong>Date</strong> <span>March 2016</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="https://www.dw.com/en/indias-red-brigade/a-19100226" target="_blank" class="rb-btn">Read Article</a>
                        </div>
                    </div>
                </div>

                <!-- Forbes India Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="https://images.forbesindia.com/blog/wp-content/uploads//media/images/2020/Mar/img_129371_ushavishwakarmas.jpg?im=FitAndFill,width=1200,height=900" alt="Forbes India Coverage">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">Media Publication</span>
                        <h3>Teaching women self defence, never backing down</h3>
                        <p>Usha Vishwakarma's Red Brigade Lucknow develops techniques to help women defend themselves from harassment or assault.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Publisher</strong> <span>Forbes India</span></li>
                            <li><strong>Date</strong> <span>March 2020</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="https://www.forbesindia.com/article/self-made-women-2020/usha-vishwakarma-teaching-women-self-defence-never-backing-down/58153/1" target="_blank" class="rb-btn">Read Article</a>
                        </div>
                    </div>
                </div>

                <!-- The Better India Card -->
                <div class="rb-pub-card">
                    <div class="rb-pub-visual">
                        <img src="https://img-cdn.publive.online/fit-in/1200x675/english-betterindia/media/media_files/uploads/2015/01/Craftsmen-3.png" alt="The Better India Coverage">
                    </div>
                    <div class="rb-pub-info">
                        <span class="rb-pub-tag">Media Publication</span>
                        <h3>Ugly Incident Ended Up Saving Thousands</h3>
                        <p>Red Brigade, which addresses the issue of sexual violence in India, is the brainchild of gutsy Usha Vishwakarma, a survivor of attempted rape herself.</p>
                        <ul class="rb-pub-meta">
                            <li><strong>Publisher</strong> <span>The Better India</span></li>
                            <li><strong>Date</strong> <span>November 2015</span></li>
                        </ul>
                        <div class="rb-pub-btn-wrap">
                            <a href="https://thebetterindia.com/17937/usha-vishwakarma-red-brigade-lucknow-sexual-violence-rape-abuse-women-empowerment/" target="_blank" class="rb-btn">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


</div>

@include('includes.footer')
