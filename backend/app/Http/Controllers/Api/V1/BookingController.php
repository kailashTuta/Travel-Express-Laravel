<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller; use App\Http\Requests\StoreBookingRequest; use App\Http\Resources\BookingResource; use App\Models\Booking; use App\Services\BookingService; use Illuminate\Http\Request;
class BookingController extends Controller { public function index(Request $request) { return BookingResource::collection(Booking::where('user_id',$request->user()->id)->get()); } public function store(StoreBookingRequest $request, BookingService $bookings) { return (new BookingResource($bookings->create($request->validated(),$request->user())))->response()->setStatusCode(201); } }
