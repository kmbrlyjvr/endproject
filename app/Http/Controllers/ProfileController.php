<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('profile.userprofile', ['users' => $users]);    
    }


    
    public function show($id)
    {   
        $user = User::findOrFail($id);       
        return view('profile.show',['user' => $user]);
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

        return redirect()->route('user.show', $user->id)->with('success', 'Blog updated!');

    }

    public function getUserById($id)
	{
		return User::with('profile')->whereId($id)->firstOrFail();
	}
}
