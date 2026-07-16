@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-blog-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-blog-page h1, .rb-blog-page h2, .rb-blog-page h3, .rb-blog-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}

/* Consistent Container Width (90%) */
.rb-blog-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-blog-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-blog-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/Redbrigade-lucknow.jpg"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-blog-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-blog-hero .container { position: relative; z-index: 2; }
.rb-blog-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-blog-hero p {
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

/* Blog Listing Section */
.rb-blog-section {
    padding: 100px 0;
    background: #f8fafc;
}
.rb-blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}
.rb-blog-card {
    background: #fff;
    border: 1px solid #eef2f6;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.rb-blog-card:hover {
    transform: translateY(-8px);
    border-color: #E31E24;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
}
.rb-blog-thumbnail {
    aspect-ratio: 4/3;
    overflow: hidden;
    position: relative;
    background: #111a2b;
}
.rb-blog-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.rb-blog-card:hover .rb-blog-thumbnail img {
    transform: scale(1.05);
}
.rb-blog-content {
    padding: 30px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.rb-blog-date {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.rb-blog-title {
    font-size: 22px;
    color: #1f2f46;
    margin-bottom: 15px;
    line-height: 1.4;
}
.rb-blog-excerpt {
    font-size: 15px;
    color: #4a5568;
    margin-bottom: 25px;
    flex-grow: 1;
}
.rb-read-more {
    font-size: 14px;
    font-weight: 700;
    color: #E31E24;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
}
.rb-read-more:hover {
    color: #1f2f46;
}

@media (max-width: 1100px) {
    .rb-blog-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-blog-hero h1 { font-size: 42px; }
    .rb-blog-grid { grid-template-columns: 1fr; }
}
</style>

<div class="rb-blog-page">
    <!-- Hero Section -->
    <section class="rb-blog-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Updates & Stories</span>
            <h1>Our Blog</h1>
            <p>Read the latest news, stories, and updates from the Red Brigade Lucknow movement.</p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="rb-blog-section">
        <div class="container">
            <div class="rb-blog-grid">
                <?php if(!empty($allblog)) { foreach($allblog as $post) { ?>
                    <article class="rb-blog-card">
                        <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleblog'], $post->slug); ?>" class="rb-blog-thumbnail">
                            <?php $imagePath = !empty($post->image) ? 'uploads/news/'.trim($post->image) : 'uploads/img/logo.png'; ?>
                            <img src="<?php echo URL::asset($imagePath); ?>" alt="<?php echo $post->name; ?>">
                        </a>
                        <div class="rb-blog-content">
                            <span class="rb-blog-date"><?php echo date('F d, Y', strtotime($post->created_at)); ?></span>
                            <h3 class="rb-blog-title"><a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleblog'], $post->slug); ?>" style="color: inherit; text-decoration: none;"><?php echo $post->name; ?></a></h3>
                            <div class="rb-blog-excerpt">
                                <?php echo substr(strip_tags($post->description), 0, 120); ?>...
                            </div>
                            <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleblog'], $post->slug); ?>" class="rb-read-more">Read Full Story <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php } } else { ?>
                    <div class="col-12 text-center" style="grid-column: 1 / -1; padding: 50px 0;">
                        <h3 style="color: #64748b;">No stories published yet. Please check back later.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')
