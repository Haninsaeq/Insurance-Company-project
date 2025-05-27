<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notificationn extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'day',
        'message',
        'month',
        'year'
    ];
}
