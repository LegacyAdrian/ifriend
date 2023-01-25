<?php $__env->startSection('title', 'Modificar Partida'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Datos a Modificar</h2>
    <form method="POST" action="/party/<?php echo e($party->id); ?>">
      <input type="hidden" name="_METHOD" value="PUT">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name" value="<?php echo e($party->name); ?>">
          <div id="nameHelp" class="form-text">Nombre de la partida.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>