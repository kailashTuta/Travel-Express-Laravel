<?php
namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class PackageResource extends JsonResource { public function toArray(Request $request): array { return ['p_id'=>$this->p_id,'name'=>$this->name,'description'=>$this->description,'places_covered'=>$this->places_covered,'price'=>$this->price,'image'=>$this->image ? asset('images/package-images/'.$this->image) : null]; } }
