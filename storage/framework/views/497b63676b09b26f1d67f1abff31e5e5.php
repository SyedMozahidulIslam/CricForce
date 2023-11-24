<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Teams</h1>
        <a class="btn btn-primary mb-2" href="<?php echo e(route('teams.create')); ?>">Create Team</a>

        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($team->name); ?></td>
                        <td><?php echo e($team->description); ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route('teams.edit', $team)); ?>">Edit</a>
                            <form method="post" action="<?php echo e(route('teams.destroy', $team)); ?>" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/teams/index.blade.php ENDPATH**/ ?>