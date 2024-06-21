<?php

namespace App\Models;

use App\Models\ProjectSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectType extends Model
{

    // use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    use HasFactory;

    protected $fillable = [
        "name",
        "slug"
    ];


    public function sections(){
        return $this->hasMany(ProjectSection::class,"type_id","id");
    }
}
