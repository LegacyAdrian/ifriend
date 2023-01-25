<?php $__env->startSection('content'); ?>
<h2><?php echo e($user->password); ?></h2>
<div class="row">


<form action="/user/<?php echo e($user->id); ?>" method="POST" class="col">
<input type="hidden" name="_METHOD" value="DELETE">
<input type="submit" value="Borrar" class="btn btn-danger">
</form>
<a href="/user/<?php echo e($user->id); ?>/edit" class="btn btn-primary mb-1 mt-1">Editar</a>
<a href="/user" class="btn btn-primary">Ir a Lista </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>