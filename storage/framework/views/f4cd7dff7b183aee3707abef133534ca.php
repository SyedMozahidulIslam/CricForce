<!-- teams/show.blade.php -->



<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1><?php echo e($team->name); ?></h1>
    <div class="row">
        <div class="col-md-4">
            <?php if($team->image): ?>
                <img src="<?php echo e(asset('storage/' . $team->image)); ?>" class="img-fluid" alt="<?php echo e($team->name); ?>">
            <?php else: ?>
                <img src="<?php echo e(asset('images/default-team-image.jpg')); ?>" class="img-fluid" alt="Default Team Image">
            <?php endif; ?>
        </div>
        <div class="col-md-8">
            <p><?php echo e($team->description); ?></p>
            <!-- Add more details here as needed -->

            <h2>Players</h2>
            <div class="">
                <?php $__currentLoopData = $team->players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <?php if($player->image): ?>
                                <img src="<?php echo e(asset('storage/' . $player->image)); ?>" class="card-img" alt="<?php echo e($player->name); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/default-player-image.jpg')); ?>" class="card-img" alt="Default Player Image">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($player->name); ?></h5>
                                <p class="card-text"><?php echo e($player->type); ?></p>
                                <p class="card-text">Age:<?php echo e($player->age); ?></p>
                                <a href="<?php echo e(route('players.show', ['player' => $player])); ?>" class="btn btn-primary">View Player</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/user/teams/show.blade.php ENDPATH**/ ?>