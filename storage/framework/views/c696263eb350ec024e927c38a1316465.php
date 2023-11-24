<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1>Create Stadium</h1>

    <form action="<?php echo e(route('stadiums.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="location_link">Location Link</label>
            <input type="text" name="location_link" id="location_link" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="location_city">Location City</label>
            <input type="text" name="location_city" id="location_city" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
    
        <div class="form-group">
            <label for="picture1">Picture 1</label>
            <input type="file" name="picture1" id="picture1" class="form-control-file">
        </div>
    
        <div class="form-group">
            <label for="picture2">Picture 2</label>
            <input type="file" name="picture2" id="picture2" class="form-control-file">
        </div>
    
        <button type="submit" class="btn btn-primary">Create Stadium</button>
    </form>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/stadiums/create.blade.php ENDPATH**/ ?>