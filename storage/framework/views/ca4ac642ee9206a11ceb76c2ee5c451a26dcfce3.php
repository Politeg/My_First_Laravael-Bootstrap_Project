<header>
    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('/')); ?>">Мир цветов</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('catalog')); ?>">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Где нас найти</a>
                    </li>
                </ul>
                <div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(\Illuminate\Support\Facades\Auth::user()->isAdmin): ?>
                            <a href="<?php echo e(route('admin')); ?>" class="btn-outline-primary btn">Панель админа</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('basket')); ?>" class="btn-outline-primary btn">Корзина</a>
                            <a href="<?php echo e(route ('orders')); ?>" class="btn-outline-primary btn">Заказы</a>
                        <?php endif; ?>
                            <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Выйти</a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route ('auth')); ?>" class="btn btn-outline-primary">Вход</a>
                        <a href="<?php echo e(route ('registr')); ?>" class="btn btn-primary">Регистрация</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/components/header.blade.php ENDPATH**/ ?>