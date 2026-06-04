@include('includes.header')

<style>
/* Reset & Base - Consistent with About & Achievements */
.rb-team-page-modern {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-team-page-modern h1, .rb-team-page-modern h2, .rb-team-page-modern h3, .rb-team-page-modern h4 {
    font-family: 'Playfair Display', serif;
    color: #1a1a1a;
}
.rb-team-page-modern img { max-width: 100%; height: auto; display: block; }

/* Consistent Container Width (90%) */
.rb-team-page-modern .container {
    width: 90%;
    max-width: none;
    padding-left: 0;
    padding-right: 0;
}
@media (max-width: 767px) {
    .rb-team-page-modern .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Modern Hero Section */
.rb-team-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-201.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-team-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-team-hero .container { position: relative; z-index: 2; }
.rb-team-hero h1 {
    font-size: 64px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}
.rb-team-hero p {
    font-size: 22px;
    max-width: 800px;
    margin: 0 auto;
    color: #e2e8f0;
    font-weight: 300;
}

/* Kicker Style */
.rb-kicker { 
    color: #e65a32; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Metrics/Stats Section */
.rb-team-intro {
    padding: 80px 0 60px;
    background: #fff;
}
.rb-metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 40px;
}
.rb-metric-card {
    background: #f8fafc;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease;
}
.rb-metric-card:hover {
    transform: translateY(-5px);
    border-color: #e65a32;
}
.rb-metric-number {
    display: block;
    font-size: 42px;
    font-weight: 700;
    color: #1f2f46;
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}
.rb-metric-label {
    font-size: 14px;
    color: #64748b;
    line-height: 1.4;
}

/* Team Sections */
.rb-team-section {
    padding: 60px 0;
}
.rb-team-section:nth-child(even) {
    background: #f8fafc;
}
.rb-section-header {
    margin-bottom: 50px;
}
.rb-section-header h2 {
    font-size: 38px;
    color: #1f2f46;
    margin-bottom: 10px;
}
.rb-section-header p {
    font-size: 17px;
    color: #64748b;
    max-width: 700px;
}

/* Member Grid */
.rb-member-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}
.rb-member-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #eef2f6;
    display: flex;
    flex-direction: column;
}
.rb-member-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.rb-member-image {
    aspect-ratio: 1/1;
    overflow: hidden;
    background: #f1f5f9;
}
.rb-member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.rb-member-card:hover .rb-member-image img {
    transform: scale(1.05);
}
.rb-member-info {
    padding: 24px;
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.rb-member-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #e65a32;
    margin-bottom: 10px;
}
.rb-member-name {
    font-size: 22px;
    margin-bottom: 8px;
    line-height: 1.2;
}
.rb-member-role {
    font-size: 14px;
    color: #64748b;
    margin: 0;
}

/* Responsive */
@media (max-width: 1200px) {
    .rb-member-grid { grid-template-columns: repeat(3, 1fr); }
    .rb-metrics-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 991px) {
    .rb-team-hero h1 { font-size: 52px; }
    .rb-member-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .rb-team-hero h1 { font-size: 42px; }
    .rb-team-hero p { font-size: 18px; }
    .rb-member-grid { grid-template-columns: 1fr; }
    .rb-metrics-grid { grid-template-columns: 1fr; }
    .rb-section-header h2 { font-size: 32px; }
}
</style>

@php
    $teamPlaceholder = URL::asset('uploads/img/404.png');
    $teamImagePool = [
        URL::asset('uploads/testimonial/sunshine-testimonial-176.JPG'),
        URL::asset('uploads/testimonial/sunshine-testimonial-224.jpg'),
        URL::asset('uploads/testimonial/sunshine-testimonial-297.jpg'),
        URL::asset('uploads/testimonial/sunshine-testimonial-317.jpg'),
        URL::asset('uploads/testimonial/sunshine-testimonial-351.jpg'),
        URL::asset('uploads/testimonial/sunshine-testimonial-393.jpg'),
    ];

    $normalizeTeamMembers = function ($members) use ($teamPlaceholder, $teamImagePool) {
        $items = [];
        if (empty($members)) return $items;

        foreach ($members as $index => $member) {
            $name = is_array($member) ? ($member['name'] ?? 'Team Member') : ($member->name ?? 'Team Member');
            $role = is_array($member) ? ($member['role'] ?? strip_tags($member['description'] ?? 'Member')) : (isset($member->description) ? strip_tags($member->description) : ($member->role ?? 'Member'));
            
            $image = $teamImagePool[$index % count($teamImagePool)] ?? $teamPlaceholder;
            if (is_array($member)) {
                if (!empty($member['image'])) $image = preg_match('/^https?:\/\//', $member['image']) ? $member['image'] : URL::asset('uploads/testimonial/'.$member['image']);
            } elseif (!empty($member->image)) {
                $image = preg_match('/^https?:\/\//', $member->image) ? $member->image : URL::asset('uploads/testimonial/'.$member->image);
            }

            $items[] = ['name' => $name, 'role' => $role, 'image' => $image];
        }
        return $items;
    };

    $executiveTeam = (isset($alltestimonial) && count($alltestimonial)) ? $normalizeTeamMembers($alltestimonial) : [];
    $advisoryTeam = (isset($allAdvisory) && count($allAdvisory)) ? $normalizeTeamMembers($allAdvisory) : [];
    $legalTeam = (isset($alllegal) && count($alllegal)) ? $normalizeTeamMembers($alllegal) : [];
    $boardTeam = (isset($board) && count($board)) ? $normalizeTeamMembers($board) : [];
@endphp

<div class="rb-team-page-modern">
    <!-- Hero Section -->
    <section class="rb-team-hero">
        <div class="container">
            <span class="rb-kicker" style="color: #ff8a00;">Our People</span>
            <h1>Leadership with Purpose</h1>
            <p>A dedicated collective of organizers, advisors, and advocates working together for a safer society.</p>
        </div>
    </section>

    <!-- Intro & Metrics -->
    <section class="rb-team-intro">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="rb-kicker">Collaborative Force</span>
                    <h2 style="font-size: 42px; margin-bottom: 20px;">United for Change</h2>
                    <p style="font-size: 18px; color: #64748b;">Our team brings together diverse expertise in social activism, legal defense, and community leadership to fulfill the mission of Red Brigade Lucknow.</p>
                </div>
            </div>

            <div class="rb-metrics-grid">
                <div class="rb-metric-card">
                    <span class="rb-metric-number">{{ count($executiveTeam) }}</span>
                    <span class="rb-metric-label">Executive members leading day-to-day operations</span>
                </div>
                <div class="rb-metric-card">
                    <span class="rb-metric-number">{{ count($advisoryTeam) }}</span>
                    <span class="rb-metric-label">Advisors shaping strategic direction</span>
                </div>
                <div class="rb-metric-card">
                    <span class="rb-metric-number">{{ count($legalTeam) }}</span>
                    <span class="rb-metric-label">Legal advocates supporting rights & safety</span>
                </div>
                <div class="rb-metric-card">
                    <span class="rb-metric-number">{{ count($boardTeam) }}</span>
                    <span class="rb-metric-label">Board members ensuring governance & oversight</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Executive Team -->
    @if(!empty($executiveTeam))
    <section class="rb-team-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">The Core</span>
                <h2>Executive Leadership</h2>
                <p>The visionaries responsible for coordination and the daily execution of our grassroots programs.</p>
            </div>
            <div class="rb-member-grid">
                @foreach ($executiveTeam as $member)
                    <article class="rb-member-card">
                        <div class="rb-member-image">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        </div>
                        <div class="rb-member-info">
                            <span class="rb-member-badge">Executive</span>
                            <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                            <p class="rb-member-role">{{ $member['role'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Advisory Team -->
    @if(!empty($advisoryTeam))
    <section class="rb-team-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">Perspective</span>
                <h2>Advisory Team</h2>
                <p>Specialists and allies who bring diverse partnerships and subject-matter guidance to our movement.</p>
            </div>
            <div class="rb-member-grid">
                @foreach ($advisoryTeam as $member)
                    <article class="rb-member-card">
                        <div class="rb-member-image">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        </div>
                        <div class="rb-member-info">
                            <span class="rb-member-badge">Advisor</span>
                            <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                            <p class="rb-member-role">{{ $member['role'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Legal Team -->
    @if(!empty($legalTeam))
    <section class="rb-team-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">Protection</span>
                <h2>Legal Cell</h2>
                <p>Ensuring rights, escalation pathways, and formal support for those in need of legal intervention.</p>
            </div>
            <div class="rb-member-grid">
                @foreach ($legalTeam as $member)
                    <article class="rb-member-card">
                        <div class="rb-member-image">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        </div>
                        <div class="rb-member-info">
                            <span class="rb-member-badge">Legal</span>
                            <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                            <p class="rb-member-role">{{ $member['role'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Board Members -->
    @if (!empty($boardTeam))
    <section class="rb-team-section">
        <div class="container">
            <div class="rb-section-header">
                <span class="rb-kicker">Governance</span>
                <h2>Board Members</h2>
                <p>Stewardship members who help keep the organization accountable, transparent, and future-ready.</p>
            </div>
            <div class="rb-member-grid">
                @foreach ($boardTeam as $member)
                    <article class="rb-member-card">
                        <div class="rb-member-image">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        </div>
                        <div class="rb-member-info">
                            <span class="rb-member-badge">Board</span>
                            <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                            <p class="rb-member-role">{{ $member['role'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Call to Action -->
    <section class="rb-team-intro" style="padding: 100px 0; border-top: 1px solid #eef2f6;">
        <div class="container text-center">
            <h2 style="font-size: 42px; margin-bottom: 20px;">Join Our Mission</h2>
            <p style="font-size: 18px; color: #4a5568; max-width: 600px; margin: 0 auto 40px;">Whether as a volunteer, supporter, or ally, you can be part of the change we are building together.</p>
            <a href="<?php echo action('MainController@contact'); ?>" style="display: inline-block; padding: 16px 40px; background: #e65a32; color: #fff; font-weight: 700; border-radius: 50px; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;" onmouseover="this.style.backgroundColor='#1f2f46'" onmouseout="this.style.backgroundColor='#e65a32'">Get Involved</a>
        </div>
    </section>
</div>

@include('includes.footer')
