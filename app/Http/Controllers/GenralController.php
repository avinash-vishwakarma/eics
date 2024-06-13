<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class GenralController extends Controller
{
    public function home() {
        $services = Service::where("featured",true)->orderBy("updated_at","desc")->get();
        return view('welcome',["services"=>$services]);
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

    public function projects($type){
        $sectionWithProjects = ProjectType::where("slug",$type)->firstOrFail()->sections()->with('projects');
        return $sectionWithProjects;
    }

    public function contactus(){
        return view("contact");
    }
}
