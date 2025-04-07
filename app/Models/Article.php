<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\IntervalFactory> */
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['title','author', 'brief', 'fulltext', 'created_at'];
}
