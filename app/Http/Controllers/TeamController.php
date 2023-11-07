<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
    {
      
        return view('admin.teams.create');
    }


    public function index()
    {
     

        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }
    

    public function allteams()
    {
        $teams = Team::all();
        return view('user.teams.index', compact('teams'));
    }

    public function allteamsplayer()
    {
        $teams = Team::all();
        return view('user.teams.allteams', compact('teams'));
    }


    public function show(Team $team)
    {
        return view('user.teams.show', compact('team'));
    }

   

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image upload
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
            $data['image'] = '/' . $imagePath;
        }

        Team::create($data);
        return redirect()->route('teams.index')->with('message', 'Team created successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }
    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image upload
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
            $data['image'] = '/' . $imagePath;
        }

        $team->update($data);
        return redirect()->route('teams.index')->with('message', 'Team updated successfully.');
    }

    public function destroy(Team $team)
    {

        try {
        $team->delete();
        return redirect()->route('teams.index');

    } catch (\Exception $e) {
        return redirect()->route('teams.index')->with('message', 'An error occurred or Deleting not Allowed.');
    }
    }
}
