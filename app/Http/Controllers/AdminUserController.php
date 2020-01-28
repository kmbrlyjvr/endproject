<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function edit(User $user)
    {
        return view('admin.userEdit', compact('user'));
    }

    public function userUpdate(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'min:2',
            'email' => 'email|unique:user,email',
            'password' => 'confirmed|min:8',
            'address' => 'min:5',
            'zip' => 'min:5',
            'country' => 'min:2',
       ]);

        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->route('admin.users', $user->id)->with('success', 'User updated!');

    }
}
