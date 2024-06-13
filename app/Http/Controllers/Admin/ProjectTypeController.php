<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProjectType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // get all the types
         $types = ProjectType::all();
         return view("admin.project.type.index",["types"=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.project.type.create");
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
            'name'=>"required"
        ]);
        
        // *** check if the slug already exists

        $type = ProjectType::create([
            "name"=>$request->name,
            "slug"=>Str::slug($request->name)
        ]);

        if($type){
            return  redirect()->route("admin.project.type.index");
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
    public function edit(ProjectType $type)
    {
        return view("admin.project.type.update",["type"=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectType $type)
    {
        $request->validate([
            'name'=>"required"
        ]);
        // *** check if the slug already exists
        $type->name = $request->name;
        $type->slug = Str::slug($request->name);
        $type->save();
        return  redirect()->route("admin.project.type.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $type)
    {
        $type->delete();
        return redirect()->back()->with('success', 'Type Deleted Successfully');
    }
}
