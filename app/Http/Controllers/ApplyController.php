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
        $apply = Apply::all();
        return view('apply',compact('apply'));

    }
    public function cancelapply($apply_id)
    {
        Apply::destroy($apply_id);
        return redirect()->route('cancelapply');
    }

}
