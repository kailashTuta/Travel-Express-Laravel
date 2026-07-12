<?php
namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class UserResource extends JsonResource { public function toArray(Request $request): array { return ['id'=>$this->id,'fname'=>$this->fname,'lname'=>$this->lname,'name'=>$this->name,'email'=>$this->email,'role_as'=>$this->role_as,'gender'=>$this->gender,'mobile'=>$this->mobile,'alternate_mobile'=>$this->alternate_mobile,'address'=>$this->address,'city'=>$this->city,'pincode'=>$this->pincode,'image'=>$this->image ? asset('uploads/profile/'.$this->image) : null]; } }
