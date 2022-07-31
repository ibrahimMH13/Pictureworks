<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUser(User $id){
        dd($id);
        return view("layout.master");
    }

    public function getUserWithId(){

    }
}
