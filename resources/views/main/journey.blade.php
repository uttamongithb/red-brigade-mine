@include('includes.header')

<style>
:root {
    --primary: #E31E24;
    --primary-dark: #B9151B;
    --navy-dark: #111a2b;
    --navy-light: #1f2f46;
    --text-dark: #1A1A1A;
    --text-gray: #4A4A4A;
    --bg-light: #FAFAFA;
    --white: #FFFFFF;
    --radius: 12px;
    --transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.rb-topic-page {
    font-family: 'Open Sans', sans-serif;
    color: var(--text-gray);
    background-color: var(--bg-light);
}

.rb-topic-hero {
    position: relative;
    background: var(--navy-dark);
    padding: 180px 0 120px;
    text-align: center;
    color: var(--white);
    overflow: hidden;
}

.rb-topic-hero-bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(rgba(17, 26, 40, 0.85), rgba(17, 26, 40, 0.95)), url('<?php echo URL::asset("uploads/slider/sunshine-slider-694.png"); ?>') no-repeat center center/cover;
    z-index: 1;
}

.rb-topic-hero .container {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: 0 auto;
    padding: 0 20px;
}

.rb-kicker {
    color: var(--primary);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 14px;
    display: inline-block;
    margin-bottom: 15px;
}

.rb-topic-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(32px, 5vw, 56px);
    font-weight: 800;
    color: var(--white);
    line-height: 1.2;
    margin-bottom: 20px;
}

.rb-topic-hero p {
    font-size: clamp(16px, 1.8vw, 20px);
    color: #e2e8f0;
    font-weight: 300;
    line-height: 1.6;
}

.rb-tabs-section {
    padding: 60px 0 90px;
}

.rb-tabs-nav {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.rb-tab-btn {
    padding: 14px 28px;
    border: 2px solid #eef2f6;
    background: var(--white);
    color: var(--navy-light);
    font-weight: 700;
    border-radius: 30px;
    cursor: pointer;
    font-size: 15px;
    transition: var(--transition);
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
}

.rb-tab-btn:hover {
    border-color: var(--primary);
    color: var(--primary);
}

.rb-tab-btn.active {
    background: var(--primary);
    border-color: var(--primary);
    color: var(--white);
    box-shadow: 0 10px 20px rgba(227, 30, 36, 0.15);
}

.rb-tab-content {
    display: none;
}

.rb-tab-content.active {
    display: block;
    animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.rb-content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.rb-card-premium {
    background: var(--white);
    border-radius: var(--radius);
    padding: 40px;
    border: 1px solid #eef2f6;
    box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
}

.rb-card-premium:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    border-color: var(--primary);
}

.rb-card-icon {
    font-size: 32px;
    color: var(--primary);
    margin-bottom: 20px;
}

.rb-card-title {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 700;
    color: var(--navy-light);
    margin-bottom: 15px;
}

.rb-card-text {
    font-size: 15px;
    line-height: 1.7;
    color: var(--text-gray);
}

.rb-stats-row {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 50px;
    background: var(--white);
    padding: 40px;
    border-radius: var(--radius);
    box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    border: 1px solid #eef2f6;
}

.rb-stat-item {
    text-align: center;
    flex: 1;
    min-width: 150px;
}

.rb-stat-number {
    font-family: 'Poppins', sans-serif;
    font-size: 48px;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
    margin-bottom: 10px;
}

.rb-stat-label {
    font-size: 14px;
    font-weight: 700;
    color: var(--navy-light);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Home-page Card style replication */
.rb-blog-card {
    background: #fff;
    border-radius: 0;
    overflow: hidden;
    box-shadow: 0 12px 28px rgba(26, 39, 59, .12);
    height: 100%;
    transition: all 0.3s ease;
    text-align: left;
}
.rb-blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(26,39,59,0.18);
}
.rb-blog-card-img {
    position: relative;
    height: 380px;
    overflow: hidden;
}
.rb-blog-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.rb-blog-card-img .rb-blog-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    margin: 0;
    color: #1e2d43;
    background: rgba(246, 249, 255, .86);
    border: 1px solid rgba(30, 45, 67, .1);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 999px;
    letter-spacing: .07em;
}
.rb-blog-card-body {
    padding: 14px 14px 16px;
}
.rb-blog-card-title {
    margin: 0 0 10px;
    color: #273247;
    font-size: 20px;
    line-height: 1.2;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
}
.rb-blog-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 24px;
    width: 100%;
    margin: 0 auto;
}
@media (max-width: 767px) {
    .rb-blog-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="rb-topic-page">
    <!-- Hero Section -->
    <section class="rb-topic-hero">
        <div class="rb-topic-hero-bg"></div>
        <div class="container">
            <h1>Combating Sexual Violence</h1>
        </div>
    </section>

    <!-- Content & Tabs Section -->
    <section class="rb-tabs-section">
        <div class="container" style="width: 90%; max-width: 1200px; margin: 0 auto;">
            <?php
                $ongoing = $initiatives->where('type', 'ongoing');
                $previous = $initiatives->where('type', 'previous');
                $upcoming = $initiatives->where('type', 'upcoming');
            ?>

            <!-- Tab Navigation Buttons -->
            <div class="rb-tabs-nav">
                <button class="rb-tab-btn <?php echo ($filter === 'ongoing') ? 'active' : ''; ?>" onclick="switchTab(event, 'ongoing')">Ongoing Work</button>
                <button class="rb-tab-btn <?php echo ($filter === 'previous') ? 'active' : ''; ?>" onclick="switchTab(event, 'previous')">Previous Work</button>
                <button class="rb-tab-btn <?php echo ($filter === 'upcoming') ? 'active' : ''; ?>" onclick="switchTab(event, 'upcoming')">Upcoming Work</button>
            </div>

            <!-- Tab Content: Ongoing Work -->
            <div id="ongoing" class="rb-tab-content <?php echo ($filter === 'ongoing') ? 'active' : ''; ?>">
                <?php if (count($ongoing) > 0) { ?>
                    <div class="rb-blog-grid" style="margin-top: 0;">
                        <?php foreach ($ongoing as $item) { ?>
                            <article class="rb-blog-card">
                                <div class="rb-blog-card-img">
                                    <img src="<?php echo URL::asset('uploads/img/'.$item->image); ?>" alt="<?php echo $item->title; ?>" loading="lazy">
                                    <span class="rb-blog-badge">Ongoing</span>
                                </div>
                                <div class="rb-blog-card-body">
                                    <h4 class="rb-blog-card-title"><?php echo $item->title; ?></h4>
                                    <?php if (!empty($item->tagline)) { ?>
                                        <p class="rb-blog-card-excerpt" style="color: #E31E24; font-weight: 600; font-style: italic; margin-bottom: 8px;">"<?php echo $item->tagline; ?>"</p>
                                    <?php } ?>
                                    <?php if (!empty($item->collaboration)) { ?>
                                        <div style="display: flex; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 10px; margin-top: 10px;">
                                            <span style="font-size: 11px; font-weight: 700; color: #7f8da3; text-transform: uppercase; letter-spacing: 0.5px; margin-right: 6px;">In Collaboration With:</span>
                                            <strong style="color: #273247; font-size: 13px; font-weight: 700;"><?php echo $item->collaboration; ?></strong>
                                        </div>
                                    <?php } ?>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center py-5">
                            <div class="rb-card-premium" style="padding: 40px; border-style: dashed; border-color: #cbd5e1; align-items: center;">
                                <div class="rb-card-icon" style="color: #64748b;"><i class="fas fa-tasks"></i></div>
                                <h3 class="rb-card-title" style="color: #64748b;">No Ongoing Work</h3>
                                <p class="rb-card-text" style="color: #64748b; margin: 0; max-width: 500px;">There are currently no active ongoing initiatives in this section. Please check back later or view our Previous Work.</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Tab Content: Previous Work -->
            <div id="previous" class="rb-tab-content <?php echo ($filter === 'previous') ? 'active' : ''; ?>">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="rb-card-premium" style="padding: 45px; margin-bottom: 30px; border-left: 5px solid #E31E24;">
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">Conducted training programs in approximately <strong style="color: #E31E24; font-weight: 700;">150 districts across 20+ states in India</strong>, with a primary focus on Lucknow. Trained over <strong style="color: #E31E24; font-weight: 700;">300,000 young women, girls, and adolescents</strong> in self-defense using the 'Nishastr' technique.</p>
                            
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">Prepared <strong style="color: #E31E24; font-weight: 700;">100 self-defense master trainers and trainers</strong> from <strong style="color: #E31E24; font-weight: 700;">40 districts</strong>, including Lucknow, in Uttar Pradesh, with over <strong style="color: #E31E24; font-weight: 700;">1,000 active volunteers</strong>.</p>
                            
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">Active in <strong style="color: #E31E24; font-weight: 700;">500+ educational institutions</strong> (schools, professional and technical institutes, universities) and <strong style="color: #E31E24; font-weight: 700;">500+ villages in Lucknow</strong>, working with adolescent girls and young women from marginalized communities in government and low-cost schools.</p>
                            
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">Organized training workshops for safe workplaces, targeting <strong style="color: #E31E24; font-weight: 700;">women police, local institution representatives, doctors, paramedics, women helpline workers, and female teachers</strong>.</p>
                            
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 0;">Conducted training workshops for numerous <strong style="color: #E31E24; font-weight: 700;">corporate companies</strong>.</p>
                        </div>

                        <?php if (count($previous) > 0) { ?>
                            <!-- Previous Work Cards Grid -->
                            <div class="rb-blog-grid" style="margin-top: 40px;">
                                <?php foreach ($previous as $item) { ?>
                                    <article class="rb-blog-card">
                                        <div class="rb-blog-card-img">
                                            <img src="<?php echo URL::asset('uploads/img/'.$item->image); ?>" alt="<?php echo $item->title; ?>" loading="lazy">
                                            <span class="rb-blog-badge">Previous</span>
                                        </div>
                                        <div class="rb-blog-card-body">
                                            <h4 class="rb-blog-card-title"><?php echo $item->title; ?></h4>
                                            <?php if (!empty($item->tagline)) { ?>
                                                <p class="rb-blog-card-excerpt" style="color: #E31E24; font-weight: 600; font-style: italic; margin-bottom: 8px;">"<?php echo $item->tagline; ?>"</p>
                                            <?php } ?>
                                            <?php if (!empty($item->collaboration)) { ?>
                                                <div style="display: flex; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 10px; margin-top: 10px;">
                                                    <span style="font-size: 11px; font-weight: 700; color: #7f8da3; text-transform: uppercase; letter-spacing: 0.5px; margin-right: 6px;">In Collaboration With:</span>
                                                    <strong style="color: #273247; font-size: 13px; font-weight: 700;"><?php echo $item->collaboration; ?></strong>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </article>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Tab Content: Upcoming Work -->
            <div id="upcoming" class="rb-tab-content <?php echo ($filter === 'upcoming') ? 'active' : ''; ?>">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center py-5">
                        <div class="rb-card-premium" style="padding: 40px; border-style: dashed; border-color: #cbd5e1; align-items: center;">
                            <div class="rb-card-icon" style="color: #64748b;"><i class="fas fa-calendar-alt"></i></div>
                            <h3 class="rb-card-title" style="color: #64748b;">No Upcoming Work</h3>
                            <p class="rb-card-text" style="color: #64748b; margin: 0; max-width: 500px;">There are currently no upcoming initiatives scheduled for this section. Stay tuned for future updates.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
function switchTab(evt, tabId) {
    // Hide all tab contents
    const contents = document.querySelectorAll('.rb-tab-content');
    contents.forEach(content => content.classList.remove('active'));

    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.rb-tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    // Show selected content and activate button
    document.getElementById(tabId).classList.add('active');
    evt.currentTarget.classList.add('active');
}
</script>

@include('includes.footer')
