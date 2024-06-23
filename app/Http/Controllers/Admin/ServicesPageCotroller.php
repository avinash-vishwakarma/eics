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
        return view("admin.services.show",["services"=>$services,"featured"=>false]);
    }

    public function create(){
        return view("admin.services.create");
    }

    public function store(Request $request){
        // Validate the request to ensure a file is provided and it is an image
        $request->validate([
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title'=>"required",
            "shortDesc"=>"required",
            "featured"=>"required"
        ]);
        // $fileName;
        // if ($request->hasFile('thumbnail')) {
        //     $file = $request->file('thumbnail');
        //     $destinationPath = 'img/service/'; // Destination path relative to the storage path
        //     $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
        //     // Move the file to the destination path
        //     $file->move(public_path($destinationPath), $fileName);
        // }
    
        // save the data in the db


        $service = Service::create([
            "title"=>$request->title,
            "shortDesc"=>$request->shortDesc,
            "featured"=>$request->featured == "true" ? true : false,
            "slug"=>Str::slug($request->title),
        ]);     
        // return back crop service image
        return redirect()->route('admin.services.upload.img',[$service->id])->with("success","Service Created Successfully");
        
        
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
            // "description"=>"required",
            "type"=>"required"
        ]);
        
        if($request->type == "true"){
            $service->featured = true;
        }else{
            $service->featured = false;
        }

        $service->title = $request->title;
        $service->shortDesc = $request->shortDesc;
        // $service->description = $request->description;
        $service->slug = Str::slug($request->title);
        $service->save();

        return redirect()->back()->with("success","Service Updated successfully");
    }


    public function uploadImage(Request $request ,Service $service){
        return view("admin.services.uploadImage",["service_id"=>$service,"image"=>$service->thumbnail]);
    }


    public function saveImage(Request $request , Service $service){
        $request->validate([
            "image"=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($request->hasFile("image")){
            $file = $request->file("image");
            $destinationPath = "img/service/";
            $fileName = time()."_".$service->id.".jpeg";
            $file->move(public_path($destinationPath),$fileName);


            // remove old image if present
            $oldImgpath = public_path("/img/project/").$service->thumbnail;
            if($service->thumbnail && file_exists($oldImgpath)){
                unlink($oldImgpath);
            }
            $service->thumbnail = $fileName;
            $service->save();
            return response()->json([
                "success"=>"Thumbnail Added To ".$service->title
            ]);
        }
    }


    public function destroy(Service $service){
        // unlink image if it is present 
        $thumbnailPath = public_path("img/service/").$service->thumbnail;
        if(file_exists($thumbnailPath)){
            unlink($thumbnailPath);
        }
        $service->delete();
        return redirect()->back()->with("success","Service Deleted Successfully");
    }


    public function featured(){
        $services = Service::orderBy("updated_at","desc")->where("featured",true)->get();
        return view("admin.services.show",["services"=>$services,"featured"=>true]);
    }

}
