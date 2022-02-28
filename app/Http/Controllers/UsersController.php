<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', [
            'users' => $users,
        ]);
    }
}
