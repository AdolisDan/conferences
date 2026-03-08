<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mock data
        $users = collect([
            (object) [
                'id' => 1,
                'name' => 'Vardenis Pavardenis',
                'email' => 'email@example.com',
            ]
        ]);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mock data
        $user = (object) [
            'id' => 1,
            'name' => 'Vardenis Pavardenis',
            'email' => 'email@example.com',
        ];
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Logic to update user
        return redirect()->route('admin.users.index')->with('success', 'Naudotojas atnaujintas sėkmingai.');
    }
}

