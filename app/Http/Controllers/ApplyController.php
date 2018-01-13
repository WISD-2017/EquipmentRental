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

}
