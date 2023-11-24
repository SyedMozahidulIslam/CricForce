<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Player Profile</h1>

        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo e(asset('storage/' . $player->image)); ?>" alt="<?php echo e($player->name); ?>" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2><?php echo e($player->name); ?></h2>
                        <p>Age: <?php echo e($player->age); ?></p>
                        <p>Type: <?php echo e($player->type); ?></p>
                        <p>Description: <?php echo e($player->description); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Batting Stats</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Format</th>
                        <th>Matches</th>
                        <th>Runs</th>
                        <th>High Score</th>
                        <th>100s</th>
                        <th>50s</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $battingStats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($stat->format); ?></td>
                            <td><?php echo e($stat->matches); ?></td>
                            <td><?php echo e($stat->runs); ?></td>
                            <td><?php echo e($stat->highest_runs); ?></td>
                            <td><?php echo e($stat->hundreds); ?></td>
                            <td><?php echo e($stat->fifties); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <h2>Bowling Stats</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Format</th>
                        <th>Matches</th>
                        <th>Wickets</th>
                        <th>Best Bowling</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bowlingStats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($stat->format); ?></td>
                            <td><?php echo e($stat->matches); ?></td>
                            <td><?php echo e($stat->wickets); ?></td>
                            <td><?php echo e($stat->best); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <h2>Recent Scores</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Match</th>
                        <th>Runs</th>
                        <th>Wickets</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($score->match->match_date); ?></td>
                            <?php if($score->runs > 0): ?>
                                <td><?php echo e($score->runs); ?> / <?php echo e($score->balls_played); ?></td>
                            <?php else: ?>
                                <td>N/A</td>
                            <?php endif; ?>
                            <?php if($score->overs_bowled > 0): ?>
                                <td><?php echo e($score->wickets_got); ?> / <?php echo e($score->overs_bowled); ?></td>
                            <?php else: ?>
                                <td>N/A</td>
                            <?php endif; ?>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CricForce\resources\views/user/players/show.blade.php ENDPATH**/ ?>