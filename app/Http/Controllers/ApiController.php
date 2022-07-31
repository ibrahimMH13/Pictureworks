<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function storeComment(StoreUserRequest $request, User $user)
    {

        if (empty($user->id)) {
            $user = User::find($userId = $request->get('id'));
            abort_if(empty($user), 404, "No such user ({$userId})");
        }
        $validated = $request->validated();
        if (!Hash::check(trim($validated['password']), $user->password)) {
            return response()->json('Invalid password', 401);
        }
        $user->comments .= "\n".$validated['comments'];
        $user->save();
        return response()->json('OK');
    }
}
