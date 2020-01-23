<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {   
        $users = User::all();
        $orders = Orders::all();
        return view('profile.userprofile', ['users' => $users], ['orders' => $orders]);     }


    
    public function show(User $user)
    {   
        return view('profile.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [

            'name' => 'min:2',
            'email' => 'email|unique:user,email',
            'password' => 'confirmed|min:8',
            'adress' => 'min:5',
            'zip' => 'min:2',
            'country' => 'min:2',
       ]);

        $user->fill($request->all());
        $user->save();

        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated!');

    }

    public function getUserById($id)
	{
		return User::with('profile')->whereId($id)->firstOrFail();
	}
}
