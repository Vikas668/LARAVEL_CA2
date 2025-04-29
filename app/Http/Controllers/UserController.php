<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a newly created user in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Check if the user already exists
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email already exists.']);
        }
        // Check if the username already exists
        if (User::where('username', $request->username)->exists()) {
            return redirect()->back()->withErrors(['username' => 'Username already exists.']);
        }
        // Check if the password is strong enough
        if (strlen($request->password) < 8) {
            return redirect()->back()->withErrors(['password' => 'Password must be at least 8 characters.']);
        }

        // Create the user in the database by validating the request data
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        // log the user in after registration



        // Redirect to a success page or back to the form
        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
