<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request,$id)
    {
        $param = User::findOrFail($id);
        $param->name = $request->name;
        $param->email = $request->email;
        $param->save();
        return redirect(route('users.show', ['id' => \Auth::id()]));
    }
}
