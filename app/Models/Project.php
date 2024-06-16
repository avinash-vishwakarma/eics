<?php

namespace App\Models;

use App\Models\ProjectSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public function section(){
        return $this->belongsTo(ProjectSection::class,"section_id","id");
    }

    public function type(){
        return $this->section()->first()->type();
    }

    public function getImagesAttribute($value){
        return json_decode($value);
    }

    public function setImagesAttribute($value){
        $this->attributes["images"] = json_encode($value);
    }

}
