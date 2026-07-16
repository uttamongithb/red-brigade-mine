@include('includes.sunshine-header')

<section>
    <div class="col-md-12 servce-img">
        <h1 class="text">Service Details</h1>
    </div>
</section>

<section class="container-fluid">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col-md-5">
                <img src="<?php echo URL::asset('uploads/service/'.$thisservice->image)?>" alt="<?php echo e($thisservice->name); ?>" class="img-fluid blog-img">
            </div>
            <div class="col-md-7">
                <h2 class="what-1 mb-3">{{ ucfirst($thisservice->name) }}</h2>
                <div class="about-text">{!! Sanitizer::clean($thisservice->description) !!}</div>
                <div class="mt-4">
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'service'])?>" class="btn btn-danger">Back To Services</a>
                </div>
            </div>
        </div>

        <?php if(!empty($thisproduct) && count($thisproduct) > 0) { ?>
        <div class="row mb-5">
            <div class="col-md-12">
                <h3 class="what-1">Related Products</h3>
            </div>
            <?php foreach($thisproduct as $pro) { ?>
            <div class="col-md-3 main4">
                <div class="col-md-12 abc combo-max">
                    <div class="border-img">
                        <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleproduct'],$pro->slug)?>">
                            <img src="<?php echo URL::asset('uploads/product/'.$pro->image)?>" alt="" class="img-fluid blog-img">
                        </a>
                    </div>
                    <a href="<?php echo action([\App\Http\Controllers\MainController::class, 'singleproduct'],$pro->slug)?>">
                        <h6 class="about-text text-warning"><?php echo ucfirst($pro->name) ?></h6>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>

@include('includes.sunshine-footer')