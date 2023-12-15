<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRegistration extends Model
{
    use HasFactory;

    protected $table ='vehicles';

    protected $fillable = [
        'Veh_No' ,
        'Veh_Type',
        'Veh_SiriNo',
        'Veh_Brand' ,
        'Res_ID',
        ];
}
