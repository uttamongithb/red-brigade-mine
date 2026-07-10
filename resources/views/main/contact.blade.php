@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-contact-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-contact-page h1, .rb-contact-page h2, .rb-contact-page h3, .rb-contact-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}

/* Consistent Container Width (90%) */
.rb-contact-page .container {
    width: 90%;
    max-width: none;
}
@media (max-width: 767px) {
    .rb-contact-page .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-contact-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-614.jpeg"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-contact-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-contact-hero .container { position: relative; z-index: 2; }
.rb-contact-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-contact-hero p {
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

/* Contact Section Layout */
.rb-contact-section {
    padding: 100px 0;
}
.rb-contact-grid {
    display: flex;
    gap: 60px;
}
.rb-contact-form-side {
    flex: 2;
}
.rb-contact-info-side {
    flex: 1;
}

/* Form Styling */
.rb-form-card {
    background: #fff;
    padding: 50px;
    border-radius: 24px;
    box-shadow: 0 18px 48px rgba(0,0,0,0.06);
    border: 1px solid #eef2f6;
}
.rb-form-card h2 {
    font-size: 38px;
    margin-bottom: 10px;
}
.rb-form-card p {
    margin-bottom: 40px;
    color: #64748b;
}
.rb-input-group {
    margin-bottom: 25px;
}
.rb-input-field {
    width: 100%;
    padding: 16px 20px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    background: #f8fafc;
    font-size: 16px;
    transition: all 0.3s ease;
}
.rb-input-field:focus {
    outline: none;
    border-color: #E31E24;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(230, 57, 70, 0.1);
}
.rb-textarea {
    min-height: 180px;
    resize: vertical;
}
.rb-submit-btn {
    width: 100%;
    padding: 18px;
    border-radius: 50px;
    background: #E31E24;
    color: #fff;
    font-weight: 700;
    border: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.rb-submit-btn:hover {
    background: #1f2f46;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Info Cards */
.rb-info-card {
    background: #f8fafc;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 25px;
    border: 1px solid #e2e8f0;
    display: flex;
    gap: 20px;
    transition: all 0.3s ease;
}
.rb-info-card:hover {
    border-color: #E31E24;
    background: #fff;
    transform: translateX(10px);
}
.rb-info-icon {
    width: 50px;
    height: 50px;
    background: #E31E24;
    color: #fff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
}
.rb-info-content h4 {
    font-size: 18px;
    margin-bottom: 5px;
    color: #1f2f46;
}
.rb-info-content p, .rb-info-content a {
    font-size: 15px;
    color: #64748b;
    margin: 0;
    text-decoration: none;
}
.rb-info-content a:hover {
    color: #E31E24;
}

/* Map Section */
.rb-map-section {
    padding-bottom: 100px;
}
.rb-map-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.rb-map-iframe {
    width: 100%;
    height: 500px;
    border: 0;
    display: block;
}
.rb-map-overlay {
    position: absolute;
    bottom: 30px;
    right: 30px;
}
.rb-direction-btn {
    padding: 12px 24px;
    background: #fff;
    color: #1f2f46;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    display: inline-block;
}
.rb-direction-btn:hover {
    background: #E31E24;
    color: #fff;
}

/* Alerts */
.rb-alert {
    padding: 15px 25px;
    border-radius: 12px;
    margin-bottom: 30px;
    font-weight: 600;
}
.rb-alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }

@media (max-width: 991px) {
    .rb-contact-grid { flex-direction: column; }
    .rb-contact-hero h1 { font-size: 52px; }
    .rb-form-card { padding: 30px; }
}
@media (max-width: 768px) {
    .rb-contact-hero h1 { font-size: 42px; }
    .rb-contact-hero p { font-size: 18px; }
}
</style>

<div class="rb-contact-page">
    <!-- Hero Section -->
    <section class="rb-contact-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Connect With Us</span>
            <h1>Contact Us</h1>
            <p>Have questions or want to join our mission? We are here to listen and collaborate.</p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="rb-contact-section">
        <div class="container">
            <!-- Messages -->
            <div class="row">
                <div class="col-12">
                    <?php if(Session::has('success')): ?>
                        <div class="rb-alert rb-alert-success"><?php echo Session::get('success'); ?></div>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                        <div class="rb-alert" style="background: #fee2e2; color: #991b1b; border: 1px solid #fecaca;">
                            <ul>
                                <?php foreach($errors->all() as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="rb-contact-grid">
                <!-- Form Side -->
                <div class="rb-contact-form-side">
                    <div class="rb-form-card">
                        <span class="rb-kicker">Send a Message</span>
                        <h2>Get In Touch</h2>
                        <p>Fill out the form below and our team will get back to you as soon as possible.</p>

                        {{ Form::open(array('action' => 'MainController@contact','files' => true)) }}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="rb-input-group">
                                        <input required type="text" name="name" placeholder="Full Name" class="rb-input-field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rb-input-group">
                                        <input required type="email" name="email" placeholder="Email Address" class="rb-input-field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rb-input-group">
                                        <input required type="tel" name="mobile" placeholder="Phone Number" class="rb-input-field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rb-input-group">
                                        <input required type="text" name="state" placeholder="State" class="rb-input-field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rb-input-group">
                                        <input required type="text" name="district" placeholder="District" class="rb-input-field">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="rb-input-group">
                                        <textarea required name="msg" placeholder="Your Message" class="rb-input-field rb-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="rb-submit-btn">Send Message</button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>

                <!-- Info Side -->
                <div class="rb-contact-info-side">
                    <div class="rb-info-card">
                        <div class="rb-info-icon"><i class="fas fa-phone"></i></div>
                        <div class="rb-info-content">
                            <h4>Call Us</h4>
                            <p><a href="tel:+919455025746">+91-9455025746</a></p>
                            <p><a href="tel:+917985463006">+91-7985463006</a></p>
                        </div>
                    </div>

                    <div class="rb-info-card">
                        <div class="rb-info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="rb-info-content">
                            <h4>Email Us</h4>
                            <p><a href="mailto:redbrigade.lucknow@gmail.com">redbrigade.lucknow@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="rb-info-card">
                        <div class="rb-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="rb-info-content">
                            <h4>Locate Us</h4>
                            <p>Ram Nagar Naubasta Khurd, Madiyanv, Sitapur road, Lucknow - 226021, Uttar Pradesh, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="rb-map-section">
        <div class="container">
            <div class="rb-map-wrapper">
                <iframe
                    class="rb-map-iframe"
                    src="https://www.google.com/maps?q=Ram+Nagar+Naubasta+Khurd,+Madiyanv,+Sitapur+road,+Lucknow+-+226021,+Uttar+Pradesh,+India&z=15&output=embed"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Red Brigade Lucknow Location"></iframe>
                <div class="rb-map-overlay">
                    <a class="rb-direction-btn" href="https://www.google.com/maps/@26.8532,80.9984,18z" target="_blank">Get Directions</a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')
