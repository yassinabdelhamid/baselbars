<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;
    protected $layout = 'bars';

    protected $fillable = [
        'id',
        'name',
        'place_plz',
        'price_category',
        'address'
    ];
}
