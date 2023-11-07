<?php

namespace App\Http\Controllers;

use App\Models\MatchSchedule;
use App\Models\Player;
use App\Models\Scores;
use App\Models\Team;
use Illuminate\Http\Request;

class ScoresController extends Controller
{

    public function index()
    {
        $scores = Scores::all();
        return view('admin.scores.index', compact('scores'));
    }

    public function create()
    {
        $players = Player::all();
        $matches = MatchSchedule::all();
        $teams = Team::all();
        return view('admin.scores.create', compact('players', 'matches', 'teams'));
    }

    public function edit(Scores $score)
    {
        $players = Player::all();
        $matches = MatchSchedule::all();
        $teams = Team::all();
        return view('admin.scores.edit', compact('score', 'players', 'matches', 'teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'match_id' => 'required|exists:match_schedules,id',
            'runs' => 'required|integer',
            'balls_played' => 'required|integer',
            'wickets_got' => 'required|integer',
            'overs_bowled' => 'required|numeric',
            'fours' => 'required|integer',
            'sixes' => 'required|integer',
            'strike_rate' => 'required|numeric',
        ]);

        Scores::create([
            'player_id' => $request->player_id,
            'match_id' => $request->match_id,
            'runs' => $request->runs,
            'balls_played' => $request->balls_played,
            'wickets_got' => $request->wickets_got,
            'overs_bowled' => $request->overs_bowled,
            'fours' => $request->fours,
            'sixes' => $request->sixes,
            'strike_rate' => $request->strike_rate,
        ]);

        return redirect()->route('scores.index')
            ->with('message', 'Score created successfully.');
    }

    public function destroy(Scores $score)
    {
        try {
            $score->delete();
            return redirect()->route('scores.index')->with('message', 'Score deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('scores.index')->with('message', 'An error occurred while deleting the player.');
        }
    }

}
