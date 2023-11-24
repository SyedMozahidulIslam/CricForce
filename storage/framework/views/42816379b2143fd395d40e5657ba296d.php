<?php $__env->startSection('content'); ?>
<div class="mt-5">



    <h2>Welcome to Admin Dashboard</h2> <br>

    <?php if(isset($user)): ?>

    <h2>User Name: <?php echo e($user->name); ?></h2>
      
        <h5>Joined Date: <?php echo e($user->created_at->format('Y-m-d')); ?></h5>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>