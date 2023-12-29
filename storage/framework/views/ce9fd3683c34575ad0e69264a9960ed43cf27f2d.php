<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('resources/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('resources/js/bootstrap.bundle.js')); ?>"></script>
    <title><?php echo $__env->yieldContent('title','Панель администратора'); ?></title>
</head>

<body>
<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="row mt-lg-5">
        <div class="col">
            <a href="<?php echo e(route('category')); ?>" class="me-2 btn btn-primary">Категории</a>
            <a href="<?php echo e(route('product')); ?>" class="me-2 btn btn-primary">Товары</a>
            <a href="<?php echo e(route('admin.order')); ?>" class="btn btn-primary">Заказы</a>
        </div>
    </div>
</div>
<?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/admins/admin.blade.php ENDPATH**/ ?>