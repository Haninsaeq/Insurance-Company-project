<?php

namespace App\Models;
use App\Models\Insurance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insuranceServ extends Model
{
    use HasFactory;
    public function insurance()
       {
          return $this->belongsTo(insurance::class);
       }
       protected $fillable = [
         'name',
         'insurance_id',
         'company',
         'thing'
     ];

}
