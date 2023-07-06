<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Block extends Model
{
    protected $table='blocks';
    protected $guarded=[];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
