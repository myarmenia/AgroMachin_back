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
    public function index(Request $request)
    {
        $paginate = 2;
        $i=$request['page'] ? ($request['page']-1)*$paginate : 0;
        $query = CountingPlace::latest();
        if($request->search_fild!=null){
            $query->where('name','like', '%'.$request->search_fild .'%');
        }
        $countingplace =$query->paginate($paginate)->withQueryString();
        return view('countingplaces.index', compact('countingplace','i'))->with('session_search_fild', $request->search_fild);;
    }
    public function change_countingplaces_status(Request $request, $id, $status){

        $countingplace = CountingPlace::find($id);
        $countingplace->status = $status;
        $countingplace->save();
        return redirect()->back();
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

        if($request->has('status')){
            $request['status']=1;

        }else{
            $request['status']=0;
        }
        $validator=Validator::make($request->all(),[
            'name' => 'required|min:2|max:255'
        ]);

        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $countingplace = CountingPlace::create($request->all());
        return redirect('/countingplaces');
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
            'edit_name' => 'required|min:2|max:255'
        ]);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput()->with('action',$id);
        }

        $status='';
        if($request->has('status')){
            $status = 1;
        }else{
            $status = 0;
        }

        $countingplace_update = CountingPlace::where('id',$id)->update([
            'name'=>$request->edit_name,
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
        $deleted = CountingPlace::where('id',$id)->first();
        $deleted->delete();
        if($deleted){
            return redirect()->back();
        }
    }
}
