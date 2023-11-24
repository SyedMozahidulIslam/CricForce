<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>CricForce Home</title>


    <!-- Include Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#carouselExampleIndicators').carousel({
                interval: 3000, // Set the interval (e.g., 5000ms for 5 seconds)
                pause: false // Disable pausing on hover
            });
        });
    </script>

    <style>
        .navbar-nav {
            margin-left: 20px;
        }

        .nav-item .nav-link {
            font-size: 16px;
            font-weight: 550;
            color: rgb(102, 8, 8);
            letter-spacing: 1px;
            border-radius: 3px;
            transition: 0.5s ease;
        }

        .nav-item .nav-link:hover {
            background: #B70404;
            color: white;
        }

        #navbar form button {
            background: #B70404;
            color: white;
            border: none;
        }


        /* About Start */
        .about {
            padding: 50px;
            margin-top: 50px;
            background: #f9f9f9;
        }

        .about .card {
            border-radius: 10px;
        }

        .about .card img {
            border-radius: 10px;
        }

        .about h2 {
            font-weight: 600;
            letter-spacing: 1px;
        }

        .about p {
            font-weight: 500;
        }

        #about-btn {
            width: 150px;
            height: 38px;
            border: none;
            border-radius: 5px;
            background: #B70404;
            color: white;
            letter-spacing: 2px;
            font-weight: 550;
            transition: 0.5s ease;
            cursor: pointer;
        }

        #about-btn:hover {
            width: 170px;
        }

        @media (max-width:765px) {
            .about {
                padding: 0;
            }
        }


        /* Section stadium Start */
        .gallary {
            margin-top: 50px;
        }

        .gallary .card {
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            cursor: pointer;
        }

        .gallary .card img {
            border-radius: 10px;
            transition: 0.5s;
        }

        .gallary .card img:hover {
            transform: scale(1.1);
        }



        /* Style for the updated footer with modifications */
        #footer {
            width: 100%;
            text-align: center;
            background: #2B3940;
            /* Change the background color here */
            color: white;
            padding: 30px 0;
            display: flex;
            justify-content: space-around;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2);
        }

        .footer-section {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .footer-section h1,
        .footer-section h4 {
            color: #FA7070;
        }

        .footer-details p {
            margin: 5px 0;
        }

        .social-links i,
        .footer-links a {
            font-size: 18px;
            margin: 0 10px;
            color: rgb(255, 255, 255);
            text-decoration: none;
        }

        .footer-links li {
            list-style: none;
            text-align: left;
        }

        .vertical-divider {
            width: 1px;
            background: #000;
            height: 100px;
            margin: 0 20px;
        }

        /* Section Services Start */
        .services {
            background: white;
            margin-top: 50px;
        }

        .services .card {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border: none;
            cursor: pointer;
        }

        .services .card i {
            font-size: 80px;
            text-align: center;
            color: #11009E;
            margin-top: 20px;
        }

        .services .card .card-body h3 {
            font-weight: 600;
        }

        .services .card .card-body {
            text-align: center;
        }

        .carousel-container {
            display: flex;
            overflow: hidden;
            width: 80%;
            /* 80% of the viewport width */
            margin: 0 auto;
            border: 1px solid #ccc;
            /* Add a border for visibility */
        }

        .carousel {
            display: flex;
            transition: transform 0.5s;
        }

        .carousel img {
            width: 100%;
            /* Adjust the width to 100% to fit the container */
            max-height: 500px;
            /* Set a maximum height to maintain aspect ratio */
        }

        .indicator {
            cursor: pointer;
        }

        #animation-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            /* Adjust the height as needed */
            width: 400px;
            /* Adjust the width as needed */
            /* background-color: #f0f0f0; */
            /* Background color for the container */
        }

        .mcolor {
            color: #B70404;
        }


        /* Style for Participating Teams Section */
        #participating-teams {
            background: #f9f9f9;
            /* Shadow background color */
        }

        #participating-teams h2 {
            font-weight: 600;
            margin-bottom: 30px;
        }

        .team-logo {
            background: #fff;
            /* White circular background */
            border-radius: 50%;
            /* Create a circular shape */
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Shadow effect */
        }

        .team-logo img {
            max-width: 100%;
            border-radius: 50%;
            /* Ensure the image is circular */
        }

        .btn-primary {
            background-color: #B70404;
            /* Button background color */
            color: #fff;
            /* Button text color */
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #850303;
            /* Button background color on hover */
        }
    </style>



</head>

<body>
    <?php echo $__env->make('admin.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Start Carousel Section -->
    <div class="container" style="height: 600px">
        <div id="carouselExampleIndicators" class="carousel" style="height: 600px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item" style="height: 600px;">
                    <img src="<?php echo e(asset('frontend/img/ccw1.jpeg')); ?>" alt="..." class="d-block w-100 h-100"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item active" style="height: 600px;">
                    <img src="<?php echo e(asset('frontend/img/cwc3.jpg')); ?>" alt="..." class="d-block w-100 h-100"
                        style="object-fit: cover;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>




    


    <div class="container">

        <!-- About Start -->
        <section class="about" id="about">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>About Cric<span class="mcolor">Force</span></h1>
                </div>


                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6 py-3 py-md-0 mt-3">
                        <div class="card">
                            <div id="animation-container"></div>
                        </div>
                    </div>


                    <div class="col-md-6 py-3 py-md-0">
                        <h2>Welcome to Cric<span class="mcolor">Force</span>:</h2>

                        <p>
                        The purpose of the CricForce website is to improve fans' engagement with the ICC Men's Cricket World Cup 2023 by offering real-time updates, 
                        interactive elements, and an intuitive user interface. The website will act as a one-stop shop for cricket fans worldwide, including a number of 
                        essential elements to keep visitors informed and interested throughout the competition. The target audience of the website includes fans of cricket, 
                        tournament planners, players, media, and stakeholders.
                        </P><br>

                        <p>
                        The CricForce website's primary goal during the ICC Men's Cricket World Cup 2023 will be to offer a thorough platform for cricket fans. The website's
                         coverage area includes real-time updates, player profiles, information about the teams, reminders and match schedules, stadium locator and virtual tours.
                        </P><br>

                        <P>
                            
                        </P><br>

                        <p>
                            
                        </p>

                        <button id="about-btn">Read More...</button>
                    </div>

                </div>
            </div>
        </section><br>


        <!-- Section for Participating Teams -->
        <section id="participating-teams" class="text-center py-5">
            <div class="container">
                <h2>Participating <span class="mcolor">Teams</span></h2>
                <div class="row justify-content-center">
                    <!-- Team Logos - First Row -->
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/eng.png')); ?>" alt="Team 1">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/pak.png')); ?>" alt="Team 2">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/nz.jpeg')); ?>" alt="Team 3">
                        </div>
                    </div>
                    <!-- Team Logos - Second Row -->
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/afg.png')); ?>" alt="Team 4">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/aus.jpg')); ?>" alt="Team 5">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 mb-4">
                        <div class="team-logo">
                            <img src="<?php echo e(asset('frontend/img/bd.jpg')); ?>" alt="Team 6">
                        </div>
                    </div>
                </div>
                <a href="<?php echo e(route('teams.allteams')); ?>"><button class="btn btn-primary mt-4">Show All Teams</button></a>
            </div>
        </section>





        <!-- Section stadium Start -->
        <section class="gallary" id="gallary">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>Visiting <span class="mcolor">Stadiums</span></h1>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/aj.jpg')); ?>" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/ap.jpg')); ?>" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/r-stad.jpg')); ?>" alt="" height="230px">
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/n-stad.jpg')); ?>" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/cs.jpg')); ?>" alt="" height="230px">
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo e(asset('frontend/img/edg.jpg')); ?>" alt="" height="230px">
                        </div>


                    </div>
                </div>

            </div>
        </section><br><br><br>


        <!-- Section Services Start -->
        <section class="services" id="services">
            <div class="container">
                <div class="main-txt text-center">
                    <h1>ALL <span style="color: #B70404;">IN-ONE</span></h1>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-globe" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('teams.allteams')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Contries</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-people-group" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('teams.all-teams')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Teams</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-calendar" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('calendar')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Schedules</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-map-location-dot" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('stadiums.all')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Venues</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-circle-play" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('videos')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">Videos</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <i class="fas fa-newspaper" style="color: #0802A3"></i>
                            <a href="<?php echo e(route('allNews')); ?>" style="text-decoration: none">
                                <div class="card-body">
                                    <h3 style="color: #db235a">News and Updates</h3>
                                    <p> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br><br>


        <hr>
        <!-- Latest News Section -->
        <h2>Latest <span class="mcolor">News</span> <a href="<?php echo e(route('allNews')); ?>"
                class="btn btn-outline-success">Show All News</a></h2>
        <div class="row text-center mt-5 mb-5">
            <?php $count = 0 ?>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count < 3): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <?php if($article->image): ?>
                                <img src="<?php echo e(asset($article->image)); ?>" class="card-img-top"
                                    alt="<?php echo e($article->title); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($article->title); ?></h5>
                                <p class="card-text"><?php echo e(Str::limit($article->story, 100)); ?></p>
                                <a href="<?php echo e(route('news.show', $article->id)); ?>" class="btn btn-primary">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <?php $count++ ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <hr>
        <!-- Latest Videos Section -->
        <h2>Latest <span class="mcolor">Videos</span> <a href="<?php echo e(route('videos')); ?>"
                class="btn btn-outline-success">More Videos</a></h2>
        <div class="row text-center mt-5 mb-5">
            <?php $count = 0 ?>
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count < 2): ?>
                    <div class="col-md-6 mt-3">
                        <?php echo $video->vdo_link; ?>

                    </div>
                    <?php $count++ ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>








    </div>

    <?php echo $__env->make('admin.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Include Bootstrap and Font Awesome icons -->
    <script>
        // Replace 'your-animation.json' with the path to your JSON animation file
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('animation-container'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '<?php echo e(asset('frontend/img/1698422519865.json')); ?>',
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\CricForce\resources\views/admin/layout/master.blade.php ENDPATH**/ ?>