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
        $equipment=Apply::where('equipments_status', '0')->get();


        return view('application_check',compact('equipment'));
    }
    public function adminEquipmentApplicationPass($equipment)
    {
        $Apply=Apply::find($equipment);
        $Apply->equipments_status=true;
        $Apply->save();

        return redirect()->route('equipment.adminShowEquipmentApplication');
    }
    public function adminEquipmentApplicationFail()
    {
        $equipment=Apply::all();

        return view('application_check',compact('equipment'));
    }



    public function adminShowNoReturn()
    {
        $aaa=array('equipments_status'=>true ,'equipments_return'=>false);
        $equipment=Apply::where($aaa)->get();


        return view('no_return',compact('equipment'));
    }
    public function adminReturnPass($id)
    {
        $Apply=Apply::find($id);
        $Apply->equipments_return=true;
        $Apply->save();


        return redirect()->route('equipment.adminShowNoReturn');
    }




    public function adminShowRecode()
    {

        $equipment=Apply::where('equipments_return', '1')->get();


        return view('rental_record',compact('equipment'));
    }
}
