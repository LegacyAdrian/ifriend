<?php $__env->startSection('title', 'Bienvenido a la lista'); ?>

<?php $__env->startSection('content'); ?>
<a href="/user/create" class="btn btn-primary">Crear Usuario </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
            <th scope="row"> <?php echo e($user->id); ?></th>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td>
                <a href="/user/<?php echo e($user->id); ?>" class="btn btn-primary">Lista Usuarios </a>
            </td>
           </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>