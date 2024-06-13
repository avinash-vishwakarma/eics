<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Models\ProjectSection;
use App\Http\Controllers\Controller;

class ProjectSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selectedType=null;
        // show all sections based on the type type is note present 
        $types = ProjectType::all();
        
        if( $request->has('type')){
            // the the section for type
            $type_id = $request->get("type");
            $selectedType = ProjectType::with("sections")->findOrFail($type_id); 
        }
        //  then ask to select one 
        return view("admin.project.section.index",["types"=>$types,"selectedType"=>$selectedType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ProjectType::all();
       return view("admin.project.section.create",["types"=>$types,"section"=>null]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "type"=>"required",
            "title"=>"required"
        ]);

        $type = ProjectType::findOrFail($request->type);
        $section = new ProjectSection();
        $section->name = $request->title;
        $type->sections()->save($section);
        return redirect()->route("admin.project.section.index",["type"=>$type->id])->with("success","project created successfully");
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
        $types = ProjectType::all();
        $section = ProjectSection::with("type")->findOrFail($id);
        return view("admin.project.section.create",["types"=>$types,"section"=>$section]); 
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
        $type = ProjectType::findOrFail($request->type);
        $section = ProjectSection::findOrFail($id);
        
        $section->name = $request->title;
        $type->sections()->save($section);

        return redirect()->route("admin.project.section.index",["type"=>$type->id])->with("success","Section Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSection $section)
    {
        $section->delete();
        return redirect()->route("admin.project.section.index",["type"=>$section->type_id])->with("success","Section Deleted Successfully");
    }
}
