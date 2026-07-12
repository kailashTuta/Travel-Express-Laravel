<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreCatalogItemRequest extends FormRequest { public function rules(): array { return ['name'=>['required'], 'description'=>['required'], 'image'=>['required','image'], 'price'=>['required'], 'places_covered'=>['required']]; } }
