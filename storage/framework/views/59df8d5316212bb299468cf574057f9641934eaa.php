<?php $__env->startSection('content'); ?>
    <div class="container">
        <form class="form-control box" action="<?php echo e(route('addUser')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label class="form-label" for="name">ФИО</label>
            <input class="form-control" type="text" name="name" required>
            <label class="form-label" for="login">Логин</label>
            <input class="form-control" type="text" name="login" required>
            <label class="form-label" for="password">Пароль</label>
            <input class="form-control" type="password" name="password" required><br>
            <input class="button" type="submit" value="Добавить">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\localhost\rosseti\resources\views/adduser.blade.php ENDPATH**/ ?>