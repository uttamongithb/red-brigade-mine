@include('includes.header')

<style>
/* Reset & Base - Minimalist & Sharp */
.rb-gallery-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-gallery-page h1, .rb-gallery-page h2, .rb-gallery-page h3, .rb-gallery-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}
.rb-gallery-page .container {
    width: 90%;
    max-width: none;
}

/* Hero Section */
.rb-gallery-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/Redbrigade-lucknow.jpg"); ?>') no-repeat center center/cover;
    padding: 180px 0 100px;
    text-align: center;
    color: #fff;
}
.rb-gallery-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-gallery-hero .container { position: relative; z-index: 2; }
.rb-gallery-hero h1 { font-size: 54px; color: #fff; font-weight: 700; margin-bottom: 15px; }
.rb-gallery-hero p { font-size: 20px; max-width: 700px; margin: 0 auto; color: #e2e8f0; font-weight: 300; }

/* Integrated Gallery Section */
.rb-main-gallery { padding: 80px 0 100px; }

.rb-gallery-header { text-align: center; margin-bottom: 50px; }
.rb-gallery-header h2 { font-size: 42px; margin-bottom: 15px; }
.rb-gallery-header p { color: #64748b; font-size: 16px; }

.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Tab Navigation */
.rb-tab-nav {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-bottom: 60px;
    border-bottom: 1px solid #eef2f6;
    padding-bottom: 20px;
}
.rb-tab-btn {
    font-size: 18px;
    font-weight: 700;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: none;
    border: none;
    padding: 10px 0;
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
}
.rb-tab-btn::after {
    content: '';
    position: absolute;
    bottom: -21px;
    left: 0;
    width: 0;
    height: 3px;
    background: #E31E24;
    transition: width 0.3s ease;
}
.rb-tab-btn.active { color: #1f2f46; }
.rb-tab-btn.active::after { width: 100%; }

/* Grid & Cards - Sharp Edges */
.rb-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.rb-media-card {
    background: #fff;
    border: 1px solid #eef2f6;
    overflow: hidden;
    display: block;
    transition: transform 0.3s ease;
    border-radius: 0 !important; /* Force no border radius */
}
.rb-media-card:hover { transform: translateY(-5px); }

.rb-media-thumbnail {
    aspect-ratio: 4/3;
    overflow: hidden;
    background: #f8fafc;
    border-radius: 0 !important; /* Force no border radius */
}
.rb-media-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.rb-media-info { padding: 15px; }
.rb-media-info h4 { font-size: 14px; color: #1f2f46; margin: 0; text-transform: uppercase; letter-spacing: 1px; }

/* Content States */
.rb-tab-content { display: none; }
.rb-tab-content.active { display: grid; }

@media (max-width: 1100px) {
    .rb-gallery-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-gallery-hero h1 { font-size: 36px; }
    .rb-gallery-grid { grid-template-columns: 1fr; }
    .rb-tab-nav { gap: 20px; }
}

/* Asymmetric / Masonry Layout for Photos */
.rb-gallery-grid-asymmetric {
    display: none;
}
.rb-gallery-grid-asymmetric.active {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: 240px;
    grid-auto-flow: dense !important;
    gap: 20px;
}
@media (max-width: 991px) {
    .rb-gallery-grid-asymmetric.active {
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: 200px;
    }
}
@media (max-width: 600px) {
    .rb-gallery-grid-asymmetric.active {
        grid-template-columns: 1fr;
        grid-auto-rows: 250px;
    }
}

.rb-gallery-grid-asymmetric .rb-media-card {
    position: relative;
    background: #fff;
    border: 1px solid #eef2f6;
    overflow: hidden;
    display: block;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 0 !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
}

.rb-gallery-grid-asymmetric .rb-media-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.rb-gallery-grid-asymmetric .rb-media-thumbnail {
    width: 100%;
    height: 100% !important;
    overflow: hidden;
    background: #f8fafc;
}

.rb-gallery-grid-asymmetric .rb-media-thumbnail img {
    width: 100%;
    height: 100% !important;
    object-fit: cover;
    display: block;
}

/* Asymmetric Span Patterns */
.rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+1) {
    grid-column: span 2;
    grid-row: span 2;
}
.rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+3) {
    grid-row: span 2;
}
.rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+5) {
    grid-column: span 2;
}

@media (max-width: 600px) {
    .rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+1),
    .rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+3),
    .rb-gallery-grid-asymmetric .rb-media-card:nth-child(6n+5) {
        grid-column: span 1 !important;
        grid-row: span 1 !important;
    }
}
</style>

<div class="rb-gallery-page">
    <section class="rb-gallery-hero">
        <div class="container">
            <h1>Movement Gallery</h1>
            <p>A visual record of resistance, resilience, and transformation.</p>
        </div>
    </section>

    <section class="rb-main-gallery">
        <div class="container">
            <div class="rb-gallery-header">
                <span class="rb-kicker">The Journey</span>
                <h2>Movement in Action</h2>
            </div>

            <!-- Tab Navigation -->
            <div class="rb-tab-nav">
                <button class="rb-tab-btn active" data-target="photos">Photos</button>
                <button class="rb-tab-btn" data-target="videos">Videos</button>
            </div>

            <!-- Photos Tab -->
            <div id="photos" class="rb-tab-content rb-gallery-grid-asymmetric active">
                <?php if(count($photos) > 0) { foreach($photos as $allg) { ?>
                    <a href="<?php echo URL::asset('uploads/img/'.trim($allg->image));?>" class="rb-media-card image-popup" title="<?php echo $allg->name; ?>">
                        <div class="rb-media-thumbnail">
                            <img src="<?php echo URL::asset('uploads/img/'.trim($allg->image));?>" alt="<?php echo $allg->name; ?>" loading="lazy">
                        </div>
                    </a>			
                <?php } } else { ?>
                    <div class="col-12 text-center" style="padding: 40px; width: 100%;">
                        <p style="color: #64748b;">No photos uploaded yet.</p>
                    </div>
                <?php } ?>
            </div>

            <!-- Videos Tab -->
            <div id="videos" class="rb-tab-content rb-gallery-grid">
                <?php if(!empty($videos)) { foreach($videos as $allg) { ?>
                    <div class="rb-media-card">
                        <div class="rb-media-thumbnail" style="aspect-ratio: 16/9;">
                            <div style="width: 100%; height: 100%;">
                                <?php echo isset($allg->embed) ? $allg->embed : ''; ?>
                            </div>
                        </div>
                        <div class="rb-media-info">
                            <h4><?php echo !empty($allg->name) ? $allg->name : 'Campaign Documentary'; ?></h4>
                        </div>
                    </div>			
                <?php } } else { ?>
                    <div class="col-12 text-center" style="grid-column: 1 / -1; padding: 40px;">
                        <p style="color: #64748b;">No videos uploaded yet.</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Minimalist CTA Section -->
    <section class="rb-join-section" style="padding: 100px 0; background: #fff; text-align: center; border-top: 1px solid #eef2f6;">
        <div class="container">
            <span class="rb-kicker" style="color: #E31E24; letter-spacing: 3px; font-size: 12px; margin-bottom: 10px;">Get Involved</span>
            <h2 style="color: #1f2f46; font-size: 36px; margin: 0 0 20px; font-family: 'Playfair Display', serif;">Experience the Impact Firsthand</h2>
            <p style="color: #64748b; font-size: 18px; max-width: 650px; margin: 0 auto 35px; font-weight: 400; line-height: 1.6;">Stand with the survivors who are transforming their lives and communities.</p>
            <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact']); ?>" class="rb-btn" style="padding: 14px 40px; font-size: 14px; text-transform: uppercase; border-radius: 4px; box-shadow: none;">Support Our Mission</a>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btns = document.querySelectorAll('.rb-tab-btn');
    const contents = document.querySelectorAll('.rb-tab-content');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-target');

            btns.forEach(b => b.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            btn.classList.add('active');
            document.getElementById(target).classList.add('active');
        });
    });
});
</script>

@include('includes.footer')
