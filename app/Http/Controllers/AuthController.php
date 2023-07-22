<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
      'remember_me' => ['boolean'],
    ]);
    $remember = $credentials['remember_me'] ?? false;
    unset($credentials['remember_me']);
    if (!Auth::attempt($credentials, $remember)) {
      return response([
        'message' => 'Invalid credentials',
      ], 401);
    }

    /** @var \App\Models\User $user */
    $user = Auth::user();
    if (!$user->is_admin) {
      Auth::logout();
      return response([
        'message' => 'You don\'t have permission to access this page',
      ], 401);
    }
    $token = $user->createToken('main')->plainTextToken;
    return response([
      'user' => new UserResource($user),
      'token' => $token,
    ]);
  }

  public function register(Request $request)
  {
    $credentials = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'unique:users'],
      'password' => ['required', 'confirmed'],
    ]);
    $user = User::create($credentials);
    $token = $user->createToken('main')->plainTextToken;
    return response([
      'user' => new UserResource($user),
      'token' => $token,
    ], 201);
  }

  public function logout()
  {
    $user = Auth::user();
    $user->currentAccessToken()->delete();
    return response([
      'message' => 'Logged out',
    ], 204);
  }

  public function getUser(Request $request)
  {
    return new UserResource($request->user());
  }
}
