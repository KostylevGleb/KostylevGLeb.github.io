

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="error">
            <h1>404</h1>
            <h2>Страница не найдена</h2>
            <a href=<?php echo e(route('home')); ?>>Личный кабинет</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\OpenServer\domains\localhost\rosseti\resources\views/errors/404.blade.php ENDPATH**/ ?>