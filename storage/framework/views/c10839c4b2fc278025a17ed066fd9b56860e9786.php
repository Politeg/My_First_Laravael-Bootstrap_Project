<?php $__env->startSection('title', 'Управление заказами'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h1>Заказы администратора</h1>
                <form action="<?php echo e(route('admin.order.sort')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <select name="" id="" class="form-select">
                        <option value="">Все заказы</option>
                        <option value="1" <?php echo e(request('status_id')==1 ? 'selected': ''); ?>>Новые заказы</option>
                        <option value="2" <?php echo e(request('status_id')==2 ? 'selected': ''); ?>>Подтвержденные заказы</option>
                        <option value="3" <?php echo e(request('status_id')==3 ? 'selected': ''); ?>>Отмененные заказы</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Фильтровать</button>
                </form>

                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="accordion" id="accordionExample">
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($order->id); ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo e($order->created_at); ?> - <?php echo e($order->user->surname); ?> <?php echo e($order->user->name); ?> <?php echo e($order->user->patronymic); ?> <?php echo e($order->order_count); ?> товаров
                                </button>
                            </h2>
                            <div id="collapse<?php echo e($order->id); ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <p>Статус : <?php echo e($order->status()); ?></p>
                                    <?php if($order->status_id == 1): ?>
                                        <form action="<?php echo e(route('admin.order.status', ['orderId'=>$order->id, 'action'=>'cancel'])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" class="form-control" name="order_comment" placeholder="Причина отмены">
                                            <button class="btn btn-danger" type="submit">Отменить заказ</button>
                                        </form>
                                        <form action="<?php echo e(route('admin.order.status', ['orderId'=>$order->id, 'action'=>'confirm'])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-primary" type="submit">Подтвердить заказ</button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

            <div class="col"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/admins/adminorder.blade.php ENDPATH**/ ?>