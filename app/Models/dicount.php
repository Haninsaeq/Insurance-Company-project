<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dicount extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company',
        'people',
        'long',
        'discount'
    ];
}
