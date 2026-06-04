@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-single-work-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.8;
    background-color: #fff;
    padding-bottom: 100px;
}
.rb-single-work-page h1, .rb-single-work-page h2, .rb-single-work-page h3, .rb-single-work-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}

/* Post Header */
.rb-post-header {
    padding: 100px 0 60px;
    text-align: center;
    background: #f8fafc;
    border-bottom: 1px solid #eef2f6;
}
.rb-post-header .container {
    max-width: 900px;
}
.rb-post-date {
    display: inline-block;
    color: #E31E24;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
}
.rb-post-title {
    font-size: 48px;
    line-height: 1.2;
    margin-bottom: 0;
}

/* Featured Image */
.rb-post-featured-image {
    max-width: 1000px;
    margin: -40px auto 60px;
    position: relative;
    z-index: 10;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    background: #fff; 
}
.rb-post-featured-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* Post Body */
.rb-post-body {
    max-width: 800px;
    margin: 0 auto;
    font-size: 18px;
    color: #4a5568;
}
.rb-post-body p {
    margin-bottom: 25px;
}
.rb-post-body img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 30px 0;
}
.rb-post-body h2, .rb-post-body h3 {
    margin: 40px 0 20px;
}
.rb-post-body ul, .rb-post-body ol {
    margin-bottom: 25px;
    padding-left: 20px;
}
.rb-post-body li {
    margin-bottom: 10px;
}

/* Back Button */
.rb-back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 60px;
    color: #64748b;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s;
}
.rb-back-link:hover {
    color: #E31E24;
}

@media (max-width: 768px) {
    .rb-post-title { font-size: 36px; }
    .rb-post-header { padding: 80px 0 40px; }
    .rb-post-featured-image { margin-top: -20px; border-radius: 0; }
    .rb-post-body { padding: 0 20px; font-size: 16px; }
}
</style>

<div class="rb-single-work-page">
    <!-- Header -->
    <header class="rb-post-header">
        <div class="container">
            <?php 
                $dateToUse = !empty($thiswork->date) ? $thiswork->date : $thiswork->created_at;
                // If it looks like a standard timestamp, format it nicely. 
                // Otherwise, it might be a custom string like '15th Dec 2018'
                $formattedDate = $dateToUse;
                if (strtotime($dateToUse) !== false && (strpos($dateToUse, '-') !== false || strpos($dateToUse, ':') !== false)) {
                    $formattedDate = date('F d, Y', strtotime($dateToUse));
                }
            ?>
            <span class="rb-post-date"><?php echo $formattedDate; ?></span>
            <h1 class="rb-post-title"><?php echo ucfirst($thiswork->name); ?></h1>
        </div>
    </header>

    <!-- Featured Image -->
    <?php if(!empty($thiswork->image)): ?>
    <div class="rb-post-featured-image container">
        <img src="<?php echo URL::asset('uploads/news/'.trim($thiswork->image));?>" alt="<?php echo $thiswork->name; ?>">
    </div>
    <?php else: ?>
    <div style="height: 60px;"></div>
    <?php endif; ?>

    <!-- Content -->
    <div class="container">
        <div class="rb-post-body">
            <?php echo $thiswork->description; ?>
            
            <div style="text-align: center;">
                <a href="<?php echo action('MainController@event'); ?>" class="rb-back-link"><i class="fas fa-arrow-left"></i> Back to Our Work</a>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
