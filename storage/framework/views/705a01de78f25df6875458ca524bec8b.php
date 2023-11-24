<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1>Edit Team</h1>
    <form method="post" action="<?php echo e(route('teams.update', $team)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($team->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"><?php echo e($team->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Update Team</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/teams/edit.blade.php ENDPATH**/ ?>