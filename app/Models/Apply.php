<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
protected $table = 'rent_situations';
protected $fillable=['users_class', 'users_id', 'users_name', 'equipments_name', 'equipments_date',
                    'equipments_rentalnumber', 'equipments_from', 'equipments_too'];

    }
