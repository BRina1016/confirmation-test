<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\UsersRequest;

class UsersController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(UsersRequest $request){
        $users = $request->only(['name', 'email', 'password']);
        Users::create($users);
        return view('register', compact('users'));

        $users['name'] = $request->input('name');
        $users['email'] = $request->input('email');
        $users['password'] = $request->input('password');

        return view('register', ['users' => $users,]);
        return view('register', ['email' => $users,]);
        return view('register', ['password' => $users,]);
    }
}
