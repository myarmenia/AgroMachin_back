<?php

namespace App\Http\Controllers\Languages;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\LanguageSection;
use App\Services\Languages\LanguagesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $languages = Language::orderBy('id','DESC')->paginate(6);
        return view('languages.index',compact('languages'))
            ->with('i', ($request->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        $sections = LanguagesService::get_sections();
        return view('languages.create',compact('languages', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->sections);
        $validate = [
            "name" => "required",
            // "sections" => "required",
        ];

        $sections_array = $request->sections;
        if($request->new_section != null){
            $validate['new_section'] = 'regex:/^[a-zA-Z]+$/u|max:255|unique:language_sections,name';
            if($request->sections != null && count($request->sections) > 0){
                $sections_array[count($request->sections)] = $request->new_section;
            }
            else{
                $sections_array[0] = $request->new_section;
            }
        }
        else{
            $validate['sections'] = 'required';

        }

        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $language = Language::where('name', $request->name)->first();

        if(!$language){
            $new_language = Language::create($request->all());

            foreach ($sections_array as $key => $value) {
                if($value != null){
                    LanguageSection::create(['language_id' => $new_language->id, 'name' => $value]);
                }
            }

            $create_new_lang = LanguagesService::create($new_language->name, $sections_array);

            if($create_new_lang){
                return redirect()->route('languages.index')
                ->with('success','User created successfully');
            }
        }

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
        $language = Language::find($id);
        $sections = LanguagesService::get_sections();
        $language_sections = LanguagesService::get_sections($id);

        return view('languages.edit',compact('language', 'sections', 'language_sections'));
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
            // "sections" => "required",
        ];

        $sections_array = $request->sections;
        if($request->new_section != null){
            $validate['new_section']='regex:/^[a-zA-Z]+$/u|max:255|unique:language_sections,name';
            if($request->sections != null && count($request->sections) > 0){
                $sections_array[count($request->sections)] = $request->new_section;
            }
            else{
                $sections_array[0] = $request->new_section;
            }

        }
        else{
            $validate['sections'] = 'required';

        }

        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $language = Language::find($id);
        $language_sections = $language->language_sections;

        if($language){
            if(!is_array($sections_array)){
                $sections_array = [];
            }
            foreach ($sections_array as $key => $value) {
                if($value != null){
                    $section = LanguageSection::withTrashed()->where(['language_id' => $id, 'name' => $value])->first();
                    if(!$section){
                        LanguageSection::create(['language_id' => $id, 'name' => $value]);
                    }
                    else{
                        if($section->deleted_at != null){
                            $section->restore();
                        }
                    }
                }
            }
            foreach ($language_sections as $section) {
                if(!in_array($section->name, $sections_array)){
                    $section->delete();
                }
            }
            $update_lang = LanguagesService::create($language->name, $sections_array);


            return redirect()->route('languages.index')
                ->with('success','User created successfully');

        }
    }


    public function change_language_status(Request $request, $id, $status){

        $language = Language::find($id);
        $language->status = $status;
        $language->save();
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
        $language = Language::where('id',$id)->first();
        $deleted = $language->delete();
        if($deleted){
            return redirect()->back();
        }
    }


}
