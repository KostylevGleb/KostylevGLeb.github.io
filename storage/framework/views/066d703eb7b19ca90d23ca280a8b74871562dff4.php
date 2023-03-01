<?php $__env->startSection('content'); ?>
    <h1>Авторизация</h1>
    <form class="form-control box" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <label for="login" class="form-label">Логин</label>
        <input id="login" type="text" class="form-control" name="login" required>
        <label for="password" class="form-label">Пароль</label>
        <input id="password" type="password" class="form-control" name="password" required><br>
        <input class="button" type="submit" value="Войти">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\OpenServer\domains\localhost\rosseti\resources\views/auth/login.blade.php ENDPATH**/ ?>