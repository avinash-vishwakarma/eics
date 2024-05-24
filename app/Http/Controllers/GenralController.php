<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenralController extends Controller
{
    function home() {
        return view('welcome');
    }

    function about(){
        return view("about.index");
    }

    function keypersons(){
        return view("about.keypersons");
    }

    function qualityPolicy(){
        return view("about.qulityPolicy");
    }


    function services(){
        return view("services");
    }

    function contact(){
        return "welcome to contact";
    }

    function ongoingProjects(){
        return view("projects.ongoing");
    }

    function commissionedPrjects(){
        return view("projects.commissioned");
    }

    function contactus(){
        return view("contact");
    }
}
