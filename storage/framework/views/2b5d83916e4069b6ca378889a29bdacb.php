<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Stadiums</h1>

        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>
        <a href="<?php echo e(route('stadiums.create')); ?>" class="btn btn-primary mb-3">Create Stadium</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Location City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $stadiums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stadium): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($stadium->name); ?></td>
                        <td><?php echo e($stadium->location); ?></td>
                        <td><?php echo e($stadium->location_city); ?></td>
                        <td>
                            <a href="<?php echo e(route('stadiums.edit', $stadium->id)); ?>" class="btn btn-primary">Edit</a>
                            <!-- Add a delete button if needed -->
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/stadiums/index.blade.php ENDPATH**/ ?>