<!-- teams/allteams.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>All Teams</h1>
    <div class="row">
        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <?php if($team->image): ?>
                        <img src="<?php echo e(asset('storage/' . $team->image)); ?>" class="card-img-top" alt="<?php echo e(asset('storage/' . $team->image)); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(asset('images/default-team-image.jpg')); ?>" class="card-img-top" alt="Default Team Image">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($team->name); ?></h5>
                        <p class="card-text"><?php echo e($team->description); ?></p>
                        <a href="<?php echo e(route('teams.show', $team)); ?>" class="btn btn-primary">View Team</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/user/teams/index.blade.php ENDPATH**/ ?>