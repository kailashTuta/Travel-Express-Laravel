<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller; use App\Http\Requests\UpdateProfileRequest; use App\Http\Resources\UserResource; use Illuminate\Http\Request;
class ProfileController extends Controller { public function show(Request $request) { return new UserResource($request->user()); } public function update(UpdateProfileRequest $request) { $user=$request->user(); $data=$request->safe()->except('image'); if ($request->hasFile('image')) { $data['image']=time().'.'.$request->file('image')->getClientOriginalExtension(); $request->file('image')->move(public_path('uploads/profile'),$data['image']); } $user->update($data); return new UserResource($user->refresh()); } }
