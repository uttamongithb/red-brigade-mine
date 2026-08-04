@include('includes.header')

<style>
/* Reset & Base - Consistent Design Language */
.rb-member-page {
    font-family: 'Inter', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #f8fafc;
    padding-bottom: 80px;
}
.rb-member-page h1, .rb-member-page h2, .rb-member-page h3, .rb-member-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}

/* Modern Hero Section */
.rb-member-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/Redbrigade-lucknow.jpg"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-member-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-member-hero .container { position: relative; z-index: 2; }
.rb-member-hero h1 {
    font-size: 54px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-member-hero p {
    font-size: 20px;
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

/* Profile Content Section */
.rb-profile-section {
    padding: 60px 0;
}
.rb-profile-container {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    padding: 40px;
    margin-top: -80px;
    position: relative;
    z-index: 10;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}
.rb-profile-image {
    flex: 0 0 300px;
}
.rb-profile-image img {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    object-fit: cover;
    aspect-ratio: 1/1;
}
.rb-profile-details {
    flex: 1;
    min-width: 300px;
}
.rb-profile-details h2 {
    font-size: 32px;
    margin-bottom: 10px;
}
.rb-profile-role {
    font-size: 18px;
    color: #E31E24;
    font-weight: 600;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.rb-profile-body {
    font-size: 16px;
    color: #4a5568;
}
.rb-profile-body h3 {
    margin-top: 30px;
    margin-bottom: 15px;
    font-size: 24px;
    color: #1f2f46;
}
.rb-profile-body p {
    margin-bottom: 15px;
}
.rb-profile-body ul {
    margin-bottom: 20px;
    padding-left: 20px;
}
.rb-profile-body li {
    margin-bottom: 8px;
}
.rb-profile-body hr {
    margin: 30px 0;
    border: 0;
    border-top: 1px solid #eef2f6;
}
.rb-profile-body blockquote {
    font-style: italic;
    border-left: 4px solid #E31E24;
    padding-left: 20px;
    margin: 20px 0;
    color: #1f2f46;
    background: #f8fafc;
    padding: 20px;
    border-radius: 0 8px 8px 0;
}

@media (max-width: 768px) {
    .rb-member-hero h1 { font-size: 42px; }
    .rb-profile-container { padding: 30px; flex-direction: column; }
    .rb-profile-image { flex: 0 0 auto; max-width: 300px; margin: 0 auto; }
}
</style>

<div class="rb-member-page">
    <!-- Hero Section -->
    <section class="rb-member-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Team Member</span>
            <h1>{{ $member->name }}</h1>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="rb-profile-section container">
        <div class="rb-profile-container">
            <div class="rb-profile-image">
                <?php $image = preg_match('/^https?:\/\//', $member->image) ? $member->image : URL::asset('uploads/testimonial/'.$member->image); ?>
                <img src="{{ $image }}" alt="{{ $member->name }}" onerror="this.onerror=null;this.src='{{ URL::asset('uploads/img/404.png') }}';">
            </div>
            <div class="rb-profile-details">
                <h2>{{ $member->name }}</h2>
                <div class="rb-profile-role">
                    <?php 
                        // If it's Roshni, give a nice role string, otherwise use type or a fallback
                        if (strtolower($member->name) === 'roshni') {
                            echo "Inspiring Leader";
                        } else {
                            echo $member->type ?: 'Team Member';
                        }
                    ?>
                </div>
                <div class="rb-profile-body">
                    {!! $member->description !!}
                </div>
                
                <a href="{{ url('/ourteam') }}" style="display: inline-block; margin-top: 30px; color: #E31E24; font-weight: 600; text-decoration: none;">
                    <i class="fas fa-arrow-left"></i> Back to Team
                </a>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')
