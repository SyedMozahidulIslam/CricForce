<?php $__env->startSection('content'); ?>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="text-center">
            <i class="fas fa-exclamation-triangle fa-5x text-warning mb-4"></i>
            <h1 class="display-4 text-danger">You are not authorized</h1>
            <p class="lead">to view this page.</p>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/errors/404.blade.php ENDPATH**/ ?>