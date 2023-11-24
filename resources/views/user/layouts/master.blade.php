<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">
    <script src="
                https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js
                "></script>


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

        .mcolor {
            color: #B70404;
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
    
    .mcolor {
            color: #B70404;
        }


    </style>

</head>

<body>
  
 <!-- Navbar -->
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-light p-4" style="box-shadow: 0 5px 5px -2px rgba(24, 20, 20, 0.2); color:tomato ">

    <a class="navbar-brand" style="margin-left: 15%" href="{{ route('home') }}"><h1><span style="color: #0f0d0d">Cric</span><span class="mcolor">Force</span> </h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav align-self-end">

        <a class="nav-item nav-link active" href="{{ route('home') }}"><span style="color: #161616 ; font-weight: bold;">Home</span> <span class="sr-only">(current)</span></a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Attendees
                </a>
                <div class="dropdown-menu" aria-labelledby="menu1">
                    <a class="dropdown-item" href="{{ route('teams.allteams') }}">Teams</a>
                    <a class="dropdown-item" href="{{ route('teams.all-teams') }}">Players</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu2" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Match Schedule
                </a>
                <div class="dropdown-menu" aria-labelledby="menu2">
                    <a class="dropdown-item" href="{{ route('calendar') }}">Show Calender</a>
                    <a class="dropdown-item" href="{{ route('match_schedules.all') }}">Tournament Schedules</a>
                    <a class="dropdown-item" href="{{ route('match_schedules.allTeams') }}">Teams Schedules</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu3" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Venues
                </a>
                <div class="dropdown-menu" aria-labelledby="menu3">
                    <a class="dropdown-item" href="{{ route('stadiums.all') }}">All Stadiums</a>
                    <a class="dropdown-item" href="{{ route('stadiums.cities') }}">All Cities</a>

                </div>

            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu4" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News and Updates
                </a>
                <div class="dropdown-menu" aria-labelledby="menu4">
                    <a class="dropdown-item" href="{{ route('allNews') }}">News and Updates</a>
                    <a class="dropdown-item" href="{{ route('videos') }}">Videos</a>
                </div>
            </li>

            
            <li class="nav-item dropdown active">
               <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="profileDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-user"></i>{{ Auth::user()->name ?? 'Profile' }}
               </a>
               <div class="dropdown-menu" aria-labelledby="profileDropdown">


                   <div class="dropdown-divider"></div>

                   @if (Auth::check())
                       <form method="POST" action="{{ route('logout') }}">
                           <button class="dropdown-item" type="submit">Log out</button>
                           @csrf
                       </form>
                       <a class="dropdown-item" href="{{ route('dashboard') }}">Admin Dashboard</a>

                       <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                   @else
                       <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                       <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                   @endif
               </div>
           </li>
        </ul>

        <form class="form-inline ml-5">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
         </form>
    </div>
</nav>



    <div class="m-5">
        @yield('content')
    </div>




    @include('admin.includes.footer')

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
</body>

</html>
