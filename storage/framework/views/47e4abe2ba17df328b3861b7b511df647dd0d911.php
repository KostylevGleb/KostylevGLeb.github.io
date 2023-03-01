<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Авторизация</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="login" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Логин')); ?></label>

                                <div class="col-md-4">
                                    <input id="login" type="text" class="form-control" name="login" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end"><?php echo e(__('Пароль')); ?></label>

                                <div class="col-md-4">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="button">
                                        <?php echo e(__('Войти')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\localhost\rosseti\resources\views/auth/login.blade.php ENDPATH**/ ?>