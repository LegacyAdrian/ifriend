<?php $__env->startSection('title', 'Bienvenido a Ifriend'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Tu gestor de amigo invisible</h2>
    <?php if(isset($_SESSION['id'])): ?>
    <a href="/user" class="btn btn-primary">Lista Usuarios </a>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>