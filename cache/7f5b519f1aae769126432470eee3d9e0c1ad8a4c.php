<?php $__env->startSection('content'); ?>
<h2><?php echo e($party->name); ?></h2>
<div class="row">


<form action="/party/<?php echo e($party->id); ?>" method="POST" class="col">
<input type="hidden" name="_METHOD" value="DELETE">
<input type="submit" value="Borrar" class="btn btn-danger">
</form>
<a href="/party/<?php echo e($party->id); ?>/edit" class="btn btn-primary mb-1 mt-1">Editar</a>
<a href="/party" class="btn btn-primary">Ir a Lista </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>