<?php
namespace App\Services;
use App\Models\Booking;
use App\Models\User;
class BookingService { public function create(array $data, User $user): Booking { return Booking::create([...$data, 'price' => $data['persons'] * $data['price'], 'trip_id' => $data['tour_id'] ?? null, 'package_id' => $data['package_id'] ?? null, 'user_id' => $user->id]); } }
