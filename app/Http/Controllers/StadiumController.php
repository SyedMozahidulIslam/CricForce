<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index()
    {
        $stadiums = Stadium::all();
        return view('admin.stadiums.index', compact('stadiums'));
    }

    public function viewAll()
    {
        $stadiums = Stadium::all();
        return view('user.stadiums.index', compact('stadiums'));
    }

    public function create()
    {
        return view('admin.stadiums.create');
    }

    public function destroy(Stadium $stadium)
    {
        try {

        $stadium->delete();
        return redirect()->route('stadiums.index');

    } catch (\Exception $e) {
        return redirect()->route('stadiums.index')->with('message', 'An error occurred or Deleting not Allowed.');
    }
    }

    public function show(Stadium $stadium)
    {
        return view('user.stadiums.show', compact('stadium'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location_link' => 'required',
            'location_city' => 'required',
            'description' => 'nullable',
            'picture1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'picture2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $stadium = new Stadium([
            'name' => $request->input('name'),
            'location_link' => $request->input('location_link'),
            'location_city' => $request->input('location_city'),
            'description' => $request->input('description'),
        ]);

        if ($request->hasFile('picture1')) {
            $picture1Path = $request->file('picture1')->store('stadiums', 'public');
            $stadium->picture1 = $picture1Path;
        }

        if ($request->hasFile('picture2')) {
            $picture2Path = $request->file('picture2')->store('stadiums', 'public');
            $stadium->picture2 = $picture2Path;
        }

        $stadium->save();

        return redirect()->route('stadiums.index');
    }

    public function edit(Stadium $stadium)
    {
        return view('admin.stadiums.edit', compact('stadium'));
    }

    public function update(Request $request, Stadium $stadium)
    {
        // Validate the incoming data from the form
        $request->validate([
            'name' => 'required|string',
            'location_link' => 'required|string',
            'location_city' => 'required|string',
            'description' => 'nullable|string',
            'picture1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'picture2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the stadium details based on the form data
        $stadium->name = $request->input('name');
        $stadium->location_link = $request->input('location_link');
        $stadium->location_city = $request->input('location_city');
        $stadium->description = $request->input('description');

        // Handle image uploads if new images were provided
        if ($request->hasFile('picture1')) {
            // Upload the new image, and update the database field with the new file name
            $picture1Path = $request->file('picture1')->store('stadium_images', 'public');
            $stadium->picture1 = $picture1Path;
        }

        if ($request->hasFile('picture2')) {
            $picture2Path = $request->file('picture2')->store('stadium_images', 'public');
            $stadium->picture2 = $picture2Path;
        }

        // Save the updated stadium details to the database
        $stadium->save();

        return redirect()->route('stadiums.index')
            ->with('message', 'Stadium updated successfully.');
    }

    public function allCities()
    {
        // Retrieve all unique city names from the stadiums
        $cities = Stadium::distinct('location_city')->pluck('location_city');

        return view('user.stadiums.cities', compact('cities'));
    }

}
