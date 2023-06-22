<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class House extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='houses';
    protected $guarded=[];
    public $translationModel=HouseTranslation::class;
    public $translatedAttributes = ['price'];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
