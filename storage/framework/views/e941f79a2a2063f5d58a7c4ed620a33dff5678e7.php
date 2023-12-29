<?php $__env->startSection('title','Категории'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="POST">
                    <?php echo csrf_field(); ?>
                    <h2>Добавить категории</h2>
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Название</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="category_name"
                               name="category_name">
                        <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-6">
                <?php if(session()->has('edit_category')): ?>
                    <div class="alert alert-success">Вы успешно изменили
                        категорию <?php echo e(session()->get('edit_category')); ?> на <?php echo e(session()->get('old_edit_category')); ?></div>
                <?php endif; ?>
                <?php if(session()->has('delete_category')): ?>
                    <div class="alert alert-success">Вы успешно удалили
                        категорию <?php echo e(session()->get('delete_category')); ?></div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col" class="text-center">Изменение</th>
                        <th scope="col" class="text-center">Удаление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($category->id); ?></td>
                            <td><?php echo e($category->category_name); ?></td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo e($category->id); ?>">
                                    Изменить
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editModal<?php echo e($category->id); ?>" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение
                                                    категории <?php echo e($category->category_name); ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="<?php echo e(route('editCategory',$category)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="mb-3">
                                                        <label for="category_name" class="form-label">Название</label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               id="category_name"
                                                               name="category_name">
                                                        <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo e($message); ?>

                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Изменить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal<?php echo e($category->id); ?>">
                                    Удалить
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal<?php echo e($category->id); ?>" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение
                                                    категории <?php echo e($category->category_name); ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Удаление категории <?php echo e($category->category_name); ?> приведет к удалению всех
                                                связанных с ней товаров, заказов
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Отменить
                                                </button>
                                                <form action="<?php echo e(route('delCategory', $category)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/zvryrkkj/skxzirj-m1/resources/views/categories/add_category.blade.php ENDPATH**/ ?>