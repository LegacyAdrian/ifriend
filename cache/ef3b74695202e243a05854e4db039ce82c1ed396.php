<?php $__env->startSection('title', 'Modificar Usuario'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Datos a Modificar</h2>
    <form method="POST" action="/user/<?php echo e($user->id); ?>">
      <input type="hidden" name="_METHOD" value="PUT">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name" value="<?php echo e($user->name); ?>">
          <div id="nameHelp" class="form-text">Nombre de usuario aqui.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo e($user->password); ?>">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>