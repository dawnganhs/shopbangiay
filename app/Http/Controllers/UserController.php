<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('/admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('/admin.users.create');
    }
    
    public function store(Request $Request)
    {
        $users = New User;
        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->password = request()->input('password');
        $users->phone = request()->input('phone');
        $users->address = request()->input('address');
        $users->role = request()->input('role');

        $users->save();

        return redirect('/listusers');
    }
}
