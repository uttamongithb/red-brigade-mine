@include('includes.header')

<style>
/* Reset & Base */
.rb-collab-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #f8fafc;
}
.rb-collab-page h1, .rb-collab-page h2, .rb-collab-page h3 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}
.rb-collab-page img { max-width: 100%; height: auto; display: block; }

.rb-collab-page .container {
    width: 90%;
    max-width: none;
}

/* Hero Section */
.rb-collab-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-892.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-collab-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(15, 23, 42, 0.8) 0%, rgba(15, 23, 42, 0.95) 100%);
}
.rb-collab-hero .container { position: relative; z-index: 2; }
.rb-collab-hero h1 { font-size: 64px; color: #fff; font-weight: 700; margin-bottom: 20px; }
.rb-collab-hero p { font-size: 22px; max-width: 800px; margin: 0 auto; color: #e2e8f0; font-weight: 300; }

.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Collab Grid */
.rb-collab-section {
    padding: 100px 0;
}
.rb-collab-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 40px;
}
.rb-collab-card {
    background: #fff;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    border: 1px solid #eef2f6;
    transition: all 0.4s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
}
.rb-collab-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    border-color: #E31E24;
}
.rb-collab-logo-wrapper {
    width: 150px;
    height: 150px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    padding: 20px;
}
.rb-collab-logo-wrapper img {
    max-height: 100%;
    object-fit: contain;
}
.rb-collab-card h3 {
    font-size: 22px;
    color: #1f2f46;
    margin-bottom: 15px;
    line-height: 1.3;
}
.rb-collab-card p {
    color: #64748b;
    font-size: 15px;
    margin: 0;
}

@media (max-width: 991px) {
    .rb-collab-hero h1 { font-size: 52px; }
    .rb-collab-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
    .rb-collab-hero h1 { font-size: 42px; }
    .rb-collab-hero p { font-size: 18px; }
    .rb-collab-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-collab-page">
    <!-- Hero Section -->
    <section class="rb-collab-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">United for a Cause</span>
            <h1>Our Collaborations</h1>
            <p>We are proud to work alongside esteemed organizations and trusts who share our vision of a safer, more equitable society for women.</p>
        </div>
    </section>

    <!-- Partners Grid -->
    <section class="rb-collab-section">
        <div class="container">
            <div class="rb-gallery-header" style="text-align: center; margin-bottom: 60px;">
                <span class="rb-kicker">Network of Support</span>
                <h2 style="font-size: 46px;">Organizations We Collaborate With</h2>
            </div>
            
            <div class="rb-collab-grid">
                <!-- Partner 1 -->
                <div class="rb-collab-card">
                    <img src="data:image/jpeg;base64,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" alt="Inox Air Products Pvt. Ltd" style="width: 100%; max-width: 250px; margin-bottom: 25px; object-fit: contain;" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Inox+Air+Products&background=E31E24&color=fff&size=200&font-size=0.33';">
                    <h3>Inox Air Products Pvt. Ltd</h3>
                    <p>Supporting our initiatives to expand self-defense training reach.</p>
                </div>

                <!-- Partner 2 -->
                <div class="rb-collab-card">
                    <img src="<?php echo URL::asset('uploads/img/partners/sri_ram_charitable_trust_logo_1.png'); ?>" alt="Sri Ram Charitable Trust" style="width: 100%; max-width: 320px; margin-bottom: 25px; border-radius: 8px; object-fit: contain;" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Sri+Ram+Trust&background=1f2f46&color=fff&size=200&font-size=0.33';">
                    <h3>Sri Ram Charitable Trust</h3>
                    <p>Partnering with us to empower marginalized communities.</p>
                </div>

                <!-- Partner 3 -->
                <div class="rb-collab-card">
                    <img src="https://www.rotarypatna.org/images/Roraty_logo.png" alt="Rotary Club Bihar" style="width: 100%; max-width: 180px; margin-bottom: 25px; object-fit: contain;" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Rotary+Club&background=ff8a00&color=fff&size=200&font-size=0.33';">
                    <h3>Rotary Club Bihar</h3>
                    <p>Collaborating on regional awareness campaigns and workshops.</p>
                </div>

                <!-- Partner 4 -->
                <div class="rb-collab-card">
                    <img src="https://azimpremjiuniversity.edu.in/imager/logos/4689/Azim_Premji_University_logo.f1568027205_ec6881fed6c14c11e7428e45ab9ecae9.png" alt="Azim Premji University (APU)" style="width: 100%; max-width: 180px; margin-bottom: 25px; object-fit: contain;" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Azim+Premji+University&background=0693E3&color=fff&size=200&font-size=0.33';">
                    <h3>Azim Premji University (APU)</h3>
                    <p>Academic and research collaboration to study the impact of survivor-led movements.</p>
                </div>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')