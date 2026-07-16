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
</style>

<div class="rb-topic-page">
    <!-- Hero Section -->
    <section class="rb-topic-hero">
        <div class="rb-topic-hero-bg"></div>
        <div class="container">
            <h1>COVID-19 Crisis Intervention</h1>
        </div>
    </section>

    <!-- Integrated Content & Gallery Section -->
    <section class="rb-integrated-section" style="padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 100%; margin: 0 auto;">
            <div class="row align-items-center mb-5">
                <!-- Text Column -->
                <div class="col-lg-12">
                    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                        <span style="color: #E31E24; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px; display: block; margin-bottom: 10px;">Our Impact</span>
                        <h2 style="font-family: 'Poppins', sans-serif; font-size: 42px; font-weight: 800; color: var(--navy-dark); margin-bottom: 30px; line-height: 1.2;">Standing Strong Together During the COVID-19 Crisis</h2>
                        
                        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 25px; color: #4a5568;">
                            During the unprecedented challenges of the pandemic, we mobilized rapidly to support the most vulnerable. We provided ration kits and daily essentials to <strong style="color: #E31E24;">20,000 people (4,000 families)</strong> during the first wave and <strong style="color: #E31E24;">15,000 people</strong> in the second wave.
                        </p>
                        
                        <div class="row text-left mt-5 mb-5" style="border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 40px 0;">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li style="margin-bottom: 15px; font-size: 16px;"><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 10px;"></i> Distributed <strong>32,000+</strong> cooked meal packets.</li>
                                    <li style="margin-bottom: 15px; font-size: 16px;"><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 10px;"></i> Provided <strong>18,000</strong> milk & oatmeal packets to children.</li>
                                    <li style="margin-bottom: 0; font-size: 16px;"><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 10px;"></i> Distributed <strong>1,500</strong> nutrition & immunity kits.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li style="margin-bottom: 15px; font-size: 16px;"><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 10px;"></i> Empowered <strong>women</strong> to lead distribution efforts.</li>
                                    <li style="margin-bottom: 0; font-size: 16px;"><i class="fas fa-check-circle" style="color: #E31E24; margin-right: 10px;"></i> Counseled women facing <strong>domestic violence</strong> surges.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="row">
                <?php
                    $covidImages = [
                        'covid_1.jpeg',
                        'covid_2.jpeg',
                        'covid_3.jpeg',
                        'covid_4.jpeg',
                        'covid_5.jpeg',
                        'covid_6.jpeg',
                        'covid_7.jpeg',
                        'covid_8.jpeg'
                    ];
                    foreach($covidImages as $img) {
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); height: 400px; position: relative;">
                        <img src="<?php echo URL::asset('uploads/img/'.$img); ?>" alt="COVID-19 Relief" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>



@include('includes.footer')
