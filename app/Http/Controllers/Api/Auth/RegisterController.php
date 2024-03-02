<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user['name'] = $request['name'];
        $user['email'] = $request['email'];
        $user['password'] = Hash::make($request['password']);
        $user->save();

        $userToken = $user->createToken('api-token')->plainTextToken;

        return response(['token' => $userToken, 'user' => $user], 200);
    }
}
