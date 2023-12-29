<?php $__env->startSection('title', 'Корзина'); ?>
<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <?php if(!$products): ?>
                    <div class="col-12">
                        <h2>Ваша корзина пуста, <a href="<?php echo e(route('catalog')); ?>">перейти к покупкам</a> </h2>
                    </div>
                <?php else: ?>
                    <?php if(session()->has('error_password_order')): ?>
                        <div class="alert alert-danger">Неверный пароль</div>
                    <?php endif; ?>
                        <?php if(session()->has('basket_add_success')): ?>
                            <div class="alert alert-success">Вы успешно добавили товар</div>
                        <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Названия товаров</th>
                                <th></th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img src="<?php echo e(asset('/storage/app/public/'.$product->product_photo)); ?>" class="d-block w-100" alt="фото товара">
                                </td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td><?php echo e($product->product_price); ?></td>
                                <td>
                                    <div class="d-flex">
                                        <form action="<?php echo e(route('basket.remove', $product)); ?>" method="POST" class="me-2">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">-</button>
                                        </form>
                                        <?php echo e($product->count); ?>

                                        <form action="<?php echo e(route('basket.add', $product)); ?>" method="POST" class="ms-2">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-sm btn-success">+</button>
                                        </form>
                                    </div>
                                </td>
                                <td><?php echo e($product->sumPrice); ?></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <h5>Итого: <?php echo e($basketSum); ?></h5>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#confirmOrderModal">
                                Оформить заказ
                            </button>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmOrderModal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Подтверждение заказа</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('order.create')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="password" class="form-label">Введите пароль</label>
                            <input type="password" class="form-control" id="password" name="category_name">

                        </div>
                        <div class="modal_footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-primary">Сформировать заказ</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/users/basket.blade.php ENDPATH**/ ?>