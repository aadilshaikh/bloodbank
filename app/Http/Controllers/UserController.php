<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function details(Request $request)
    {
        $user=User::all();
        return $user;
    }
    public function register(Request $request)
    {
        $user=new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->phone_no = $request->phone_no;
        $user->user_name = $request->user_name;
        $user->blood_group = $request->blood_group;
        $user->address = $request->address;
        $user->save();
    }
}
