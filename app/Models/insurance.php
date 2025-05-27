<?php

namespace App\Models;
use App\Models\InsuranceServ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insurance extends Model
{
    use HasFactory;
    public function collection()
    {
       return $this->hasMany(insuranceServ::class);
    }

}
