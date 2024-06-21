<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class GenralController extends Controller
{
    public function home() {
        $services = Service::where("featured",true)->orderBy("updated_at","desc")->get();
        // get all the featured projects 
        $projects = Project::where("featured",true)->orderBy("updated_at","desc")->get();
        return view('welcome',["services"=>$services,"projects"=>$projects]);
    }

    public function about(){
        return view("about.index");
    }

    public function keypersons(){
        return view("about.keypersons");
    }

    public function qualityPolicy(){
        return view("about.qulityPolicy");
    }


    public function services(){
        // get all the services 
        $services = Service::orderBy("updated_at","desc")->get();
        return view("services",["services"=>$services]);
    }


    public function service($slug){
        $service = Service::where("slug",$slug)->first();
        return view("service",["service"=>$service]);
        
    }

    public function contact(){
        return "welcome to contact";
    }

    // public function projects(Request $request , $type){
    //     $currentPage = $request->get("page") ?? 1;
    //     $perpage = 6;
    //     $paginateSection = $request->get("section") ?? null;
    //     // get type data
    //     $type = ProjectType::where("slug",$type)->firstOrFail();
    //     // get all section 
    //     $sections = $type->sections()->get();
    //     // with first 10 projects with only title location and images
    //     foreach($sections as $section){
    //         // get the total number of projects
    //         $projectsCount = $section->projects()->count();
    //         $offset;
    //         if($paginateSection == $section->slug){
    //             // show the next projects 
    //             $offset = ((int)$currentPage - 1) * $perpage;
    //         }else{ 
    //             $offset = 0; 
    //         }

    //         $paginationProjects = new LengthAwarePaginator($section->projects()->skip($offset)->take($perpage)->get(),
    //         $projectsCount,
    //         $perpage,
    //         $currentPage,
    //         ["path"=>route("projects",[$type->slug,"section"=>$section->slug])]    
    //     );

    //         $section->projects = $paginationProjects;
    //     }

    //     return view("projects.index",["sections"=>$sections,"type"=>$type]);
    // }

    public function projects(Request $request , $type){
        $type =  ProjectType::with(["sections.projects"=>function($query){
            $query->orderBy("updated_at","desc")->limit(6);
        }])->where("slug",$type)->first();
        return view("projects.index",["type"=>$type]);
    }

    public function allSectionProjects($type , $section){

        $type = ProjectType::where("slug",$type)->first();
        $section = $type->sections()->where("slug",$section)->first();
        $projects = $section->projects()->paginate(9);


        return view("projects.show",["type"=>$type,"section"=>$section,"projects"=>$projects]);
    }


    public function project($slug){
        $project = Project::where("slug",$slug)->firstOrFail();
        return view("project-details",["project"=>$project]);
    }


    public function contactus(){
        return view("contact");
    }

    public function SendMessage(Request $request){
        $request->validate([
            "name"=>"required | string | max:255",
            "email"=>"required | email",
            "company_name"=>"required | string | max:255",
            "company_number"=>"required | digits:10",
            "message"=>"required"
        ]);

        ContactMessage::create([
            "client_name"=>$request->name,
            "company_name"=>$request->company_name,
            "contact_number"=>$request->company_number,
            "email"=>$request->email,
            "message"=>$request->message
        ]);
        

        return redirect()->back()->with("success","Message Submitted Successfully");
    }
}
