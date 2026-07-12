<?php
namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class TourResource extends JsonResource { public function toArray(Request $request): array { return ['t_id'=>$this->t_id,'name'=>$this->name,'description'=>$this->description,'places_covered'=>$this->places_covered,'price'=>$this->price,'image'=>$this->image ? asset('images/tour-package-images/'.$this->image) : null]; } }
