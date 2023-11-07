<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get(); // Retrieve users with their roles

        return view('admin.allusers.index', compact('users'));
    }

    public function makeAdmin(User $user)
    {
        // Ensure the user exists
        if ($user) {
            // Check if the user already has an "admin" role
            if (!$user->roles->contains('role', 'admin')) {
                // If not, create an "admin" role for the user
                UserRole::create([
                    'user_id' => $user->id,
                    'role' => 'admin',
                ]);
            }
        }

        return redirect()->route('users.index')
            ->with('success', 'User is now an admin.');
    }

    public function removeAdmin(User $user)
    {
        // Ensure the user exists
        if ($user) {
            // Find and delete the user's "admin" role
            $adminRole = UserRole::where('user_id', $user->id)->where('role', 'admin')->first();
            if ($adminRole) {
                $adminRole->delete();
            }
        }

        return redirect()->route('users.index')
            ->with('success', 'User is no longer an admin.');
    }

}
