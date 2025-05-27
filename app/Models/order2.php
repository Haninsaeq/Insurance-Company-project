<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'useremail',
        'type',
        'start',
        'end',
        'cost',
        'paied',
        'numberofpeople',
    ];
}
