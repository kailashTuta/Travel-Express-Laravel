<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller; use App\Http\Resources\PackageResource; use App\Http\Resources\TourResource; use App\Models\Package; use App\Models\Tour;
class PublicCatalogController extends Controller { public function tours() { return TourResource::collection(Tour::all()); } public function tour(Tour $tour) { return new TourResource($tour); } public function packages() { return PackageResource::collection(Package::all()); } public function package(Package $package) { return new PackageResource($package); } }
