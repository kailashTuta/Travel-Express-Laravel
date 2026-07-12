<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'p_id';
    protected $fillable = ['name', 'description', 'image', 'price', 'places_covered'];
}
