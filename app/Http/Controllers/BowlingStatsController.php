<?php

namespace App\Http\Controllers;

use App\Models\BowlingStats;
use App\Models\Player;
use Illuminate\Http\Request;

class BowlingStatsController extends Controller
{

    public function index()
    {
        $bowlingStats = BowlingStats::orderBy('created_at', 'desc')->get();
        
        return view('admin.bowling_stats.index', compact('bowlingStats'));
    }

    public function create()
    {
        $players = Player::all();
        return view('admin.bowling_stats.create', compact('players', 'bowlingStats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'format' => 'required|in:Test,ODI,T20I,IPL',
            'matches' => 'required|integer',
            'wickets' => 'required|integer',
            'best' => 'required|string',
        ]);

        BowlingStats::create($request->all());

        return redirect()->route('bowling_stats.index')
            ->with('success', 'Bowling statistics added successfully.');
    }

    public function edit(BowlingStats $bowling_stat)
    {
        $players = Player::all();

        return view('admin.bowling_stats.edit', compact('bowling_stat', 'players'));
    }

    public function update(Request $request, BowlingStats $bowling_stat)
    {
        $request->validate([
            'format' => 'required|in:Test,ODI,T20I,IPL',
            'matches' => 'required|integer',
            'wickets' => 'required|integer',
            'best' => 'required|string',
        ]);

        $bowling_stat->update($request->all());

        return redirect()->route('bowling_stats.index')
            ->with('success', 'Bowling statistic updated successfully.');
    }

    public function destroy(BowlingStats $bowling_stat)
    {
        $bowling_stat->delete();

        return redirect()->route('bowling_stats.index')
            ->with('success', 'Bowling statistic deleted successfully.');
    }

}
