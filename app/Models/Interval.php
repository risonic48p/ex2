<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
    /** @use HasFactory<\Database\Factories\IntervalFactory> */
    use HasFactory;

    public $timestamps = false;
}
