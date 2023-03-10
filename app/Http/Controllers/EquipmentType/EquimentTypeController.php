<?php

namespace App\Http\Controllers\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\EquipmentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EquimentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->search_inp){
            $equiment_types = EquipmentType::where('name', 'like', '%' . $request->search_inp . '%')->OrderBy('id', 'desc')->paginate(5)->withQueryString();
        }else {
            $equiment_types = EquipmentType::OrderBy('id', 'desc')->paginate(5)->withQueryString();
        }

        return view('equiment-type.index', compact('equiment_types'))
            ->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = [
            'name' => 'required'
        ];

        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return back()->with('create_errror', 1)->withErrors($validator);
        }

        $new_equipment = EquipmentType::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate = [
            'name' => 'required'
        ];

        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return back()->with('update_errror', $id)->withErrors($validator);
        }

        $equiment_type = EquipmentType::find($id);

        $update_equipment = $equiment_type->update([
            'name' => $request->name
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $deleted = EquipmentType::where('id',$id)->first();
        $deleted->delete();
        if($deleted){
            return redirect()->back();
        }

    }
}
