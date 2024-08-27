<?php

namespace App\Models;

use App\Models\Enums\CuisineType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $casts = [
        'cuisine_type' => CuisineType::class,
    ];
}
