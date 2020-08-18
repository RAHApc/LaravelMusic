<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;

class UserController extends AdminController
{
    public function index()
    {
        $users=User::latest()->paginate(20);
        return view('Admin.user.index',compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
