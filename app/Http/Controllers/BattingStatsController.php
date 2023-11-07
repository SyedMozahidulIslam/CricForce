<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BattingStat;
use App\Models\Player;

class BattingStatsController extends Controller
{
    // read from table
    public function index()
    {
        $battingStats = BattingStat::orderBy('created_at', 'desc')->get();
        
        return view('admin.batting_stats.index', compact('battingStats'));
    }

    // view the input form
    public function create()
    {

        $players = Player::all();
        return view('admin.batting_stats.create')->with('players', $players);
    }

    // insert into the table
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'format' => 'required|in:Test,ODI,T20I,IPL',
            'matches' => 'required|integer',
            'runs' => 'required|integer',
            'highest_runs' => 'required|integer',
            'hundreds' => 'required|integer',
            'fifties' => 'required|integer',
        ]);

        // Create a new BattingStat record
        $battingStat = new BattingStat;
        $battingStat->player_id = $request->player_id;
        $battingStat->format = $request->format;
        $battingStat->matches = $request->matches;
        $battingStat->runs = $request->runs;
        $battingStat->highest_runs = $request->highest_runs;
        $battingStat->hundreds = $request->hundreds;
        $battingStat->fifties = $request->fifties;

        $battingStat->save();

        // Redirect to a suitable page after creating the batting stats
        return redirect()->route('batting_stats.index')
            ->with('success', 'Batting statistics created successfully.');
    }

    // delete a specific data

    public function destroy(BattingStat $battingStat)
    {
        $battingStat->delete();

        return redirect()->route('batting_stats.index')
            ->with('success', 'Batting statistics deleted successfully.');
    }

// view edit page

    public function edit(BattingStat $battingStat)
    {
        $players = Player::all();
        return view('admin.batting_stats.edit', compact('battingStat', 'players'));
    }

    // update the data

    public function update(Request $request, BattingStat $battingStat)
    {
        // Validate the incoming request data
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'format' => 'required|in:Test,ODI,T20I,IPL',
            'matches' => 'required|integer',
            'runs' => 'required|integer',
            'highest_runs' => 'required|integer',
            'hundreds' => 'required|integer',
            'fifties' => 'required|integer',
        ]);

        // Update the existing BattingStat record
        $battingStat->update([
            'player_id' => $request->player_id,
            'format' => $request->format,
            'matches' => $request->matches,
            'runs' => $request->runs,
            'highest_runs' => $request->highest_runs,
            'hundreds' => $request->hundreds,
            'fifties' => $request->fifties,
        ]);

        // Redirect to the index page for batting statistics
        return redirect()->route('batting_stats.index')
            ->with('success', 'Batting statistics updated successfully.');
    }

}
