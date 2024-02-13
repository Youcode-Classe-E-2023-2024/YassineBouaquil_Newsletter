<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function editUser($user)
    {
        // Your logic for editing a user goes here
        // You can return the view for the edit page
        return view('admin.users.edit', ['user' => $user]);
    }
}
