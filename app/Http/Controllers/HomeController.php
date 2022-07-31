<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function getUser(Request $request, User $user)
    {
        if (empty($user->id)) {
            $validator = Validator::make($request->all(), User::$rules);
            if ($validator->fails()) {
                return $validator->getMessageBag()->get('id');
            }
            $validated = $validator->validated();
            $user = User::find($validated['id']);
            abort_if(empty($user),404,"No such user ({$validated['id']})");
        }
           return view("app.main", compact('user'));
    }

    public function create(){
        return view('app.user.create');
    }
    public function store(StoreUserRequest $request){
        User::create();
    }
}
