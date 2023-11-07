<?php

namespace App\Http\Controllers;

use App\Models\BattingStat;
use App\Models\BowlingStats;
use App\Models\Player;
use App\Models\Scores;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::orderBy('name')->get();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('admin.players.create', compact('teams'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required',
            'type' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required', // New field
            'age' => 'required|integer', // New field
        ]);

        $data = $request->except(['image']);

        // Handle image upload if an image was provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('players', 'public'); // Store the image in the 'public/players' directory
            $data['image'] = $imagePath;
        }

        Player::create($data);

        return redirect()->route('players.index');
    }

    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('admin.players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'team_id' => 'required',
            'type' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required', // New field
            'age' => 'required|integer', // New field
        ]);

        $data = $request->except(['image']);

        // Handle image upload if an image was provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('players', 'public'); // Store the image in the 'public/players' directory
            $data['image'] = $imagePath;
        }

        $player->update($data);

        return redirect()->route('players.index')->with('success', 'Player updated successfully');
    }

    public function destroy(Player $player)
    {

        try {

            $player->delete();

            return redirect()->route('players.index')->with('message', 'Player deleted successfully');

        } catch (\Exception $e) {
            return redirect()->route('players.index')->with('message', 'Deleting not Allowed or An Error Occurred.');
        }
    }

    public function show(Player $player)
    {
        // Retrieve the player's details
        $player->load('team'); // Load the associated team

        // Retrieve batting stats
        $battingStats = BattingStat::where('player_id', $player->id)->get();

        // Retrieve bowling stats
        $bowlingStats = BowlingStats::where('player_id', $player->id)->get();

        // Retrieve scores
        $scores = Scores::where('player_id', $player->id)->get();

        return view('user.players.show', compact('player', 'battingStats', 'bowlingStats', 'scores'));
    }
}
