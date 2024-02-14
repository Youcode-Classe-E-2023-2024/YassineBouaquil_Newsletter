<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function editUser(User $user)
    {
        // Fetch the user with the related user
        $user = User::with('relatedUser')->find($user->id);

        // dd($user->toArray()); // Uncomment for debugging

        // Return the view for editing the user along with user data
        return view('admin.users.edit', ['user' => $user]);
    }

    public function updateUser(Request $request, User $user)
    {
        // Your logic for updating a user goes here
        // For example, you can validate the request, update the user, and redirect

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Add more validation rules for other fields as needed
        ]);

        $user->update($request->all());

        return view('admin.users.edit', ['user' => $user])
            ->with('success', 'User updated successfully');
    }


}
