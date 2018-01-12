<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;
class EquipmentController extends Controller
{
    public function addEquipment(Request $request)
    {
        $equipment=Equipment::create($request->all());
        return view('equipment_management');
    }
}
