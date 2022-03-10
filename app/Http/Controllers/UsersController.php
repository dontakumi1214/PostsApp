<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        if(\Auth::id() == $user->id)
        {
            return view('users.edit', [
            'user' => $user,
        ]);
        }else{
            return view('users.show', [
            'user' => $user,
            ]);
        }
    }

    public function update(UserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if(\Auth::id() == $user->id)
        {
        return redirect(route('users.show', ['id' => \Auth::id()]));
        }else{
            return view('users.show', [
            'user' => $user,
            ]);
        }
    }
}
