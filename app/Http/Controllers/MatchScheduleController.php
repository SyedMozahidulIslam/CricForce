<?php

namespace App\Http\Controllers;

use App\Models\MatchSchedule;
use App\Models\Stadium;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchScheduleController extends Controller
{

    public function index()
    {
        $matchSchedules = MatchSchedule::all();
        return view('admin.match_schedules.index', compact('matchSchedules'));
    }

    public function allSchedules()
    {
        $matchSchedules = MatchSchedule::all();
        return view('user.schedules.all-schedules', compact('matchSchedules'));
    }

    public function allTeams()
    {
        $teams = Team::all();

        return view('user.schedules.team-schedules', compact('teams'));
    }

    public function create()
    {
        $stadiums = Stadium::all();
        $teams = Team::all();

        return view('admin.match_schedules.create', compact('stadiums', 'teams'));
    }

    public function show(MatchSchedule $matchSchedule)
    {

        $stadiums = Stadium::all();
        $teams = Team::all();

        return view('admin.match_schedules.view', compact('matchSchedule'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'match_date' => 'required|date',
            'venue_id' => 'required|exists:stadiums,id',
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'match_type' => 'required|in:playoff,group,semi,quarter,final',
            'won_team_id' => 'nullable|exists:teams,id',
            'lost_team_id' => 'nullable|exists:teams,id',
            'team1_runs' => 'nullable|integer',
            'team1_overs_needed' => 'nullable|double',
            'team2_runs' => 'nullable|integer',
            'team2_overs_needed' => 'nullable|double',
        ]);

        // Create a new MatchSchedule record using Eloquent
        $matchSchedule = new MatchSchedule;
        $matchSchedule->match_date = $request->match_date;
        $matchSchedule->venue_id = $request->venue_id;
        $matchSchedule->team1_id = $request->team1_id;
        $matchSchedule->team2_id = $request->team2_id;
        $matchSchedule->match_type = $request->match_type;
        $matchSchedule->won_team_id = $request->won_team_id;
        $matchSchedule->lost_team_id = $request->lost_team_id;
        $matchSchedule->team1_runs = $request->team1_runs;
        $matchSchedule->team1_overs_needed = $request->team1_overs_needed;
        $matchSchedule->team2_runs = $request->team2_runs;
        $matchSchedule->team2_overs_needed = $request->team2_overs_needed;

        $matchSchedule->save();

        // Redirect to a suitable page (e.g., the index page)
        return redirect()->route('match_schedules.index')
            ->with('success', 'Match schedule created successfully.');
    }

    public function edit(MatchSchedule $matchSchedule)
    {
        $stadiums = Stadium::all();
        $teams = Team::all();

        return view('admin.match_schedules.edit', compact('matchSchedule', 'stadiums', 'teams'));
    }

    public function update(Request $request, MatchSchedule $matchSchedule)
    {
        $request->validate([
            'match_date' => 'required|date',
            'venue_id' => 'required|exists:stadiums,id',
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'match_type' => 'required|in:playoff,group,semi,quarter,final',
            'won_team_id' => 'nullable|exists:teams,id',
            'lost_team_id' => 'nullable|exists:teams,id',
            'team1_runs' => 'nullable|integer',
            'team1_overs_needed' => 'nullable|between:0,99.99',
            'team2_runs' => 'nullable|integer',
            'team2_overs_needed' => 'nullable|between:0,99.99',
        ]);

        $matchSchedule->update($request->all());

        return redirect()->route('match_schedules.index')
            ->with('success', 'Match schedule updated successfully.');
    }

    public function showCalendar()
    {
        $matchSchedules = MatchSchedule::all();
        return view('admin.match_schedules.fullcalender', compact('matchSchedules'));
    }

    public function showTeam($teamId)
    {
        // Retrieve the team's schedule based on the team's ID
        $teamSchedule = MatchSchedule::where('team1_id', $teamId)
            ->orWhere('team2_id', $teamId)
            ->get();

        return view('user.schedules.show', compact('teamSchedule','teamId'));
    }

}
