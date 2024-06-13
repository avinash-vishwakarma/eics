<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesPageCotroller extends Controller
{
    public function show(){
        $services = Service::orderBy("updated_at","desc")->get();
        return view("admin.services.show",["services"=>$services]);
    }

    public function create(){
        return view("admin.services.create");
    }

    public function store(Request $request){
        // Validate the request to ensure a file is provided and it is an image
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title'=>"required",
            "shortDesc"=>"required",
            "description"=>"required"
        ]);
        $fileName;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'img/service/'; // Destination path relative to the storage path
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name

            // Move the file to the destination path
            $file->move(public_path($destinationPath), $fileName);
        }
        
        // save the data in the db
        $service = Service::create([
            "title"=>$request->title,
            "shortDesc"=>$request->shortDesc,
            "thumbnail"=>$fileName,
            "slug"=>Str::slug($request->title),
            "description"=>$request->description
        ]); 

        if($service){

            return response()->json([
                "status"=>"ok",
                "message"=>"service created successfully",
                "service"=>$service->slug,
                "redirect"=>route("admin.services.show")
            ],200);
        }
        return response()->json([
            "status"=>"failed",
            "message"=>"sorry someting went wrong"
        ],400);
        
    }

    public function edit(Service $service){
        // show the from to edit the service
        return view("admin.services.edit",["service"=>$service]);
    }

    public function update(Request $request,Service $service){
        // validate the request 
        $request->validate([
            'title'=>"required",
            "shortDesc"=>"required",
            "description"=>"required",
            "type"=>"required"
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'img/service/'; // Destination path relative to the storage path
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name

            // Move the file to the destination path
            $file->move(public_path($destinationPath), $fileName);
            // delete the image 
            $oldImgpath = public_path()."/img/service/".$service->thumbnail;
            if(file_exists($oldImgpath)){
                unlink($oldImgpath);
            }
            $service->thumbnail = $fileName;

        }
        
        if($request->type == "true"){
            $service->featured = true;
        }else{
            $service->featured = false;
        }

        $service->title = $request->title;
        $service->shortDesc = $request->shortDesc;
        $service->description = $request->description;
        $service->slug = Str::slug($request->title);
        $service->save();

        return response()->json([
            "status"=>"ok",
            "message"=>"service created successfully",
            "service"=>$service->slug,
            "redirect"=>route("admin.services.show")
        ],200);
    }
}
