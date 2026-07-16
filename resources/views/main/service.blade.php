@include('includes.header')

<section class="rb-contact-hero" style="background: url('<?php echo URL::asset("uploads/slider/sunshine-slider-694.png"); ?>') no-repeat center center/cover;">
    <div class="container">
        <span class="rb-kicker" style="color: #ff8a00;">What We Do</span>
        <h1>Our Services</h1>
        <p>Empowering women through diverse initiatives and strategic support.</p>
    </div>
</section>

<section class="rb-contact-section">
    <div class="container">
        <div class="row">
            <!-- Strategic Planning Service (Requested) -->
            <div class="col-md-4 mb-4">
                <div class="rb-form-card h-100" style="padding: 30px;">
                    <div class="rb-info-icon" style="margin-bottom: 20px;"><i class="fas fa-chart-line"></i></div>
                    <h3 class="rb-blog-card-title">Strategic Planning</h3>
                    <p class="rb-blog-card-excerpt">Empowering organizations and communities with strategic tools to advocate for women's safety and leadership.</p>
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact'])?>" class="rb-blog-read-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- NISHATRA Service -->
            <div class="col-md-4 mb-4">
                <div class="rb-form-card h-100" style="padding: 30px;">
                    <div class="rb-info-icon" style="margin-bottom: 20px;"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="rb-blog-card-title">NISHATRA</h3>
                    <p class="rb-blog-card-excerpt">Comprehensive self-defense training program that has empowered over 3,00,000 women across the region.</p>
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact'])?>" class="rb-blog-read-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Survivor Support Service -->
            <div class="col-md-4 mb-4">
                <div class="rb-form-card h-100" style="padding: 30px;">
                    <div class="rb-info-icon" style="margin-bottom: 20px;"><i class="fas fa-hands-helping"></i></div>
                    <h3 class="rb-blog-card-title">Survivor Support</h3>
                    <p class="rb-blog-card-excerpt">Providing legal, mental, and rehabilitation support to survivors of sexual violence to reclaim their lives.</p>
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'contact'])?>" class="rb-blog-read-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <?php if(!empty($allservice)) { foreach($allservice as $allser) { ?>
                <div class="col-md-4 mb-4">
                    <div class="rb-form-card h-100" style="padding: 30px;">
                        <div class="border-img mb-3" >
                            <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleservice'],$allser->slug)?>"> 
                                <img src="<?php echo URL::asset('uploads/service/'.$allser->image)?>" alt="" class="img-fluid" style="border-radius: 12px; height: 200px; width: 100%; object-fit: cover;">
                            </a>
                        </div>
                        <h3 class="rb-blog-card-title"><?php echo ucfirst($allser->name) ?></h3>
                        <p class="rb-blog-card-excerpt"><?php echo substr(strip_tags($allser->description),0,100)?>...</p>
                        <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleservice'],$allser->slug)?>" class="rb-blog-read-cta">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php } } ?>
        </div>
    </div>
</section>

@include('includes.footer')
