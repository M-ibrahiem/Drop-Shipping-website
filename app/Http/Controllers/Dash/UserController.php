<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('super_admin')) {
            $data = User::whereHasRole(['admin', 'user', 'super_admin'])->paginate();
        } else {
            $data = User::whereHasRole('user',)->paginate();
        }
        return view('dash.users.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('dash.users.create', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $roles = ['user'];

        if ($user->hasRole('admin')) {
            $roles[] = 'admin';
        }
        if ($user->hasRole('super_admin')) {
            $roles = array_merge($roles, ['admin', 'super_admin']);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => ['required', Rule::in($roles)],
        ];

        $validate = $request->validate($rules);

        // Create a new user using the create method
        $user = User::create($request->all());
        // Attach the role to the user using Laratrust
        $user->addRole($validate['role']);

        return redirect()->route('dashboard.users.index')->with('success', 'User created successfully');

        // Create a new user using the create method

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('dash.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $authUser = Auth::user(); // Use a different variable for the authenticated user
        $roles = ['user'];

        if ($authUser->hasRole('admin')) {
            $roles = 'user';
        }
        if ($authUser->hasRole('super_admin')) {
            $roles = array_merge($roles, ['admin', 'super_admin']);
        }

        $rules = [
            'name' => 'required|string',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'role' => ['required', Rule::in($roles)],
        ];

        $validated = $request->validate($rules);

        // Update user details
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $request->filled('password') ? Hash::make($validated['password']) : $user->password,
        ]);

        // Sync roles
        $user->syncRoles([$validated['role']]);

        return redirect()->route('dashboard.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Check if the user exists
        if ($user) {
            // Prevent deletion of admin
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard.users.index')->with('error', 'Cannot delete an admin.');
            }

            // Allow deletion of other roles
            $user->delete();
            return redirect()->route('dashboard.users.index')->with('success', 'User deleted successfully.');
        } else {
            return redirect()->route('dashboard.users.index')->with('error', 'User not found.');
        }
    }
}
