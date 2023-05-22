<?php

namespace App\Http\Controllers\Main\Author;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $roles = User::getRoles();
        return view('main.author.index', compact('users', 'roles'));
    }
}
