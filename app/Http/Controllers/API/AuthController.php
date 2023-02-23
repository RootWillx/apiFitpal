<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->high = $request->high;
        $user->weight = $request->weight;
        $user->save();

        $user->schedules()->attach($request->schedules);

        return response()->json([
            'Exist' => true,
            'Info' => 'User registed'
        ], 200);
    }
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'Info' => ['Credentials are incorrect'],
            ]);
        }
        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'Exist' => true,
            'token' => $token
        ],200);
    }
    public function logOut(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'Exist' => true,
            'Info' => 'Token eliminated'
        ],200);
    }
}
