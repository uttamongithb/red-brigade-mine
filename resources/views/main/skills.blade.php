@include('includes.header')

<style>
/* Reset & Base */
.rb-skills-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
}
.rb-skills-page h1, .rb-skills-page h2, .rb-skills-page h3, .rb-skills-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}
.rb-skills-page img { max-width: 100%; height: auto; display: block; }

.rb-skills-page .container {
    width: 90%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}
@media (max-width: 767px) {
    .rb-skills-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Hero Section */
.rb-skills-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-892.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-skills-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-skills-hero .container { position: relative; z-index: 2; }
.rb-skills-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-skills-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

/* Skills Section */
.rb-skills-section {
    padding: 100px 0;
    background: #fff;
}
.rb-gallery-header {
    text-align: center;
    margin-bottom: 60px;
}
.rb-gallery-header h2 {
    font-size: 46px;
    color: #1f2f46;
}
.rb-gallery-header p {
    font-size: 18px;
    color: #4a5568;
    max-width: 800px;
    margin: 20px auto 0;
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
    .rb-skills-hero { padding: 150px 0 100px; }
    .rb-skills-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 767px) {
    .rb-skills-hero h1 { font-size: 42px; }
    .rb-skills-grid { grid-template-columns: 1fr; }
}

/* Join Section */
.rb-join-section {
    padding: 100px 0;
    text-align: center;
    background: #f8fafc;
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
</style>

<div class="rb-skills-page">
    <!-- Hero Section -->
    <section class="rb-skills-hero">
        <div class="container">
            <h1>Our Skills</h1>
            <p>Empowering women through artisan craftsmanship and vocational training.</p>
        </div>
    </section>

    <!-- Artisan Skills Section -->
    <section class="rb-skills-section">
        <div class="container">
            <div class="rb-gallery-header">
                <span class="rb-kicker">Economic Empowerment</span>
                <h2>Artisan Skills & Craftsmanship</h2>
                <p>We provide vocational training in traditional crafts to ensure survivors and women from marginalized communities achieve financial independence.</p>
            </div>
            <div class="rb-skills-grid">
                <?php if(isset($allskills_cards) && count($allskills_cards) > 0) { 
                    foreach($allskills_cards as $skill) {
                ?>
                <div class="rb-skill-card">
                    <div class="rb-skill-icon"><i class="fas <?php echo $skill->icon; ?>"></i></div>
                    <h3><?php echo $skill->name; ?></h3>
                    <p><?php echo $skill->description; ?></p>
                </div>
                <?php } } else { ?>
                <div class="rb-skill-card">
                    <div class="rb-skill-icon"><i class="fas fa-cut"></i></div>
                    <h3>Chikankari</h3>
                    <p>Training in the world-renowned traditional embroidery of Lucknow, preserving heritage while creating livelihoods.</p>
                </div>
                <div class="rb-skill-card">
                    <div class="rb-skill-icon"><i class="fas fa-th"></i></div>
                    <h3>Crosia (Crochet)</h3>
                    <p>Mastering crochet techniques to create intricate designs and high-quality handmade products for modern markets.</p>
                </div>
                <div class="rb-skill-card">
                    <div class="rb-skill-icon"><i class="fas fa-ellipsis-h"></i></div>
                    <h3>Making Jhalar</h3>
                    <p>Learning the art of creating traditional fringes and decorative hangings (Jhalar), essential for textile ornamentation.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')