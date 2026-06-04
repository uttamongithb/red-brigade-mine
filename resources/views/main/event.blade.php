@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-event-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-event-page h1, .rb-event-page h2, .rb-event-page h3, .rb-event-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}

/* Consistent Container Width (90%) */
.rb-event-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-event-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-event-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-694.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-event-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-event-hero .container { position: relative; z-index: 2; }
.rb-event-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-event-hero p {
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

/* Event Grid */
.rb-event-section {
    padding: 100px 0;
}
.rb-section-header {
    text-align: center;
    margin-bottom: 60px;
}
.rb-section-header h2 {
    font-size: 46px;
    color: #1f2f46;
}

.rb-event-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.rb-event-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
    border: 1px solid #eef2f6;
    display: flex;
    flex-direction: column;
}
.rb-event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.rb-event-thumb {
    height: 240px;
    overflow: hidden;
    background: #f1f5f9;
}
.rb-event-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-event-card:hover .rb-event-thumb img {
    transform: scale(1.05);
}
.rb-event-content {
    padding: 24px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.rb-event-content h4 {
    font-size: 22px;
    margin-bottom: 12px;
    line-height: 1.2;
    color: #1f2f46;
}
.rb-event-content p {
    font-size: 15px;
    color: #64748b;
    margin-bottom: 20px;
}
.rb-event-meta {
    margin-top: auto;
    padding-top: 15px;
    border-top: 1px solid #f1f5f9;
    list-style: none;
    padding-left: 0;
}
.rb-event-meta li {
    font-size: 13px;
    color: #4a5568;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.rb-event-meta li i {
    color: #E31E24;
    width: 16px;
}

/* Responsive */
@media (max-width: 1100px) {
    .rb-event-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-event-hero h1 { font-size: 42px; }
    .rb-event-grid { grid-template-columns: 1fr; }
    .rb-section-header h2 { font-size: 32px; }
}
</style>

<div class="rb-event-page">
    <!-- Hero Section -->
    <section class="rb-event-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Stay Connected</span>
            <h1>Our Events</h1>
            <p>Join our community gatherings, training workshops, and awareness campaigns across the country.</p>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="rb-event-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">Mark Your Calendar</span>
                <h2>Events & Campaigns</h2>
            </div>

            <div class="rb-event-grid">
                <?php if(!empty($allevent)) { foreach($allevent as $alle) { ?>
                    <article class="rb-event-card">
                        <div class="rb-event-thumb">
                            <img src="<?php echo URL::asset('uploads/news/'.$alle->image);?>" alt="{{ $alle->name }}">
                        </div>
                        <div class="rb-event-content">
                            <h4 class="title"><?php echo ucfirst($alle->name); ?></h4>
                            <p><?php echo substr(strip_tags($alle->description), 0, 120); ?>...</p>
                            
                            <ul class="rb-event-meta">
                                <li><i class="far fa-calendar-alt"></i> <?php echo $alle->date; ?></li>
                                <li><i class="far fa-clock"></i> <?php echo $alle->time_interval; ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo $alle->city; ?></li>
                            </ul>
                        </div>
                    </article>
                <?php }} ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="rb-event-section" style="padding-top: 0;">
        <div class="container text-center">
            <div style="background: #1f2f46; border-radius: 24px; padding: 60px; color: #fff;">
                <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">Want to Organize an Event?</h2>
                <p style="color: #e2e8f0; font-size: 18px; max-width: 700px; margin: 0 auto 40px;">If you would like to collaborate or host a Red Brigade self-defense workshop at your institution, please get in touch with us.</p>
                <a href="<?php echo action('MainController@contact'); ?>" style="display: inline-block; padding: 16px 40px; background: #E31E24; color: #fff; font-weight: 700; border-radius: 50px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#fff'; this.style.color='#1f2f46'" onmouseout="this.style.backgroundColor='#E31E24'; this.style.color='#fff'">Contact Us Today</a>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')
