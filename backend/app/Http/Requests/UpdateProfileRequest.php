<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateProfileRequest extends FormRequest { public function rules(): array { return ['fname'=>['nullable'], 'lname'=>['nullable'], 'name'=>['nullable'], 'email'=>['nullable','email'], 'gender'=>['nullable'], 'mobile'=>['nullable'], 'alternate_mobile'=>['nullable'], 'address'=>['nullable'], 'city'=>['nullable'], 'pincode'=>['nullable'], 'image'=>['nullable','image']]; } }
