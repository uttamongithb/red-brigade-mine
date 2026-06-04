@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-research-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-research-page h1, .rb-research-page h2, .rb-research-page h3, .rb-research-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}

/* Consistent Container Width (90%) */
.rb-research-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-research-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-research-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-151.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-research-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-research-hero .container { position: relative; z-index: 2; }
.rb-research-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-research-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

.rb-kicker { 
    color: #e65a32; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Stats Section */
.rb-stats-section {
    padding: 80px 0 40px;
    background: #fff;
}
.rb-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 40px;
}
.rb-stat-card {
    background: #f8fafc;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease;
}
.rb-stat-card:hover {
    transform: translateY(-5px);
    border-color: #e65a32;
}
.rb-stat-value {
    display: block;
    font-size: 42px;
    font-weight: 700;
    color: #1f2f46;
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}
.rb-stat-label {
    font-size: 14px;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Grid Area */
.rb-archive-section {
    padding: 60px 0 100px;
    background: #f8fafc;
}
.rb-archive-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}
.rb-archive-item {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
    height: 100%;
}
.rb-archive-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.rb-media-wrap {
    aspect-ratio: 4/3;
    overflow: hidden;
    background: #111a2b;
    position: relative;
}
.rb-media-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.rb-video-shell {
    width: 100%;
    height: 100%;
}
.rb-video-shell iframe, .rb-video-shell video, .rb-video-shell embed {
    width: 100% !important;
    height: 100% !important;
    border: 0;
}

/* Responsive */
@media (max-width: 1100px) {
    .rb-archive-grid { grid-template-columns: repeat(2, 1fr); }
    .rb-stats-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-research-hero h1 { font-size: 42px; }
    .rb-archive-grid { grid-template-columns: 1fr; }
    .rb-stats-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-research-page">
    <!-- Hero Section -->
    <section class="rb-research-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Knowledge & Evidence</span>
            <h1>Research & Publications</h1>
            <p>Exploring the multi-dimensional impact of the Red Brigade movement through academic studies and media archives.</p>
        </div>
    </section>

    <!-- Archive Intro & Stats -->
    <section class="rb-stats-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="rb-kicker">Global Archive</span>
                    <h2 style="font-size: 42px; margin-bottom: 20px;">Insights from the Movement</h2>
                    <p style="font-size: 18px; color: #64748b;">Red Brigade conducts research programs centering around women’s safety, honor, and their historical role in India. Prestigious institutions worldwide have documented our journey through academic papers and publications.</p>
                </div>
            </div>

            <div class="rb-stats-grid">
                <div class="rb-stat-card">
                    <span class="rb-stat-value"><?php echo count($allactivity); ?></span>
                    <span class="rb-stat-label">Media Coverage</span>
                </div>
                <div class="rb-stat-card">
                    <span class="rb-stat-value"><?php echo count($allcampains); ?></span>
                    <span class="rb-stat-label">Videos</span>
                </div>
                <div class="rb-stat-card">
                    <span class="rb-stat-value"><?php echo count($allnews); ?></span>
                    <span class="rb-stat-label">Gallery</span>
                </div>
                <div class="rb-stat-card">
                    <span class="rb-stat-value"><?php echo count($report); ?></span>
                    <span class="rb-stat-label">Reports</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Archive Grid -->
    <section class="rb-archive-section">
        <div class="container">
            <div class="rb-archive-grid">
                <!-- Media/Activity Items -->
                <?php if(!empty($allgallery)) { foreach($allgallery as $allg) { ?>
                    <div class="rb-archive-item">
                        <div class="rb-media-wrap">
                            <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Media Coverage" loading="lazy">
                        </div>
                    </div>			
                <?php } } ?>

                <?php if(!empty($allactivity)) { foreach($allactivity as $allg) { ?>
                    <div class="rb-archive-item">
                        <div class="rb-media-wrap">
                            <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Media Activity" loading="lazy">
                        </div>
                    </div>			
                <?php } } ?>

                <!-- Video Items -->
                <?php if(!empty($allcampains)) { foreach($allcampains as $allg) { ?>
                    <div class="rb-archive-item">
                        <div class="rb-media-wrap">
                            <div class="rb-video-shell">
                                <?php echo ucfirst(isset($allg->embed) ? $allg->embed : ''); ?>
                            </div>
                        </div>
                    </div>			
                <?php } } ?>

                <!-- News Items -->
                <?php if(!empty($allnews)) { foreach($allnews as $allg) { ?>
                    <div class="rb-archive-item">
                        <div class="rb-media-wrap">
                            <img src="<?php echo URL::asset('uploads/gallery/'.$allg->image);?>" alt="Gallery News" loading="lazy">
                        </div>
                    </div>			
                <?php } } ?>

                <!-- Report Items -->
                <?php if(!empty($report)) { foreach($report as $allg) { ?>
                    <div class="rb-archive-item">
                        <div class="rb-media-wrap">
                            <?php $reportImage = isset($allg->pdfimage) && !empty($allg->pdfimage) ? $allg->pdfimage : '404.png'; ?>
                            <img src="<?php echo URL::asset('uploads/gallery/'.$reportImage);?>" alt="Report" loading="lazy">
                        </div>
                    </div>			
                <?php } } ?>  
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="rb-stats-section" style="padding: 100px 0; border-top: 1px solid #eef2f6;">
        <div class="container text-center">
            <h2 style="font-size: 36px; margin-bottom: 20px;">Academic Inquiries</h2>
            <p style="font-size: 18px; color: #4a5568; max-width: 600px; margin: 0 auto 40px;">If you are an academic researcher or journalist seeking access to our full archive or to conduct a study, please reach out.</p>
            <a href="<?php echo action('MainController@contact'); ?>" style="display: inline-block; padding: 16px 40px; background: #e65a32; color: #fff; font-weight: 700; border-radius: 50px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#1f2f46'" onmouseout="this.style.backgroundColor='#e65a32'">Get in Touch</a>
        </div>
    </section>
</div>

@include('includes.footer')
