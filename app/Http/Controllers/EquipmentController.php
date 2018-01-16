<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;
use App\Models\Apply;
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



    public function adminShowEquipmentApplication()
    {
        $equipment=Apply::all();

        return view('application_check',compact('equipment'));
    }
    public function adminEquipmentApplicationPass()
    {
        $equipment=Apply::all();

        return view('application_check',compact('equipment'));
    }
    public function adminEquipmentApplicationFail()
    {
        $equipment=Apply::all();

        return view('application_check',compact('equipment'));
    }
}
