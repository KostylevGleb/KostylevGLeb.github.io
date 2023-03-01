<?php $__env->startSection('content'); ?>
    <h1>Документация</h1>
    <div class="doc_menu">
        <a href=<?php echo e(route('docall')); ?>>Все</a>
        <a href=<?php echo e(route('docindustry')); ?>>Отраслевые ПОТЭЭ</a>
        <a class="chek" href=<?php echo e(route('doccorporate')); ?>>Корпоративные</a>
    </div>
    <div class="document_fon">
        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="document_items">
                <a href="documents/<?php echo e($document->url); ?>" target="_blank"><?php echo e($document->name); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\OpenServer\domains\localhost\rosseti\resources\views/doccorporate.blade.php ENDPATH**/ ?>