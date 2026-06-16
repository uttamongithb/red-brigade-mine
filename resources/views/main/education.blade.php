@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-edu-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-edu-page h1, .rb-edu-page h2, .rb-edu-page h3, .rb-edu-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}

/* Consistent Container Width (90%) */
.rb-edu-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-edu-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-edu-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/news/rb-education.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-edu-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-edu-hero .container { position: relative; z-index: 2; }
.rb-edu-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-edu-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
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

/* Core Values / Features */
.rb-edu-features {
    padding: 100px 0;
    background: #fff;
}
.rb-edu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 60px;
}
.rb-edu-card {
    padding: 40px;
    background: #f8fafc;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
}
.rb-edu-card:hover {
    transform: translateY(-10px);
    background: #fff;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    border-color: #E31E24;
}
.rb-edu-icon {
    width: 60px;
    height: 60px;
    background: #E31E24;
    color: #fff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 25px;
}
.rb-edu-card h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #1f2f46;
}
.rb-edu-card p {
    font-size: 16px;
    color: #4a5568;
}

/* Gallery Section */
.rb-edu-gallery {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 40px;
}
.rb-gallery-item {
    aspect-ratio: 1/1;
    overflow: hidden;
    border-radius: 8px;
    position: relative;
}
.rb-gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-gallery-item:hover img {
    transform: scale(1.1);
}

@media (max-width: 991px) {
    .rb-edu-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-edu-hero h1 { font-size: 42px; }
    .rb-edu-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-edu-page">
    <!-- Hero Section -->
    <section class="rb-edu-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Empowerment Through Knowledge</span>
            <h1>Education (Balmanch)</h1>
            <p>Our commitment to providing educational support and safe spaces for children in marginalized communities.</p>
        </div>
    </section>

    <!-- Balmanch Mission -->
    <section class="rb-edu-features">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="rb-kicker">Our Core Focus</span>
                <h2 style="font-size: 42px; margin-bottom: 30px;">Investing in the Future</h2>
                <p style="font-size: 18px; color: #4a5568;">Balmanch is Red Brigade's dedicated initiative for child education. We believe that true social change begins with the youngest members of our society, ensuring they have the tools, safety, and confidence to thrive.</p>
            </div>

            <div class="rb-edu-grid">
                <?php if(isset($alleducation_cards) && count($alleducation_cards) > 0) { 
                    foreach($alleducation_cards as $card) {
                ?>
                <div class="rb-edu-card">
                    <div class="rb-edu-icon"><i class="fas <?php echo $card->icon; ?>"></i></div>
                    <h3><?php echo $card->name; ?></h3>
                    <p><?php echo $card->description; ?></p>
                </div>
                <?php } } else { ?>
                <div class="rb-edu-card">
                    <div class="rb-edu-icon"><i class="fas fa-book-reader"></i></div>
                    <h3>Literacy & Support</h3>
                    <p>Providing direct educational assistance and bridge courses for children who have dropped out of school.</p>
                </div>
                <div class="rb-edu-card">
                    <div class="rb-edu-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Child Safety</h3>
                    <p>Teaching children about their rights, "Good Touch & Bad Touch," and how to protect themselves from exploitation.</p>
                </div>
                <div class="rb-edu-card">
                    <div class="rb-edu-icon"><i class="fas fa-users"></i></div>
                    <h3>Community Hubs</h3>
                    <p>Establishing local learning centers that act as safe havens for children in sensitive neighborhoods.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Visual Impact -->
    <section class="rb-edu-gallery">
        <div class="container">
            <h2 style="text-align: center;">Glimpses of Our Impact</h2>
            <div class="rb-gallery-grid">
                <?php if(isset($education_items) && !empty($education_items)) { 
                    foreach($education_items as $item) { ?>
                    <div class="rb-gallery-item">
                        <img src="<?php echo URL::asset('uploads/gallery/'.$item->image); ?>" alt="Education" loading="lazy">
                    </div>
                <?php } } else { ?>
                    <div class="rb-gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-education.png'); ?>" alt="Edu"></div>
                    <div class="rb-gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-skill-dev.png'); ?>" alt="Skill"></div>
                    <div class="rb-gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-street-play.png'); ?>" alt="Play"></div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Support Education -->
    <section class="rb-edu-features" style="background: #1f2f46; color: #fff;">
        <div class="container text-center">
            <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">Support a Child's Future</h2>
            <p style="color: #cbd5e1; font-size: 18px; max-width: 700px; margin: 0 auto 40px;">Your contributions directly fund books, teaching materials, and school fees for children in our program.</p>
            <a href="<?php echo action('MainController@donate'); ?>" class="rb-btn" style="display: inline-block; padding: 14px 40px; background: #E31E24; color: #fff; font-weight: 700; border-radius: 4px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">Donate to Education</a>
        </div>
    </section>
</div>

@include('includes.footer')
