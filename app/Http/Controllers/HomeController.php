<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUser(User $user){
        return view("app.main",compact('user'));
    }

    public function getUserWithId(){

    }
}
