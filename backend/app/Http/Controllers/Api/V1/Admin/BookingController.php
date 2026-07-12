<?php
namespace App\Http\Controllers\Api\V1\Admin;
use App\Http\Controllers\Controller; use App\Http\Resources\BookingResource; use App\Models\Booking; use Illuminate\Http\Request;
class BookingController extends Controller { public function index(Request $request) { $q=Booking::query(); if($request->filled('user_id'))$q->where('user_id',$request->user_id); return BookingResource::collection($q->get()); } public function updateStatus(Request $request,Booking $booking) { $data=$request->validate(['status'=>['required']]); $booking->update($data); return new BookingResource($booking); } }
