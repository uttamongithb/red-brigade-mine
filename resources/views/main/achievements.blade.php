@include('includes.header')

<style>
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
.rb-achievements-page .container {
    width: 90%;
    max-width: none;
}

/* Hero */
.rb-achievements-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-272.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-achievements-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-achievements-hero .container { position: relative; z-index: 2; }
.rb-achievements-hero h1 { font-size: 64px; color: #fff; font-weight: 700; margin-bottom: 20px; }

/* Kicker */
.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Award Card */
.rb-award-card {
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    border: 1px solid #eef2f6;
    margin-bottom: 30px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    height: 100%;
}
.rb-award-card:hover { transform: translateY(-5px); border-color: #E31E24; }
.rb-award-icon { font-size: 32px; color: #E31E24; margin-bottom: 15px; }
.rb-award-card h3 { font-size: 20px; margin-bottom: 10px; color: #1f2f46; }
.rb-award-card p { color: #64748b; font-size: 14px; margin: 0; line-height: 1.5; }

/* Timeline/Media Section */
.rb-media-section { padding: 100px 0; background: #f8fafc; }
.rb-media-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
.rb-media-card { background: #fff; padding: 25px; border-radius: 16px; border: 1px solid #eef2f6; }
.rb-media-card h4 { font-size: 18px; color: #1f2f46; margin-bottom: 8px; }
.rb-media-card p { font-size: 14px; color: #64748b; margin: 0; }

/* Leader Profiles */
.rb-leader-section { padding: 100px 0; background: #fff; }
.rb-leader-card { display: flex; gap: 40px; background: #f8fafc; padding: 40px; border-radius: 24px; margin-bottom: 40px; align-items: center; }
.rb-leader-img { width: 220px; height: 220px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 5px solid #fff; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
.rb-leader-img img { width: 100%; height: 100%; object-fit: cover; }
.rb-leader-content h3 { font-size: 28px; color: #1f2f46; margin-bottom: 15px; }
.rb-leader-content p { font-size: 16px; color: #4a5568; margin-bottom: 10px; }

@media (max-width: 991px) {
    .rb-leader-card { flex-direction: column; text-align: center; padding: 30px; }
    .rb-media-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-achievements-page">
    <section class="rb-achievements-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Recognition</span>
            <h1>Achievements & Awards</h1>
            <p>Every award is a recognition not just of the organisation, but of the survivors who built it.</p>
        </div>
    </section>

    <!-- National & Government Awards -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="rb-gallery-header" style="text-align: center; margin-bottom: 60px;">
                <span class="rb-kicker">Honors</span>
                <h2 style="font-size: 46px;">National & Government Awards</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-tv"></i></div>
                        <h3>Savdhan India Award</h3>
                        <p>Awarded by national TV programme for outstanding contribution to women's safety.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-medal"></i></div>
                        <h3>Stree Shakti Award</h3>
                        <p>Government recognition for exemplary work in women empowerment.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3>Mind of Steel Award</h3>
                        <p>Awarded for resilience and determination in fighting sexual violence.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-crown"></i></div>
                        <h3>Devi Award</h3>
                        <p>Recognised for transformational leadership by women.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-award"></i></div>
                        <h3>Women in Public Life</h3>
                        <p>Honoured by the President of India for public service at Rashtrapati Bhavan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-bullhorn"></i></div>
                        <h3>No More Kamzor Campaign</h3>
                        <p>Institutional recognition for the programme combating internalised weakness in women.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-lightbulb"></i></div>
                        <h3>Mission Sapne</h3>
                        <p>Award for innovative community-based intervention for women and girls.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-star"></i></div>
                        <h3>Kaun Banega Crorepati</h3>
                        <p>Featured on national television as an inspirational social work story with Amitabh Bachchan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-newspaper"></i></div>
                        <h3>Forbes India 2020</h3>
                        <p>Founder Usha Vishwakarma listed among India's Top 20 Self-Made Women Achievers.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-users"></i></div>
                        <h3>The Republic of Women</h3>
                        <p>Recognition for our unique survivor-led leadership model.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-globe"></i></div>
                        <h3>Maja Koene Award</h3>
                        <p>International social activist award recognising our grassroots impact.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rb-award-card">
                        <div class="rb-award-icon"><i class="fas fa-landmark"></i></div>
                        <h3>Govt Recognition</h3>
                        <p>Multiple state and national level honors from Central Ministries and the Govt of UP.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Recognition Grid -->
    <section class="rb-media-section">
        <div class="container">
            <div class="rb-gallery-header" style="text-align: center; margin-bottom: 60px;">
                <span class="rb-kicker">Archive</span>
                <h2 style="font-size: 46px;">Media & Press Recognition</h2>
            </div>
            <div class="rb-media-grid">
                <div class="rb-media-card">
                    <h4>CNN (2013)</h4>
                    <p>'Meet India's Red Brigade: The teens fighting back against rape' — Global long-form story.</p>
                </div>
                <div class="rb-media-card">
                    <h4>Deutsche Welle (2016)</h4>
                    <p>'India's Red Brigade' — International documentary-style coverage.</p>
                </div>
                <div class="rb-media-card">
                    <h4>The Hindu (2017)</h4>
                    <p>'Red, black and Krav Maga: Lucknow's Red Brigade is empowering young women'.</p>
                </div>
                <div class="rb-media-card">
                    <h4>Times of India (2016)</h4>
                    <p>'Red Brigade: Force that teaches girls to beat harassers'.</p>
                </div>
                <div class="rb-media-card">
                    <h4>Navbharat Times (2017)</h4>
                    <p>Extensive coverage of our district-wide Scooty Yatras.</p>
                </div>
                <div class="rb-media-card">
                    <h4>Hindustan Times (2022)</h4>
                    <p>'Women come together in Lucknow to build non-violent economy'.</p>
                </div>
                <div class="rb-media-card">
                    <h4>The Pioneer (2020)</h4>
                    <p>'Red Brigade Trust helping women, girls protect themselves'.</p>
                </div>
                <div class="rb-media-card">
                    <h4>India Legal (2017)</h4>
                    <p>Detailed coverage of rape justice cases supported by RBL.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leader Recognitions -->
    <section class="rb-leader-section">
        <div class="container">
            <div class="rb-gallery-header" style="text-align: center; margin-bottom: 60px;">
                <span class="rb-kicker">Our Leaders</span>
                <h2 style="font-size: 46px;">Individual Recognitions</h2>
            </div>

            <!-- Usha -->
            <div class="rb-leader-card">
                <div class="rb-leader-img">
                    <img src="<?php echo URL::asset('uploads/img/about-left-image.jpg');?>" alt="Usha Vishwakarma">
                </div>
                <div class="rb-leader-content">
                    <h3>Usha Vishwakarma — Founder</h3>
                    <p>Named 'Woman of Action' (2013) internationally and recognized as one of India's Top 20 Self-Made Women by Forbes (2020).</p>
                    <p>Recognized by the Govt of India and Govt of UP for pioneering the survivor-led movement in self-defense.</p>
                </div>
            </div>

            <!-- Manshi -->
            <div class="rb-leader-card">
                <div class="rb-leader-img">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-151.png');?>" alt="Manshi">
                </div>
                <div class="rb-leader-content">
                    <h3>Manshi — Programme Leader</h3>
                    <p>Transformed from a deeply traumatised survivor into a core team member and certified self-defense trainer.</p>
                    <p>Currently leads the Chikankari Women's Economic Empowerment Programme, a model of survivor agency.</p>
                </div>
            </div>

            <!-- Annu -->
            <div class="rb-leader-card">
                <div class="rb-leader-img">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-133.png');?>" alt="Annu">
                </div>
                <div class="rb-leader-content">
                    <h3>Annu — Balmanch Coordinator</h3>
                    <p>Rescued at age 12, Annu is now a master trainer and the coordinator of Balmanch education centre.</p>
                    <p>She is the living symbol of Red Brigade's model: victims becoming fearless leaders.</p>
                </div>
            </div>

            <!-- Diya -->
            <div class="rb-leader-card">
                <div class="rb-leader-img">
                    <img src="<?php echo URL::asset('uploads/slider/sunshine-slider-614.jpeg');?>" alt="Diya">
                </div>
                <div class="rb-leader-content">
                    <h3>Diya — Fighter for Justice</h3>
                    <p>Fought a landmark legal battle with Red Brigade's support, resulting in the perpetrator's imprisonment.</p>
                    <p>Her journey from survivor to a life rebuilt is a cornerstone case of our Justice Access initiative.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Section -->
    <section class="rb-join-section">
        <div class="container">
            <h2>Join Our Journey of Impact</h2>
            <p>Every milestone we achieve is powered by supporters like you. Help us empower more women.</p>
            <a href="<?php echo action('MainController@contact'); ?>" class="rb-btn">Get Involved Today</a>
        </div>
    </section>
</div>

@include('includes.footer')
