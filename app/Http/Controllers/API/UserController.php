<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Builder\Use_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Stored user'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $id)
    {
        return response()->json([
            'Exist' => true,
            'User' => $id
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'Exist' => true,
            'User' => $user
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'Exist' => true,
            'User' => $user
        ],200);
    }
}
