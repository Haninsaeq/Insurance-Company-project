<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customersdiscount extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comapny',
        'people',
        'code',
        'discount',
        'useremail'
    ];
}
