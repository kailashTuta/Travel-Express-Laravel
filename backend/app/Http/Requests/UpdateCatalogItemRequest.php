<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateCatalogItemRequest extends FormRequest { public function rules(): array { return ['name'=>['required'], 'description'=>['required'], 'price'=>['required'], 'places_covered'=>['required'], 'image'=>['nullable','image']]; } }
