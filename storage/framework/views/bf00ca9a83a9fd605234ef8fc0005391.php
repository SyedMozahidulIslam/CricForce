<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-5">All Venues</h1>

    
    <div class="row">
        <?php $__currentLoopData = $stadiums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stadium): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo e(asset('storage/' . $stadium->picture1)); ?>" class="card-img-top" alt="<?php echo e(asset('storage/' . $stadium->picture1)); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($stadium->name); ?></h5>
                    <p class="card-text">
                        <i class="fas fa-map-location-dot"> </i> <?php echo e($stadium->location_city); ?><br> <br>
                        <?php echo e(Str::limit($stadium->description, 100)); ?>

                    </p>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(route('stadiums.show',$stadium )); ?>" class="btn btn-primary">Explore Stadium</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/user/stadiums/index.blade.php ENDPATH**/ ?>