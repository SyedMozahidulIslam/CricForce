<?php

use App\Http\Controllers\BattingStatsController;
use App\Http\Controllers\BowlingStatsController;
use App\Http\Controllers\MatchScheduleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    $videos = News::whereNotNull('vdo_link')->orderBy('created_at', 'desc')->get(['id', 'title', 'vdo_link']);
    $news = News::orderBy('created_at', 'desc')->get();

    return view('admin.layout.master', compact('news', 'videos'));
});

Route::get('/home', function () {
    $videos = News::whereNotNull('vdo_link')->orderBy('created_at', 'desc')->get(['id', 'title', 'vdo_link']);
    $news = News::orderBy('created_at', 'desc')->get();

    return view('admin.layout.master', compact('news', 'videos'));
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin dashboard

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        $videos = News::whereNotNull('vdo_link')->orderBy('created_at', 'desc')->get(['id', 'title', 'vdo_link']);
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('user'));
    })->name('dashboard');
});

// Routes for managing Teams

// Routes for managing Teams
Route::get('/allteams', [TeamController::class, 'allteams'])->name('teams.allteams');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/all-teams', [TeamController::class, 'allteamsplayer'])->name('teams.all-teams');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

    // Form to create a new team

    Route::get('/teams/create/new', [TeamController::class, 'create'])->name('teams.create');
    // Store a new team
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');

    // Form to edit a team
    Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');

    // Update a team
    Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');

    // Delete a team
    Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
});

//players routes

Route::get('/players/{player}', [PlayerController::class, 'show'])->name('players.show');

Route::middleware(['auth', 'verified'])->group(function () {
    // Players Index (No Admin Check)
    Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

    // Admin Check for Other Player Routes
    Route::middleware('admin')->group(function () {
        // Create a new player (GET)
        Route::get('/players/create/new', [PlayerController::class, 'create'])->name('players.create');

        // Store a new player (POST)
        Route::post('/players', [PlayerController::class, 'store'])->name('players.store');

        // Edit a player (GET)
        Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');

        // Update a player (PUT/PATCH)
        Route::put('/players/{player}/update', [PlayerController::class, 'update'])->name('players.update');

        // Delete a player (DELETE)
        Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');
    });
});

Route::get('/stadiums', [StadiumController::class, 'index'])->name('stadiums.index');
Route::get('/all-stadiums', [StadiumController::class, 'viewAll'])->name('stadiums.all');
Route::get('/stadiums/{stadium}', [StadiumController::class, 'show'])->name('stadiums.show');
Route::get('/cities', [StadiumController::class, 'allCities'])->name('stadiums.cities');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/stadiums/create/new', [StadiumController::class, 'create'])->name('stadiums.create');
    Route::post('/stadiums', [StadiumController::class, 'store'])->name('stadiums.store');
    Route::get('/stadiums/{stadium}/edit', [StadiumController::class, 'edit'])->name('stadiums.edit');
    Route::put('/stadiums/{stadium}', [StadiumController::class, 'update'])->name('stadiums.update');
    Route::delete('/stadiums/{stadium}', [StadiumController::class, 'destroy'])->name('stadiums.destroy');
});

// Match Schedules Routes
Route::get('match_schedules/all', [MatchScheduleController::class, 'allSchedules'])->name('match_schedules.all');
Route::get('match_schedules/allTeams', [MatchScheduleController::class, 'allTeams'])->name('match_schedules.allTeams');
Route::get('match_schedules/{teamId}/team', [MatchScheduleController::class, 'showTeam'])->name('match_schedules.showTeam');
// Show a specific match schedule

Route::get('match_schedules/{match_schedule}', [MatchScheduleController::class, 'show'])->name('match_schedules.show');

Route::middleware(['auth', 'admin'])->group(function () {
    // List all match schedules
    Route::get('match_schedules', [MatchScheduleController::class, 'index'])->name('match_schedules.index');

    // Show the form to create a new match schedule
    Route::get('match_schedules/create/new', [MatchScheduleController::class, 'create'])->name('match_schedules.create');

    // Store a new match schedule
    Route::post('match_schedules', [MatchScheduleController::class, 'store'])->name('match_schedules.store');

    // Show the form to edit a match schedule
    Route::get('match_schedules/{match_schedule}/edit', [MatchScheduleController::class, 'edit'])->name('match_schedules.edit');

    // Update a specific match schedule
    Route::put('match_schedules/{match_schedule}', [MatchScheduleController::class, 'update'])->name('match_schedules.update');

    // Delete a specific match schedule
    Route::delete('match_schedules/{match_schedule}', [MatchScheduleController::class, 'destroy'])->name('match_schedules.destroy');
});

Route::get('/calendar', [MatchScheduleController::class, 'showCalendar'])->name('calendar');

//scores routes

Route::get('/scores', [ScoresController::class, 'index'])->name('scores.index');

Route::middleware(['auth', 'admin'])->group(function () {
    // Routes for managing scores

    Route::get('/scores/create', [ScoresController::class, 'create'])->name('scores.create');
    Route::post('/scores', [ScoresController::class, 'store'])->name('scores.store');
    Route::get('/scores/{score}/edit', [ScoresController::class, 'edit'])->name('scores.edit');
    Route::put('/scores/{score}', [ScoresController::class, 'update'])->name('scores.update');
    Route::delete('/scores/{score}', [ScoresController::class, 'destroy'])->name('scores.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // List all batting stats
    Route::get('/batting_stats', [BattingStatsController::class, 'index'])->name('batting_stats.index');

    // Show the form to create new batting stats
    Route::get('/batting_stats/create', [BattingStatsController::class, 'create'])->name('batting_stats.create');

    // Store new batting stats
    Route::post('/batting_stats', [BattingStatsController::class, 'store'])->name('batting_stats.store');

    // Show a specific batting stats
    Route::get('/batting_stats/{batting_stat}', [BattingStatsController::class, 'show'])->name('batting_stats.show');

    // Show the form to edit batting stats
    Route::get('/batting_stats/{batting_stat}/edit', [BattingStatsController::class, 'edit'])->name('batting_stats.edit');

    // Update a specific batting stats
    Route::put('/batting_stats/{batting_stat}', [BattingStatsController::class, 'update'])->name('batting_stats.update');

    // Delete a specific batting stats
    Route::delete('/batting_stats/{batting_stat}', [BattingStatsController::class, 'destroy'])->name('batting_stats.destroy');
});

// Define a route group with the 'auth' middleware
Route::middleware(['auth'])->group(function () {

    // Index (Listing) - No Admin Check
    Route::get('/bowling_stats', [BowlingStatsController::class, 'index'])->name('bowling_stats.index');

    // Create (Form) - Admin Check
    Route::middleware(['admin'])->group(function () {
        Route::get('/bowling_stats/create', [BowlingStatsController::class, 'create'])->name('bowling_stats.create');
    });

    // Store (Create) - Admin Check
    Route::middleware(['admin'])->group(function () {
        Route::post('/bowling_stats', [BowlingStatsController::class, 'store'])->name('bowling_stats.store');
    });

    // Edit (Form) - Admin Check
    Route::middleware(['admin'])->group(function () {
        Route::get('/bowling_stats/{bowling_stat}/edit', [BowlingStatsController::class, 'edit'])->name('bowling_stats.edit');
    });

    // Update (Edit) - Admin Check
    Route::middleware(['admin'])->group(function () {
        Route::put('/bowling_stats/{bowling_stat}', [BowlingStatsController::class, 'update'])->name('bowling_stats.update');
    });

    // Delete (Destroy) - Admin Check
    Route::middleware(['admin'])->group(function () {
        Route::delete('/bowling_stats/{bowling_stat}', [BowlingStatsController::class, 'destroy'])->name('bowling_stats.destroy');
    });
});
//all users check
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('admin');
// Add make admin route
Route::post('/users/{user}/make-admin', [UserController::class, 'makeAdmin'])->name('make.admin')->middleware('admin');

Route::post('/users/{user}/remove-admin', [UserController::class, 'removeAdmin'])->name('remove.admin')->middleware('admin');

Route::get('/allNews', [NewsController::class, 'usersIndex'])->name('allNews');

// Show (View)
Route::get('/news/{news}/show', [NewsController::class, 'show'])->name('news.show');

// Show (View)
Route::get('/videos', [NewsController::class, 'allVideos'])->name('videos');

// Define a route group with the 'auth' and 'admin' middleware
Route::middleware(['auth', 'admin'])->group(function () {

    // Create (Form)
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

    // Index (Listing)
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');

    // Store (Create)
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');

    // Edit (Form)
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');

    // Update (Edit)
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');

    // Delete (Destroy)
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
});

require __DIR__ . '/auth.php';
