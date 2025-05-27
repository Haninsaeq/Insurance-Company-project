<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custarrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'email',
        'number',
        'price'
    ];
}
