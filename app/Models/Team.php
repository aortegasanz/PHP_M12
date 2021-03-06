<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Score;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stadium',
        'city',
        'foundation_year',
    ];

}
