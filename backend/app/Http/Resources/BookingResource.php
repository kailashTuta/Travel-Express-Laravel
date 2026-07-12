<?php
namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class BookingResource extends JsonResource { public function toArray(Request $request): array { return ['booking_id'=>$this->booking_id,'trip_name'=>$this->trip_name,'persons'=>$this->persons,'mobile'=>$this->mobile,'price'=>$this->price,'journey_date'=>$this->journey_date?->toDateString(),'status'=>$this->status,'trip_id'=>$this->trip_id,'package_id'=>$this->package_id,'user_id'=>$this->user_id]; } }
