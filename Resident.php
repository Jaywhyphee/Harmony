<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $table ='residents';
    
    protected $fillable = [
        'Res_ID' ,
        'Res_Email',
        'Res_Name',
        'Res_Mobile' ,
        'Res_Ic',
        'Res_HouseNo',
        'Password',

        ];
}
