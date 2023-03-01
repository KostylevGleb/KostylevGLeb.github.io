<?php $__env->startSection('content'); ?>
    <h1>Личный кабинет</h1>
    <div class="container_home">
        <?php if(auth()->guard()->check()): ?>
            <h3><?php echo e(Auth::user()->name); ?></h3>
            <?php if(\Illuminate\Support\Facades\Auth::user()->roll ==1): ?>
                <a href="<?php echo e(route('addUserShow')); ?>" class="but">Добавить сотрудника</a><br><br>
            <?php endif; ?>
            <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input class="button" type="submit" value="Выход">
            </form>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\OpenServer\domains\localhost\rosseti\resources\views/home.blade.php ENDPATH**/ ?>