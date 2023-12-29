
<?php $__env->startSection('title', 'О нас'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                      <?php if($products): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <div class="carousel-item <?php if($key === 0): ?> active <?php endif; ?>">
                                 <img src="<?php echo e(asset('/storage/app/public/'.$product->product_photo)); ?>" class="d-block w-100" alt="фото товара">
                                 <div class="carousel-caption d-none d-md-block" >
                                    <h5 style="background: #5c636a"><?php echo e($product->product_name); ?></h5>
                                    <p style="background: #5c636a"><?php echo e($product->product_price); ?></p>
                                  </div>
                             </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>





<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/about.blade.php ENDPATH**/ ?>