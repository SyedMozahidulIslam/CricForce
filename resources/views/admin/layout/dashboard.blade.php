<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">
    <script src="
    https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js
    "></script>
    
   
    <style>
        /* Custom CSS for the sidebar and content */
        #sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #062b50;
            padding: 20px;
            z-index: 1;
            margin-top: 80px;
            overflow-y: auto;
            /* Ensure sidebar appears above the content */
        }

        #content {
            margin-left: 270px;
            /* Adjust this value to match your sidebar's width */
            padding: 20px;
            margin-top: 20px;
            /* Adjust this value to match the navbar's height */
        }

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


    </style>
</head>

<body>

    @include('admin.includes.navbar');

    <div id="sidebar">
        <h2 class="text-white">Admin Control</h2>
        <ul class="list-group">
           
            <li class="list-group-item">
                <a class="dropdown-toggle" href="{{route('users.index')}}">
                    Users
                </a>
              
            </li>
            <a href="{{ route('batting_stats.index') }}">
                <li class="list-group-item">Batting Stats</li>
            </a>
            <a href="{{ route('bowling_stats.index') }}">
                <li class="list-group-item">Bowling Stats</li>
            </a>

            <a href="{{ route('teams.index') }}">
                <li class="list-group-item">Teams</li>
            </a>

            <a href="{{ route('players.index') }}">
                <li class="list-group-item">Players</li>
            </a>
            <a href="{{ route('stadiums.index') }}">
                <li class="list-group-item">Stadiums</li>
            </a>

            <a href="{{ route('match_schedules.index') }}">
                <li class="list-group-item">Schedules</li>
            </a>

            <a href="{{ route('scores.index') }}">
                <li class="list-group-item">Scores</li>
            </a>
            
            <a href="{{ route('news.index') }}">
                <li class="list-group-item">News</li>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                <button class="dropdown-item" type="submit">Log out</button>
                @csrf
            </form>
        </ul>
    </div>

    <div id="content">

        @yield('content')


    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>

</html>
