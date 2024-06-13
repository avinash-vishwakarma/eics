<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectSection;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selectedType = null;
        $selectedSection = null;
        $projects = null;
        $types = ProjectType::all();
        $sections = null;
        if($request->has("type")){
            $selectedType  = ProjectType::findOrFail($request->get("type"));
            $sections = $selectedType->sections()->get();
        }
        // get all the section
        if($selectedType && $request->has("section")){
            $selectedSection = $selectedType->sections()->findOrFail($request->get("section"));
            $projects = $selectedSection->projects()->get();
        }

        return view("admin.project.index",["types"=>$types,"sections"=>$sections,"selectedType"=>$selectedType,"selectedSection"=>$selectedSection,"projects"=>$projects]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // get all types
        $types = ProjectType::all();
        $selectedType = null;
        $selectedSection = null;
        $sections=null;
        if($request->has("type")){
            $selectedType = ProjectType::findOrFail($request->get("type"));
            $sections = $selectedType->sections()->get();
        }
        if($selectedType && $request->has("section")){
            $selectedSection = ProjectSection::findOrFail($request->get("section"));
        }
        // get all sections for selected type
        return view("admin.project.create",["types"=>$types,"selectedType"=>$selectedType,"sections"=>$sections,"selectedSection"=>$selectedSection]);
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title'=>"required",
            "shortDesc"=>"required",
            "section_id"=>"required",
            "start_date"=>"nullable | string",
            "end_date"=>"nullable | string",
            "client_name"=>"nullable | string",
            "client_url"=>"nullable | url",
            "location"=>"nullable | string",
            "full_description"=>"required"
        ]);
        $project = new Project();
        $section = ProjectSection::findOrFail($request->section_id);

        if($request->hasFile('thumbnail')){
            $file = $request->file("thumbnail");
            $destinationPath = "img/project/";
            $fileName = time()."_".$file->getClientOriginalName();
            $file->move(public_path($destinationPath),$fileName);
            $project->thumbnail = $fileName;
        }

        $project->title = $request->title;
        $project->description = $request->shortDesc;
        $project->completion_date = $request->end_date;
        $project->starting_date = $request->start_date;
        $project->client_name = $request->client_name;
        $project->client_url = $request->client_url;
        $project->location = $request->location;
        $project->full_description = $request->full_description;
        $project->slug = Str::slug($request->title);

        $section->projects()->save($project);

        return response()->json([
            "status"=>"success",
            "redirect"=>route("admin.project.create")
        ]);

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
        //
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
