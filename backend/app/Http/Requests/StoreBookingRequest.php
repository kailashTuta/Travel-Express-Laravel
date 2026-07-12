<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreBookingRequest extends FormRequest { public function rules(): array { return ['trip_name' => ['required'], 'persons' => ['required'], 'mobile' => ['required'], 'price' => ['required'], 'journey_date' => ['required'], 'tour_id' => ['nullable'], 'package_id' => ['nullable']]; } }
