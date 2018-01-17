<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use Illuminate\Http\Requestinput ;

use App\Models\Apply;
use Auth;
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
$user = Auth::User();
if($user==null)
{
    return view('auth.login');
}
            Apply::create([
                'user_class'=>Auth::User()->user_class,
                'user_name' =>Auth::User()->name,
                'user_id' =>Auth::User()->user_id,
                'equipments_name'=>$request->equipments_name,
                'equipments_date'=>$request->equipments_date,
                'equipments_from'=>$request->equipments_from,
                'equipments_too'=>$request->equipments_too,
                'equipments_rentalnumber'=>$request->equipments_rentalnumber,
            ]);
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


