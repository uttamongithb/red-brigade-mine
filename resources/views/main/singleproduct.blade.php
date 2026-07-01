@include('includes.sunshine-header')

<section>
    <div class="col-md-12 servce-img">
        <h1 class="text">Product Details</h1>
    </div>
</section>

<section class="container-fluid">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-5">
                <img src="<?php echo URL::asset('uploads/product/'.$thisproduct->image)?>" alt="<?php echo e($thisproduct->name); ?>" class="img-fluid blog-img">
            </div>
            <div class="col-md-7">
                <h2 class="what-1 mb-3"><?php echo htmlspecialchars(ucfirst($thisproduct->name), ENT_QUOTES, 'UTF-8'); ?></h2>
                <div class="about-text"><?php echo \App\Helpers\Sanitizer::clean($thisproduct->description); ?></div>
                <div class="mt-4">
                    <a href="<?php echo action('MainController@product')?>" class="btn btn-danger">Back To Products</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.sunshine-footer')