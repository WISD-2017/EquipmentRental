<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;
class ApplyController extends Controller
{
    //
    public function indexShowEquipment()
    {
        $equipment=Equipment::all();
        return view('index',compact('equipment'));
    }
    public function addapply(Request $request)
    {
        Apply::create($request->all());
        return redirect()->route('showapply');
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
