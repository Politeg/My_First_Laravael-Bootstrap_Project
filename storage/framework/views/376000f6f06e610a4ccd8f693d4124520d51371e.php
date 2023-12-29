<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('resources/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('resources/js/bootstrap.bundle.js')); ?>"></script>
    <title><?php echo $__env->yieldContent('title','Главная страница'); ?></title>
</head>

<body>
<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH /srv/users/zvryrkkj/skxzirj-m1/resources/views/welcome.blade.php ENDPATH**/ ?>