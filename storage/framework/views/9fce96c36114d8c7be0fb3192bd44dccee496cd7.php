<?php $__env->startSection('title','Каталог'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="rom">
            <div class="col-12">
                <form method="get" class="d-flex gap-4">
                    <select class="form-select" name="sort_price" id="">
                        <option value="asc" <?php echo e(request('sort_price')=='asc'?'selected':''); ?>>По возрастанию цены</option>
                        <option value="desc" <?php echo e(request('sort_price')=='desc'?'selected':''); ?>>По убыванию цены</option>
                    </select>
                    <select class="form-select" name="sort_name" id="">
                        <option value="asc" <?php echo e(request('sort_name')=='asc'?'selected':''); ?>>По названию(А-Я)</option>
                        <option value="desc" <?php echo e(request('sort_name')=='desc'?'selected':''); ?>>По названию(Я-А)</option>
                    </select>
                    <select class="form-select" name="sort_country" id="">
                        <option value="asc" <?php echo e(request('sort_country')=='asc'?'selected':''); ?>>По стране(А-Я)</option>
                        <option value="desc" <?php echo e(request('sort_country')=='desc'?'selected':''); ?>>По стране(Я-А)</option>
                    </select>
                    <select class="form-select" name="category" id="">
                        <option value="">Все категории</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                value="<?php echo e($category->id); ?>" <?php echo e(request('$category') == $category->id ? 'selected' :''); ?>><?php echo e($category->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </select>
                    <button class="btn btn-primary">Применить</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-12 d-flex flex-wrap justify-content-center gap-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 18rem;">
                        <a href="<?php echo e(route('catalog_product', $product)); ?>">
                            <img src="<?php echo e(asset('/storage/app/public/'.$product->product_photo)); ?>" height="200px"
                                 style="object-fit: cover; object-position: center" class="card-img-top"
                                 alt="фото товара">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
                            <p class="card-text"><?php echo e($product->product_description); ?></p>
                            <h6 class="card-text"><?php echo e($product->product_price); ?></h6>
                            <?php if(auth()->guard()->check()): ?>
                                <form action="<?php echo e(route('basket.add', $product)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-primary">В корзину</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="col"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/catalog.blade.php ENDPATH**/ ?>