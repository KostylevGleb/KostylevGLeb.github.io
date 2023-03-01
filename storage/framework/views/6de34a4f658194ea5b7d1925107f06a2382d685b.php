<?php $__env->startSection('content'); ?>
                <h1>Документация</h1>
                <a href=<?php echo e(route('docall')); ?>>Все</a>
                <a href=<?php echo e(route('docindustry')); ?>>Отраслевые ПОТЭЭ</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\localhost\rosseti\resources\views/document.blade.php ENDPATH**/ ?>