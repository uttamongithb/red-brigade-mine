@include('includes.header')

<style>
.rb-ethics-page {
    font-family: 'Open Sans', sans-serif;
    color: #4a4a4a;
    line-height: 1.6;
    background-color: #fff;
}
.rb-ethics-page h1, .rb-ethics-page h2, .rb-ethics-page h3, .rb-ethics-page h4 {
    font-family: 'Playfair Display', serif;
    color: #1f2f46;
}
.rb-ethics-page .container {
    width: 90%;
    max-width: none;
}

/* Hero */
.rb-ethics-hero {
    position: relative;
    background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-548.png"); ?>') no-repeat center center/cover;
    padding: 180px 0 120px;
    text-align: center;
    color: #fff;
}
.rb-ethics-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(17, 26, 40, 0.7) 0%, rgba(17, 26, 40, 0.9) 100%);
}
.rb-ethics-hero .container { position: relative; z-index: 2; }
.rb-ethics-hero h1 { font-size: 64px; color: #fff; font-weight: 700; margin-bottom: 20px; }
.rb-ethics-hero p { font-size: 22px; max-width: 800px; margin: 0 auto; color: #e2e8f0; font-weight: 300; }

.rb-kicker { 
    color: #E31E24; 
    font-weight: 700; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    font-size: 14px; 
    display: block; 
    margin-bottom: 15px; 
}

/* Vision Section */
.rb-vision-section { padding: 100px 0; background: #fff; }
.rb-vision-card {
    background: #f8fafc;
    padding: 60px;
    border-radius: 24px;
    text-align: center;
    border: 1px solid #eef2f6;
    box-shadow: 0 20px 40px rgba(0,0,0,0.03);
}
.rb-vision-card h2 { font-size: 48px; margin-bottom: 30px; }
.rb-vision-card p { font-size: 24px; color: #4a5568; font-style: italic; max-width: 800px; margin: 0 auto; line-height: 1.5; }

/* Mission / Uddesh */
.rb-mission-section { padding: 100px 0; background: #f8fafc; }
.rb-mission-v2-section { padding: 100px 0; background: #0f172a; color: #fff; }
.rb-mission-v2-section h2 { color: #fff; font-size: 42px; margin-bottom: 60px; text-align: center; }
.rb-mission-v2-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
.rb-mission-v2-item { background: transparent; padding: 0; border: none; }
.rb-mission-v2-item i { color: #E31E24; font-size: 28px; margin-bottom: 20px; display: block; }
.rb-mission-v2-item h4 { color: #E31E24; font-size: 22px; margin-bottom: 15px; }
.rb-mission-v2-item p { color: #cbd5e0; font-size: 15px; line-height: 1.6; }

/* Tree Section */
.rb-tree-section { padding: 100px 0; background: #fff; }
.rb-tree-grid { display: flex; align-items: center; gap: 60px; }
.rb-tree-text { flex: 1; }
.rb-tree-img { flex: 1; border-radius: 24px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.1); }
.rb-tree-img img { width: 100%; height: auto; display: block; }

/* Principles */
.rb-principles-section { padding: 100px 0; background: #1f2f46; color: #fff; margin-bottom: 80px; }
.rb-principles-section h2 { color: #fff; font-size: 42px; margin-bottom: 60px; text-align: center; }
.rb-principles-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
.rb-principle-card h4 { color: #E31E24; font-size: 22px; margin-bottom: 15px; }
.rb-principle-card p { color: #cbd5e0; font-size: 15px; }

@media (max-width: 991px) {
    .rb-mission-grid, .rb-principles-grid, .rb-mission-v2-grid { grid-template-columns: repeat(2, 1fr); }
    .rb-tree-grid { flex-direction: column; }
}
@media (max-width: 767px) {
    .rb-mission-grid, .rb-principles-grid, .rb-mission-v2-grid { grid-template-columns: 1fr; }
    .rb-vision-card { padding: 30px; }
    .rb-vision-card h2 { font-size: 32px; }
    .rb-vision-card p { font-size: 18px; }
}
</style>

<div class="rb-ethics-page">
    <section class="rb-ethics-hero">
        <div class="container">
            <span class="rb-kicker" style="color:#ff8a00;">Lived Philosophy</span>
            <h1>Our Vision & Mission</h1>
            <p>Built with the courage, tears, and determination of thousands of survivors.</p>
        </div>
    </section>

    <!-- Vision -->
    <section class="rb-vision-section" style="padding-bottom: 40px;">
        <div class="container">
            <div class="rb-vision-card">
                <span class="rb-kicker" style="font-size: 24px; margin-bottom: 20px;">Our Vision</span>
                <h2 style="font-size: 36px; color: var(--navy); margin-bottom: 20px; font-weight: 700; font-family: 'Playfair Display', serif;">To establish and create a 'FLOW' (Fearless Life of Women)</h2>
                <p style="font-style: normal; max-width: 900px; margin: 0 auto; line-height: 1.8;">The vision of Red Brigade Lucknow is to build a society where women live fearlessly with dignity, equality, justice, and freedom. The organization seeks to create a gender-just and socially harmonious society where women are recognized as leaders in shaping social transformation and nation-building.</p>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="rb-mission-v2-section">
        <div class="container">
            <h2>Mission</h2>
            <p style="text-align: center; font-size: 24px; color: #ff414d; font-family: 'Playfair Display', serif; margin-top: -45px; margin-bottom: 55px; font-weight: 600; font-style: italic; letter-spacing: 0.5px;">"A safe society with zero tolerance for sexual violence."</p>
            <div class="rb-mission-v2-grid">
                <div class="rb-mission-v2-item">
                    <i class="fas fa-hand-rock"></i>
                    <h4>Combat Sexual Violence</h4>
                    <p>Combat sexual violence through self-defense training using the skill-based technique called 'Nishastra'.</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-heartbeat"></i>
                    <h4>Empathetic Support</h4>
                    <p>Provide psychological and mental health support, socio-legal assistance, shelter, and rehabilitation to create an empathetic environment for survivors.</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-theater-masks"></i>
                    <h4>Gender Sensitization</h4>
                    <p>Promote gender sensitization and awareness to break the silence around sexual violence and gender discrimination, encouraging women to raise powerful voices against it.</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Collaborative Platform</h4>
                    <p>Build a platform against sexual violence by collaborating with NGOs, civil society organizations, media, government agencies, legal allies, and police.</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-users"></i>
                    <h4>Leadership & Community</h4>
                    <p>Foster leadership and community building through workshops, self-defense training programs, and awareness initiatives, primarily targeting young women and girls (adults and adolescents).</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Educational Support</h4>
                    <p>Support educational empowerment by providing material and emotional support for girls from socio-economically marginalized communities to continue education beyond the primary level.</p>
                </div>
                <div class="rb-mission-v2-item">
                    <i class="fas fa-coins"></i>
                    <h4>Economic Self-Reliance</h4>
                    <p>Promote economic self-reliance by offering skill-based training to strengthen the financial independence of young women and girls.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Operational Rules -->
    <section class="rb-mission-section" style="background:#f8fafc;">
        <div class="container">
            <div class="rb-gallery-header" style="text-align:center; margin-bottom:40px;">
                <span class="rb-kicker">Integrity</span>
                <h2>Our Rules — How We Work</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rb-mission-box" style="background:#fff; margin-top:0;">
                        <ul style="list-style:none; padding:0; margin:0;">
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> Survivors always speak first — in team meetings, in programme design, in media interactions.</li>
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> No woman is turned away from support because she cannot pay, because of her caste, or because of her religion.</li>
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> Every case we take is followed through — from police station to court — we do not abandon a survivor midway.</li>
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> We never use a survivor's story without her explicit knowledge and consent.</li>
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> Our organisation's resources belong to the organisation — not to any individual, however senior.</li>
                            <li style="margin-bottom:15px; border-bottom:1px solid #eef2f6; padding-bottom:15px;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> We continuously learn — NISHASTRA itself was built through an iterative process of survivor feedback over years.</li>
                            <li style="margin-bottom:0;"><i class="fas fa-check-circle" style="color:#E31E24; margin-right:10px;"></i> We celebrate our women freedom fighters — because knowing your history is a form of self-defense.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principles -->
    <section class="rb-principles-section">
        <div class="container">
            <h2>Our Ethical Commitments</h2>
            <div class="rb-principles-grid">
                <div class="rb-principle-card">
                    <h4>1. Women-Led Always</h4>
                    <p>Red Brigade is not a service provider. It is a movement where survivors are the decision-makers, programme designers, trainers, and public faces. Every policy is developed with survivors at the center. This is non-negotiable.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>2. Rejection of the Victim Mindset</h4>
                    <p>We do not see the women and girls we work with as survivors. We see survivors and leaders in formation. Our work is about recognising and unleashing the power every woman already carries within her.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>3. Dignity & Confidentiality</h4>
                    <p>Every survivor has the absolute right to confidentiality. We do not share names, locations, or case details without explicit consent. No story is shared for publicity without agreement.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>4. Zero Tolerance for Caste & Communal Discrimination</h4>
                    <p>Our community is primarily Dalit, Muslim, and OBC. Justice must address caste and communal power directly. We do not allow discrimination within our organisation, our programmes, or our spaces.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>5. Collective Decision-Making</h4>
                    <p>Registered in 2016 as an independent, survivor-led body after rejecting patriarchal control. Decision-making authority is held by the survivors and marginalised women who are our members.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>6. Prevention Over Punishment</h4>
                    <p>While we pursue legal accountability, punishment alone won't end violence. Prevention—through self-defense (NISHASTRA) and community mobilisation—is our primary orientation.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>7. Holistic Empowerment</h4>
                    <p>Safety is the entry point, not the endpoint. We work across education (Balmanch), economic empowerment (Chikankari), justice, and health. A woman who is economically dependent is not free.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>8. Historical Memory as Foundation</h4>
                    <p>We researched 250 women freedom fighters. When a girl knows that women like her changed the course of a nation, she carries herself differently. Knowing history is a form of self-defense.</p>
                </div>
                <div class="rb-principle-card">
                    <h4>9. Non-Partisan Political Engagement</h4>
                    <p>Our work is celebrated across the political spectrum, but we are not affiliated with any political party. We advocate with and challenge all governments equally for women's rights.</p>
                </div>
            </div>
        </div>
    </section>


</div>

@include('includes.footer')
