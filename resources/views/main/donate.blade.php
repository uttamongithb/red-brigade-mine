@include('includes.header')

<style>
/* Reset & Base - Consistent Sharp Design Language */
.rb-donate-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-donate-page h1, .rb-donate-page h2, .rb-donate-page h3, .rb-donate-page h4, .rb-donate-page h5 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}

/* Consistent Container Width (90%) */
.rb-donate-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-donate-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-donate-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-552.jpeg"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-donate-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-donate-hero .container { position: relative; z-index: 2; }
.rb-donate-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-donate-hero p {
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

/* Donation Content */
.rb-donation-content {
    padding: 100px 0;
    background: #fff;
}
.rb-donation-grid {
    display: flex;
    flex-direction: column;
    gap: 80px;
}

/* PayPal Box (Sharp edges) */
.rb-paypal-box {
    background: #f8fafc;
    padding: 60px;
    text-align: center;
    border: 1px solid #e2e8f0;
    box-shadow: 0 15px 35px rgba(0,0,0,0.05);
}
.rb-paypal-logo {
    display: inline-block;
    background: #fff;
    padding: 20px 40px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    margin-bottom: 30px;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease;
}
.rb-paypal-logo:hover {
    transform: translateY(-5px);
    border-color: #E31E24;
}
.rb-paypal-logo img {
    max-width: 200px;
}

/* Bank Grid (Sharp edges) */
.rb-bank-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}
.rb-bank-card {
    background: #fff;
    padding: 50px;
    border: 1px solid #eef2f6;
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}
.rb-bank-card:hover {
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    border-color: #E31E24;
}
.rb-bank-card h3 {
    font-size: 28px;
    color: #1f2f46;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f5f9;
}
.rb-bank-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.rb-bank-list li {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px dashed #f1f5f9;
    font-size: 16px;
    display: flex;
    justify-content: space-between;
}
.rb-bank-list li:last-child { border: none; margin-bottom: 0; padding-bottom: 0; }
.rb-bank-list li strong { color: #1f2f46; font-weight: 600; }
.rb-bank-list li span { color: #4a5568; font-family: monospace; font-size: 15px; }

@media (max-width: 991px) {
    .rb-bank-grid { grid-template-columns: 1fr; }
    .rb-donate-hero h1 { font-size: 52px; }
}
@media (max-width: 768px) {
    .rb-donate-hero h1 { font-size: 42px; }
    .rb-donate-hero p { font-size: 18px; }
    .rb-paypal-box { padding: 40px 20px; }
    .rb-bank-card { padding: 30px; }
    .rb-bank-list li { flex-direction: column; gap: 5px; }
}
</style>

<div class="rb-donate-page">
    <!-- Hero Section -->
    <section class="rb-donate-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Make an Impact</span>
            <h1>Support the Movement</h1>
            <p>Your contribution directly supports our mission to provide self-defense training and rehabilitation for survivors.</p>
        </div>
    </section>

    <!-- Donation Content -->
    <section class="rb-donation-content">
        <div class="container">
            <div class="rb-donation-grid">
                
                <!-- Online Donation -->
                <div class="rb-paypal-box">
                    <span class="rb-kicker">Digital Contribution</span>
                    <h2 style="font-size: 42px; margin-bottom: 20px;">International & Online</h2>
                    <p style="font-size: 18px; color: #64748b; max-width: 600px; margin: 0 auto 40px;">For international supporters and quick digital transfers, you can donate securely via PayPal.</p>
                    
                    <a href="https://www.paypal.me/MissVishwakarma" target="_blank" class="rb-paypal-logo">
                        <img src="<?php echo URL::asset('uploads/gallery/paypal.png');?>" alt="PayPal Donation">
                    </a>
                    <p style="margin-top: 10px; font-weight: 600; color: #1f2f46;">Click the logo to open PayPal</p>
                </div>

                <!-- Bank Transfers -->
                <div class="rb-bank-section">
                    <div style="text-align: center; margin-bottom: 60px;">
                        <span class="rb-kicker">Direct Support</span>
                        <h2 style="font-size: 42px;">Bank Transfer Details</h2>
                        <p style="font-size: 18px; color: #64748b;">For Indian citizens, you can donate via direct bank transfer using the verified account details below.</p>
                    </div>

                    <div class="rb-bank-grid">
                        <!-- Red Brigade Account -->
                        <div class="rb-bank-card">
                            <h3>Red Brigade Lucknow</h3>
                            <ul class="rb-bank-list">
                                <li><strong>Trust Name</strong> <span>Red Brigade Lucknow</span></li>
                                <li><strong>Bank Name</strong> <span>Panjab & Sind Bank</span></li>
                                <li><strong>Account No.</strong> <span>08021000012625</span></li>
                                <li><strong>Account Type</strong> <span>Saving</span></li>
                                <li><strong>IFSC Code</strong> <span>PSIB0000802</span></li>
                                <li><strong>PAN Number</strong> <span>AACTR9516J</span></li>
                                <li><strong>Branch</strong> <span>Indira Nagar, Lucknow</span></li>
                            </ul>
                        </div>

                        <!-- Usha's Account -->
                        <div class="rb-bank-card">
                            <h3>Usha Vishwakarma</h3>
                            <ul class="rb-bank-list">
                                <li><strong>Account Holder</strong> <span>Usha Vishwakarma</span></li>
                                <li><strong>Bank Name</strong> <span>State Bank of India</span></li>
                                <li><strong>Account No.</strong> <span>30261158308</span></li>
                                <li><strong>IFSC Code</strong> <span>SBIN0008189</span></li>
                                <li><strong>Branch</strong> <span>Mahanagar, Lucknow</span></li>
                                <li><strong>Pin Code</strong> <span>226006</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Final Message -->
    <section class="rb-join-section" style="padding: 100px 0; background: #fff; text-align: center; border-top: 1px solid #eef2f6;">
        <div class="container">
            <span class="rb-kicker" style="color: #E31E24; letter-spacing: 3px; font-size: 12px; margin-bottom: 10px;">Every Contribution Counts</span>
            <h2 style="color: #1f2f46; font-size: 36px; margin: 0 0 20px; font-family: 'Playfair Display', serif;">Empower the Change</h2>
            <p style="color: #64748b; font-size: 18px; max-width: 650px; margin: 0 auto 35px; font-weight: 400; line-height: 1.6;">Whether it is a small monthly gift or a one-time donation, your support enables us to reach more villages and train more girls in self-defense.</p>
            <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact']); ?>" class="rb-btn" style="display: inline-block; padding: 14px 40px; background: #E31E24; color: #fff; font-weight: 700; border-radius: 4px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#1f2f46'" onmouseout="this.style.backgroundColor='#E31E24'">Contact Us for Queries</a>
        </div>
    </section>
</div>

@include('includes.footer')
