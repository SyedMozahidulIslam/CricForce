 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-light p-4" style="box-shadow: 0 5px 5px -2px rgba(24, 20, 20, 0.2); color:tomato; ">

     <a class="navbar-brand" style="margin-left: 15%" href="<?php echo e(route('home')); ?>"><h1><span style="color: #0f0d0d">Cric</span><span class="mcolor">Force</span> </h1></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

   
     <div class="collapse navbar-collapse " id="navbarNav" >
         <ul class="navbar-nav align-self-end">

             <a class="nav-item nav-link active" href="<?php echo e(route('home')); ?>"><span style="color: #161616 ; font-weight: bold;">Home</span> <span class="sr-only">(current)</span></a>

             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu1" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Attendees
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu1">
                     <a class="dropdown-item" href="<?php echo e(route('teams.allteams')); ?>">Teams</a>
                     <a class="dropdown-item" href="<?php echo e(route('teams.all-teams')); ?>">Players</a>

                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu2" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Match Schedule
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu2">
                     <a class="dropdown-item" href="<?php echo e(route('calendar')); ?>">Show Calender</a>
                     <a class="dropdown-item" href="<?php echo e(route('match_schedules.all')); ?>">Tournament Schedules</a>
                     <a class="dropdown-item" href="<?php echo e(route('match_schedules.allTeams')); ?>">Teams Schedules</a>
                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu3" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Venues
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu3">
                     <a class="dropdown-item" href="<?php echo e(route('stadiums.all')); ?>">All Stadiums</a>
                     <a class="dropdown-item" href="<?php echo e(route('stadiums.cities')); ?>">All Cities</a>

                 </div>

             </li>


             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu4" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     News and Updates
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu4">
                     <a class="dropdown-item" href="<?php echo e(route('allNews')); ?>">News and Updates</a>
                     <a class="dropdown-item" href="<?php echo e(route('videos')); ?>">Videos</a>
                 </div>
             </li>

             
             <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="profileDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i><?php echo e(Auth::user()->name ?? 'Profile'); ?>

                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">


                    <div class="dropdown-divider"></div>

                    <?php if(Auth::check()): ?>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <button class="dropdown-item" type="submit">Log out</button>
                            <?php echo csrf_field(); ?>
                        </form>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">Admin Dashboard</a>

                        <a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">My Profile</a>
                    <?php else: ?>
                        <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a>

                        <a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            </li>
         </ul>

         <form class="form-inline ml-5">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
          </form>
     </div>
 </nav>
<?php /**PATH C:\laragon\www\CricForce\resources\views/admin/includes/navbar.blade.php ENDPATH**/ ?>