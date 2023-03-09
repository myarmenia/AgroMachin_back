<?php

namespace App\Http\Controllers\Countingplaces;

use App\Http\Controllers\Controller;
use App\Models\CountingPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountingPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = CountingPlace::latest();
        $countingplace = $query->paginate(10);
        return view('countingplaces.index', compact('countingplace'));
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
        $validator=Validator::make($request->all(),[
            'name' => 'required|min:2|max:255'
        ]);

        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $countingplace = CountingPlace::create($request->all());
        return redirect()->back();
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
        $validator=Validator::make($request->all(),[
            'name' => 'required|min:2|max:255'
        ]);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $status='';
        if($request->has('status')){
            $status = 1;
        }else{
            $status = 0;
        }

        $countingplace_update = CountingPlace::where('id',$id)->update([
            'name'=>$request->name,
            'status'=>$status
        ]);

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
