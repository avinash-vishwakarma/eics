<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectImageController extends Controller
{
    public function addUpdate(Project $project){

        return view("admin.project.addImage",["project_id"=>$project->id,"images"=>$project->images]);
    }

    public function uploadImg(Request $request,Project $project){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "type"=>"required | string",
        ]);
        // upload new image


        if($request->hasFile("image")){
            $file = $request->file('image');
            $destinationPath = 'img/project/'; // Destination path relative to the storage path
            $fileName = time() . '_' . $project->id."_".$request->type.".jpg"; // Create a unique file name

            // Move the file to the destination path
            $file->move(public_path($destinationPath), $fileName);
            // delete the image 
            $type = $request->type;

            if($project->images && isset($project->images->$type)){
                // check if the image already present in the db
                $oldImgPath = public_path("/img/project/").$project->images->$type;
                if(file_exists($oldImgPath)){
                    unlink($oldImgPath);
                }
            }

            if(!$project->images){
                $project->images = [
                    $type=>$fileName
                ];
            }else{
                $images = clone $project->images;
                $images->$type = $fileName;
                $project->images = $images;
            }

            $project->save();
            return response()->json([
                "success"=>$request->type." updated successfully"
            ]);
        }
    }
}
