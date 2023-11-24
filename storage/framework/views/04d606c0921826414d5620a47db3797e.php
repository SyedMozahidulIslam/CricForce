<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>View Players of Teams</h1>
    
    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('teams.show', $team)); ?>">
    <div class="card m-2">
        <div class="card-body">
            <div class="media">
                <img src="<?php echo e(asset('storage/' . $team->image)); ?>" class="mr-3" alt="<?php echo e($team->name); ?> Image" width="80">
                <div class="media-body">
                    <h5 class="card-title"><?php echo e($team->name); ?> Players</h5>
                </div>
            </div>
        </div>
    </div>
</a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/user/teams/allteams.blade.php ENDPATH**/ ?>