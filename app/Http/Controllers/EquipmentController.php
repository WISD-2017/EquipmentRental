<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;
class EquipmentController extends Controller
{
    public function addEquipment(Request $request)
    {
        Equipment::create($request->all());
        return redirect()->route('equipment.adminShowEquipment');
    }

    public function adminShowEquipment()
    {
        $equipment=Equipment::all();
        return view('equipment_management',compact('equipment'));
    }


    public function adminEquipmentRemove($equipment_id)
    {
        Equipment::destroy($equipment_id);
        return redirect()->route('equipment.adminShowEquipment');
    }
}
