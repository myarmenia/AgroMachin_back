<?php

namespace App\Http\Controllers\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\EquipmentType;
use Illuminate\Http\Request;

class EquimentTypeSearchController extends Controller
{
    public function index(Request $request) {
        $equipment_type = EquipmentType::where('name', 'like', '%' . $request->search_val . '%')->paginate(2);

        return response()->json(['equipment_type'=>$equipment_type], 200);
    }
}
