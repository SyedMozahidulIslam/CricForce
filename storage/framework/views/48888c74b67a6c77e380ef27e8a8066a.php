<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <h1>Players</h1>

        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if($player->image): ?>
                            <img src="<?php echo e(asset('storage/' . $player->image)); ?>" class="card-img-top" alt="Player Image">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/default-player-image.jpg')); ?>" class="card-img-top" alt="Default Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($player->name); ?></h5>
                            <h6 class="card-title"><?php echo e($player->team->name); ?></h5>
                            <p class="card-text">
                                <strong>Type:</strong> <?php echo e($player->type); ?>

                            </p>
                            <p class="card-text">
                                <strong>Description:</strong> <?php echo e($player->description); ?>

                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo e(route('players.edit', $player->id)); ?>" class="btn btn-primary">Edit</a>
                            <br>
                            <form action="<?php echo e(route('players.destroy', $player->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <a href="<?php echo e(route('players.create')); ?>" class="btn btn-success">Add New Player</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/players/index.blade.php ENDPATH**/ ?>