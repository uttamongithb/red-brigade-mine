@include('includes.header')

<style>
/* Root Variables */
:root {
    --primary: #E31E24;
    --primary-dark: #B9151B;
    --text-dark: #1A1A1A;
    --text-gray: #4A4A4A;
    --bg-light: #FAFAFA;
    --white: #FFFFFF;
    --radius: 12px;
}

body { font-family: 'Open Sans', sans-serif; background-color: var(--bg-light); color: var(--text-gray); }
h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; font-weight: 700; color: var(--text-dark); margin: 0; }

.section { padding: 90px 0; }
.container-box { width: 92%; max-width: 1280px; margin: 0 auto; }

/* 1. Hero Immersive */
.hero-edu {
    display: flex;
    min-height: 85vh;
    background: #000;
    position: relative;
    overflow: hidden;
}
.hero-bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: url('<?php echo URL::asset("uploads/news/rb-education.png"); ?>') no-repeat center center/cover;
    opacity: 0.4;
    z-index: 1;
}
.hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    padding: 0 5%;
}
.hero-content h1 {
    font-size: clamp(40px, 6vw, 72px);
    color: var(--white);
    line-height: 1.1;
    max-width: 800px;
    margin-bottom: 20px;
}
.hero-content h1 span { color: var(--primary); }
.hero-content p {
    font-size: 20px;
    color: #DDDDDD;
    max-width: 600px;
    margin-bottom: 40px;
}

/* 2. Philosophy Section (Tree vs Pot) */
.philosophy-section { background: var(--white); }
.philosophy-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}
.phi-text h2 { font-size: 40px; margin-bottom: 30px; position: relative; padding-bottom: 20px; }
.phi-text h2::after { content: ''; position: absolute; left: 0; bottom: 0; width: 60px; height: 4px; background: var(--primary); }
.phi-text p { font-size: 18px; line-height: 1.8; margin-bottom: 20px; }
.phi-quote {
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    color: var(--primary);
    font-style: italic;
    border-left: 4px solid var(--primary);
    padding-left: 20px;
    margin: 40px 0;
}
.phi-image { position: relative; }
.phi-image img { width: 100%; border-radius: var(--radius); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }

/* 3. Annu's Journey (Timeline) */
.journey-section { background: #111; color: var(--white); }
.journey-section h2 { color: var(--white); text-align: center; font-size: 40px; margin-bottom: 60px; }
.timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}
.timeline::before {
    content: '';
    position: absolute;
    top: 0; left: 50%; width: 2px; height: 100%;
    background: rgba(255,255,255,0.2);
    transform: translateX(-50%);
}
.timeline-item {
    position: relative;
    margin-bottom: 40px;
    width: 50%;
    padding: 0 40px;
}
.timeline-item:nth-child(odd) { left: 0; text-align: right; }
.timeline-item:nth-child(even) { left: 50%; text-align: left; }
.timeline-dot {
    position: absolute;
    top: 0; 
    width: 20px; height: 20px;
    background: var(--primary);
    border-radius: 50%;
    box-shadow: 0 0 0 4px #111;
}
.timeline-item:nth-child(odd) .timeline-dot { right: -10px; }
.timeline-item:nth-child(even) .timeline-dot { left: -10px; }
.timeline-content h3 { color: var(--white); font-size: 24px; margin-bottom: 10px; }
.timeline-content p { color: #BBB; font-size: 16px; }

/* 4. Core Focus Hover Reveal */
.focus-section { background: var(--bg-light); text-align: center; }
.focus-section h2 { font-size: 40px; margin-bottom: 50px; }
.reveal-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}
.reveal-card {
    position: relative;
    height: 350px;
    border-radius: var(--radius);
    overflow: hidden;
    cursor: pointer;
    background: var(--white);
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.reveal-img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.reveal-card:hover .reveal-img { transform: scale(1.1); }
.reveal-overlay {
    position: absolute;
    bottom: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 30px;
    color: var(--white);
    transition: all 0.4s ease;
}
.reveal-overlay h3 { color: var(--white); font-size: 22px; margin-bottom: 10px; transform: translateY(40px); transition: transform 0.4s ease; }
.reveal-desc {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: all 0.4s ease;
    font-size: 15px;
    color: #EEE;
}
.reveal-card:hover .reveal-overlay { background: rgba(227,30,36,0.9); }
.reveal-card:hover .reveal-overlay h3 { transform: translateY(0); }
.reveal-card:hover .reveal-desc { opacity: 1; max-height: 200px; margin-top: 15px; }

/* 5. Stats Counters */
.stats-section {
    background: var(--primary);
    color: var(--white);
    padding: 60px 0;
}
.stats-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 40px;
    text-align: center;
}
.stat-box h2 { color: var(--white); font-size: 50px; margin-bottom: 10px; }
.stat-box p { font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin: 0; color: #FFF0F0; }

/* 6. Masonry Gallery */
.gallery-section { background: var(--white); text-align: center; }
.gallery-section h2 { font-size: 40px; margin-bottom: 50px; }
.masonry-grid {
    column-count: 3;
    column-gap: 20px;
    padding-bottom: 20px;
}
.masonry-item {
    break-inside: avoid;
    margin-bottom: 20px;
    border-radius: var(--radius);
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
.masonry-item img {
    width: 100%;
    display: block;
    transition: transform 0.4s ease;
}
.masonry-item:hover img { transform: scale(1.05); }

/* 7. CTA Banner */
.cta-banner {
    background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('<?php echo URL::asset("uploads/news/rb-street-play.png"); ?>') center/cover;
    padding: 100px 0;
    text-align: center;
}
.cta-banner h2 { color: var(--white); font-size: 48px; margin-bottom: 20px; }
.btn-solid-primary {
    display: inline-block;
    background: var(--primary);
    color: var(--white);
    padding: 16px 40px;
    font-size: 18px;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none !important;
    transition: all 0.3s ease;
    margin-top: 30px;
}
.btn-solid-primary:hover {
    background: var(--white);
    color: var(--primary);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

@media (max-width: 991px) {
    .philosophy-grid { grid-template-columns: 1fr; }
    .timeline::before { left: 30px; }
    .timeline-item { width: 100%; padding-left: 70px; padding-right: 0; }
    .timeline-item:nth-child(odd), .timeline-item:nth-child(even) { left: 0; text-align: left; }
    .timeline-item:nth-child(odd) .timeline-dot, .timeline-item:nth-child(even) .timeline-dot { left: 20px; right: auto; }
    .masonry-grid { column-count: 2; }
}
@media (max-width: 768px) {
    .hero-content h1 { font-size: 40px; }
    .masonry-grid { column-count: 1; }
    .phi-text h2, .journey-section h2, .focus-section h2, .gallery-section h2 { font-size: 32px; }
}
</style>

<!-- 1. Hero Section -->
<section class="hero-edu">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>Balmanch: Education for <span>Every Child</span></h1>
        <p>A transformative community education centre serving as both a primary learning space for children from marginalised communities and a rehabilitation hub for survivors.</p>
    </div>
</section>

<!-- 2. Balmanch - Education for All -->
<section class="section philosophy-section">
    <div class="container-box">
        <div class="philosophy-grid">
            <div class="phi-text">
                <h2>Education & Rehabilitation Centre</h2>
                <p>Based in Madiyaon, Lucknow, <strong>Balmanch</strong> is Red Brigade's community education centre. It serves a dual purpose: providing fundamental education for <strong>children from marginalised communities</strong> (who are not necessarily survivors of abuse) and acting as a safe rehabilitation and engagement centre for survivors.</p>
                <p>We believe in "The Tree, Not the Pot" philosophy. Children are often nurtured to be decorative potted plants—contained and dependent. Balmanch exists to change that, ensuring every child, regardless of their background, is nurtured to grow deep roots and reach their own sky.</p>
                <div class="phi-quote">
                    "Whether they are seeking basic literacy or a safe space to heal, every child at Balmanch is nurtured to become a strong, independent leader."
                </div>
            </div>
            <div class="phi-image">
                <img src="<?php echo URL::asset('uploads/news/rb-skill-dev.png'); ?>" alt="Red Brigade Balmanch Education">
            </div>
        </div>
    </div>
</section>

<!-- 3. Annu's Transformation Journey -->
<section class="section journey-section">
    <div class="container-box">
        <h2>A Living Example: Annu's Journey</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>The Trauma</h3>
                    <p>At 12 years old, Annu was a girl from a broken family who was repeatedly abused. She was deeply traumatized and placed in a government shelter home.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>The Rescue & Support</h3>
                    <p>Red Brigade rescued her, supported her through five years in the shelter, never lost touch, and eventually brought her back into the team.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>The Student</h3>
                    <p>She became a student at Balmanch, finding a safe space to learn, heal, and rebuild her internal strength and self-image.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>The Leader</h3>
                    <p>Today, Annu is a certified self-defense trainer and the coordinator of Balmanch — leading the same education centre where she was once a student.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Impact Stats (New) -->
<section class="stats-section">
    <div class="container-box">
        <div class="stats-grid">
            <div class="stat-box">
                <h2 class="counter" data-target="200000">0</h2>
                <p>Girls Trained</p>
            </div>
            <div class="stat-box">
                <h2 class="counter" data-target="500">0</h2>
                <p>Schools Covered</p>
            </div>
            <div class="stat-box">
                <h2 class="counter" data-target="150">0</h2>
                <p>Communities Reached</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. Dynamic Core Focus (Hover Reveal) -->
<section class="section focus-section">
    <div class="container-box">
        <h2>Our Core Interventions</h2>
        <div class="reveal-grid">
            <?php if(isset($alleducation_cards) && count($alleducation_cards) > 0) { 
                foreach($alleducation_cards as $card) {
            ?>
            <div class="reveal-card">
                <?php if(!empty($card->image)) { ?>
                    <img src="<?php echo URL::asset('uploads/gallery/'.$card->image); ?>" alt="<?php echo $card->name; ?>" class="reveal-img">
                <?php } else { ?>
                    <div style="width:100%; height:100%; background:#333; display:flex; align-items:center; justify-content:center;">
                        <i class="fas <?php echo $card->icon; ?>" style="font-size: 80px; color: #555;"></i>
                    </div>
                <?php } ?>
                <div class="reveal-overlay">
                    <h3><?php echo $card->name; ?></h3>
                    <div class="reveal-desc">
                        <?php echo $card->description; ?>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <!-- Fallbacks -->
            <div class="reveal-card">
                <div style="width:100%; height:100%; background:#222; display:flex; align-items:center; justify-content:center;">
                    <i class="fas fa-book-reader" style="font-size: 80px; color: #444;"></i>
                </div>
                <div class="reveal-overlay">
                    <h3>Literacy & Support</h3>
                    <div class="reveal-desc">Providing direct educational assistance and bridge courses for school dropouts.</div>
                </div>
            </div>
            <div class="reveal-card">
                <div style="width:100%; height:100%; background:#222; display:flex; align-items:center; justify-content:center;">
                    <i class="fas fa-shield-alt" style="font-size: 80px; color: #444;"></i>
                </div>
                <div class="reveal-overlay">
                    <h3>Child Safety</h3>
                    <div class="reveal-desc">Teaching rights, "Good Touch & Bad Touch," and vital protection strategies.</div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- 6. Immersive Image Gallery (Masonry) -->
<section class="section gallery-section">
    <div class="container-box">
        <h2>Glimpses of Impact</h2>
        <div class="masonry-grid">
            <?php if(isset($education_items) && count($education_items) > 0) { 
                foreach($education_items as $item) { ?>
                <div class="masonry-item">
                    <img src="<?php echo URL::asset('uploads/gallery/'.$item->image); ?>" alt="<?php echo $item->name; ?>" loading="lazy">
                </div>
            <?php } } else { ?>
                <div class="masonry-item"><img src="<?php echo URL::asset('uploads/news/rb-education.png'); ?>" alt="Edu"></div>
                <div class="masonry-item"><img src="<?php echo URL::asset('uploads/news/rb-skill-dev.png'); ?>" alt="Skill"></div>
                <div class="masonry-item"><img src="<?php echo URL::asset('uploads/news/rb-street-play.png'); ?>" alt="Play"></div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- 7. Call to Action -->
<section class="cta-banner">
    <div class="container-box">
        <h2>Join the Movement. Support Balmanch.</h2>
        <a href="<?php echo action('MainController@donate'); ?>" class="btn-solid-primary">Donate Now</a>
    </div>
</section>

<!-- Counter Animation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 200; 

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace(/,/g, '');
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc).toLocaleString();
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target.toLocaleString() + '+';
                }
            };
            updateCount();
        });
    };

    // Intersection Observer to start animation when visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.stats-section');
    if(statsSection) observer.observe(statsSection);
});
</script>

@include('includes.footer')