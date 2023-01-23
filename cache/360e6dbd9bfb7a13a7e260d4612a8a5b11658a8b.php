<?php $__env->startSection('content'); ?>
<h2><?php echo e($user->password); ?></h2>
<a href="/" class="btn btn-primary">Ir a Home </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>