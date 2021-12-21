<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function getAll()
    {
        $users = DB::table("users")->get();
        return view("user.list",compact("users"));
    }
}
