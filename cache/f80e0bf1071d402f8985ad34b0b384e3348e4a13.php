<?php $__env->startSection('title', 'Crear Partida'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Datos de la nueva partida </h2>
    <form method="POST" action="/party">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name">
          <div id="nameHelp" class="form-text">Nombre para la partida.</div>
        </div>
        <div class="mb-3">
         <h3>Participantes</h3>
         <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <span class="m-3">
          <input type="checkbox" name="participants[]" id="user<?php echo e($user->id); ?>" value="<?php echo e($user->id); ?>">
          <label for="user<?php echo e($user->id); ?>"><?php echo e($user->name); ?></label>
         </span>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>