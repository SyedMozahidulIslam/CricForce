<?php $__env->startSection('content'); ?>

    <h1 class="mt-5">All Batting Stats</h1>

    <a href="<?php echo e(route('batting_stats.create')); ?>" class="btn btn-primary">Add Batting Stat</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Player</th>
                <th>Format</th>
                <th>Matches</th>
                <th>Runs</th>
                <th>Highest Runs</th>
                <th>100s</th>
                <th>50s</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $battingStats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $battingStat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($battingStat->id); ?></td>
                    <td><?php echo e($battingStat->player->name); ?></td>
                    <td><?php echo e($battingStat->format); ?></td>
                    <td><?php echo e($battingStat->matches); ?></td>
                    <td><?php echo e($battingStat->runs); ?></td>
                    <td><?php echo e($battingStat->highest_runs); ?></td>
                    <td><?php echo e($battingStat->hundreds); ?></td>
                    <td><?php echo e($battingStat->fifties); ?></td>
                    <td>
                        <a href="<?php echo e(route('batting_stats.edit', $battingStat->id)); ?>" class="btn btn-primary">Edit</a>
                        <!-- Add delete button or link here -->

                        <a href="<?php echo e(route('batting_stats.destroy', $battingStat->id)); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/batting_stats/index.blade.php ENDPATH**/ ?>