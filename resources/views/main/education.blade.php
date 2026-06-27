@include('includes.header')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* Reset & Variables */
:root {
    --primary: #E31E24;
    --text-main: #111827;
    --text-muted: #6B7280;
    --bg-light: #F9FAFB;
    --white: #FFFFFF;
    --border: #E5E7EB;
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    --radius: 12px;
}

.balmanch-minimal {
    font-family: 'Inter', sans-serif;
    color: var(--text-main);
    background-color: var(--bg-light);
    line-height: 1.6;
}

.container-compact {
    width: 90%;
    max-width: 1400px; /* Optional cap so it doesn't look stretched on ultra-wide monitors, but feels like 90% on normal screens */
    margin: 0 auto;
    padding: 0 15px;
}

@media (max-width: 767px) {
    .container-compact {
        width: 100%;
        padding: 0 15px;
    }
}

.section-compact { padding: 64px 0; }
.bg-white { background-color: var(--white); }

/* Typography */
h1, h2, h3, h4 { font-weight: 700; color: var(--text-main); letter-spacing: -0.02em; margin: 0; }
p { color: var(--text-muted); margin: 0 0 16px 0; }
.badge-red {
    display: inline-block;
    background: rgba(227, 30, 36, 0.1);
    color: var(--primary);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
}

/* 1. Hero Section (Side by Side) */
.hero-wrapper {
    display: flex;
    align-items: center;
    gap: 48px;
    padding: 80px 0 40px;
}
.hero-text { flex: 1; }
.hero-text h1 { font-size: 48px; line-height: 1.1; margin-bottom: 20px; }
.hero-text p { font-size: 18px; color: var(--text-muted); margin-bottom: 32px; max-width: 90%; }
.hero-img { flex: 1; }
.hero-img img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: var(--radius);
    box-shadow: var(--shadow-md);
}

/* 2. Overview Grid (Motive + Mission/Vision) */
.overview-grid {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: 40px;
}
.motive-box {
    background: var(--white);
    padding: 40px;
    border-radius: var(--radius);
    border: 1px solid var(--border);
    box-shadow: var(--shadow-sm);
}
.motive-box h2 { font-size: 28px; margin-bottom: 20px; }
.motive-box p { font-size: 16px; }

.mv-stack {
    display: flex;
    flex-direction: column;
    gap: 24px;
}
.mv-card {
    background: var(--white);
    padding: 32px;
    border-radius: var(--radius);
    border: 1px solid var(--border);
    border-left: 4px solid var(--primary);
    box-shadow: var(--shadow-sm);
}
.mv-card h3 { font-size: 20px; margin-bottom: 12px; display: flex; align-items: center; gap: 10px; }
.mv-card h3 i { color: var(--primary); font-size: 18px; }
.mv-card p { font-size: 15px; margin: 0; }

/* 3. Target Audience */
.target-wrap {
    display: flex;
    gap: 20px;
    justify-content: space-between;
    margin-top: 32px;
}
.target-pill {
    background: var(--white);
    border: 1px solid var(--border);
    padding: 16px 24px;
    border-radius: 100px; /* Pill shape */
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
    color: var(--text-main);
    font-size: 15px;
    box-shadow: var(--shadow-sm);
    flex: 1;
    justify-content: center;
}
.target-pill i { color: var(--primary); }

/* 4. Core Focus Cards */
.focus-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 24px;
    margin-top: 40px;
}
.focus-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.focus-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
}
.focus-img-box {
    height: 180px;
    width: 100%;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid var(--border);
}
.focus-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.focus-img-box i { font-size: 40px; color: #D1D5DB; }
.focus-card-body { padding: 24px; }
.focus-card-body h3 { font-size: 18px; margin-bottom: 10px; }
.focus-card-body p { font-size: 14px; margin: 0; line-height: 1.5; }

/* 5. Impact Gallery Compact Grid */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-top: 40px;
}
.gallery-item {
    aspect-ratio: 1;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
}
.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}
.gallery-item:hover img { transform: scale(1.05); }

/* Buttons */
.btn-primary-compact {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--primary);
    color: var(--white);
    padding: 12px 28px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none !important;
    transition: opacity 0.2s;
}
.btn-primary-compact:hover { opacity: 0.9; color: var(--white); }

/* Responsive */
@media (max-width: 991px) {
    .hero-wrapper { flex-direction: column; text-align: center; gap: 32px; padding: 40px 0; }
    .hero-text p { margin: 0 auto 32px; }
    .overview-grid { grid-template-columns: 1fr; }
    .target-wrap { flex-direction: column; }
    .target-pill { border-radius: 12px; padding: 20px; justify-content: flex-start; }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .hero-text h1 { font-size: 36px; }
    .section-compact { padding: 48px 0; }
}
</style>

<div class="balmanch-minimal">

    <!-- Hero Section -->
    <section class="bg-white">
        <div class="container-compact">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <span class="badge-red">Balmanch</span>
                    <h1>Education & Safety for Every Child</h1>
                    <p>A dedicated platform established by Red Brigade to foster holistic development, literacy, and self-defense skills in marginalized communities.</p>
                    <a href="<?php echo action('MainController@donate'); ?>" class="btn-primary-compact">Support the Initiative</a>
                </div>
                <div class="hero-img">
                    <img src="<?php echo URL::asset('uploads/news/rb-education.png'); ?>" alt="Children studying">
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Mission -->
    <section class="section-compact">
        <div class="container-compact">
            <div class="overview-grid">
                
                <!-- Motive -->
                <div class="motive-box">
                    <span class="badge-red">Our Motive</span>
                    <h2>Why We Started Balmanch</h2>
                    <p>While working within sensitive communities, we encountered a stark reality: true empowerment must begin early. Children dropping out of school or lacking safe spaces were overwhelmingly vulnerable to exploitation, violence, and cyclical poverty.</p>
                    <p style="margin-bottom: 0;">Balmanch was created to bridge this critical gap. Our motive is to intervene during the formative years—providing a reliable safety net where education replaces vulnerability. We believe no child's potential should be dictated by their geographical or economic circumstances.</p>
                </div>

                <!-- Mission & Vision -->
                <div class="mv-stack">
                    <div class="mv-card">
                        <h3><i class="fas fa-bullseye"></i> Mission</h3>
                        <p>To provide accessible educational support and essential life skills to children in underserved areas, reintegrating dropouts and teaching personal safety.</p>
                    </div>
                    <div class="mv-card" style="border-left-color: #111827;">
                        <h3><i class="fas fa-eye" style="color:#111827;"></i> Vision</h3>
                        <p>A society where every child has the undeniable opportunity to learn in a safe, joyful environment, creating a future driven by empowered youth.</p>
                    </div>
                </div>

            </div>

            <!-- Target Audience Pills -->
            <div class="target-wrap">
                <div class="target-pill"><i class="fas fa-user-graduate"></i> School Dropouts</div>
                <div class="target-pill"><i class="fas fa-home"></i> Marginalized Communities</div>
                <div class="target-pill"><i class="fas fa-child"></i> Vulnerable Youth</div>
            </div>
        </div>
    </section>

    <!-- Core Focus -->
    <section class="section-compact bg-white">
        <div class="container-compact">
            <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                <div>
                    <span class="badge-red">Interventions</span>
                    <h2 style="font-size: 32px;">Our Core Focus Areas</h2>
                </div>
            </div>

            <div class="focus-grid">
                <?php if(isset($alleducation_cards) && count($alleducation_cards) > 0) { 
                    foreach($alleducation_cards as $card) {
                ?>
                <div class="focus-card">
                    <div class="focus-img-box">
                        <?php if(!empty($card->image)) { ?>
                            <img src="<?php echo URL::asset('uploads/gallery/'.$card->image); ?>" alt="<?php echo $card->name; ?>">
                        <?php } else { ?>
                            <i class="fas <?php echo $card->icon; ?>"></i>
                        <?php } ?>
                    </div>
                    <div class="focus-card-body">
                        <h3><?php echo $card->name; ?></h3>
                        <p><?php echo $card->description; ?></p>
                    </div>
                </div>
                <?php } } else { ?>
                <!-- Fallbacks -->
                <div class="focus-card">
                    <div class="focus-img-box"><i class="fas fa-book-reader"></i></div>
                    <div class="focus-card-body">
                        <h3>Literacy & Support</h3>
                        <p>Providing direct educational assistance and bridge courses for children who have dropped out of school.</p>
                    </div>
                </div>
                <div class="focus-card">
                    <div class="focus-img-box"><i class="fas fa-shield-alt"></i></div>
                    <div class="focus-card-body">
                        <h3>Child Safety</h3>
                        <p>Teaching children about their rights, "Good Touch & Bad Touch," and how to protect themselves.</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Impact Gallery -->
    <section class="section-compact">
        <div class="container-compact">
            <span class="badge-red">In Action</span>
            <h2 style="font-size: 32px;">Glimpses of Impact</h2>
            
            <div class="gallery-grid">
                <?php if(isset($education_items) && count($education_items) > 0) { 
                    // Render gallery items dynamically
                    foreach($education_items as $item) { ?>
                    <div class="gallery-item">
                        <img src="<?php echo URL::asset('uploads/gallery/'.$item->image); ?>" alt="<?php echo $item->name; ?>" loading="lazy" title="<?php echo $item->name; ?>">
                    </div>
                <?php } } else { ?>
                    <div class="gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-education.png'); ?>" alt="Edu"></div>
                    <div class="gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-skill-dev.png'); ?>" alt="Skill"></div>
                    <div class="gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-street-play.png'); ?>" alt="Play"></div>
                    <div class="gallery-item"><img src="<?php echo URL::asset('uploads/news/rb-covid-relief.png'); ?>" alt="Relief"></div>
                <?php } ?>
            </div>
            
        </div>
    </section>

</div>

@include('includes.footer')