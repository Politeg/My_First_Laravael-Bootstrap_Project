<?php $__env->startSection('title', $productOne->product_name); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                        <img src="<?php echo e(asset('/storage/app/public/'.$productOne->product_photo)); ?>" height="400px"
                             style="object-fit: cover; object-position: center" class="card-img-top"
                             alt="фото товара">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($productOne->product_name); ?></h5>
                        <p class="card-text"><?php echo e($productOne->product_description); ?></p>
                        <p class="card-text">Цена: <?php echo e($productOne->product_price); ?></p>
                        <p class="card-text">Страна: <?php echo e($productOne->product_country); ?></p>
                        <p class="card-text">Количество: <?php echo e($productOne->product_count); ?></p>
                        <?php if(auth()->guard()->check()): ?>
                            <form action="<?php echo e(route('basket.add', $productOne)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary">В корзину</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/product_item.blade.php ENDPATH**/ ?>