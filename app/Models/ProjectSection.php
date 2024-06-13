<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectSection extends Model
{
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class,"section_id","id");
    }

    public function type(){
        return $this->belongsTo(ProjectType::class,"type_id","id");
    }

    protected $fillable = [
        "name"
    ];
}
