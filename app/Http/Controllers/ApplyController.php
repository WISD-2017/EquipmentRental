<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apply;

use App\Models\Equipment;
class ApplyController extends Controller
{
    //
    public function indexShowEquipment()
    {
        $equipment=Equipment::all();
        return view('index',compact('equipment'));
    }
    public function equipmentApplication(Request $request)
    {
        Apply::create($request->all());
        return redirect()->route('index.indexShowEquipment');
    }




    public function showapply ()
    {
        $aaa=array('equipments_status'=>false ,'equipments_return'=>false);
        $equipment=Apply::where($aaa)->get();
        return view('apply',compact('equipment'));

    }


    public function cancelapply($equipment_id)
    {
        Apply::destroy($equipment_id);
        return redirect()->route('apply.showapply');
    }

}


