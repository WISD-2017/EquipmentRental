<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table ='equipments';
    protected $fillable =[
        'equipments_name',
        'equipments_unit',
    ];

}
