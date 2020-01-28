<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function edit(User $user)
    {
        return view('admin.userEdit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [

            'name' => 'min:2',
            'email' => 'email|unique:user,email',
            'password' => 'confirmed|min:8',
            'address' => 'min:5',
            'zip' => 'min:5',
            'country' => 'min:2',
       ]);

        $user->fill($request->all());
        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'User updated!');

    }
}
