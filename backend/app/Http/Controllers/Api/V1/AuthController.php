<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller { public function register(RegisterRequest $request): JsonResponse { $user=User::create($request->validated()); return response()->json(['data'=>['user'=>new UserResource($user),'token'=>$user->createToken('travel-express')->plainTextToken]],201); } public function login(LoginRequest $request): JsonResponse { $user=User::where('email',$request->email)->first(); if (!$user || !Hash::check($request->password,$user->password)) return response()->json(['message'=>'The provided credentials are incorrect.'],422); return response()->json(['data'=>['user'=>new UserResource($user),'token'=>$user->createToken('travel-express')->plainTextToken]]); } public function logout(): JsonResponse { request()->user()->currentAccessToken()->delete(); return response()->json(status: 204); } }
