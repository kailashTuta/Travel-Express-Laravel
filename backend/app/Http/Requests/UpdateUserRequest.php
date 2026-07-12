<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateUserRequest extends FormRequest { public function rules(): array { return ['fname'=>['required'], 'lname'=>['required'], 'name'=>['required'], 'email'=>['required','email'], 'role_as'=>['required']]; } }
