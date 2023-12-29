<?php $__env->startSection('title', 'Заказы'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($order->id); ?>" aria-expanded="true" aria-controls="collapseOne">
                                    Заказ № <?php echo e($order->id); ?> (Статус: <?php echo e($order->status()); ?>)
                                </button>
                            </h2>
                            <div id="collapse<?php echo e($order->id); ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php if($order->status_id==3): ?>
                                        <div class="alert alert alert-danger"><?php echo e($order->order_comment); ?></div>
                                    <?php endif; ?>
                                    <table class="table mb-3">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Количество</th>
                                            <th>Статус</th>
                                        </tr>

                                        </thead>
                                        <tbody class="text-center">
                                        <tr>
                                            <td><?php echo e($order->order_count); ?></td>
                                            <td><?php echo e($order->status()); ?></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <?php if($order->status_id ==1): ?>
                                            <form action="<?php echo e(route('order.remove', $order)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger mt-3">Удалить заказ</button>
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

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gutynxcy/zmdefdm-m1/resources/views/users/order.blade.php ENDPATH**/ ?>