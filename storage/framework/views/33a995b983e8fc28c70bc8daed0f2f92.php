<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h2>Add New Player</h2>
    <form action="<?php echo e(route('players.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name', $player->name ?? '')); ?>" required>
        </div>
        

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="<?php echo e(old('age', $player->age ?? '')); ?>" required>
        </div>

        <div class="form-group">
            <label for="team_id">Select Team:</label>
            <select name="team_id" id="team_id" class="form-control">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($team->id); ?>"><?php echo e($team->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control">
                <option value="Bowler">Bowler</option>
                <option value="Batsman">Batsman</option>
                <option value="All Rounder">All Rounder</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Create Player</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/admin/players/create.blade.php ENDPATH**/ ?>