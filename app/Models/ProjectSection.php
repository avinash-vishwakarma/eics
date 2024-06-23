<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectSection extends Model
{
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class,"section_id","id");
    }

    public function type(){
        return $this->belongsTo(ProjectType::class,"type_id","id");
    }

    public function setNameAttribute($value){
        $this->attributes["name"] = $value;
        $this->attributes["slug"] = Str::slug($value);

    }

    protected $fillable = [
        "name"
    ];
}
